<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wpocean.com/html/tf/canun-live/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jun 2022 09:17:07 GMT -->
<head>
    <title> Canun – My Profile</title>
    
    <?php
        include "Links.php";
    ?>
</head>

<body>

    <?php
        $page = 'Lawyers';
        include "Header.php";
    ?>

    <?php
		include "config.php";
		$id = $_GET['id'];
		$mysql = "SELECT * from tbl_lawyer where Id_lwyr = '$id'";
		$result = mysqli_query($conn,$mysql);
		$row = mysqli_fetch_assoc($result);
	?>

    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Attorney</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Attorney</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->

    <!-- .attorney-pg-area start -->
    <div class="attorney-pg-area section-padding">
        <div class="container">
            <div class="attorney-info-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="attorney-info-img">
                            <img src="<?php echo $row['Image_lwyr']?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="attorney-info-text">
                            <h2><?php echo $row['FName_lwyr']." ". $row['LName_lwyr']; ?></h2>
                            <ul>
                                <li>Practice Area:<span><?php echo $row['Case_Special']; ?></span></li>
                                <li>Address:<span><?php echo $row['Address_lwyr']; ?></span></li>
                                <li>Phone:<span><?php echo $row['Number_lwyr']; ?></span></li>
                                <li>Email:<span><?php echo $row['Email_lwyr']; ?></span></li>
                            </ul>
                            <ul class="mt-5">
                                <h4 class="bg-success text-white w-100 text-center py-3">Appointment</h4>
                                <ul>
                                <li><?php echo $row['Available_Days']; ?></li>
                                    <select name="" id="">
                                        <option value="">Available_Days</option>
                                        <option value="">Available_Days</option>
                                        <option value="">Available_Days</option>
                                        <option value="">Available_Days</option>
                                        <option value="">Available_Days</option>
                                        <option value="">Available_Days</option>
                                        <option value="">Available_Days</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><?php echo $row['Available_Time']; ?></li>
                                </ul>
                                <ul>
                                    <a href="Edit_Lwyr.php" class="theme-btn">Edit Profile</a>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="exprience-area">
                <div class="row">
                    <div class="col-lg-12">                        
                        <div class="education-area ex-wiget">
                            <h2>Experience</h2>
                            <ul>
                                <li><?php echo $row['Experience_lwyr']; ?></li>
                            </ul>
                        </div>
                        <div class="education-area ex-wiget">
                            <h2>About</h2>
                            <ul>
                                <li><?php echo $row['About_lwyr']; ?></li>
                            </ul>
                        </div>
                        <div class="education-area ex-wiget">
                            <h2>Education</h2>
                            <ul>
                                <li><?php echo $row['Education_lwyr']; ?></li>
                            </ul>
                        </div>
                        <div class="education-area ex-wiget">
                            <h2>Winning Cases</h2>
                            <ul>
                                <li><?php echo $row['Winning_cases']; ?></li>
                            </ul>
                        </div>
                        <div class="education-area ex-wiget">
                            <h2>Total Cases</h2>
                            <ul>
                                <li><?php echo $row['Total_Cases']; ?></li>
                            </ul>
                        </div>
                        <div class="language-area ex-wiget">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .attorney-pg-area end -->

    <?php
        include "Footer.php";
    ?>

    <?php
        include "Scripts.php";
    ?>
</body>


<!-- Mir