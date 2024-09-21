<?php
    include './navigationbar.php';
    session_start();
    if(!(isset($_SESSION['logged_in']))){
        header("Location: alumnilogin.php");  
    }
    $name=$email=$query=$msg="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $usn=test_input($_POST["usn"]);
        $query=test_input($_POST["query"]);
        if(isset($_POST["submit"])){
            $sql="INSERT INTO queries (id,usn,query) values (NULL,'$usn','$query')";
            if(mysqli_query($con,$sql)){
                $msg="Thank you for the response, We will get back to you.";
                // header("Location:successfullmsg.php");
            }
            else{
                echo "Error";
            }
        }
    }
    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
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
        <div class="head"><b>ALUMNI ASSIST - SEND QUERY</b></div>
        <div class="content">
            For getting academic transcripts, campus visit request and any other queries contact us by filling the form.
        </div>
        <div class="message">
            <?php
                if($msg!=""){
                    echo $msg;
                }
            ?>
        </div>
        <div class="formcontainer">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" name="mentorform" method="post">
            <div class="input-box">
                    <span class="details">USN</span>
                    <input type="text" placeholder="Enter usn" name="usn" autocomplete="off" required>
            </div>
            <div class="input-box">
                    <span class="details">Type Query</span>
                    <textarea name="query" id="query" cols="30" rows="10" placeholder="Type your Query here" autocomplete="off" required></textarea>
            </div>
            <button type="submit" value="submit" name="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>