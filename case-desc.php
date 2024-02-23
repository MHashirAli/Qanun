<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wpocean.com/html/tf/canun-live/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jun 2022 09:17:07 GMT -->
<head>
    <title> Canun – Index</title>
    
    <?php
        include "Links.php";
    ?>
</head>

<body>



    <?php
        $page = 'Cases';
        include "Header.php";
    ?>

<?php
        include "config.php";
        $id = $_GET['id'];
        $mysql = "SELECT * from tbl_cases where Case_Id='$id'";
        $result = mysqli_query($conn,$mysql);
    ?>
<!-- start of breadcumb-section -->
<div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Case Stadies Single</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><span>Case Single</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->

        <!-- start wpo-case-single-section -->
        <section class="service-single-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-12">
                        <div class="service-content">
                            <div class="img-holder">
                                <img src="assets/images/case-single.jpg" alt="">
                            </div>
                            <h2><?php echo $row['Case_Name']?></h2>
                            <p><?php echo $row['Case_description']?></p>
                            <div class="wpo-case-single-sub-img">
                                <ul>
                                    <li><img src="assets/images/service-single/2.jpg" alt=""></li>
                                    <li><img src="assets/images/service-single/3.jpg" alt=""></li>
                                </ul>
                                
                            </div>
                            
                            <div class="wpo-benefits-section">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="wpo-benefits-item">
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                  <h3 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Market research on our global panel with support from our experts.
                                                    </button>
                                                  </h3>
                                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum exercitationem pariatur iure nemo esse repellendus est quo recusandae. Delectus, maxime.</p>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="accordion-item">
                                                  <h3 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                      Planning can help alleviate workplace stress and increase productivity.
                                                    </button>
                                                  </h3>
                                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum exercitationem pariatur iure nemo esse repellendus est quo recusandae. Delectus, maxime.</p>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="accordion-item">
                                                  <h3 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                      Those who experiment the most, are able to innovate the best.
                                                    </button>
                                                  </h3>
                                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum exercitationem pariatur iure nemo esse repellendus est quo recusandae. Delectus, maxime.</p>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="accordion-item">
                                                  <h3 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Understand Your Problem, You must understand the issue.
                                                    </button>
                                                  </h3>
                                                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum exercitationem pariatur iure nemo esse repellendus est quo recusandae. Delectus, maxime.</p>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagi">
                                <ul>
                                    <li><a href="#">Previous</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-12">
                        <div class="service-sidebar wpo-single-sidebar">
                            <div class="widget case-info-widget">
                                <h3>Case Information</h3>
                                <ul>
                                    <li><span>Case Title: </span> Family Issue</li>
                                    <li><span>Client: </span> Robert Symon</li>
                                    <li><span>Date: </span> 20 January 2021</li>
                                    <li><span>Service Value:</span> $5500</li>
                                    <li><span>Category: </span>Family Law </li>
                                    <li><span>Status : </span> Completed </li>
                                    <li><span>live link : </span> <a href="#">http://demo.com</a> </li>
                                </ul>
                            </div>
                            <div class="wpo-newsletter-widget widget">
                                <h2>Newsletter</h2>
                                <p>Join 20,000 Sabscribers!</p>
                                <form class="form">
                                    <input type="text" placeholder="Email Address">
                                    <button type="submit">Sign Up</button>
                                </form>
                                <span>By signing up you agree to our <a href="#">Privecy Policy</a></span>
                           </div>
                            <div class="wpo-contact-widget widget">
                                <h2>How We Can <br> Help You!</h2>
                                <p>labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                <a href="contact.html">Contact Us</a>
                           </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-case-single-section -->

        <?php
        include "Footer.php";
    ?>

    <?php
        include "Scripts.php";
    ?>

</body>

</html>