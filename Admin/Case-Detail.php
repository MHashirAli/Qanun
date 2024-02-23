<?php
    include "config.php";
    $id = $_GET['id'];
    $mysql = "SELECT * FROM `tbl_cases` WHERE Case_Id='$id'";
    $result = mysqli_query($conn,$mysql);
    while($row = mysqli_fetch_assoc($result)){
        echo    $row["Case_Id"];
        echo    $row["Case_Name"];
        echo    $row["Case_description"];
    }
?>