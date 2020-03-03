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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>

<body>
    <div class="d-flex justify-content-center my-5">
        <img src="../pictures/logo.png" />

    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
        <ul class='navbar-nav'>
            <li class="nav-item">
                <a class="nav-link" href="/bizzconn/registeredBusiness/home.php">Homepage</a></li>
            <li class="nav-item">
                <a class="nav-link" href="/bizzconn/registeredBusiness/community.php">Community</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" class="active" href="/bizzconn/registeredBusiness/editProfile.php">Edit
                    Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/bizzconn/secure/logout.php">Log out</a>
            </li>
        </ul>
    </nav>

    <div id="main" class="container">
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
        <div>
            <form id="form" class="mx-auto col-lg-6 p-3" enctype="multipart/form-data" action="updateDetails.php"
                method="POST">
                <div class="form-group row">
                    <legend class="col-form-label col">
                        <h4>Edit your profile details:</h4>
                    </legend>
                </div>
                <div class="form-group row">
                    <img class="mx-auto my-4" src="../pictures/<?php echo $bdisplayimg; ?>" width='250' height='200' />
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-4" for="frontimg"> Select a file </label>
                    <input class="col-sm-8" name="displayimg" type="file" />
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Name:</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" value="<?php echo $bname; ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Username:</label>
                    <div class="col-sm-8">
                        <input type="text" name="username" value="<?php echo $busername; ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Business Name:</label>
                    <div class="col-sm-8">
                        <input type="text" name="businessName" value="<?php echo $bBname; ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Email:</label>
                    <div class="col-sm-8">
                        <input type="text" name="email" value="<?php echo $bemail; ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Password:</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" value="" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Location:</label>
                    <div class="col-sm-8">
                        <input type="text" name="location" value="<?php echo $blocation; ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Date of Birth:</label>
                    <div class="col-sm-8">
                        <input type="text" name="dateOfBirth" value="<?php echo $bDOB; ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Gender:</label>
                    <div class="col-sm-8">
                        <input type="text" name="gender" value="<?php echo $bgender; ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <input class="col-lg-4 mt-3 ml-2" name="submit" type="submit" value="Update Profile" />
                </div>
            </form>
        </div>
    </div>


</body>

</html>