<?php

$_ENV['DB_HOST'] = "localhost";  // Your database address
$_ENV['DB_DATABASE'] = "vulcain"; // Your database name
$_ENV['DB_USERNAME'] = "root"; // Your database username
$_ENV['DB_PASSWORD'] = ""; // Your database password

$_ENV['APP_NAME'] = "Vulcain";

// Framework CSS ressources
// Add CSS Framework like array(NAME_OF_FRAMEWORK, FILE_NAME),
$_ENV['RS_CSS'] =  [ // Framework CSS ressources
    ["Tailwind", "tailwind", false],
    ["Bootstrap", "bootstrap", true],
];

// Add project fast build
// [PROJECT_NAME, FILE_NAME]
$_ENV['RS_PROJECT'] = [
   
];