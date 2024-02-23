<?php
session_start();
unset($_SESSION['U_Id']);
unset($_SESSION['L_Id']);
unset($_SESSION['U_Name']);
header("Location:index.php");

?>