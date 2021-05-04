<?php 


$allCustom = pdo_model::custom();

$countCustom = pdo_model::countCustom()->fetch()[0];

include('./app/views/custom.view.php');