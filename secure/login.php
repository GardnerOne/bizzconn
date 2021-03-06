<?php

include ("../connections/conn.php");    

session_start();
    
    ?>

<!DOCTYPE html>
<html>

<head>
  <title>BizzConn</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="https://rawgit.com/outboxcraft/beauter/master/beauter.min.css">
  <link rel="stylesheet" type="text/css" href="https://rawgit.com/outboxcraft/beauter/master/beauter.min.js">
  <link rel="stylesheet" type="text/css" href="../styles/styles.css" />
</head>

<body>
  <div class="d-flex justify-content-center my-5">
    <img src="../pictures/logo.png" />
  </div>

  <div class="container">
    <form action="login.php" method="post" id="form" class="col-lg-4 mx-auto p-4" enctype="multipart/form-data">
      <h5>Sign in:</h5>
      <div class="form-group">
        <label>Enter email</label>
        <input class="form-control" name="user" type="text" placeholder="test@mail.com" required="required" value="" />
      </div>

      <div class="form-group">
        <label>Enter password</label>
        <input class="form-control" name="pass" type="password" placeholder="password" required="required" value="" />
      </div>

      <div class="form-group mx-auto">
        <input class="button mb-1" id="but" name="submit" type="submit" value="Sign in" />
        <a id="input-button" class="button" href="/bizzconn/secure/register.php" value="Register">Sign up</a>
      </div>
    </form>
  </div>

  <?php
                if(isset($_POST['submit'])){
                    include("../connections/conn.php");
                    $bcuser = $_POST["user"];
                    $bcpword = $_POST["pass"];
                    echo $bcuser . $bcpword;
                
                    $checkbcuser = "SELECT * FROM bizzconn_BUsers WHERE email='$bcuser' AND password='$bcpword'";
                
                    $result = mysqli_query($conn, $checkbcuser);
                
                    if(!$result){
                        echo $conn->error; 
                    
                    } $num = $result->num_rows; if($num > 0 ){
                      
                        while ($row = $result->fetch_assoc()){ $userid = $row['id'];
        $_SESSION['bizzconn'] = $userid; } header("Location:../registeredBusiness/home.php"); 
        echo "success"; 
        } else { echo
        $conn->error; header("Location: login.php"); 
        echo "fail"; 
        } } ?>

</body>

</html>