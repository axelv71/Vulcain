<?php 


$allLaravel = pdo_model::laravel();

$countLaravel = pdo_model::countLaravel()->fetch()[0];

include('./app/views/laravel.view.php');