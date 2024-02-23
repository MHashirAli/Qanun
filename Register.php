<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wpocean.com/html/tf/canun-live/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jun 2022 09:17:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <title> Canun – Register</title>

    <?php
        include "Links.php";
    ?>
</head>

<body>

    <?php
        include "Header.php";
    ?>
        
        <!-- start of breadcumb-section -->
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Register</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><span>Register</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->

        <!-- wpo-checkout-area start-->
        <div class="wpo-checkout-area section-padding">
            <div class="container mx-auto">
                <form action="index.php" method="post">
                    <div class="checkout-wrap">
                        <div class="row">
                                <div class="caupon-wrap s2">
                                    <div class="biling-item">
                                        <div class="coupon coupon-3">
                                            <label id="toggle2">Register</label>
                                            <div class="close-form">
                                                <a class="theme-btn" href="Register_lwyr.php">Are U A Lawyer?</a>
                                            </div>
                                        </div>
                                        <div class="billing-adress" id="open2">
                                            <div class="contact-form form-style">
		                                        	<span id="rslMesg"></span>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-12">
                                                        <span>
                                                        <label for="name">Name</label>
                                                        </span>
                                                        <input type="text" placeholder="" id="name" name="name">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                       <span>
                                                        <label for="email4">Email Adress</label>
                                                        </span>
                                                        <input type="email" placeholder="" id="email" name="email">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <span>
                                                        <label for="password">Password</label>
                                                        </span>
                                                        <input type="password" placeholder="" id="pass" name="pass">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <span>
                                                        <label for="cpassword">Confirm Password</label>
                                                        </span>
                                                        <input type="password" placeholder="" id="cpass" name="cpass">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <label for="city">City</label>
                                                        <input type="text" placeholder="" id="city" name="city">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-12">
                                                        <label for="email2">Phone No.</label>
                                                        <input type="number" placeholder="" id="number" name="number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit-btn-area">
                                                <ul>
                                                    <li>
                                                        <button class="theme-btn" >Sign Up</button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul>
                                                <li>Already have account? <a href="Login.php"> Sign In</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script>
			$(document).ready(function (){
				
				$("#btnReg").click(function (){
					var getName = $("#name").val();
					var getEmail = $("#email").val();
					var getPassword = $("#pass").val();
					var getConfirmPassword = $("#cpass").val();

					var mydata = {"FN":getName,"Email":getEmail,"Pass":getPassword};


					var checkValidtion = false;

					if(getName == "")
					{
						
						$("#lblFN").css("color","red");
						checkValidtion = true;
					}
					else{
						$("#lblFN").css("color","gray");
					}
					if(getEmail == "")
					{
						
						$("#lblEmail").css("color","red");
						checkValidtion = true;
					}
					else{
						$("#lblEmail").css("color","gray");
					}

					if(getPassword == "")
					{
						
						$("#lblPass1").css("color","red");
						checkValidtion = true;
					}
					else{
						$("#lblPass1").css("color","gray");
					}

					if(getConfirmPassword == "")
					{
						
						$("#lblPass2").css("color","red");
						checkValidtion = true;
					}
					else{
						$("#lblPass2").css("color","gray");
					}


					if(getPassword != ""  && getConfirmPassword != "")
					{
						if(getPassword != getConfirmPassword)
						{
							$("#lblPass1").css("color","red");
							$("#lblPass2").css("color","red");
							checkValidtion = true;
						}
						else{
							$("#lblPass1").css("color","gray");
							$("#lblPass2").css("color","gray");
						}
					}
				
					if(	checkValidtion == false)
					{

						$.ajax({
							method:"POST",
							url: "newuser.php",
							data: mydata,
							success: function(data){
								
							if(data == "Success")
							{
								$("#rslMesg").html("<span class='alert alert-success'>New Account Successfully Created !</span>");
								
							}
							else if(data == "already")
							{
								$("#rslMesg").html("<span class='alert alert-danger'>Username already Exist !</span>");
							}
							else
							{
								$("#rslMesg").html("<span class='alert alert-danger'>Please try again !</span>");
							}
							
							
						}});
					}


					return false;
				});

				
			});
		</script>
        <!-- wpo-checkout-area end-->

    <?php
        include "Footer.php";
    ?>

    </div>
    <!-- end of page-wrapper -->

    <?php
        include "Scripts.php";
    ?>

</body>

</html>