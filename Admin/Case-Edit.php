<?php
    session_start();
  
    include "config.php";
    $id = $_GET['id'];
    $mysql = "SELECT * FROM `tbl_cases` where Case_Id = '$id'";
    $result = mysqli_query($conn,$mysql);
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST["submit"])){
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $mysql1 = "UPDATE `tbl_cases` set Case_Name = '$name', Case_description = '$desc' where Case_Id = '$id'";
        $result1 = mysqli_query($conn,$mysql1);
        header("Location:Cases.php");
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
    

    <title>Qanun - Cases</title>
    
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
			  <h4 class="box-title">Case Edit</h4>
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
									<input type="text" name="name" class="form-control" value="<?php echo $row["Case_Name"]?>" required data-validation-required-message="This field is required"> 
								</div>
							</div>
							<div class="form-group">
								<h5>Description <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="desc" class="form-control" value="<?php echo $row["Case_description"]?>" required data-validation-required-message="This field is required"> 
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