<?php
    class ChrisKankiewiczResume {
        
        public function getContactInfo() {
            $contactInfo = array(
                'full_name' => 'Chris Kankiewicz',
                'address_1' => '4315 E Thunderbird Road #201',
                'address_2' => 'Phoenix, Arizona 85032',
                'phone'     => '623-252-6855',
                'email'     => 'Chris@ChrisKankiewicz.com',
                'website'   => 'http://www.ChrisKankiewicz.com'
            );
            
            return $contactInfo;
        }
        
        public function getSummery() {
            $summery = <<<summery
                Self taught web designer and programmer with real world
                experience and a desire to learn. Personal strengths include 
                advanced troubleshooting and problem solving skills, the 
                capacity to acquire and apply new knowledge quickly and the 
                ability to work efficiently in a team centric environment.
summery;
            
            while (strstr($summery, '  ')) {
                $formattedSummery = str_replace('  ', ' ', trim($summery));
            }
            
            return $formattedSummery;
        }
        
        public function getExperience() {
            $experience = array();
            
            $experience[] = array(
                'name'        => 'Southwest Medical & Rehab',
                'position'    => 'Web Developer',
                'date_start'  => 'March 2009',
                'date_end'    => 'April 2011',
                'description' => array(
                    '1' => 'Conceptualized, designed and implemented detailed e-commerce site layouts.',
                    '2' => 'Performed search engine optimizations to enhance traffic to all sites.'
                )
            );
            
            $experience[] = array(
                'name'        => 'PetSmart Store Support Group',
                'position'    => 'Solution Center Technician',
                'date_start'  => 'February 2008',
                'date_end'    => 'March 2009',
                'description' => array(
                    '1' => 'Provided over-the-phone technical support to store and corporate employees.',
                    '2' => 'Performed advanced troubleshooting on store servers, registers, and workstations.'
                )
            );
            
            $experience[] = array(
                'name'        => 'Elontec',
                'position'    => 'Systems Technician',
                'date_start'  => 'October 2007',
                'date_end'    => 'February 2008',
                'description' => array(
                    '1' => 'Planned and implemented store-wide PC and Point of Sale systems and performed server upgrades.',
                    '2' => 'Performed basic troubleshooting on implemented systems.'
                )
            );
            
            $experience[] = array(
                'name'        => 'Jannenga Enterprises, LLC',
                'position'    => 'Web & Graphics Designer',
                'date_start'  => 'May 2006',
                'date_end'    => 'October 2007',
                'description' => array(
                    '1' => 'Conceptualized, designed and coordinated the implementation of detailed web pages and graphics.',
                    '2' => 'Performed routine and advanced maintenance on PC systems, basic and advanced networks, and other digital equipment.'
                )
            );
            
            return $experience;
        }

        public function getQualifications() {
            $qualifications = array();
            
            $qualifications[] = 'Unix / Linux based operating systems';
            $qualifications[] = 'LAMP environments';
            $qualifications[] = 'All Windows operating systems';
            $qualifications[] = 'PC hardware and networking';
            $qualifications[] = 'Photoshop';
            $qualifications[] = 'Aptana / Eclipse IDE';
            $qualifications[] = '(X)HTML / CSS';
            $qualifications[] = 'Git Version Control';
            $qualifications[] = 'PHP / MySQL';
            $qualifications[] = 'Zend Framework';
            $qualifications[] = 'Search Engine Optimization (SEO)';
            $qualifications[] = 'jQuery / JavaScript';
            $qualifications[] = 'Wordpress / Drupal';
            
            return $qualifications;
        }

        public function getEducation() {
            $education = array();
            
            $education[] = array(
                'name'           => 'DeVry University',
                'dates_attended' => 'July 2005 - February 2008',
                'description'    => array(
                    '1' => 'Bachelors of Science Degree in Network and Communication Management'
                )
            );
            
            $education[] = array(
                'name'           => 'Shadow Mountain High School',
                'dates_attended' => '2001 - 2005',
                'description'    => array(
                    '1' => 'High school diploma',
                    '2' => 'National Honor Society'
                )
            );
            
            return $education;
        }

        public function getAchievements() {
            $achievements = array();
            
            $achievements[] = 'Award: Eagle scout';
            $achievements[] = 'Project: UberGallery (http://www.ubergallery.net)';
            $achievements[] = 'Project: Directory Lister (http://www.directorylister.com)';
            $achievements[] = 'Attended Defcon Security Convention 2005 - 2009';
            
            return $achievements;
        }
        
    }
?>