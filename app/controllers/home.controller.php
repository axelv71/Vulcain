<?php 


$all = pdo_model::all();

$count = pdo_model::count()->fetch()[0];
$countLaravel = pdo_model::countLaravel()->fetch()[0];
$countPhp = pdo_model::countPhp()->fetch()[0];
$countCustom = pdo_model::countCustom()->fetch()[0];

include('./app/views/home.view.php');