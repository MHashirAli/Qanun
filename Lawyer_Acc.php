<?php
    session_start();
    include "config.php";    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Canun – Lawyers-Detail</title>
    
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
        if ($_GET['id'] == null) {
            header('location:Login.php');
        }
        $lwyrid = $_GET['id'];
        // $L_Id = $_SESSION["lwyrid"];
		


		$mysql = "SELECT * from tbl_lawyer where Id_lwyr='$lwyrid'";
		$result = mysqli_query($conn,$mysql);
		$row = mysqli_fetch_assoc($result);
        $days = explode(",",$row['Available_Days']);

        
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

                                <form action="" method="post">
                                    <ul>
                                        <li>
                                            Available Days: 
                                        	<select name="select-days">

                                            <?php
                                                for ($i=0; $i < count($days); $i++) { 
                                            ?>
                                                <option name="" id="" value="<?php echo $days[$i]; ?>">
                                                    <?php echo $days[$i]; ?>
                                                </option>
                                            <?php
                                                }
                                            ?>
			                                </select>
                                        </li>
                                        <li>
                                            Available Time: 
                                            <input type="time" name="time" id="" value="<?php echo $row['Available_Time']; ?>">                                            
                                        </li>
                                    </ul>
                                    <ul>
                                        <?php
                                            if(isset($lwyrid)){
                                        ?>
                                        <li>
                                            <a href="Lawyer_Acc_Edit.php?id=<?php echo $row['Id_lwyr']?>" class="theme-btn btn btn-primary my-5">Edit Profile</a>
                                        </li>                                       
                                        <?php
                                            }
                                        ?>
                                    </ul>                                    
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="exprience-area">
                <div class="row">
                    <div class="col-lg-8">                        
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

                        <?php
                            include "config.php";
                            $lmysql = "SELECT Id, User_Id, Lawyer_Id, Timing, app_days, app_time, app_reason, app_status, U_Name, U_Email, FName_lwyr, LName_lwyr, Available_Time, Case_Special FROM `tbl_appointment` JOIN `tbl_lawyer` ON Lawyer_Id = Id_lwyr JOIN `tbl_user` ON User_Id = U_ID WHERE Lawyer_Id='$lwyrid'order by Timing DESC";
                            $lresult = mysqli_query($conn,$lmysql);                            
                        ?>

                        <div class="education-area ex-wiget">
                            <h2>Appointments</h2>
                            <ul>
                                <?php
                                    
                                    while($lrow = mysqli_fetch_assoc($lresult)){
                                    $status = $lrow['app_status'];
                                    
                                    $appUId = $lrow['User_Id'];
                                    $appReason = $lrow['app_reason'];
                                    
                                    
                                ?>
                                <li class="d-flex">
                                    <div>
                                        <img src="Admin/images/Login-User.png" alt="" width="50px">
                                    </div>
                                    <div class="px-3">
                                        <p class="mb-0 text-uppercase"><b><?php echo $lrow["U_Name"];?></b></p>
                                        <p><?php echo $lrow["U_Email"];?></p>
                                    
                                
                                <?php
                                    if ($status == 'Disagree') {
                                ?>
                                <div>
                                    <h5  class="bg-danger py-2 px-3 text-white">Appointment is cancel on  <?php echo $lrow["app_time"];?> - <?php echo $lrow["app_days"];?> </h5>
                                    <p>
                                        <b>Reason:</b>
                                        <?php echo $lrow["app_reason"];?>                                        
                                    </p>
                                </div>                             
                                <?php
                                    }else if ($status == 'Agree') {
                                ?>
                                <div>
                                    <h5 class="bg-success py-2 px-3 text-white">Appointment is Set on  <?php echo $lrow["app_time"];?> - <?php echo $lrow["app_days"];?> </h5>
                                    <a href="App_Complete.php?id=<?php echo $lrow['Id'];?>" class="btn btn-success">Completed</a>
                                    <a href="App_disagree.php?id=<?php echo $lrow['Id'];?>" class="btn btn-danger">Cancel Appointment</a>
                                </div>                                
                                <?php
                                    }else if ($status == 'Complete') {
                                ?>
                                <div>
                                    <h5 class="bg-success py-2 px-3 text-white">Appointment has been Completed. <?php echo $lrow["app_time"];?> - <?php echo $lrow["app_days"];?> </h5>
                                </div>                                
                                <?php
                                    }else{
                                ?>
                                <div>
                                    <h5 class="bg-warning py-2 px-3">Appointment in process  <?php echo $lrow["app_time"];?> - <?php echo $lrow["app_days"];?> </h5>
                                </div>  
                                <div>
                                    <a href="App_agree.php?id=<?php echo $lrow['Id']?>" class="btn btn-success">Agree</a>
                                    <a href="App_disagree.php?id=<?php echo $lrow['Id']?>" class="btn btn-danger">Disagree</a>
                                </div>
                                <?php
                                    }
                                ?>
                                    </div>
                                </li>
                                <hr>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Reviews -->
                    <div class="col-lg-4">
                        <?php
                            include "config.php";
                            $revmysql = "SELECT U_ID, Id_lwyr, Rev_User_Id, Rev_Lwyr_Id ,Rev_Message, Rev_Rating, Rev_Time, U_Name FROM `tbl_reviews` JOIN `tbl_lawyer` ON Rev_Lwyr_Id = Id_lwyr JOIN `tbl_user` ON Rev_User_Id = U_ID WHERE Rev_Lwyr_Id='$lwyrid' order by Rev_Time DESC";
                            $revresult = mysqli_query($conn,$revmysql);                            
                        ?>

                        <div class="education-area ex-wiget">
                            <h2>Reviews</h2>
                            <ul>
                                <?php                                    
                                    while($revrow = mysqli_fetch_assoc($revresult)){
                                        $revRat = $revrow['Rev_Rating'];                                    
                                        $revName = $revrow['U_Name'];
                                        $revTime = $revrow['Rev_Time'];
                                        $revMsg = $revrow['Rev_Message'];
                                ?>
                                <li class="d-flex">
                                    <div>
                                        <img src="Admin/images/Login-User.png" alt="" width="50px">
                                    </div>
                                    <div class="px-3">
                                        <p class="mb-0 text-uppercase"><b><?php echo $revRat;?></b></p>
                                        <p class="text-capitalize"><?php echo $revName;?></p>
                                        <small><?php echo $revTime?></small>
                                        <p><?php echo $revMsg?></p>
                                    </div>
                                </li>
                                <hr>
                                <?php
                                    }
                                ?>
                            </ul>
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