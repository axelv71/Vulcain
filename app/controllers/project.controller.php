<?php
require_once('../models/pdo.php');
require_once("../../env.php");

class Project
{

    private static function response($data, $status)
    {
        header('Content-type: application/json');
        http_response_code($status);
        echo json_encode($data);
    }

    private static function convertName($name)
    {
        return str_replace(' ', '_', strtolower($name));
    }

    private static function extract($file, $destination)
    {
        $zip = new ZipArchive;
        if ($zip->open('../resources/' .  $file . '.zip') === TRUE) {
            $zip->extractTo($destination);
            $zip->close();
        } else {
            self::response(['error' => 'Extract error.'], 500);
            exit();
        }
    }

    private static function delete_directory($dirname)
    {
        if (is_dir($dirname)) {
            $dir_handle = opendir($dirname);
        } else {
            return false;
            exit();
        }
        while ($file = readdir($dir_handle)) {
            if ($file != "." && $file != "..") {
                if (!is_dir($dirname . "/" . $file))
                    unlink($dirname . "/" . $file);
                else {
                    self::delete_directory($dirname . '/' . $file);
                }
            }
        }
        closedir($dir_handle);
        rmdir($dirname);
        return true;
    }

    public static function addBlank()
    {
        if (pdo_model::project($_POST["name"])->fetch()[0] == 0) {
            try {
                mkdir("../../public/" . self::convertName($_POST['name']), 0777, true);
            } catch (Exception $e) {
                self::response(['error' => $e->getMessage()], 500);
                exit();
            }

            pdo_model::create($_POST['name'], self::convertName($_POST['name']), "custom");
            self::response(['success'], 200);
        } else {
            self::response(['error' => 'This name is already taken.'], 401);
        }
    }

    public static function addLaravel()
    {
        if (pdo_model::project($_POST["name"])->fetch()[0] == 0) {
            try {
                shell_exec('cd ../../public & composer create-project laravel/laravel ' . self::convertName($_POST['name']));
                pdo_model::create($_POST['name'], self::convertName($_POST['name']), "laravel");
                self::response(['success' => "Test"], 200);
            } catch (Exception $e) {
                self::response(['error' => $e->getMessage()], 500);
                exit();
            }
        } else {
            self::response(['error' => 'This name is already taken.'], 401);
        }
    }

    public static function addPhp()
    {
        if (pdo_model::project($_POST["name"])->fetch()[0] == 0) {
            try {
                mkdir("../../public/" . self::convertName($_POST['name']), 0777, true);
                self::extract("php", '../../public/' . self::convertName($_POST['name']));

                if (isset($_POST['css'])) {
                    if ($_ENV['RS_CSS'][$_POST['css']][2] == true) {
                        self::extract($_ENV['RS_CSS'][$_POST['css']][1], '../../public/' . self::convertName($_POST['name']) . '/assets');
                    } else {
                        self::extract($_ENV['RS_CSS'][$_POST['css']][1], '../../public/' . self::convertName($_POST['name']) . '/assets/css/');
                    }
                }

                if (isset($_POST['jquery'])) {
                    self::extract("jquery", '../../public/' . self::convertName($_POST['name']) . '/assets/js');
                }

                pdo_model::create($_POST['name'], self::convertName($_POST['name']), "php");
                self::response(['success'], 200);
            } catch (Exception $e) {
                self::response(['error' => $e->getMessage()], 500);
                exit();
            }
        } else {
            self::response(['error' => 'This name is already taken.'], 401);
        }
    }

    public static function addCustom()
    {
        if (pdo_model::project($_POST["name"])->fetch()[0] == 0) {
            try {
                mkdir("../../public/" . self::convertName($_POST['name']), 0777, true);
                self::extract($_ENV['RS_PROJECT'][$_POST['project']][1], '../../public/' . self::convertName($_POST['name']));
                pdo_model::create($_POST['name'], self::convertName($_POST['name']), "custom");
                self::response(['success'], 200);
            } catch (Exception $e) {
                self::response(['error' => $e->getMessage()], 500);
                exit();
            }
        } else {
            self::response(['error' => 'This name is already taken.'], 401);
        }
    }

    public static function all()
    {
        self::response(pdo_model::all()->fetchAll(), 200);
    }

    public static function delete()
    {
        try {
            if (self::delete_directory("../../public/" . $_POST['target_path'])) {
                pdo_model::delete($_POST['target_id']);
                self::response(['success' => 'The project has been deleted successfully.'], 200);
            } else {
                self::response(['error' => "Deletion failed."], 500);
            }
        } catch (Exception $e) {
            self::response(['error' => $e->getMessage()], 500);
        }
    }

    public static function add()
    {
        if (pdo_model::project($_POST["name"])->fetch()[0] == 0) {
            pdo_model::create($_POST['name'], $_POST['folder'], "custom");
            self::response(['success'], 200);
        } else {
            self::response(['error' => 'This name is already taken.'], 401);
        }
    }

    public static function error()
    {
        self::response(["data" => "Type unknow"], 400);
    }
}
