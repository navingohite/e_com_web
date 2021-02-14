<?php
require_once"ajaxsub/dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Forms :: w3layouts</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php
		include"breacktemp/sidebar.php";
		?>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <?php
			include"breacktemp/topbar.php";
			?>
            <!--// top-bar -->

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Update Your Profile</h2>
            <!--// main-heading -->

            <!-- Forms content -->
            <section class="forms-section">
<div class="statusMsg">
</div>
              
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Update Your Profile</h4>
                    <div class="row validform">
					<?php
					 $q="select * from register where id='".$_SESSION['userid']."'";
					$res=select($q);
					while($r=mysqli_fetch_array($res))
					{
						extract($r);
					?>
                        <div class="col-md-4 order-md-2 mb-4 validform1">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Your Profile Image</span>
                            </h4>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
									<image src="ajaxsub/images/<?=$image?>" class="rounded-circle"  style="height:280px;width:400px">
                                        
                                    </div>
                                    
                                </li>
                                
                                
                                
                            </ul>

                            
                        </div>
						<?php
					}
						?>
                        <div class="col-md-8 order-md-1 validform2">
                            <h4 class="mb-3"></h4>
                            <form  method="post" id="fupForm" >
                                 <?php
					 $q="select * from register where id='".$_SESSION['userid']."'";
					$res=select($q);
					while($r=mysqli_fetch_array($res))
					{
						extract($r);
					?>
								 <div class="mb-3">
                                    <label for="username" id="nameerror">Name
                                    </label>
                                    <input type="text"  value="<?=$name?>" class="form-control" id="username" name="username" placeholder="Enter Your Name">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>

                                

                                <div class="mb-3">
                                    <label for="email" id="emailerror">Email </label>
                                    <input type="email" class="form-control"	 value="<?=$email?>"			id="email" name="email" placeholder="you@example.com">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address" id="mobileerror">Mobile</label>
                                    <input type="text" class="form-control" value="<?=$mobile?>" id="mobile" name="mobile" placeholder="Mobile" >
                                    <input type="hidden" class="form-control"  value="<?=$_SESSION['userid']?>" id="userid" name="userid" placeholder="Mobile" >
                                    <div class="invalid-feedback">
                                        Please enter your shipping address.
                                    </div>
                                </div>
								<div class="mb-3">
                                    <label for="address" name="fileerror">Upload Profile Picture</label>
                                    <input type="file" class="form-control" name="file" id="file" placeholder="Mobile" >
                                    <div class="invalid-feedback">
                                        Please enter your shipping address.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address2" name="password">Password</label>
                                    <input type="password" class="form-control" value="<?=$password?>" id="password"  name="password"  placeholder="Password">
                                </div>
								<div class="mb-3">
                                    <label for="address2" id="educationerror">Maximum Education Qualification</label>
                                    <input type="text" class="form-control" value="<?=$education?>" id="education"  name="education">
                                </div>
                                 <div class="mb-3">
                                    <label for="address2">Address</label>
                                    <input type="text" class="form-control" value="<?=$address?>" id="address"  name="address"  placeholder="Address">
                                </div>
								<div class="mb-3">
                                    <label for="address2" id="social_link_error">Social Link</label>
                                    <input type="text" class="form-control" value="<?=$social_link?>" id="social_link"  name="social_link"  placeholder="Website / Social Media link: Facebook / Instagram">
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="country">Country</label>
                                        <select class="form-control"  name="country" id="country" >
										<?php
										$op=select("SELECT countries.name,countries.id FROM `register` INNER JOIN countries on register.country=countries.id");
										while($op1=mysqli_fetch_array($op))
										{
											extract($op1);
										?>
										
										<option value="<?=$id?>"><?=$name?></option>
					<?php
										}
										?>
                                            <?php $r=select("select * from countries");
				while($t=mysqli_fetch_array($r))
				{extract($t);
				?>
				<option value="<?=$id?>"><?=$name?></option>
				<?php
				}
				?>
				</select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="state">State</label>
                                        
										<select  class="form-control"  id="state" name="state"   >
										<?php
										$op=select("SELECT states.name,states.id FROM `register` INNER JOIN states on register.state=states.id
");
										while($op1=mysqli_fetch_array($op))
										{
											extract($op1);
										?>
										
										<option value="<?=$id?>"><?=$name?></option>
					<?php
										}
										?>
                                           </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
									<div class="col-md-4 mb-3">
                                        <label for="state">City</label>
                                        
										<select  class="form-control"  id="city" name="city"   >
                                            
<?php
										$op=select("SELECT cities.name,cities.id FROM `register` INNER JOIN cities on register.city=cities.id");
										while($op1=mysqli_fetch_array($op))
										{
											extract($op1);
										?>
										
										<option value="<?=$id?>"><?=$name?></option>
					<?php
										}
										?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                
                                
                                
                                <hr class="mb-4">
                                <button class="btn btn-primary " name="submit" id="submit" type="submit">Continue to checkout</button>
								<?php
								
					}
					?>
                            </form>
                        </div>
                    </div>
                </div>
                <!--// Forms-4 -->
            </section>

            <!--// Forms content -->

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Validation Script -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';

            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <!--// Validation Script -->

    <!-- dropdown nav -->
    <script>
        
	

        $(document).ready(function () {
			$("#country").change(function(){
var country_id=$(this).val();

$.ajax({
url:"test.php",
method:"post",
data:{countryid:country_id},
datatype:"text",
success:function(data)
{
$(state).html(data);
}
});



});
$("#state").change(function(){
var state_id=$(this).val();

$.ajax({


url:"test2.php",
method:"post",
data:{stateid:state_id},
datatype:"text",
success:function(data)
{
$(city).html(data);
}
});



});
$("#fupForm").on('submit', function(e){	

var name=$.trim($("#username").val());
var email=$.trim($("#email").val());
var mobile=$.trim($("#mobile").val());
var password=$.trim($("#password").val());
var education=$.trim($("#education").val());
var address=$.trim($("#address").val());
var social_link=$.trim($("#social_link").val());
var country=$.trim($("#country").val());
var state=$.trim($("#state").val());
var city=$.trim($("#state").val());
var userid=$.trim($("#userid").val());

if(name=="")
{
$("#nameerror").html('Invalid  Name');
$("#nameerror").css("color","red");
$("#username").css("border-color","red");
valid=false;
}
else
{
$("#nameerror").html(' Name');
$("#nameerror").css("color","black");
$("#username").css("border-color","#ddd");
}
if(email=="")
{
$("#emailerror").html('Invalid  #Email');
$("#emailerror").css("color","red");
$("#email").css("border-color","red");
valid=false;
}
else
{
$("#emailerror").html(' Email');
$("#emailerror").css("color","black");
$("#email").css("border-color","#ddd");
}
if(mobile=="")
{
$("#mobileerror").html('Invalid  Mobile');
$("#mobileerror").css("color","red");
$("#mobile").css("border-color","red");
valid=false;
}
else
{
$("#mobileerror").html(' Mobile');
$("#mobileerror").css("color","black");
$("#mobile").css("border-color","#ddd");
}
if(password=="")
{
$("#passworderror").html('Invalid  Password');
$("#passworderror").css("color","red");
$("#password").css("border-color","red");
valid=false;
}
else
{
$("#passworderror").html(' Password');
$("#passworderror").css("color","black");
$("#password").css("border-color","#ddd");
}
if(social_link=="")
{
$("#social_link_error").html('Invalid  Social Link');
$("#social_link_error").css("color","red");
$("#social_link").css("border-color","red");
valid=false;
}
else
{
$("#social_link_error").html(' Social Link');
$("#social_link_error").css("color","black");
$("#social_link").css("border-color","#ddd");
}


e.preventDefault();
		$.ajax({
			type: 'POST',
			url: 'ajaxsub/submit_profile.php',
			data: new FormData(this),
			//dataType: 'json',
			contentType: false,
			cache: false,
			processData:false,
			/* beforeSend: function(){
				$('.submitBtn').attr("disabled","disabled");
				$('#fupForm').css("opastate",".5");
			}, */
			success: function(response){
				//response = JSON.parse(response);
				console.log(response);
				$('.statusMsg').html('');
				if(response == 1){
					$('#fupForm')[0].reset();
					$('.statusMsg').html('<p class="alert alert-success">Updated Successful</p>');
				}else{
					$('.statusMsg').html('<p class="alert alert-danger">'+response+'</p>');
				}
				$('#fupForm').css("opastate","");
				$(".submitBtn").removeAttr("disabled");
			}
});



return false;

});
		























			
			
			
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>