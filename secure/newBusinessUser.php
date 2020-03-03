<?php

include("../connections/conn.php");
$bemail=mysqli_real_escape_string($conn, $_POST["email"]);
$bpassword=mysqli_real_escape_string($conn, $_POST["password"]);
$busername=mysqli_real_escape_string($conn, $_POST["username"]);
$bname=mysqli_real_escape_string($conn, $_POST["name"]);
$bBname=mysqli_real_escape_string($conn, $_POST["businessName"]);
$bgender=mysqli_real_escape_string($conn, $_POST["gender"]);
$bDOB=mysqli_real_escape_string($conn, $_POST["dateOfBirth"]);
$blocation=mysqli_real_escape_string($conn, $_POST["location"]);
$filename = $_FILES['displayimg']['name'];
$filetemp = $_FILES['displayimg']['tmp_name'];
$errorflag = 0;
$usercheckquery = "SELECT * FROM bizzconn_BUsers WHERE username='$busername'";
$usercheckresult = mysqli_query($conn, $usercheckquery) or die(mysqli_error($conn));

echo $bemail . $bpassword . $busername . $bname . $bBname . $bgender . $bDOB . $blocation;

if (empty($filename)) {
    $errorflag = 1;
}
if( mysqli_num_rows($usercheckresult) > 0){
    echo "Unsuccessfull!";
}else{
if ($errorflag == 1) {
    $insertbuser="INSERT INTO bizzconn_BUsers (email,  password, username, name, businessName, gender, dateOfBirth, location, displayimg) VALUES ('$bemail', '$bpassword', '$busername','$bname', '$bBname', '$bgender', '$bDOB', '$blocation', '0')";
    $resultbuser = mysqli_query($conn, $insertbuser) or die(mysqli_error($conn));
} else {
    move_uploaded_file($filetemp, "../img/$filename");
    $insertbuser="INSERT INTO bizzconn_BUsers (id, email, password, username, name, businessName, gender, dateOfBirth, location, displayimg) VALUES ('$bid','$bemail', '$bpassword', '$busername','$bname', '$bBname', '$bgender', '$bDOB', '$blocation', '$filename')";
    $resultbuser = mysqli_query($conn, $insertbuser) or die(mysqli_error($conn));
}
}

?>

<html>
    <head>
        <title>success</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    </head>
    <body>
                <div id ="content">
          

              <ul class='nav'>
                
                </ul>
                <?php
           
              if (mysqli_num_rows($usercheckresult) > 0) {
                  echo "This user already exists! Log in? create account with different username?";   
              } else {
                  if ($errorflag == 1) {
                      echo"Registration is now complete and your tutor account has now been created";
                           "<p>However there was an issue uploading your profile picture</p>";
                               "<p>You can now log in using your username and password</p>";
                  } else if ($errorflag == 0) {
                      echo "Registration is now complete and your business account has now been successfully 
                            created"; 
                      echo '<a href="/bizzconn/secure/login.php">Login';
                      "<p>Your profile picture has uploaded successfully!</p>";
                  } else {
                      echo "Registration failed";
                  }
              }


  
               
            ?>
        </div>
</html>
            
           