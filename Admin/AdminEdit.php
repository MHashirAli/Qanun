<?php
	session_start();

	include "config.php";
	$id = $_GET['id'];
	$mysql = "SELECT * FROM `tbl_admin` where A_ID = '$id'";
	$result = mysqli_query($conn,$mysql);
	$row = mysqli_fetch_assoc($result);

	if(isset($_POST["submit"])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$mysql1 = "UPDATE `tbl_admin` set A_Name = '$name', A_Email = '$email', `A_Number` = '$number' where A_ID = '$id'";
		$result1 = mysqli_query($conn,$mysql1);
		header("Location:AdminList.php");
	}
?>
  
 
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
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
	    <div class="container-full">
    
		    <!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Admin Edit</h4>
			</div>

			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" class="dropzone">
					  <div class="row">
						<div class="col-12">						
							<div class="form-group">
								<h5>Name <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="name" class="form-control" value="<?php echo $row["A_Name"]?>" required data-validation-required-message="This field is required"> 
								</div>
							</div>
							<div class="form-group">
								<h5>Email <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="email" name="email" class="form-control" value="<?php echo $row["A_Email"]?>" required data-validation-required-message="This field is required"> 
								</div>
							</div>
                            <div class="form-group">
								<h5>Number<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="number" name="number" class="form-control" value="<?php echo $row["A_Number"]?>" required data-validation-required-message="This field is required"> 
								</div>
							</div>
					  </div>
						<div class="text-xs-right">
							<button type="submit" name="submit" class="btn btn-info">Update</button>
						</div>
					</form>
				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	    </div>
    </div>
    <!-- /.content-wrapper -->

    <?php
		include "Footer.php";
	?>
	<?php
		include "Scripts.php";
	?>
	
</body>

<!-- Mirrored from lawfirm-admin-template.multipurposethemes.com/main-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jun 2022 09:20:10 GMT -->
</html>