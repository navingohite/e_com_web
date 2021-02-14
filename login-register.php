<?php
require_once"include/dbconfig.php";
if(isset($_SESSION['login']))
{
	echo"<script>window.location='https://sayladda.com/'</script>";
}
else
{
	
}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title> Online shopping site for electronics, women’s clothing, men’s clothing, baby & toys, groceries and etc.</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!-- Google fonts include -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,900" rel="stylesheet">

    <!-- All Vendor & plugins CSS include -->
    <link href="assets/css/vendor.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <?php include"include/header.php";?>
    <?php include"include/mobile_nav.php";?>
   



    <!-- main wrapper start -->
    <main class="body-bg">

        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>login register</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=$site?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">login register</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- login register wrapper start -->
        <div class="login-register-wrapper pt-50 pb-50">
            <div class="container">
                <div class="member-area-from-wrap">
                    <div class="row">
                        <!-- Login Content Start -->
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap">
                                <h2>Sign In</h2>
							<?php
if(isset($_REQUEST['Signin']))
					{
						extract($_REQUEST);
						$n=select("SELECT * FROM `register` where `email`='$email' and  `password`='$password'");
						 $nn= mysqli_num_rows($n);
						if($nn==1)
						{
						while($y=mysqli_fetch_array($n))
{	
								$_SESSION['userid']=$y['id'];
									$_SESSION['username']=$y['name'];
                          
                          $_SESSION['login'] = 'yes';
                        echo ("<script>location.href='$url'</script>");
						
							
						}
						}
						else
						{
							echo"<div class='alert alert-danger'>Something Went Wrong</div>";
						}
					}
					?>
                                <form  method="post">
                                    <div class="single-input-item">
                                        <input type="email" name="email"  placeholder="Enter your Email" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="password" name="password"  placeholder="Enter your Password" required />
                                    </div>
									<input type="hidden" name="url" value="<?=$_SERVER['HTTP_REFERER']?>">
							
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                            
                                            <a href="<?=$site?>/forget.php" class="forget-pwd">Forget Password?</a>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button name="Signin" class="btn btn__bg">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Login Content End -->

                        <!-- Register Content Start -->
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap sign-up-form">
                                <h2>Singup Form</h2>
                                <div id="vle"></div>
                                <form action="#" method="post">
                                    <div class="single-input-item">
                                        <input type="text" name="name" id="name" placeholder="Full Name" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="email" placeholder="Enter your Email" name="email" id="email" required />
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="text" name="mobile" id="mobile" placeholder="Enter your Mobile" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="password" id="password" name="password"  placeholder="Enter your Password" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" checked class="custom-control-input" id="subnewsletter">
                                                    <label class="custom-control-label" for="subnewsletter">Subscribe
                                                        Our Newsletter</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="btn btn__bg" id="submit" >Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    </main>
   <?php include"include/footer.php"?>
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/active.js"></script>
	 <script>
		$(document).ready(function () {
		$("#submit").click(function(){    
var valid=true;
var name=$.trim($("#name").val());
var mobile=$.trim($("#mobile").val());
var mobile_r=/^[0-9][0-9]{9}$/;
var email=$.trim($("#email").val());
var email_r=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
var password=$.trim($("#password").val());
	if(name.length<2)
{
$("#nameerror").html('Invalid Name');
$("#nameerror").css("color","red");
$("#name").css("border-color","red");
valid=false;
}
else
{
$("#nameerror").html('Name');
$("#nameerror").css("color","black");
$("#name").css("border-color","#ddd");
}

if(!(email_r.test(email)))
{
$("#emailerror").html('Invalid Email');
$("#emailerror").css("color","red");
$("#email").css("border-color","red");
valid=false;
}
else
{
$("#emailerror").html('Email');
$("#emailerror").css("color","black");
$("#email").css("border-color","#ddd");
}
if(!(mobile_r.test(mobile)))
{
$("#mobileerror").html('Invalid Mobile');
$("#mobileerror").css("color","red");
$("#mobile").css("border-color","red");
valid=false;
}
else
{
$("#mobileerror").html('Email');
$("#mobileerror").css("color","black");
$("#mobile").css("border-color","#ddd");
}
if(password.length<6)
{
$("#passworderror").html('Minimum 6 Character Required');
$("#passworderror").css("color","red");
$("#password").css("border-color","red");
valid=false;
}
else
{
$("#passworderror").html('Password');
$("#passworderror").css("color","black");
$("#password").css("border-color","#ddd");
}

var mymethod="post";
var myurl="api/signup.php";
var mydata="name="+name+"&mobile="+mobile+"&email="+email+"&password="+password+"&signup=yes";
if(valid)
{
    $.ajax({
	
	method:mymethod,
	url:myurl,
	data:mydata,
	success:function(result)
	{
		if(result==1)
		{
			$("#vle").html('<div class="alert alert-success">you have been successfully registered !</div>');
			$("#name").val("");
			$("#mobile").val("");
			$("#email").val("");
			$("#password").val("");
			 setTimeout(function(){
            window.location.href = 'login-register.php';
         }, 2000);
			
		}
		else
		{
				$("#vle").html(result);
		}
		}
});	
}
return false;
		
		});
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
</body>

</html>