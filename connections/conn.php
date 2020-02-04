<?php 
//include password
include("password.php");

        $host = "sclarke60.hosting.eeecs.qub.ac.uk";
        $user = "sclarke60";
        $db = "sclarke60";
       
        $conn = new mysqli($host, $user, $pw, $db);
        
        if($conn->connect_error) {
            echo $conn->connect_error;
        }
         