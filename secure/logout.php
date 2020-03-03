<?php
session_start();

session_destroy();
//include("../connections/conn.php");
header("Location/logout.php");	
?>
<html>
    

    <head>
         <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    </head>
    <body
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/styles.css">  
         <div class="row">
                    <div class="col m3"></div><div class="col m6">
                        <img src="../pictures/logo.png"/>
                        </div>
                    <div class ="col m3"></div>
                    </div>

         <ul class='nav'>
            
    <li><a href="/bizzconn/secure/login.php">Log in</a></li>
     
            </ul>
            
            <br/>
           
        <h2>You have now logged out!</h2>
    </div>
    </body>
</html>
