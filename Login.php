<?php
    session_start();
    include "config.php";
    if(isset($_POST["u-login"])){
        $email = $_POST["u-email"];
        $pass = $_POST["u-pass"];

        $mysql = "SELECT * from `tbl_user` where U_Email = '$email' AND `U_password` = '$pass'";
        $result = mysqli_query($conn,$mysql);
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)>0){
            $_SESSION["U_Id"] = $row["U_ID"];
            $_SESSION["U_Name"] = $row["U_Name"];

            if(isset($_SESSION['a_submit'])){
                $U_id = $_SESSION['U_Id'];
                $sessLid = $_SESSION['app_Lid'];
                $sessCurTime = $_SESSION['app_timing'];
                $sessdays = $_SESSION['app_days'];
                $sessTime = $_SESSION['app_time'];
        
                $imysql = "INSERT into `tbl_appointment` (User_Id,Lawyer_Id ,Timing,app_days,app_time,app_status) values ('$U_id','$sessLid','$sessCurTime','$sessdays','$sessTime','Process')";
            }

            header("Location:Index.php");
        }
        else{
            echo "<p class='text-danger'>Login denied</p>";
        }
    }
    

    if(isset($_POST["l-login"])){
        $lemail = $_POST["l-email"];
        $lpass = $_POST["l-pass"];

        $lmysql = "SELECT * from `tbl_lawyer` where Email_lwyr = '$lemail' AND `Password_lwyr` = '$lpass'";
        $lresult = mysqli_query($conn,$lmysql);
        $lrow = mysqli_fetch_assoc($lresult);
        if(mysqli_num_rows($lresult)>0){
            $_SESSION["L_Id"] = $lrow["Id_lwyr"];
            header("Location:Index.php");
        }
        else{
            echo "<p class='text-danger'>Login denied</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <title> Canun – Login</title>

    <?php
        include "Links.php";
    ?>
</head>

<body>


    <?php
        include "Header.php";
    ?>
        
        <!-- start of breadcumb-section -->
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Login</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><span>Login</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->

        <div class="wpo-checkout-area section-padding d-flex row">
            <!-- USER LOGIN -->
            <div class="container col-lg-6 col-md-12 col-sm-12">
                <form method="post">
                    <div class="checkout-wrap">
                        <div class="row">
                                    <div class="biling-item">
                                        <div class="coupon coupon-3">
                                            <label id="toggle2">USER LOGIN</label>
                                        </div>
                                        <div class="billing-adress" id="open2">
                                            <div class="contact-form form-style">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-12">
                                                        <label for="email4">Email Adress</label>
                                                        <input type="email" placeholder="" name="u-email" id="email4" name="email">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-12">
                                                        <label for="email2">Password</label>
                                                        <input type="password" placeholder="" name="u-pass" id="email2" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                                <div class="submit-btn-area">                              
                                                    <ul>
                                                        <li><button class="theme-btn" name="u-login" type="submit">Login</button></li>
                                                    </ul>
                                                </div>
                                                <ul>
                                                    <li>Don't have account? <a href="Register.php"> Sign Up</a></li>
                                                </ul>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="container col-lg-6 col-md-12 col-sm-12">
                <form method="post">
                    <div class="checkout-wrap">
                        <div class="row">
                                    <div class="biling-item">
                                        <div class="coupon coupon-3">
                                            <label id="toggle2">LAWYER LOGIN</label>
                                        </div>
                                        <div class="billing-adress" id="open2">
                                            <div class="contact-form form-style">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-12">
                                                        <label for="email4">Email Adress</label>
                                                        <input type="email" placeholder="" name="l-email" id="email4" name="email">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-12">
                                                        <label for="email2">Password</label>
                                                        <input type="password" placeholder="" name="l-pass" id="email2" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                                <div class="submit-btn-area">                              
                                                    <ul>
                                                        <li><button class="theme-btn" name="l-login" type="submit">Login</button></li>
                                                    </ul>
                                                </div>
                                                <ul>
                                                    <li>Don't have account? <a href="Register_lwyr.php"> Sign Up</a></li>
                                                </ul>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>



    <?php
        include "Footer.php";
    ?>

    </div>
    <!-- end of page-wrapper -->

    <?php
        include "Scripts.php";
    ?>
    </body>

</html>