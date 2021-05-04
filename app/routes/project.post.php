<?php
require_once("../controllers/project.controller.php");
require_once("../../env.php");

switch($_POST['type']) {
    case "blank":
        Project::addBlank();
        break;
    case "laravel":
        Project::addLaravel();
        break;
    case "php":
        Project::addPhp();
        break;
    case "custom":
        Project::addCustom();
        break;
    case "delete":
        Project::delete();
        break;
    case "add":
        Project::add();
        break;
    default:
        Project::error();
        break;
}


