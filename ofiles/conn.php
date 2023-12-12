<?php    
//connection 
            $conn = new mysqli("localhost","root","","MTI");

            // Check connection
            if ($conn -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
            }
            
            
            
            ?>