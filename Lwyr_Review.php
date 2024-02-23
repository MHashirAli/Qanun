<?php
    session_start();
    include('config.php');

    if (isset($_GET['id'])) {
        if(isset($_POST["rev-submit"])){ 
            $lwyrid = $_GET['id'];
            $uid = $_SESSION['U_Id'];
            
            
            $msg = $_POST['msg'];
            $rat = $_POST['rat'];
            $curtime =  date("d-m-y h:i:s");
            
            $mysql = "INSERT into `tbl_reviews` (Rev_User_Id, Rev_Lwyr_Id ,Rev_Message, Rev_Rating, Rev_Time) values ('$uid','$lwyrid','$msg','$rat','$curtime')";
            mysqli_query($conn,$mysql);
            
            header('location:Lawyer-Detail.php?id='.$lwyrid);
        }
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

    
    <form method="post" class="mx-auto w-50 p-5 m-5 text-center">
        <select name="rat" id="" class="form-control mb-3">
            <option value="0" disabled="" selected="">Ratings</option>
            <option value="Fantastic">Fantastic</option>
            <option value="Very Good">Very Good</option>
            <option value="Good">Good</option>
            <option value="Bad">Bad</option>
            <option value="Worst">Worst</option>
        </select>
        <textarea cols="30" rows="5" class="form-control mb-5" name="msg" required placeholder="Enter Your Review"></textarea>
        <input type="submit" name="rev-submit" class="theme-btn btn w-25" value="Submit">
    </form>

    <?php
        include "Scripts.php";
    ?>
</body>
</html>