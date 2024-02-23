<?php

session_start();

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

<?php

if(empty($_SESSION['A_Id']) || $_SESSION['A_Name'] == ''){
    header("Location:login.php");
}

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">

		<section class="content">
		  	<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-header d-flex justify-content-between">						
							<h4 class="box-title">Admin List</h4>
							
							<a href="AdminAdd.php">
								<button class="btn btn-default">Add Admin</button>
							</a>
						</div>
						
						<div class="box-body">
							<div class="table-responsive">
								<table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
									<thead>
										<tr>
											<th>Id</th>
											<th>Name</th>
											<th>Email</th>
											<th>Number</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
											include "config.php";
											$mysql = "SELECT * FROM `tbl_admin`";
											$result = mysqli_query($conn,$mysql);
											while($row = mysqli_fetch_assoc($result)){
												echo 	"<tr>
												<td>". $row["A_ID"].
												"</td><td>".$row["A_Name"].
												"</td><td>".$row["A_Email"].
												"</td><td>".$row["A_Number"].
												"</td>";
										?>
										<td>
											<a class="btn btn-success" href="AdminEdit.php?id=<?php echo $row['A_ID']?>">Edit</a>
											<a class="btn btn-danger" href="AdminDelete.php?id=<?php echo $row['A_ID']?>">Delete</a>
											<a class="btn btn-info" href="Admin-Detail.php?id=<?php echo $row['A_ID']?>">Detail</a>
										</td>
										</tr>
										<?php
											}
										?>
									</tbody>
								</table>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	  
	  </div>
  </div>
	
	
	<?php
		include "Footer.php";
	?>
	<?php
		include "Scripts.php";
	?>
	
</body>

<!-- Mirrored from lawfirm-admin-template.multipurposethemes.com/main-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jun 2022 09:20:10 GMT -->
</html>