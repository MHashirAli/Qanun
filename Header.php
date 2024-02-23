<?php
    include "config.php";
    $mysql = "SELECT * from tbl_lawyer";
    $result = mysqli_query($conn,$mysql);

    $mysqlCase = "SELECT * from tbl_cases";        
    $resultCase = mysqli_query($conn,$mysqlCase);
?>


<main id="modal-screen">
    <div class="modal-container">
    <section class="modal-box">
        <button id="modal-close">X</button>
        <h2 class="modal-heading">Appointment</h2>
        <section class="modal-form-sec">            
            <!-- Left Side Section -->
            <section class="form-left-sec">
                <!-- Cases Filter -->
                <div class="form-case-filter">
                    <select  name="" id="">
                        <i class="fa fa-filter" aria-hidden="true"></i>
                        <option value="" disabled="" selected="">Filter Cases</option>
                        <?php
                            while($rowCase = mysqli_fetch_assoc($resultCase)){
                        ?>
                        <option value="<?php echo $rowCase['Case_Name']?>"><?php echo $rowCase['Case_Name']?></option>
                        <?php 
                            }
                        ?>
                    </select>
                </div>

                <section>
                    <span id="left-fltr-side"><button><i class="fa fa-chevron-left" aria-hidden="true"></i></button></span>
                    <span id="right-fltr-side"><button><i class="fa fa-chevron-right" aria-hidden="true"></i></button></span>
                    <!-- Filter Section -->
                    <section class="d-t-fltr-sec">
                    
                        <!-- Cases Days -->
                        <div class="form-days-filter">
                            <h2>Filter Days</h2>
                            <div class="calender-box">
                                <div class="days">
                                    <span>M</span>
                                    <span>T</span>
                                    <span>W</span>
                                    <span>T</span>
                                    <span>F</span>
                                    <span>S</span>
                                    <span>S</span>
                                </div>
                                <div class="dates">
        
                                </div>
                            </div>
                        </div>
                        <!-- Cases Timing -->
                        <div class="form-time-filter">
                            <h2>Filter Timings</h2>
                            <div class="timings-box">
                                <div class="time-cell">
                                    <span>1:00pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>2:30pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>7:00pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>10:00am</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>8:00am</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>12:00pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>2:00pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>6:30pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>11:00pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>9:30am</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>6:00pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>5:15pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Lawyer Section -->
                    <section class="d-t-lwyr-sec">
                    
                        <!-- Cases Days -->
                        <div class="form-days-filter">
                            <h2>Available Dates</h2>
                            <div class="calender-box">
                                <div class="days">
                                    <span>M</span>
                                    <span>T</span>
                                    <span>W</span>
                                    <span>T</span>
                                    <span>F</span>
                                    <span>S</span>
                                    <span>S</span>
                                </div>
                                <div class="dates">
        
                                </div>
                            </div>
                        </div>
                        <!-- Cases Timing -->
                        <div class="form-time-filter">
                            <h2>Available Timings</h2>
                            <div class="timings-box">
                                <div class="time-cell">
                                    <span>1:00pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>2:30pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>7:00pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>10:00am</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>8:00am</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>12:00pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>2:00pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>6:30pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>11:00pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>9:30am</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>6:00pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                                <div class="time-cell">
                                    <span>5:15pm</span>
                                    <input type="radio" class="radio-btn">
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </section>

            <!-- Right Side Section -->
            <section class="form-right-sec">
                <!-- Lawyers Search -->
                <div class="form-search-bar">
                    <div class="search-input-div">
                        <input type="text" placeholder="Search Lawyers">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div>                    
                
                <!-- Lawyers Section -->
                <section class="form-lawyers-sec">
                    <section class="form-lawyers-inner-sec">
                        <?php
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <div class="form-lawyer-card">
                            <input type="radio" name="" id="" class="lawyer-radio">
                            <div class="inner-div">
                                <div class="lawyer-img-div">
                                    <img src="<?php echo $row['Image_lwyr']?>" alt="">
                                </div>
                                <div class="lawyer-content-div">
                                    <div class="lawyer-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <a href="Lawyer-Detail.php?id=<?php echo $row['Id_lwyr']?>" class="lawyer-name"><?php echo $row['FName_lwyr']." ". $row['LName_lwyr']; ?></a>
                                    <p class="lawyer-case"><?php echo $row['Case_Special']?></p>
                                    <p class="lawyer-fees">$200</p>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </section>
                </section>

                <!-- Book Appointment -->
                <div class="form-button-sec">
                    <button class="theme-btn app-button">Book Appointment</button>
                </div>
            </section>
        </section>
    </section>
    </div>


    <main id="modal-cnfrm-app">
        <div class="modal-cnfrm-container">
            <section class="modal-cnfrm-box">
                <div>
                    <h2 class="cnfrm-heading">Appointment Confirmation</h2>
                    <div>
                        <div>
                            <img src="images/Login-User.png" alt="">
                        </div>
                        <div>
                            <div>
                                <p>Lawyer Name: <span>Hashir</span></p>
                                <p>Case: <span>Family Law</span></p>
                                <p>Date: <span>13-11-2022</span></p>
                                <p>Time: <span>12:00</span></p>
                            </div>
                            <div>
                                <P>Lawyer Fees: <span>$100</span></P>
                                <P>Charges: <span>5$</span></P>
                                <P>Total: <span>105$</span></P>
                            </div>
                            <div>
                                <button>Book</button>
                                <button>Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</main>



<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- start preloader -->
    <div class="preloader">
        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <img src="assets/images/preloader.png" alt="">
            </div>
        </div>
    </div>
    <!-- end preloader -->

    <!-- Start header -->
    <header id="header">
    <?php
        include "config.php";
        $mysql = "SELECT * from tbl_cases";        
        $result = mysqli_query($conn,$mysql);
    ?>

        <div class="wpo-site-header wpo-header-style-2">
            <nav class="navigation navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                            <div class="mobail-menu">
                                <button type="button" class="navbar-toggler open-btn">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar first-angle"></span>
                                    <span class="icon-bar middle-angle"></span>
                                    <span class="icon-bar last-angle"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-6">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="index.php"><img src="QANUN-Logo.png"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-1 col-1">
                            <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                <button class="menu-close"><i class="ti-close"></i></button>
                                <ul class="nav navbar-nav mb-2 mb-lg-0">
                                    <li class="menu-item-has-children">
                                        <a class="<?php if ($page == 'Home'){echo 'active';}?>" href="index.php">Home</a>
                                    </li>
                                    <li><a class="<?php if ($page == 'About'){echo 'active';}?>" href="about.php">About</a></li>
                                    <li class="menu-item-has-children">
                                        <a class="<?php if ($page == 'Lawyers'){echo 'active';}?>" href="Lawyers.php">Lawyers</a>

                                        <?php 
                                            if (isset($_SESSION["L_Id"])) {
                                        ?>
                                            <ul class="sub-menu">
                                                <li><a href="Lawyer_Acc.php?id=<?php echo $_SESSION["L_Id"];?>">My Account</a></li>
                                            </ul>
                                        <?php
                                            }
                                        ?>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a class="<?php if ($page == 'Cases'){echo 'active';}?>" href="#">Cases</a>
                                        <ul class="sub-menu">
                                            <?php
                                                while($row = mysqli_fetch_assoc($result)){
                                            ?> 
                                                <li><a href="case-desc.php?id=<?php echo $row['Case_Id']?>"><?php echo $row['Case_Name']?></a></li>
                                            <?php 
                                                }
                                            ?>
                                        </ul>
                                    </li>
                                    <li><a class="<?php if ($page == 'Contact'){echo 'active';}?>" href="contact.php">Contact</a></li>
                                    <div class="my-auto">
                                        <button class="theme-btn" id="btn-modal">Book Appointment</button>
                                    </div>
                                </ul>

                            </div><!-- end of nav-collapse -->
                        </div>
                        <div class="col-lg-3 col-md-2 col-2">
                            <div class="header-right">
                                <?php 
                                    if(isset($_SESSION['U_Id']) || isset($_SESSION['L_Id'])){
                                ?>
                                    <div class="close-form">
                                        <a class="theme-btn" href="logout.php">Logout</a>
                                    </div>
                                <?php
                                    }
                                    else{
                                ?>
                                    <div class="close-form">
                                        <a class="theme-btn" href="Login.php">Login</a>
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div><!-- end of container -->
            </nav>
        </div>
    </header>
    <!-- end of header -->