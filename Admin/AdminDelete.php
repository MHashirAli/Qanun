<?php

    include "config.php";
    $id = $_GET['id'];
    $mysql = "Delete from tbl_admin where A_ID = '$id'";
    
    $result = mysqli_query($conn,$mysql);
    if($result){
        header("Location:Adminlist.php");
    }
    else{
        echo "Error".mysqli_error($conn);
    }
    

?>