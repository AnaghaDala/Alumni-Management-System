<?php
    include './navigationbar.php';
    session_start();
    if(!(isset($_SESSION['logged_in']))){
        header("Location: alumnilogin.php");  
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/stylesheetalumni.css" />
</head>
<body>
    <div class="alumnimain">
        <div class="head">
            <b> GALLERY </b>
        </div>
        <div class="subheading">
            CAMPUS IMAGES
        </div>
        <div class="gallery">
            <img src="./assets/images/Sahyadri-Campus-1.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/Sahyadri-Cricket-Ground.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/Sahyadri-Placement-Lab.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/Sahyadri-Campus-Outdoor-Gym.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/Sahyadri-Food-Court.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/Sahyadri-Campus-Library.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/Sahyadri-Auditorium-Netravathi.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/Sahyadri-Guest-Room.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/Sahyadri-Campus-4.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/Sahyadri-Mech-Tech-Lab-1.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/Sahyadri-Boys-Hosel.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/Sahyadri-Challengers.jpg" alt="img" >
        </div>
        
    </div>

</body>
</html>