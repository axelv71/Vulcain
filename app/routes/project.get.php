<?php
require_once("../controllers/project.controller.php");
require_once("../../env.php");

switch($_GET['type']) {
    case "all":
        Project::all();
        break;
    case "custom":
        Project::addBlank();
        break;
    case "laravel":
        Project::addLaravel();
        break;
    case "php":
        Project::addPhp();
        break;
    default:
        Project::error();
        break;
}

