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
        if(empty($_SESSION['A_ID']) || $_SESSION['A_Name'] == ''){
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
                                <h4 class="box-title">Appointment List</h4>
                            </div>
                            
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User</th>
                                                <th>Lawyer</th>
                                                <th>Set Time</th>
                                                <th>Date & Time</th>
                                                <th>Status</th>
                                                <th>Case</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include "config.php";
                                                $mysql = "SELECT Id, User_Id, Lawyer_Id, Timing, app_days, app_time, app_status, U_Name, FName_lwyr, LName_lwyr, Available_Time, Case_Special FROM `tbl_appointment` JOIN `tbl_lawyer` ON Lawyer_Id = Id_lwyr JOIN `tbl_user` ON User_Id = U_ID order by Timing DESC";
                                                $result = mysqli_query($conn,$mysql);
                                                while($row = mysqli_fetch_assoc($result)){
                                                    $a_id = $row["Id"];
                                                    $a_uname = $row["U_Name"];
                                                    $a_lname = $row["FName_lwyr"]." ". $row["LName_lwyr"];
                                                    $a_time = $row["Available_Time"];
                                                    $a_daytime = $row["app_days"]." ".$row["app_time"];
                                                    $a_status = $row["app_status"];
                                                    $a_case = $row["Case_Special"];

                                                    echo    "<tr>".
                                                            "<td>".$a_id."</td>".
                                                            "<td>".$a_uname."</td>".
                                                            "<td>".$a_lname."</td>".
                                                            "<td>".$a_time."</td>".
                                                            "<td>".$a_daytime."</td>".
                                                            "<td>".$a_status."</td>".
                                                            "<td>".$a_case."</td>";
                                            ?>
                                            <td>
                                                <a class="btn btn-info" href="Appointments-Detail.php?id=<?php echo $row['Id']?>">Detail</a>
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