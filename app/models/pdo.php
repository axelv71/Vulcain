<?php

class pdo_model
{
    private static $bdd;

    private static function init()
    {
        try {
            self::$bdd = new PDO('mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_DATABASE'] . ';charset=utf8', $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
        self::migrate();
    }

    private static function migrate()
    {
        $project = "CREATE TABLE IF NOT EXISTS `project` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `name` varchar(255) NOT NULL,
                    `path` varchar(255) NOT NULL,
                    `type` varchar(255) NOT NULL DEFAULT 'custom',
                    `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                    PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
        try {
            self::$bdd->query($project);
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public static function all()
    {
        self::init();
        return self::$bdd->query('SELECT * FROM project ORDER BY datetime DESC');
    }

    public static function count()
    {
        self::init();
        return self::$bdd->query('SELECT Count(id) FROM project');
    }

    public static function laravel()
    {
        self::init();
        return self::$bdd->query('SELECT * FROM project WHERE type = "laravel"');
    }

    public static function countLaravel()
    {
        self::init();
        return self::$bdd->query('SELECT Count(id) FROM project WHERE type = "laravel"');
    }

    public static function php()
    {
        self::init();
        return self::$bdd->query('SELECT * FROM project WHERE type = "php"');
    }

    public static function countPhp()
    {
        self::init();
        return self::$bdd->query('SELECT Count(id) FROM project WHERE type = "php"');
    }

    public static function custom()
    {
        self::init();
        return self::$bdd->query('SELECT * FROM project WHERE type = "custom"');
    }

    public static function countCustom()
    {
        self::init();
        return self::$bdd->query('SELECT Count(id) FROM project WHERE type = "custom"');
    }

    public static function project($name){
        self::init();
        $req = self::$bdd->prepare('SELECT Count(id) FROM project WHERE name = ?');
        $req->execute(array($name));
        return $req;
    }

    public static function create($name, $path, $type){
        self::init();
        try{
            $req = self::$bdd->prepare('INSERT INTO project(name, path, type) VALUES(?, ?, ?)');
            $req->execute(array($name, $path, $type));    
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public static function delete($id) {
        self::init();
        try{
            $req = self::$bdd->prepare('DELETE FROM project WHERE id = ?');
            $req->execute(array($id));
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }
}
