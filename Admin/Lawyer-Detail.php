<?php session_start();?>


<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://lawfirm-admin-template.multipurposethemes.com/images/favicon.ico">

    <title>Law Firm - Dashboard</title>
    
	<?php
		include "Links.php";
	?>
     
</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

	<?php
		include "Header.php";
	?> 


	<?php
		include "../config.php";
		$id = $_GET['id'];
		$mysql = "SELECT * from tbl_lawyer where Id_lwyr = '$id'";
		$result = mysqli_query($conn,$mysql);
		$row = mysqli_fetch_assoc($result);
	?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Lawyer</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Lawyer Details</li>
							</ol>							
						</nav>
					</div>
				</div>
				
			</div>
		</div>  

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-8 col-12">
					<div class="box">
						<div class="box-body text-end min-h-150" style="background-image:url(../images/gallery/landscape14.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">
							<!-- <i class="fa fa-legal"></i> -->
							<div class="bg-success rounded10 p-15 fs-18 d-inline"><?php echo $row['Case_Special']; ?></div>	
						</div>						
						<div class="box-body wed-up position-relative">
							<div class="d-md-flex align-items-end">
								<img src="../<?php echo $row['Image_lwyr']?>" class="bg-success-light rounded10 me-20 w-100" alt="" />
								<div>
									<h4><?php echo $row['FName_lwyr']." ". $row['LName_lwyr'] ?></h4>
								</div>
							</div>
						</div>						
						<div class="box-body">
							<h4>About</h4>
							<p><?php echo $row['About_lwyr']; ?></p>
						</div>
						<div class="box-body">
							<h4>Email Address</h4>
							<p><?php echo $row['Email_lwyr']; ?></p>
						</div>
						<div class="box-body">
							<h4>Phone Number</h4>
							<p><?php echo $row['Number_lwyr']; ?></p>
						</div>
						<div class="box-body">
							<h4>Address</h4>
							<p><?php echo $row['Address_lwyr']; ?></p>
						</div>
						<div class="box-body">
							<h4>Experience</h4>
							<p><?php echo $row['Experience_lwyr']; ?></p>
						</div>
						<div class="box-body">
							<h4>Education</h4>
							<p><?php echo $row['Education_lwyr']; ?></p>
						</div>
						<div class="box-body">
							<h4>Winnin Cases</h4>
							<p><?php echo $row['Winning_cases']; ?></p>
						</div>
						<div class="box-body">
							<h4>Total cases</h4>
							<p><?php echo $row['Total_Cases']; ?></p>
						</div>
						<div class="box-body">
							<h4>Available Days</h4>
							<p><?php echo $row['Available_Days']; ?></p>
						</div>
						<div class="box-body">
							<h4>Available Timing</h4>
							<p><?php echo $row['Available_Time']; ?></p>
						</div>
					</div>

					<?php
						include "config.php";
						$revmysql = "SELECT U_ID, Id_lwyr, Rev_User_Id, Rev_Lwyr_Id ,Rev_Message, Rev_Rating, Rev_Time, U_Name FROM `tbl_reviews` JOIN `tbl_lawyer` ON Rev_Lwyr_Id = Id_lwyr JOIN `tbl_user` ON Rev_User_Id = U_ID WHERE Rev_Lwyr_Id='$id' order by Rev_Time DESC";
						$revresult = mysqli_query($conn,$revmysql);                            
					?>
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Reviews</h4>
						</div>
						<div class="box-body">							
							<?php                                    
								while($revrow = mysqli_fetch_assoc($revresult)){
									$revRat = $revrow['Rev_Rating'];                                    
									$revName = $revrow['U_Name'];
									$revTime = $revrow['Rev_Time'];
									$revMsg = $revrow['Rev_Message'];
							?>
							<div class="media d-lg-flex d-block text-lg-start text-center">
								<img class="me-3 img-fluid rounded bg-primary-light w-100" src="images/Login-User.png" alt="">
								<div class="media-body my-10 my-lg-0">
									<h4 class="mt-0 mb-2"><?php echo $revRat;?></h4>
									<h5 class="mt-0 mb-2 text-capitalize"><?php echo $revName;?></h5>
									<h6 class="mb-4 text-primary"><?php echo $revTime?></h6>
									<div class="d-flex justify-content-center justify-content-lg-start">
										<span class="text-dark fs-16"><?php echo $revMsg?></span>
										<!-- <a href="javascript:void(0);" class="btn btn-sm btn-primary-light me-4"></a> -->
									</div>
								</div>
								<div id="chart" class="me-3"></div>
								<!-- <div class="media-footer align-self-center">
									<div class="up-sign text-success">
										<i class="fa fa-caret-up fs-38"></i>
										<h3 class="text-success">10%</h3>
									</div>
								</div> -->
							</div>
							<?php
								}
							?>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">				
					<!-- <div class="box">
						<div class="box-header">							
							<div class="d-flex justify-content-between align-items-center">
								<h4 class="mb-0">Today Mettings</h4>
								<a href="#" class="">All Cases <i class="ms-10 fa fa-angle-right"></i></a>
							</div>
						</div>
						<div class="box-body p-15">	
							<div class="mb-10 d-flex justify-content-between align-items-center">
								<div class="fw-600 min-w-120">
									10:30am
								</div>
								<div class="w-p100 p-10 rounded10 justify-content-between align-items-center d-flex bg-lightest">
									<div class="d-flex justify-content-between align-items-center">
										<img src="../images/avatar/1.jpg" class="me-10 avatar rounded-circle" alt="">
										<div>
											<h6 class="mb-0">Sarah Hostemn</h6>
											<p class="mb-0 fs-12 text-mute">Personal Injury</p>
										</div>
									</div>
									<div class="dropdown">
										<a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item" href="#"><i class="ti-import"></i> Details</a>
										  <a class="dropdown-item" href="#"><i class="ti-export"></i> Reports</a>
										</div>
									</div>
								</div>								
							</div>
							<div class="mb-10 d-flex justify-content-between align-items-center">
								<div class="fw-600 min-w-120">
									11:00am
								</div>
								<div class="w-p100 p-10 rounded10 justify-content-between align-items-center d-flex bg-lightest">
									<div class="d-flex justify-content-between align-items-center">
										<img src="../images/avatar/2.jpg" class="me-10 avatar rounded-circle" alt="">
										<div>
											<h6 class="mb-0">Dakota Smith</h6>
											<p class="mb-0 fs-12 text-mute">Domestic Violence</p>
										</div>
									</div>
									<div class="dropdown">
										<a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item" href="#"><i class="ti-import"></i> Details</a>
										  <a class="dropdown-item" href="#"><i class="ti-export"></i> Reports</a>
										</div>
									</div>
								</div>								
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="fw-600 min-w-120">
									11:30am
								</div>
								<div class="w-p100 p-10 rounded10 justify-content-between align-items-center d-flex bg-lightest">
									<div class="d-flex justify-content-between align-items-center">
										<img src="../images/avatar/3.jpg" class="me-10 avatar rounded-circle" alt="">
										<div>
											<h6 class="mb-0">John Lane</h6>
											<p class="mb-0 fs-12 text-mute">Driving Crimes</p>
										</div>
									</div>
									<div class="dropdown">
										<a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item" href="#"><i class="ti-import"></i> Details</a>
										  <a class="dropdown-item" href="#"><i class="ti-export"></i> Reports</a>
										</div>
									</div>
								</div>								
							</div>
						</div>
					</div> -->

					<?php
						include "config.php";
						$lmysql = "SELECT Id, User_Id, Lawyer_Id, Timing, app_days, app_time, app_reason, app_status, U_Name, U_Email, FName_lwyr, LName_lwyr, Available_Time, Case_Special FROM `tbl_appointment` JOIN `tbl_lawyer` ON Lawyer_Id = Id_lwyr JOIN `tbl_user` ON User_Id = U_ID WHERE Lawyer_Id='$id'order by Timing DESC";
						$lresult = mysqli_query($conn,$lmysql);                            
					?>
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Appointments</h4>
						</div>
						<div class="box-body">
							<div id="paginator1"></div>
						</div>
						<div class="box-body">
							<div class="inner-user-div4">
								<?php                                    
									while($lrow = mysqli_fetch_assoc($lresult)){
									$status = $lrow['app_status'];
									
									$appUId = $lrow['User_Id'];
									$appReason = $lrow['app_reason'];
								?>
								<div>
									<div class="d-flex align-items-center mb-10">
										<div class="me-15">
											<img src="images/Login-User.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
										</div>
										<div class="d-flex flex-column flex-grow-1 fw-500">
											<p class="hover-primary text-fade mb-1 fs-14"><?php echo $lrow["U_Name"];?></p>
											<?php
												if ($lrow["app_status"] == 'Disagree') {
											?>
												<span class="text-danger fs-16"><?php echo $lrow["app_status"];?></span>
												<span class="text-dark fs-16"><?php echo $lrow["app_reason"];?></span>
											<?php
												}else if ($lrow["app_status"] == 'Agree') {
											?>
												<span class="text-success fs-16"><?php echo $lrow["app_status"];?></span>
											<?php
												}else if ($lrow["app_status"] == 'Complete') {
											?>
												<span class="text-white bg-success p-2 fs-16"><?php echo $lrow["app_status"];?></span>
											<?php
												}else if ($lrow["app_status"] == 'Process') {
											?>
												<span class="text-warning fs-16"><?php echo $lrow["app_status"];?></span>
											<?php
												}
											?>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
										<div>
											<p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> <?php echo $lrow["Timing"];?></p>
										</div>										
									</div>
								</div>
								<?php
									}
								?>
							</div>
						</div>
					</div>
				</div>								
			</div>
		</section>
		<!-- /.content -->
	  </div>
    </div>
    <!-- /.content-wrapper -->

    ?php
		include "Footer.php";
	?>
	<?php
		include "Scripts.php";
	?>
	
</body>

<!-- Mirrored from lawfirm-admin-template.multipurposethemes.com/main-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jun 2022 09:20:10 GMT -->
</html>