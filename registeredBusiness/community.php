     
<?php
include ("../connections/conn.php");

session_start();

if (isset($_SESSION['bizzconn'])){
    $userid = $_SESSION['bizzconn'];
}

$query = "SELECT * FROM bizzconn_BUsers WHERE id = '$userid'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
?>

<html>
    <head>


<body>
  
        
        
        <div class="row">
            
            <div class="col m1"></div>
            
            <div class="col m10 _primary
                 _noPadding">
                
                <div class="row">
                    <div class="col m3"></div><div class="col m6">
                        <img src="../pictures/logo.png"/>
                        </div>
                    <div class ="col m3"></div>
                    </div> 

<form action="addDiscussion.php" method="post" enctype="multipart/form-data">
               
    <legend>Add Discussion:</legend>
  
      <div class="row">
      <div class="col m6">
      <label>Enter Discussion Title </label>
      <input name="discussionTitle" type="text" placeholder="Discussion Title" required="required" value="">
      </div></div>
      <div class="col m6">
          <label>Enter Discussion Content</label>
      <input name="discussionContent" type="text" placeholder="Discussion Content" required="required" value="">
    </div>
    <div class="col m6">
          <label>Enter Discussion Category</label>
      <input name="discussionCategory" type="text" placeholder="Discussion Category" required="required" value="">
    </div>
    
</form>