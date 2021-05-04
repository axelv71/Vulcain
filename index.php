<?php
require('./env.php');
require('./app/models/pdo.php');

if (isset($_GET['route'])) {
    switch ($_GET['route']) {
        case 'create':
            include('./app/controllers/create.controller.php');
            break;
        case 'php':
            include('./app/controllers/php.controller.php');
            break;
        case 'laravel':
            include('./app/controllers/laravel.controller.php');
            break;
        case 'custom':
            include('./app/controllers/custom.controller.php');
            break;
    }
} else {
    include('./app/controllers/home.controller.php');
}
