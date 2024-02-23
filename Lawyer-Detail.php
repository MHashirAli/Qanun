<?php
    session_start();
    
    $lwyrid = $_GET['id'];



    include "config.php";
    if(isset($_POST["a_submit"])){
        if (isset($_SESSION['U_Id'])) {
            $U_id = $_SESSION['U_Id'];
            $time = $_POST['time'];
            $curtime =  date("d-m-y h:i:s");
            $sdays = $_POST['select-days'];
            // $_SESSION['app_Uid'] = $U_id;
            $_SESSION['app_Lid'] = $lwyrid;
            $_SESSION['app_timing'] = $curtime;
            $_SESSION['app_days'] = $sdays;
            $_SESSION['app_time'] = $time;
            // $sessUid = $_SESSION['U_Id'];
            $sessLid = $_SESSION['app_Lid'];
            $sessCurTime = $_SESSION['app_timing'];
            $sessdays = $_SESSION['app_days'];
            $sessTime = $_SESSION['app_time'];


            $imysql = "INSERT into `tbl_appointment` (User_Id,Lawyer_Id ,Timing,app_days,app_time,app_status) values ('$U_id','$lwyrid','$curtime','$sdays','$time','Process')";
            mysqli_query($conn,$imysql);
        }
        else {
            header("location:login.php");
        }
    }

    // if (empty($_SESSION['U_Id'])) {
    //     header('location:Login.php');
    // }
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
		include "config.php";
		
		$mysql = "SELECT * from tbl_lawyer where Id_lwyr = '$lwyrid'";
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
                                                              
                            <ul>
                                <ul>
                                    
                                    <form method="post">  
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
                                    <?php
                                        
                                        
                                
                                    
                                if (isset($_SESSION["U_Id"])) {

                                    $U_id = $_SESSION['U_Id'];
                                    $amysql = "SELECT Id, User_Id, Lawyer_Id, app_status, app_reason, app_time, app_days FROM `tbl_appointment` JOIN `tbl_lawyer` ON Lawyer_Id='$lwyrid' JOIN `tbl_user` ON User_Id='$U_id'";
                                    $aresult = mysqli_query($conn,$amysql);
                                    $arow = mysqli_fetch_assoc($aresult);

                                    $astatus = $arow['app_status'];
                                
                                    if($astatus == 'Process'){
                                ?>                                    
                                    <li>
                                        <h5  class="bg-warning p-2 text-white">Wait! Your Appointment in Process on <br> ( <?php echo $arow["app_time"];?> - <?php echo $arow["app_days"];?> )</h5>
                                    </li>                                    
                                <?php
                                    }else if ($astatus == 'Disagree') {
                                ?>
                                <div>
                                    <h5  class="bg-danger p-2 text-white">Oops! Your Appointment is cancel on <br> ( <?php echo $arow["app_time"];?> - <?php echo $arow["app_days"];?> )</h5>
                                    <p>
                                        <b>Reason:</b>
                                        <?php echo $arow["app_reason"];?>                                        
                                    </p>                                                                    
                                </div>                             
                                <?php
                                    }else if ($astatus == 'Agree') {
                                ?>
                                <div>
                                    <h5 class="bg-success p-2 text-white">Congrats! Your Appointment is Set on <br> ( <?php echo $arow["app_time"];?> - <?php echo $arow["app_days"];?> )</h5>
                                </div>
                                <?php
                                    }else if ($astatus == 'Complete') {
                                ?>
                                <div>
                                    <h5 class="bg-success p-2 text-white">Your Appointment is Completed <br> ( <?php echo $arow["app_time"];?> - <?php echo $arow["app_days"];?> )</h5>
                                    <a href="Lwyr_Review.php?id=<?php echo $row['Id_lwyr']; ?>" class="theme-btn btn btn-info">Review</a>
                                    <!-- <?php
                                        // $rmysql = "SELECT * from tbl_reviews";
                                        // $rresult = mysqli_query($conn,$rmysql);
                                        // $rrow = mysqli_fetch_assoc($rresult);

                                        // if ($rrow['Rev_User_Id'] == $U_id) {
                                        //     echo 'oopsss';
                                        // }else{
                                    ?>
                                        <?php
                                        // }
                                    ?> -->
                                </div>
                                <?php
                                    }else{
                                ?>
                                </form>
                                <?php
                                    }
                                    ?>

<?php
                                }
                                // else {
                                //     $amysql = "SELECT Id, User_Id, Lawyer_Id, app_status, app_reason, app_time, app_days FROM `tbl_appointment` JOIN `tbl_lawyer` ON Lawyer_Id='$lwyrid'";
                                //     $aresult = mysqli_query($conn,$amysql);
                                //     $arow = mysqli_fetch_assoc($aresult);
                                ?>
                                <li>
                                    <button  class="theme-btn btn-success btn" name="a_submit" type="submit">Set Appointment</button>
                                </li>

                                <!-- <li>
                                    <a href="Login.php" class="theme-btn btn-success btn">Set Appointment</a>
                                </li> -->
                                <!-- <?php
                                // }
                                ?> -->
                                </ul>
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