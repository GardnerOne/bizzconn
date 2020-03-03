<?php
session_start();

session_destroy();
//include("../connections/conn.php");
header("Location/logout.php");	
?>
<html>
    <head>
          <title>Edit Profile</title>
    <meta charset="windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>

<body>
    <div class="d-flex justify-content-center my-5">
        <img src="../pictures/logo.png" />

    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
        <ul class='navbar-nav'
            <li class="nav-item">
                <a class="nav-link" href="/bizzconn/secure/login.php">Sign In</a>
            </li>
        </ul>
    </nav>
            
            <br/>
           
        <h4 align="center">You have now logged out!</h4>
    </div>
    </body>
</html>
