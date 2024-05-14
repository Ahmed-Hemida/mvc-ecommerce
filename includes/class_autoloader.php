<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
    // Use __DIR__ to get the directory of the current file
    $baseDir = __DIR__ . '/../'; // Adjust this to the base directory of your project
    $path = $baseDir . 'classes/' . $className . '.class.php';
    
    if (file_exists($path)) {
        require_once $path;
    } else {
        // Optionally, you can throw an error or log it
        error_log("Class file not found: " . $path);
        throw new Exception("Class file not found: " . $path);
    }
}
