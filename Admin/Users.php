<?php session_start();?>


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

    <div class="content-wrapper">
        <div class="container-full">
		
            <section class="content">
                <div class="row">                
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header">						
                                <h4 class="box-title">Users List</h4>
                            </div>
                            
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>City</th>
                                                <th>Phone no.</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include "config.php";
                                                $mysql = "SELECT * FROM `tbl_user`";
                                                $result = mysqli_query($conn,$mysql);
                                                while($row = mysqli_fetch_assoc($result)){
                                                    echo    "<tr>".
                                                            "<td>". $row["U_ID"]."</td>".
                                                            "<td>".$row["U_Name"]."</td>".
                                                            "<td>".$row["U_Email"]."</td>".
                                                            "<td>".$row["U_City"]."</td>".
                                                            "<td>".$row["U_Number"]."</td>";
                                            ?>
                                            <td>
                                                <a class="btn btn-info" href="User-detail.php?id=<?php echo $row['U_ID']?>">Detail</a>
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

</html>