<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login - Admin</title>
    <?php
        include 'links.php';
    ?>
</head>
<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-1.jpg)">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Let's Get Started</h2>
								<p class="mb-0">Sign in to continue to Qanun.</p>							
							</div>
							<div class="p-40">
								<form  method="post" >
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" class="form-control ps-15 bg-transparent" name="name" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" class="form-control ps-15 bg-transparent" name="pass" placeholder="Password">
										</div>
									</div>
									  	<div class="row">
											<?php
												include "config.php";
												if(isset($_POST["login"])){
													$name = $_POST["name"];
													$pass = $_POST["pass"];

													$mysql = "SELECT * from `tbl_admin` where A_Name = '$name' AND `A_Password` = '$pass'";
													$result = mysqli_query($conn,$mysql);
													$row = mysqli_fetch_assoc($result);
													if(mysqli_num_rows($result)>0){
														$_SESSION["A_ID"] = $row["A_ID"];
														$_SESSION["A_Name"] = $row["A_Name"];
														header("Location:Dashboard.php");
													}
													else{
														echo "<p class='text-danger'>Login denied</p>";
													}
												}
											?>
											<div class="col-12 text-center">
											<button type="submit" name="login" class="btn btn-danger mt-10">Login</button>
											</div>
											<!-- /.col -->										
									  </div>
								</form>	
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


					

                <?php
                include 'scripts.php';
                    ?>
</body>
</html>