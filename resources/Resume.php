<?php

/**
 * Resume.php
 */
class Resume {
    
    // Set some default variables
    private $_resume    = NULL;
    private $_themeName = 'plain';
    
    
    /**
     * Resume.php construct function. Runs on object creation.
     */
    public function __construct() {
        
        // Set class directory constant
        if(!defined('__DIR__')) {
            define('__DIR__', dirname(__FILE__));
        }
        
        // Set application directory
        $this->_appDir = __DIR__;
        
        // Set configuration file path
        $configPath = $this->_appDir . '/galleryConfig.ini';
        
        $this->_resume = require_once('info.php');
        
    }
    
    
    /**
     * getContactInfo()
     */
    public function getContactInfo() {
        
        return $this->_resume['contact_info'];
        
    }
    
    
    /**
     * getSummery()
     */
    public function getSummery() {
        
        return $this->_resume['summery'];
        
    }
    
    
    /**
     * getExperience()
     */
    public function getExperience() {
        
        return $this->_resume['experience'];
        
    }

    
    /**
     * getQualifications()
     */
    public function getQualifications() {
        
        return $this->_resume['qualifications'];
        
    }


    /**
     * getEducation()
     */
    public function getEducation() {
                    
        return $this->_resume['education'];
        
    }
    

    /**
     * getAchievements()
     */
    public function getAchievements() {
        
        return $this->_resume['achievements'];
        
    }
    
    
    /**
     * Returns the theme name.
     * 
     * @access public
     */
    public function getThemeName() {
        // Return the theme name
        return $this->_themeName;
    }
    
    
    /**
     * Returns the path to the chosen theme directory.
     * 
     * @param bool $absolute Wether or not the path returned is absolute (default = false).
     * @access public
     */
    public function getThemePath($absolute = false) {
        if ($absolute) {
            // Set the theme path
            $themePath = $this->_appDir . '/themes/' . $this->_themeName;
        } else {
            // Get relative path to application dir
            $realtivePath = $this->_getRelativePath(getcwd(), $this->_appDir);
            
            // Set the theme path
            $themePath = $realtivePath . '/themes/' . $this->_themeName;
        }
        
        return $themePath;
    }
    
    
    /**
     * Compares two paths and returns the relative path from one to the other
     * 
     * @param string $fromPath Starting path
     * @param string $toPath Ending path
     * @return string $relativePath
     * @access private
     */
    private function _getRelativePath($fromPath, $toPath) {
        
        // Define the OS specific directory separator
        if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
        
        // Remove double slashes from path strings
        $fromPath   = str_replace(DS . DS, DS, $fromPath);
        $toPath     = str_replace(DS . DS, DS, $toPath);
        
        // Explode working dir and cache dir into arrays
        $fromPathArray  = explode(DS, $fromPath);
        $toPathArray    = explode(DS, $toPath);
        
        // Remove last fromPath array element if it's empty
        $x = count($fromPathArray) - 1;
        
        if(!trim($fromPathArray[$x])) {
            array_pop($fromPathArray);
        }
        
        // Remove last toPath array element if it's empty
        $x = count($toPathArray) - 1;
        
        if(!trim($toPathArray[$x])) {
            array_pop($toPathArray);
        }
        
        // Get largest array count
        $arrayMax = max(count($fromPathArray), count($toPathArray));
        
        // Set some default variables
        $diffArray  = array();
        $samePath   = true;
        $key        = 1;
        
        // Generate array of the path differences
        while ($key <= $arrayMax) {
            if (@$toPathArray[$key] !== @$fromPathArray[$key] || $samePath !== true) {
                
                // Prepend '..' for every level up that must be traversed
                if (isset($fromPathArray[$key])) {
                    array_unshift($diffArray, '..');
                }
                
                // Append directory name for every directory that must be traversed  
                if (isset($toPathArray[$key])) {
                    $diffArray[] = $toPathArray[$key];
                } 
                
                // Directory paths have diverged
                $samePath = false;
            }
            
            // Increment key
            $key++;
        }

        // Set the relative thumbnail directory path
        $relativePath = implode('/', $diffArray);
        
        // Return the relative path
        return $relativePath;
        
    }
    
}

?>
