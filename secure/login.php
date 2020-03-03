<?php

include ("../connections/conn.php");    

session_start();
    
    ?>
    
    <!DOCTYPE html>
    <html>
      <head>
        <title>BizzConn</title>
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="../styles/styles.css" />
        <link
          rel="stylesheet"
          <!--href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous"
        --> 
        
        <link rel="stylesheet" type="text/css" href="https://rawgit.com/outboxcraft/beauter/master/beauter.min.css">
        <link rel="stylesheet" type="text/css" href="https://rawgit.com/outboxcraft/beauter/master/beauter.min.js">
        </head>
      
        <body>
        
       
            <div class="row">
              <div class="col m3"></div>
              <div class="col m3">
                <img src="../pictures/logo.png" />
              </div>
              <div class="col m3"></div>
            </div>
           
              <form action="login.php" method="post" enctype="multipart/form-data">
                <legend>Login:</legend>
                <div class="row">
                  <div class="col m3">
                    <label>Enter email</label>
                    <input
                      name="user"
                      type="text"
                      placeholder="test@mail.com"
                      required="required"
                      value=""
                    />
                  </div>
                </div>
    
                <div class="col m3">
                  <label>Enter password</label>
                  <input
                    name="pass"
                    type="password"
                    placeholder="password"
                    required="required"
                    value=""
                  />
                </div>
    
                <div class="col m4">
                  <input
                    class="button"
                    id="but"
                    name="submit"
                    type="submit"
                    value="Login"
                  />
                  <br />
                  <a class="button" 
                     href="/bizzconn/secure/register.php"
                     value="Register"
                    >Register</a
                  >
                  <br />
                </div>
              </form>
            </div>
          </div>
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