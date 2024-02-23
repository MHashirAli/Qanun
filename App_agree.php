<?php
    session_start();
    include('config.php');

    if (isset($_GET['id'])) {
        
        $id = $_GET['id'];

        $mysql = "UPDATE tbl_appointment SET app_status='Agree' WHERE Id='$id'";
        $result = mysqli_query($conn,$mysql);

        $amysql = "SELECT Id, Lawyer_Id FROM `tbl_appointment` JOIN `tbl_lawyer` ON Lawyer_Id=Id_lwyr WHERE Id='$id'";
        $aresult = mysqli_query($conn,$amysql);
        $arow = mysqli_fetch_assoc($aresult);
        
        $lwyrid = $arow['Lawyer_Id'];
        header('location:Lawyer_Acc.php?id='.$lwyrid);
    }
?>