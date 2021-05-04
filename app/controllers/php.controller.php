<?php 


$allPhp = pdo_model::php();

$countPhp = pdo_model::countPhp()->fetch()[0];

include('./app/views/php.view.php');