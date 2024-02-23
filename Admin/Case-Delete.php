<?php

    include "config.php";
    $id = $_GET['id'];
    $mysql = "Delete from tbl_cases where Case_Id = '$id'";
    
    $result = mysqli_query($conn,$mysql);
    if($result){
        header("Location:Cases.php");
    }
    else{
        echo "Error".mysqli_error($conn);
    }
    

?>