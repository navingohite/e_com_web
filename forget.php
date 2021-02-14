<?php
require_once"include/dbconfig.php";
if(isset($_SESSION['login']))
{
echo"<script>window.location='https://sayladda.com/';</script>";
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
                                <h1>Forget password</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=$site?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Forget password</li>
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
                        

                        <!-- Register Content Start -->
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap sign-up-form">
                                <h2>Forget Password</h2>
                                <div id="vle"></div>
                                <form action="#" method="post">
                                   
                                    <div class="single-input-item">
                                        <input type="email" placeholder="Enter your Email" name="email" id="email" required />
                                    </div>
                                    
                                    
                                    <div class="single-input-item">
                                        <button class="btn btn__bg" id="submit" >Forget</button>
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
var email=$.trim($("#email").val());
var email_r=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
	

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
var mymethod="post";
var myurl="api/forget.php";
var mydata="email="+email;
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
			$("#vle").html('<div class="alert alert-success">Please check your email !</div>');
			
			$("#email").val("");
			
		}
		if(result==2)
		{
			$("#vle").html('<div class="alert alert-success">Something Went Wrong !</div>');
			
			$("#email").val("");
			
		}
		if(result==0)
		{
			$("#vle").html('<div class="alert alert-danger">Email not exist !</div>');
			
			$("#email").val("");
			
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