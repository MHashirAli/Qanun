
    <footer class="wpo-site-footer">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <img src="QANUN-Logo.png" alt="blog">
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                
                            </div>
                        </div>
                        <?php
                            include "config.php";
                            $mysql = "SELECT * from tbl_cases";
                            $result = mysqli_query($conn,$mysql);
                        ?>
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Our Services </h3>
                                </div>
                                <ul>
                                    <?php
                                        while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                        <li><a href="case-desc.php?id=<?php echo $row['Case_Id']?>"><?php echo $row['Case_Name']?></a></li>
                                        <?php
                                        }  
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget tag-widget">
                                <div class="widget-title">
                                    <h3>Browse by Tag </h3>
                                </div>
                                <ul>
                                    <li><a href="practice-single.html">Lawyer</a></li>
                                    <li><a href="practice-single.html">Business</a></li>
                                    <li><a href="practice-single.html">Injury</a></li>
                                    <li><a href="practice-single.html">Real Estate</a></li>
                                    <li><a href="practice-single.html">Medical</a></li>
                                    <li><a href="practice-single.html">Criminal</a></li>
                                    <li><a href="practice-single.html">Politics</a></li>
                                    <li><a href="practice-single.html">Law</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col col-lg-2 col-md-6 col-sm-12 col-12">
                            <div class="widget social-widget">
                                <div class="widget-title">
                                    <h3>Social Media</h3>
                                </div>
                                <ul>
                                    <li><a href="#"><i><img src="assets/images/ft-icon/1.png" alt=""></i> Facebook</a></li>
                                    <li><a href="#"><i><img src="assets/images/ft-icon/2.png" alt=""></i> Twitter</a></li>
                                    <li><a href="#"><i><img src="assets/images/ft-icon/3.png" alt=""></i> Instagram</a></li>
                                    <li><a href="#"><i><img src="assets/images/ft-icon/4.png" alt=""></i> Youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <p class="copyright"> Copyright &copy; 2021 Canun by <a href="index.html">wpOceans</a>. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
    </footer>

        
</div>