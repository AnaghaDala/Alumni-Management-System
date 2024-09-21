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
           <b> ABOUT US </b>
        </div>
        <!-- <div class="subheading">
            <b>VISION</b>
        </div> -->
        <div class="content">
        The sprawling campus just off the Mangalore-Bangalore National Highway 48 is situated on the banks of the river Nethravathi.
         Surrounded with natures pristine beauty and an excellent infrastructure coupled with dedicated and experienced faculty has
          made the Campus a much sought-after abode of learning.
        </div>
        <div class="subheading">
            <b>MISSION BEHIND THE CREATION OF THIS PORTAL</b>
        </div>
        <div class="content">
        At Sahyadri College of Engineering and Management (SCEM), we are dedicated to nurturing lifelong relationships with our alumni 
        and fostering meaningful interactions between alumni and current students. Our mission is to create a vibrant community where
         the bonds forged during academic years continue to thrive, contributing to the growth and success of both individuals and the institution.
        </div><div class="subheading">
            <b>LETTER FROM ALUMNI COUNCIL</b>
        </div>
        <div class="content">
            <p>
            Dear Esteemed Alumni,<br>
            Warm greetings from your Alma mater!
            <p><br>At Sahyadri College of Engineering and Management (SCEM), we recognize the invaluable role that our alumni play in shaping the legacy and
            future of our institution. Just as alumni have contributed significantly to the world's most prestigious universities, your accomplishments
            and endeavors are a testament to the excellence of our university.
            Our Chancellor often refers to our alumni as "ambassadors and torch-bearers" of SCEM, a sentiment that resonates deeply with our community. 
            As stewards of our alma mater's reputation and ideals, your achievements reflect not only your personal success but also the strength and 
            character of our institution.</p><br>
            <p>The Alumni Council is dedicated to serving our alumni community, with a commitment to fostering a spirit of collaboration and support.
            We believe in a philosophy of "for the alumni, by the alumni, and through the alumni," recognizing that our collective efforts are essential
            in advancing the interests of our community.</p><br>
            <p>We invite you to actively engage with the Alumni Office and Chapters, participating in events and initiatives designed to provide opportunities
            for professional growth, knowledge enhancement, and networking. Your involvement not only enriches your personal journey but also strengthens
            the bonds within our alumni network.</p><br>
            <p>Thank you for taking the time to visit our alumni page. We encourage you to stay connected with SCEM, keeping abreast of news and developments
            both at the institute and among your fellow alumni. Your continued engagement and feedback are invaluable as we strive for excellence together.
            We extend a warm welcome to you to reconnect, collaborate, and communicate with your alma mater, exploring the myriad possibilities offered
            by the Alumni Council at SCEM.</p><br>
            <p>With warm regards,
            Director<br>
            Alumni Council<br>
            SCEM
            </p>
</p>
        </div>
</div>
</body>
</html>