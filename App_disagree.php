<?php
    session_start();
    include('config.php');

    if (isset($_GET['id'])) {
        
        $id = $_GET['id'];

        $mysql = "UPDATE tbl_appointment SET app_status='Disagree' WHERE Id='$id'";
        $result = mysqli_query($conn,$mysql);

        $amysql = "SELECT Id, Lawyer_Id FROM `tbl_appointment` JOIN `tbl_lawyer` ON Lawyer_Id=Id_lwyr WHERE Id='$id'";
        $aresult = mysqli_query($conn,$amysql);
        $arow = mysqli_fetch_assoc($aresult);
        
        $lwyrid = $arow['Lawyer_Id'];
    }

    if(isset($_POST["reason-submit"])){        
        $reason = $_POST['reason'];
        $amysql = "UPDATE `tbl_appointment` SET `app_reason`='$reason' WHERE `Id`='$id';";
        mysqli_query($conn,$amysql);

        header('location:Lawyer_Acc.php?id='.$lwyrid);
    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Canun – Lawyers-Detail</title>
    
    <?php
        include "Links.php";
    ?>
</head>

<body>

    
    <form method="post">
        <textarea cols="30" rows="5" class="form-control" name="reason" required placeholder="Appointment Cancel Reason"></textarea>
        <input type="submit" name="reason-submit" class="theme-btn btn" value="Submit">
    </form>

    <?php
        include "Scripts.php";
    ?>
</body>
</html>