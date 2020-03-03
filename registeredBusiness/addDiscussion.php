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
        <meta charset="UTF-8">
   <link href="../styles/styles.css" rel="stylesheet" type="text/css"/>
   </head>
      <div class="col m10 _primary _noPadding">
            </div>
                
                <div class="row">
                    <div class="col m3"></div><div class="col m6">
                        <img src="../pictures/logo.png"/>
                        </div>
                    <div class ="col m3"></div>
                    </div>
   
        
    <ul class='nav'> 
    <li><a href="/bizzconn/registeredBusiness/home.php">Homepage</a></li>
    <li><a href="/bizzconn/registeredBusiness/community.php">Community</a></li>
    <li><a href="/bizzconn/registeredBusiness/editProfile.php">Edit Profile</a></li>
    <li><a href="/bizzconn/secure/logout.php">Log out</a></li>    
   
    </ul>
        
      
        <?php
        $discussionTitle = ($_POST["discussionTitle"]);
        
        $discussionContent = ($_POST["discussionContent"]);
        
        $discussionCategory = ($_POST["discussionCategory"]);
        
        echo "Your discussion has now been added! Title: $discussionTitle, Category:$discussionCategory, Content:$discussionContent";
        
   

        
        $discussionquery = "INSERT INTO bizzconn_Community (discussionTitle , discussionContent, discussionCategory)
            VALUES ('$discussionTitle', '$discussionContent', '$discussionCategory')"; 
       
                
        $resultdiscussion = mysqli_query($conn, $discussionquery) or die(mysqli_error($conn));
      
        
        ?>
   


    </body>
</html>
