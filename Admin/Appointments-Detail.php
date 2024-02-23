<?php
    include "config.php";
    $id = $_GET['id'];
    $mysql = "SELECT Id, User_Id, Lawyer_Id, Timing, app_days, app_time, app_status, U_Name, FName_lwyr, LName_lwyr, Available_Time, Case_Special FROM `tbl_appointment` JOIN `tbl_lawyer` ON Lawyer_Id = Id_lwyr JOIN `tbl_user` ON User_Id = U_ID WHERE Id=$id";
    $result = mysqli_query($conn,$mysql);
    while($row = mysqli_fetch_assoc($result)){
        $a_id = $row["Id"];
        $a_uname = $row["User_Id"]." : ".$row["U_Name"];
        $a_lname = $row["Lawyer_Id"]." : ".$row["FName_lwyr"]." ". $row["LName_lwyr"];
        $a_time = $row["Available_Time"];
        $a_daytime = $row["app_days"]." ".$row["app_time"];
        $a_status = $row["app_status"];
        $a_case = $row["Case_Special"];

        echo    "<p>".$a_id."</p>".
                "<p>".$a_uname."</p>".
                "<p>".$a_lname."</p>".
                "<p>".$a_time."</p>".
                "<p>".$a_daytime."</p>".
                "<p>".$a_status."</p>".
                "<p>".$a_case."</p>";
    }
?>