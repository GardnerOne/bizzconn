<?php

session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>BizzConn</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://rawgit.com/outboxcraft/beauter/master/beauter.min.css">
        <link rel="stylesheet" type="text/css" href="https://rawgit.com/outboxcraft/beauter/master/beauter.min.js">
        
        <link rel="stylesheet" type="text/css" href="Styles/styles.css">
    </head>

    <body>
        
        <div class="row">
            
            <div class="col m1"></div>
            
            <div class="col m10 _primary _noPadding">
                
                <div class="row">
                    <div class="col m3"></div><div class="col m6">
                        <img src="../pictures/logo.png"/>
                        </div>
                    <div class ="col m3"></div>
                    </div>
                
                <div class="container _cream">    
                    <form action="login.php" method="post" enctype="multipart/form-data">
               
    <legend>Login:</legend>
  
      <div class="row">
      <div class="col m6">
      <label>Enter email</label>
      <input name="user" type="text" placeholder="test@mail.com" required="required" value="">
      </div></div>

    
      <div class="col m6">
          <label>Enter password</label>
      <input name="pass" type="password" placeholder="" required="required" value="">
    </div>
    

    
 
    <div class="col m4"> </div>
 
    <input class=" _warning button" id="but" name="submit" type="submit" value="login">
  <br>
 
</form></div></div>
                </div>
        
         <?php
            if(isset($_POST['submit'])){
            
            include("../connections/conn.php");
            
            $bcuser = $_POST["user"];
            
            $bcpword = $_POST["pass"];
            
            echo $bcuser . $bcpword;
            
            $checkbcuser = "SELECT * FROM bizzconn_login WHERE email='$bcuser' AND password='$bcpword'";
            
            $result = mysqli_query($conn, $checkbcuser);
            
            if(!$result){
                echo $conn->error;
            }
            
            $num = $result->num_rows;
                if($num > 0 ){
                    
                    while ($row = $result->fetch_assoc()){
                        $userid = $row['id'];
                        
                        $_SESSION['bizzconn'] = $userid;
                        
                    }
                    
                   header("Location: ../home.php");
                    //echo "success";
                
                    } else { 
                        echo $conn->error;
                       header("Location: login.php");
                        //echo "fail";
                    }
                    }
                    ?>
            
      
   
 
        
    </div>
</footer>
</html>
