
<?php
    include "config.php";
    if(isset($_POST["register"])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $cases = $_POST['cases'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $education = $_POST['education'];
        $experiance = $_POST['experiance'];
        $description = $_POST['description'];
        $total_cases = $_POST['total_cases'];
        $winning_cases = $_POST['winning_cases'];


        $checkbox1=$_POST['days'];  
        $chk = implode(",",$checkbox1);

        $time = $_POST['time'];
        $pass = $_POST['pass'];
        $con_pass = $_POST['con_pass'];
        
        $uploaddir = "Admin/images/Lawyers/";
        $uploadfile = $uploaddir.basename($_FILES['img']['name']);
        $filetype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
        if($filetype == "jpg" || $filetype == "jpeg" || $filetype == "png"){
            if(move_uploaded_file($_FILES['img']['tmp_name'],$uploadfile)){
            }
        }
        $image = $uploadfile;

        $mysql = "INSERT into `tbl_lawyer` (FName_lwyr,LName_lwyr,Email_lwyr,Password_lwyr,About_lwyr,Image_lwyr,Address_lwyr,Education_lwyr,Winning_cases,Experience_lwyr,Number_lwyr,Total_Cases,Available_Days,Available_Time,Case_Special) values ('$fname','$lname','$email','$pass','$description','$image','$address','$education','$winning_cases','$experiance','$number','$total_cases','$chk','$time','$cases')";
        mysqli_query($conn,$mysql);

        header("Location:Login.php");
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
    <title> Canun – Register</title>

    <?php
        include "Links.php";
    ?>
</head>
<style>
    input[type=checkbox]{
        width: auto !important;
        margin: auto !important;
    }
</style>
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
                            <h2>Register</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><span>Register</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->

        <?php
            include "config.php";
            $mysql = "SELECT * from tbl_cases";
            $result = mysqli_query($conn,$mysql);
        ?>
        <!-- wpo-checkout-area start-->
        <div class="wpo-checkout-area section-padding">
            <div class="container mx-auto">
                <form method="post" enctype="multipart/form-data" action="">
                    <div class="checkout-wrap">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <div class="caupon-wrap s2">
                                    <div class="biling-item">
                                        <div class="coupon coupon-3">
                                            <label id="toggle2">Register</label>
                                        </div>
                                        <div class="billing-adress" id="open2">
                                            <div class="contact-form form-style">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <label for="">First Name</label>
                                                        <input type="text" placeholder="" id="" name="fname">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <label for="">Last Name</label>
                                                        <input type="text" placeholder="" id="" name="lname">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-12">
                                                        <label for="">Cases Espacialist</label>
                                                        <select id="" class="form-control" name="cases">
                                                            <option value="0" disabled="" selected="">Select Case</option>
                                                            <?php
                                                                while($row = mysqli_fetch_assoc($result)){
                                                            ?>
                                                                <option value="<?php echo $row['Case_Name']?>"><?php echo $row['Case_Name']?></option>
                                                            <?php
                                                                }  
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-12">
                                                        <label for="">Address</label>
                                                        <input type="text" placeholder="" id="" name="address">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <label for="">Email Adress</label>
                                                        <input type="email" placeholder="" id="" name="email">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <label for="">Phone No.</label>
                                                        <input type="number" placeholder="" id="" name="number">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-12">
                                                        <label for="">Education</label>
                                                        <input type="text" placeholder="" id="" name="education">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-12">
                                                        <label for="">Experience</label>
                                                        <textarea id="" cols="30" rows="5" class="form-control" name="experiance"></textarea>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-12 mb-3">
                                                        <label for="">Description</label>
                                                        <textarea id="" cols="30" rows="5" class="form-control" name="description"></textarea>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <label for="">Total Cases</label>
                                                        <input type="number" placeholder="" id="" name="total_cases">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <label for="">Wining Cases</label>
                                                        <input type="number" placeholder="" id="" name="winning_cases">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-12">
                                                        <label for="">Available Days</label>
                                                        <div><input type="checkbox" name="days[]" value="Monday">Monday</div>
                                                        <div><input type="checkbox" name="days[]" value="Tuesday">Tuesday</div>
                                                        <div><input type="checkbox" name="days[]" value="Wednesday">Wednesday</div>
                                                        <div><input type="checkbox" name="days[]" value="Thursday">Thursday</div>
                                                        <div><input type="checkbox" name="days[]" value="Friday">Friday</div>
                                                        <div><input type="checkbox" name="days[]" value="Saturday">Saturday</div>
                                                        <div><input type="checkbox" name="days[]" value="Sunday">Sunday</div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <label for="">Available Timing</label>
                                                        <input type="time" placeholder="" id="" name="time">
                                                    </div>
                                                    <div class="col-lg-12 col-md-6 col-12">
                                                        <label for="">Upload Picture</label>
                                                        <input type="file" placeholder="" id="" class="form-control" name="img"/>
                                                    </div>                                                    
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <label for="">Password</label>
                                                        <input type="password" placeholder="" id="" name="pass">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <label for="">Confirm Password</label>
                                                        <input type="password" placeholder="" id="" name="con_pass">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="biling-item-2">                                                
                                                <div class="submit-btn-area">
                                                    <ul>
                                                        <li><button class="theme-btn" type="submit" name="register">Register</button></li>
                                                    </ul>
                                                </div>
                                                <ul>
                                                    <li>Already have account? <a href="Login.php"> Sign In</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
        <!-- wpo-checkout-area end-->

    <?php
        include "Footer.php";
    ?>

    </div>
    <!-- end of page-wrapper -->

    <?php
        include "Scripts.php";
    ?>