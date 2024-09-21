<?php
    include './navigationbar.php';
    session_start();
    if(!(isset($_SESSION['logged_in']))){
        header("Location: alumnilogin.php");  
    }
    $sql = "SELECT * FROM events ORDER BY E_Date DESC";
    $result = mysqli_query($con, $sql);
    $count = $result->num_rows;
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
        <div class="head"><b>EVENTS</b></div><br>
        <div class="content">
            View the upcoming alumni events and conferences!
            <br>
        </div>
        <table class="tablecontainer" border="1">
            <thead>
                <tr>
                    <th>EVENT NAME</th>
                    <th>ORGANIZER</th>
                    <th>EVENT LOCATION</th>
                    <th>EVENT DATE</th>
                    <th>EVENT TIMINGS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["E_Title"]; ?></td>
                        <td><?php echo $row["organizer"]; ?></td>
                        <td><?php echo $row["E_Loc"]; ?></td>
                        <td><?php echo $row["E_Date"]; ?></td>
                        <td><?php echo $row["E_Time"]; ?></td>
                    </tr>
                <?php
                    $count = $count - 1;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
