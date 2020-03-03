<?php
include ("../connections/conn.php");
?>

<html>
   
    <head>
        <title></title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
$(document).ready(function(){

	$('#checkBusinesssUsername').on('click', function (e) {
console.log["iwas clicked"];
		e.preventDefault();
		
		$.ajax({
				
			url: "checkBusinesssUsername.php", 
			type: "POST",
			data: $("#sendUsername").serialize(),
			
			success: function(result){
				$("#checkFeedbackBusiness).html(result);
			}
		});
	});

});
$(document).ready(function(){

	$('#checkBusinessUsername').on('click', function (e) {
console.log["iwas clicked"];
		e.preventDefault();
		
		$.ajax({
				
			url: "checkBusinessUsername.php", 
			type: "POST",
			data: $("#sendUsername").serialize(),
			
			success: function(result){
				$("#checkFeedbackBusiness").html(result);
			}
		});
	});

});
</script>
    </head>
    
     <body> 
        <br/>
       
             <div id="main">
     
                 <h2>Register for a Business Account</h2>
                    
                 <form id="senduser" enctype="multipart/form-data" method="POST" action="newBusinessUser.php">
                     <p>Name:</p>
                     <input type="text" id="name" placeholder="Name" name="name">
                     <p> Email:</p>
                     <input type="text" id="email" placeholder="Email" name="email">
                     <p>Username:</p>
                     <input type="text" id="username" placeholder="Username" name="username">
                     <p> <button id="checkBusinessUsername" class="btn btn-skin">Check username is free?</button></p>
                     <div id="checkFeedbackBusiness"> </div>
                     <p> Business Name: </p>
                     <input type="text" id="businessName" placeholder="Business Name" name="businessName">
                     <p> Gender: </p>
                     <input type="text" id="gender" placeholder="Gender" name="gender">
                     <p> Date of Birth: </p>
                     <input type="date" id="dateOfBirth" placeholder="Date of Birth" name="dateOfBirth">
                     <p> Location(enter county): </p>
                     <input type="text" name="location" id="location" placeholder="County">
                     <p>Password:</p>
                     <input type="text" id="password" placeholder="Password" name="password">  
                     
                     
                       <!--  include ("../Connections/conn.php");
                         $usersubject = "SELECT * FROM subjects";
                         $usersubjectresult = mysqli_query($conn, $usersubject);
                         mysqli_close($conn);
                         while ($row= mysqli_fetch_assoc($usersubjectresult)) {
                             $id=$row['id'];
                             $subject=$row['subject'];
                             echo "<option value='$id'>$subject</option>";
                         }-->
                       
                        
                       
                         
          
                         <!--
                         include ("../Connections/conn.php");
                         $userlevel = "SELECT * FROM levelofeducation";
                         $userlevelresult = mysqli_query($conn, $userlevel);
                         mysqli_close($conn);
                         while ($row= mysqli_fetch_assoc($userlevelresult)) {
                             $id=$row['id'];
                             $level=$row['level'];
                             echo "<option value='$id'>$level</option>";
                 
                        <!--
                        include ("../Connections/conn.php");
                         $userlocation = "SELECT * FROM location";
                         $userlocationresult = mysqli_query($conn, $userlocation);
                         mysqli_close($conn);
                         while ($row= mysqli_fetch_assoc($userlocationresult)) {
                             $location=$row['location'];
                             $id=$row['id'];
                             echo "<option value='$id'> $location</option>";
                         }-->
                         
                       
                         
                   
                 </br></br>
                        <label for="profilepic"> Select a profile picture </label> </br> </br>

                        <input name="displayimg" type="file" id="diplayimg" />
                        </br>
                        </br></br>
                     <input type="submit" value="Register Account" id="submit">
                 </form>
    
        <h2>Register for an Influencer Account </h2>

        <form id="sendlearner" enctype="multipart/form-data" method="POST" action="newBusinessUser.php">

            
               <p>Name:</p>
            <input type="text" id ="name" placeholder="Name" name="name">
             <p>Email:</p>
            <input type="text" id ="pword"placeholder="Password" name="pword">
            <p>Username:</p>
            <input type="text" id ="uname" placeholder="Username" name="uname">
            <p>
             <button id="checklearnerusername" class="btn btn-skin">Check username is free?</button>
            </p>
            <div id="checkfeedbacklearner"> </div>
            <p>Gender:</p>
            <input type="text" id ="pword"placeholder="Gender" name="pword">
            <p> Date of Birth: </p>
            <input type="date" id="dateOfBirth" placeholder="Date of Birth" name="dateOfBirth">
            <p> Location(enter county): </p>
            <input type="text" name="location" id="location" placeholder="County">
             <p>Password:</p>
             <input type="text" id="password" placeholder="Password" name="password">  
                </br></br>
                        <label for="profilepic"> Select a profile picture </label> </br> </br>

                        <input name="displayimg" type="file" id="diplayimg" />
                        </br>
                        </br></br>
                     <input type="submit" value="Register Account">
                 </form>

        </div

        </body>
   
        </html>
           