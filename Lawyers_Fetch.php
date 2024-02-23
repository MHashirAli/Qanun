<?php
    include "config.php";
    if (isset($_POST['filter'])) {
        $filter = $_POST['filter'];
        $mysql = "SELECT * from tbl_lawyer where Case_Special='$filter'";
        $result = mysqli_query($conn,$mysql);

    }else if(isset($_POST['search'])){
        $search = $_POST['search'];
        $mysql = "SELECT * FROM tbl_lawyer where FName_lwyr LIKE '$search%'";
        $result = mysqli_query($conn,$mysql);

    }else {
        
    }

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