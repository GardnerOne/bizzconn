<?php
//include ("businessLogin.php");
include ("../connections/conn.php");

session_start();

if (isset($_SESSION['bizzconn'])){
    $userid = $_SESSION['bizzconn'];
}
//setting the session, retrieving the id from the databse 


$query = "SELECT * FROM bizzconn_BUsers WHERE id = '$userid'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
?>

<html>
    <head>
        <title>Edit Profile</title>
        <meta charset="windows-1252">
        <link rel="stylesheet" type="text/css" href="../styles/styles.css"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    </head>
    <body
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles/styles.css"> 
         <div class="row">
                    <div class="col m3"></div><div class="col m6">
                        <img src="../pictures/logo.png"/>
                        </div>
                    <div class ="col m3"></div>
                    </div>


    <ul class='nav'>
    <li><a href="/bizzconn/registeredBusiness/home.php">Homepage</a></li>
    <li><a href="/bizzconn/registeredBusiness/community.php">Community</a></li>
    <li><a class="active"href="/bizzconn/registeredBusiness/editProfile.php">Edit Profile</a></li>
    <li><a href="/bizzconn/secure/logout.php">Log out</a></li>    
   
            </ul>
            
            <br/>
            <br/>
   
       
       
             
        <div id ="main">
              <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                        $bid=$row["id"];
                        $bemail=$row["email"];
                        $bpassword=$row["password"];
                        $busername=$row["username"];
                        $bname=$row["name"];
                        $bBname=$row["businessName"];
                        $bgender=$row["gender"];
                        $bDOB=$row["dateOfBirth"];
                        $blocation=$row["location"];
                        $bdisplayimg=$row["displayimg"];
                }
}
?>
            
            <h2>Edit your profile details:</h2>
            <form enctype="multipart/form-data" action="updateDetails.php" method="POST"> 
                    <img src="../pictures/<?php echo $bdisplayimg; ?>" width='250' height='200' />
              <p> <label for="frontimg"> Select a file </label><p>
                <input name="displayimg" type="file" />

                <p>Name: 
                    <input type="text" name="name"  value="<?php echo $bname; ?>"/>
                </p>
                <p>Username:
                    <input type="text" name="username"  value="<?php echo $busername; ?>"/>
                </p>
                <p>Business Name: 
                    <input type="text" name="businessName"  value="<?php echo $bBname; ?>"/>
                </p>
                <p>Email: 
                    <input type="text" name="email"  value="<?php echo $bemail; ?>"/>
                <p>Password: 
                    <input type="password" name="password"  value=""/>
                </p>
                <p>Location: 
                    <input type="text" name="location" value="<?php echo $blocation; ?>"/>
                </p>
                <p>Date of Birth: 
                    <input type="text" name="dateOfBirth" value="<?php echo $bDOB; ?>"/>
                </p>
                    Gender: 
                <input type="text" name="gender" value="<?php echo $bgender; ?>"/>
                    
                <p><input  name="submit" type="submit" value="Update Profile"/><p>
            </form>	
        </div>

        
                </body>
</html>