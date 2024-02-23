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
        $mysql = "SELECT * from tbl_lawyer";
        $result = mysqli_query($conn,$mysql);
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->	  
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Attorneys</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Attorneys</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div>
                    <a href="Lawyer-Add.php">
                    <button class="btn btn-default">Add Attorneys</button>
                    </a>
                </div>
                
                <div class="row">
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                ?>                    
                    <div class="col-12 col-lg-4">
                        <div class="box ribbon-box">
                        <div class="box-header no-border p-0">				
                            <a href="Lawyer-Detail.php?id=<?php echo $row['Id_lwyr']?>">
                                <img class="img-fluid" src="../<?php echo $row['Image_lwyr']?>" alt="">
                            </a>
                        </div>
                        <div class="box-body">
                                <div class="user-contact list-inline text-center">
                                    <a href="#" class="btn btn-circle mb-5 btn-facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn btn-circle mb-5 btn-twitter"><i class="fa fa-twitter"></i></a>		
                                    <a href="#" class="btn btn-circle mb-5 btn-instagram"><i class="fa fa-instagram"></i></a>
                                </div>
                            <div class="text-center">
                                <h3 class="my-10">
                                    <a href="Lawyer-Detail.php?id=<?php echo $row['Id_lwyr']?>"><?php echo $row['FName_lwyr']." ". $row['LName_lwyr']; ?></a>
                                </h3>
                                <h6 class="user-info mt-0 mb-10 text-fade"><?php echo $row['Case_Special']?></h6>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                    
                </div>

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