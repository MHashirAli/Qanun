<?php
    session_start();

    include "config.php";

    if (isset($_POST['submit'])) {
    
        $name = $_POST['name'];
        $desc = $_POST['desc'];

        $sqlquery = "insert into tbl_cases(Case_Name,Case_description) values ('$name','$desc')";

        if ($conn->query($sqlquery)) {
            header('location:Cases.php');
        }else{
            echo "error";
        }

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
    
    <title>Qanun - Dashboard</title>
    
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
			  <h4 class="box-title">Case Add</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

					<form method="post" action="" class="dropzone">
					  <div class="row">
						<div class="col-12">						
							<div class="form-group">
								<h5>Name <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="name" class="form-control" required data-validation-required-message="This field is required"> 
								</div>
							</div>
							<div class="form-group">
								<h5>Description <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="desc" class="form-control" required data-validation-required-message="This field is required"> 
								</div>
							</div>
					  </div>
						<div class="text-xs-right">
							<button type="submit" name="submit" class="btn btn-info">Add</button>
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