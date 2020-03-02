<?php
//ask for an element named 'mydata'
$passbusinessuname = $_POST["username"];


include("../connections/conn.php");
$businessquery = "SELECT * FROM bizzconn_BUsers WHERE busername='$passbusinessuname'";

$businessresult = mysqli_query($conn, $businessquery) or die(mysqli_error($conn));


if( mysqli_num_rows($businessresult) > 0){
	echo " Username already taken
             <b>Please chose another one</b>";
        
}else{		
	echo "Username free! Continue registration";
}


?>