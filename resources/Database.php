<?php
    class Database {
        
        /**
         * Database construct function. Runs on object creation.
         */
        function __construct() {
            
            // Include config
            if (file_exists('resources/config.php')) {
                include('config.php');
            } else {
                die('ERROR: Missing config.php');
            }
            
            // Set variables
            $this->db_host = DB_HOST;
            $this->db_name = DB_NAME;
            $this->db_user = DB_USER;
            $this->db_pass = DB_PASS;
            
            // Connect to database
            try {
                $this->db = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass);
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
            
            // $result = $db->query("SELECT * FROM contact_info");
//             
            // $cols = $result->columnCount();           // Number of returned columns
// 
            // echo 'Number of returned columns: '. $cols. '<br />';
//             
            // var_dump($result);
//             
            // foreach($result as $row) {
                // print_r($row);
            // }
//             
            // $db = NULL;
            
        }
        
        /**
         * Database destruct function. Runs on object destruction.
         */
        function __destruct() {
            
            // Close database connections
            $this->db = NULL;
            
        }
        
        
        
        function readJobHistory() {
                
            $result = $this->db->prepare('SELECT * FROM job_history WHERE user_id_linker = 1');
            
            $whatever = $this->db->exec();
            
            return var_dump($whatever);
            
        }
        
    }

?>