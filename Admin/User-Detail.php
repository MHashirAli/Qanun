<?php
    include "config.php";
    $id = $_GET['id'];
    $mysql = "SELECT * FROM `tbl_user` WHERE U_ID='$id'";
    $result = mysqli_query($conn,$mysql);
    while($row = mysqli_fetch_assoc($result)){
        echo    "<p>".$row["U_ID"]."</p>".
                "<p>".$row["U_Name"]."</p>".
                "<p>".$row["U_Email"]."</p>".
                "<p>".$row["U_City"]."</p>".
                "<p>".$row["U_Number"]."</p>";
    }
?>