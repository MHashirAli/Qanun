<?php
session_start();
unset($_SESSION['A_ID']);
unset($_SESSION['A_Name']);
header("Location:Dashboard.php");

?>