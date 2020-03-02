

<?php
include ("businessLogin.php");
include('../connections/conn.php');



$filename = $_FILES['displayimg']['name'];
$modifiedFilename = "";
$filetemp = $_FILES['displayimg']['tmp_name'];
$bname = mysqli_real_escape_string($conn, $_POST['name']);
$bemail = mysqli_real_escape_string($conn, $_POST['email']);
$bpassword = "";

if (isset($_POST['password'])) {
    $bpassword = mysqli_real_escape_string($conn, $_POST['password']);
}

$bNname = mysqli_real_escape_string($conn, $_POST['businessName']);
$blocation= mysqli_real_escape_string($conn, $_POST['location']);

$errorflag = 0;



$insertquery = "UPDATE bizzconn_BUsers SET name='$bname',email='$bemail', businessName = '$bNname', location='$blocation'";

if (!empty($filename)) {
    
    $modifiedFilename = uniqid() . "-$filename";
    move_uploaded_file($filetemp, "../pictures/$modifiedFilename");
    
    $insertquery = $insertquery . ", displayimg='$modifiedFilename'";
}
if (!empty($bpassword)) {
    $insertquery = $insertquery . ", password='$bpassword'";
}

$insertquery = $insertquery . "  WHERE id='$userid'";
$result = mysqli_query($conn, $insertquery) or die(mysqli_error($conn));

?>

<html>
    <head>
        <title>success</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    </head>
    <body>
        <div id='content'>
            <h3>Your changes to your profile have now been made</h3>
            <?php
                
                if (!empty($filename)) {
                    echo "<img src='../pictures/$modifiedFilename' 'width='250' height='200'/>";
                }
                echo "<p><strong>$bname</strong> your profile has been updated!";
                echo "<p>$bemail</p> ";
                echo "<p>$bNname</p> ";
                echo "<p>$blocation</p> ";
                
            ?>
            <h3><a href="../secure/login.php">You are required to log in again</a></h3>


        </div>
    </div>
</body>
</html>
