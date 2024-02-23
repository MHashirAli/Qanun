<?php
	session_start();
	include "config.php";	
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
	
		if(empty($_SESSION['A_ID']) || $_SESSION['A_Name'] == ''){
			header("Location:login.php");
		}
	
	?>

	<?php
		include "Header.php";
	?>

	<div class="content-wrapper">
		<div class="container-full">		
				<!-- Main content -->
			<section class="content">
				<?php
					if(isset($_POST['srch'])){
						$search = $_POST['search'];
						$mysql = "SELECT * FROM tbl_lawyer where FName_lwyr LIKE '$search%'";
						$result = mysqli_query($conn,$mysql);
						while($row = mysqli_fetch_assoc($result)){
					
                ?> 
                    <div class="col col-lg-3 col-md-6 col-12"> 
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <img src="../<?php echo $row['Image_lwyr']?>" alt="">
                                    <div class="social">
                                        <ul>
                                            <li class="switch"><i class="ti-plus"></i></li>
                                            <li class="on"><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li class="on"><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li class="on"><a href="#"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h2>
                                        <a href="Lawyer-Detail.php?id=<?php echo $row['Id_lwyr']?>"><?php echo $row['FName_lwyr']." ". $row['LName_lwyr']; ?></a>
                                    </h2>
                                    <span>Family Lawyer</span>
                                </div>
                            </div>
                    </div>
                <?php
						}
					}else{
						
					}
                ?>
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