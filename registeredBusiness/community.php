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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <a class="nav-link active" href="/bizzconn/registeredBusiness/community.php">Community</a>
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
    <div class="container mt-3">
        <form id="form" class="mx-auto p-3 col-md-10" action="addDiscussion.php" method="post"
            enctype="multipart/form-data">
            <div class="form-group row">
                <legend class="col-form-label col">
                    <h4>Add Discussion:</h4>
                </legend>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4">Enter Discussion Title </label>
                <div class="col-sm-8">
                    <input name="discussionTitle" type="text" placeholder="Discussion Title" required="required"
                        value="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4">Enter Discussion Content</label>
                <div class="col-sm-8">
                    <input name="discussionContent" type="text" placeholder="Discussion Content" required="required"
                        value="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4">Enter Discussion Category</label>
                <div class="col-sm-8">
                    <input name="discussionCategory" type="text" placeholder="Discussion Category" required="required"
                        value="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4 mt-3">
                    <input type="submit" value="Submit Discussion" id="button">
                </div>
            </div>
        </form>
    </div>
</body>

</html>