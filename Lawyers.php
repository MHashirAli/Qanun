<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Canun – Lawyers</title>
    
    <?php
        include "Links.php";
    ?>
</head>

<body>

   

    <?php
        $page = 'Lawyers';
        include "Header.php";
    ?>
    <?php
        include "config.php";
        $mysql = "SELECT * from tbl_lawyer";
        $result = mysqli_query($conn,$mysql);

        $mysqlCase = "SELECT * from tbl_cases";        
        $resultCase = mysqli_query($conn,$mysqlCase);
        // if (isset($_POST['request'])) {
        //     $request = $_POST['request'];
        //     $mysql = "SELECT * from tbl_lawyer where Case_Special='$request'";
        //     $result = mysqli_query($conn,$mysql);

        // }else if(isset($_POST['srch'])){
        //     $search = $_POST['search'];
        //     $mysql = "SELECT * FROM tbl_lawyer where FName_lwyr LIKE '$search%'";
        //     $result = mysqli_query($conn,$mysql);

        // }else {
        //     $mysql = "SELECT * from tbl_lawyer";
        //     $result = mysqli_query($conn,$mysql);
        // }
    ?>

    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2 class='cont'>Our Attorneys</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Attorneys</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- end of wpo-breadcumb-section-->

    <!-- start wpo-Team-section -->
    <section class="wpo-team-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="wpo-section-title">
                        <h2>Meet Our Most Talented &
                            Qualified Attorneys</h2>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-2 ">
                    <div class="wpo-section-title">
                        <form class="form-inline my-2 my-lg-0 d-flex lwyr_srch_form" autocomplete="off">
                            <select class="mr-sm-2 srch_fltr" name="fetchval" id="fetchval">
                                <option value="" disabled="" selected="">Filter <i class="fa fa-filter" aria-hidden="true"></i></option>
                                <option value="">All</option>
                                <?php
                                    while($rowCase = mysqli_fetch_assoc($resultCase)){
                                ?>
                                <option value="<?php echo $rowCase['Case_Name']?>"><?php echo $rowCase['Case_Name']?></option>
                                <?php 
                                    }
                                ?>
                            </select>
                            <input class="form-control mr-sm-2 srch_bar" id="srch_bar" type="search" name="search"  placeholder="Search" aria-label="Search">
                            <button class="theme-btn btn btn-outline-success my-2 my-sm-0 srch_btn" name="srch"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            
            <div class="wpo-team-wrap">

                <div class="row" id="lawyers_fetch">
                    <?php
                        while($row = mysqli_fetch_assoc($result)){
                    ?> 
                        <div class="col col-lg-3 col-md-6 col-12" id="lawyers"> 
                                <div class="wpo-team-item">
                                    <div class="wpo-team-img">
                                        <img src="<?php echo $row['Image_lwyr']?>" alt="">
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
                                        <span><?php echo $row['Case_Special']?></span>
                                    </div>
                                </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>

        </div> <!-- end container -->
    </section>
    <!-- end Team-section -->

    <?php
        include "Footer.php";
    ?>

    <?php
        include "Scripts.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#fetchval").on('change',function(){
                var fltr = $(this).val();
                $.ajax({
                    url:"Lawyers_Fetch.php",
                    type:"POST",
                    data:"filter=" + fltr,
                    success:function(data){
                        $("#lawyers_fetch").html(data);
                    },
                    error:function(error){
                        alert("Error");
                    }
                });
            });
        });
    </script>
</body>
</html>