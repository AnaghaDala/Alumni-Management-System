<?php
    include './navigationbar.php';
    session_start();
    $_SESSION["logged_in"]=TRUE;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href=".assets/css/stylesheetalumni.css" />
</head>
<body>
    <div class="alumnimain">
        <div class="msg">
            <h1>
            Alumni Connect: Connecting Past, Present, and Future
            </h1>
            <div class="sub-head">Alumni Portal of Sahyadri College of Engineering & Management</div>
            <br>
        <img class="alumni-home-img" src="./assets/images/sahyadri_IMG.jpeg" alt="img" height="520px" width=100%>
        </div>        
    </div>
</body>
</html>