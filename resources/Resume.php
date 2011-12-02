<?php
    class Resume {
        
        function __construct() {
            
            include('Database.php');
            
            $db = new Database();
            
            $db->readJobHistory();
            
        }   
    }
?>
