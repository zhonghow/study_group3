<?php

// Only change code below this line

// Instruction: Parse the URL path
$path = $_SERVER['REQUEST_URI'];

// Instruction: Remove the leading and trailing slashes from the path
$path = trim($path, '/');
$path = parse_url($path, PHP_URL_PATH);

// Instruction:  Load the appropriate route content
switch ($path) {

    case 'about':
        require "pages/about.php";
        break;
    case 'contact':
        require "pages/contact.php";
        break;
    case 'services':
        require "pages/services.php";
        break;

    default:
        require "pages/home.php";
        break;
}

    // Only change code above this line