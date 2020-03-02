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
        <title></title>
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
        <?php
        
        $discussionTitle = mysqli_real_escape_string($conn, $POST)["discussionTitle"];
        
        $discussionContent = mysqli_escape_string($conn, $POST)["discussionContent"];
        
        $discussionCategory = myssqli_escape_string($conn, $POST)["discussionCategory"];
        
        $discussionquery = "INSERT INTO bizzconn_Community (discussionTitle , discussionContent, discussionCategory)
            VALUES ('$discussionTitle', '$discussionContent', '$discussionCategory')"; 
       
                
        
      
        
        echo  $discussionContent, $discussionTitle; 
        
      
        
        
        ?>
    </body>
</html>
