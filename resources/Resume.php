<?php
    /**
     * Resume.php
     */
    class Resume {
        
        // Set some default variables
        private $_resume = NULL;
        
        /**
         * Resume.php construct function. Runs on object creation.
         */
        public function __construct() {
            
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
        
    }
?>
