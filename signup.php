<?php
  include './navbarindex.php'; 

  $nameErr=$passwordErr=$confirmpwdErr=$newpassword="";
  $usn=$name=$email=$department=$graduationyear=$currentjob=$password=$confirmpwd="";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    #validating name
    $name= test_input($_POST["name"]);
    $checkname=str_replace(" ","",$name);
    if(!preg_match("/^[a-zA-Z]*$/",$checkname)){
      $nameErr="Only letters and white spaces are allowed";
    }
    
    $password= test_input($_POST["pwd"]);      
      #validation password
      $uppercase= preg_match('@[A-z]@',$password);
      $lowercase= preg_match('@[a-z]@',$password);
      $numbers= preg_match('@[0-9]@',$password);
      $specialchars= preg_match('@[^/w]@',$password);
      if(!$uppercase || !$lowercase || !$numbers || !$specialchars || strlen($password)<8){
        $passwordErr="Password should be atleast 8 characters length and should contain lowercase and uppercase alphabets, numbers and special characters";
        }
      $confirmpwd= test_input($_POST["confirmpwd"]);
      if($password != $confirmpwd){
        $confirmpwdErr="Passwords are not matching";
      }
      $usn= test_input($_POST["usn"]);
    $email= test_input($_POST["email"]);
    $department=test_input($_POST["dept"]);
    $graduationyear=test_input($_POST["graduationyear"]);
    $currentjob=test_input($_POST["currentjob"]);
    if(isset($_POST["submit"])){
      $duplicate=mysqli_query($con,"select * from alumnilogin where email='$email'");
      if(mysqli_num_rows($duplicate)>0){
        header("Location: userexists.php");
      }
      elseif(($nameErr=="")&&($passwordErr=="")&&($confirmpwdErr=="")){
        $hashpassword=md5($password);
        // echo '$newpassword';
        $sql = "INSERT INTO alumnilogin (id, usn, name, email, department, graduationyear, currentjob, password) VALUES (NULL, '$usn', '$name', '$email', '$department', '$graduationyear', '$currentjob', '$hashpassword')";

        if(mysqli_query($con,$sql)){
          header("Location: redirectpostsignup.php");
        } 
        mysqli_close($con);
      } 
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ALUMNI REGISTRATION</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/stylehome.css">
  </head>
  <body>
    <div class="main">
      <div class="bg-img">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" name="signup" method="post">
          <div class="scontainer">
            <center>
              <h2><u>ALUMNI REGISTRATION</u></h2>
            </center>
            <div class="message">
                <?php
                  if($nameErr!=""){
                    echo $nameErr;
                  }
                  elseif($passwordErr!=""){
                    echo $passwordErr;
                  }
                  elseif($confirmpwdErr!=""){
                    echo $confirmpwdErr;
                  }
                ?>
            </div>

            <div class="user-details">

              <div class="input-box">
                <span class="details">Name</span>
                <input
                  type="text"
                  name="name"
                  placeholder="Enter your name" autocomplete="off"
                  required
                />
              </div>  

              <div class="input-box">
                <span class="details">USN</span>
                <input
                  type="usn"
                  name="usn"
                  placeholder="Enter your USN" autocomplete="off"
                  required
                />
              </div>            

              <div class="input-box">
                <span class="details">Email</span>
                <input
                  type="email"
                  name="email"
                  placeholder="Enter your email" autocomplete="off"
                  required
                />
              </div>

              <div class="input-box">
                <span class="details">Department</span>
                <input
                  type="text"
                  name="dept"
                  placeholder="Enter your Department" autocomplete="off"
                  required
                />
              </div>

              <div class="input-box">
                <span class="details">Graduation year</span>
                <input
                  type="text"
                  name="graduationyear"
                  placeholder="Enter your year of graduation" autocomplete="off"
                  required
                />
              </div>

              <div class="input-box">
                <span class="details">Current Job</span>
                <input
                  type="text"
                  name="currentjob"
                  placeholder="Enter your current job" autocomplete="off"
                  required
                />
              </div>

              <div class="input-box">
                <span class="details">Password</span>
                <input
                  type="password"
                  name="pwd"
                  placeholder="Enter your password" autocomplete="off"
                  required
                />
              </div>
              <div class="input-box">
                <span class="details">Confirm Password</span>
                <input
                  type="password"
                  name="confirmpwd"
                  placeholder="Re-Enter your password" autocomplete="off"
                  required
                />
              </div>
              
              <button type="submit" value="submit" name="submit" class="btn">Register</button><br /><br />
            </div></div></form>
      </div>
    </div>
  </body>
</html>
