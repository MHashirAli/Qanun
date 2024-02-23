<?php
    include "config.php";
    $id = $_GET['id'];
    $mysql = "SELECT * FROM `tbl_admin` WHERE A_ID='$id'";
    $result = mysqli_query($conn,$mysql);
    while($row = mysqli_fetch_assoc($result)){
        echo    "<p>".$row["A_ID"]."</p>".
                "<p>".$row["A_Name"]."</p>".
                "<p>".$row["A_Email"]."</p>".
                "<p>".$row["A_Number"]."</p>";
    }
?>