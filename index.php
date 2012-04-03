<?php
    
    // Include the UberGallery class
    include('resources/Resume.php');
    
    // Initialize the UberGallery object
    $resume = new Resume();

    // Define theme path
    if (!defined('THEMEPATH')) {
        define('THEMEPATH', $resume->getThemePath());
    }

    // Set path to theme index
    $themeIndex = $resume->getThemePath(true) . '/index.php';
    
    // Initialize the theme
    if (file_exists($themeIndex)) {
        include($themeIndex);
    } else {
        die('ERROR: Failed to initialize theme');
    }

?>