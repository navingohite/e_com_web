<?php
require_once"ajaxsub/dbconfig.php";
if(isset($_SESSION['seller_login']))
{
	
}
else
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sayladda | Admin</title>
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
    
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style4.css">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    </head>
	<body>
    <div class="wrapper">
        <?php include"breacktemp/sidebar.php";?>

        <div id="content">
            <?php include"breacktemp/topbar.php";?>
			
			<div id="success"></div>
			<div class="statusMsg"></div>
            <h2 class="main-title-w3layouts mb-2 text-center">Update Profile</h2>
            <section class="forms-section">
                <div class="container-fluid">
                    <div class="row">
                    </div>
                </div>
				
				<?php
					   if(isset($_REQUEST['submit']))
					   {
						   extract($_REQUEST);
						   $error=$_FILES["myfile"]["error"];

$image_name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];
if(empty($image_name))
{
	  $n=iud("update saller set name='$name', email='$email',mobile='$mobile', password='$password' where id='".$_SESSION['sellerid']."'");
	  if($n==1)
	  {
		  echo"<div class='alert  alert-success'>Successful</div>";
	  }
	  else
	  {
		  echo"<div class='alert  alert-danger'>Something Went Wrong </div>";
	 
	  }
}
else
{
	move_uploaded_file($tmp_name,"images/$image_name");
						 $n=iud("update saller set name='$name', email='$email',mobile='$mobile', password='$password', image='$image_name' where id='".$_SESSION['sellerid']."'");
	 if($n==1)
	  {
		  echo"<div class='alert  alert-success'>Successful</div>";
	  }
	  else
	  {
		  echo"<div class='alert  alert-danger'>Something Went Wrong </div>";
	 
	  }
	
}
					   }
					   ?>
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4"></h4>
                   <form id="fupForm" method="post" enctype="multipart/form-data">
		
                        <div class="form-row">
						<?php
						 $r="select * from saller where id='".$_SESSION['sellerid']."' ";
						$at=select($r);
						while($a=mysqli_fetch_array($at))
						{
							extract($a);
						
						?>
                            <div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror"> Name</label>
                                <input type="text" value="<?=$name?>" name="name" class="form-control">
                            </div>
							 <div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror"> Email</label>
                                <input type="text" value="<?=$email?>" name="email" class="form-control" >
                            </div>
							<div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror"> Mobile</label>
                                <input type="text" value="<?=$mobile?>" name="mobile" class="form-control" >
                            </div>
							 <div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror"> Password</label>
                                <input type="password"  name="password" value="<?=$password?>" class="form-control" >
                            </div>
							 <div class="form-group col-md-4">
                                <label for="category_name" id="business_nameerror"> Image</label>
                                <input type="file"  name="myfile" class="form-control" >
                            </div>
							<div class="form-group col-md-2">
                                <img src="images/<?=$image?>" style="height:100px;width:80px"> 
                            </div>
							<?php
						}
							?>
                            </div>
							
                        <input type="submit" name="submit" class="btn btn-success" value="Update"/>
	
                       </form>
					   
                </div>
               
            </section>

             <?php include"breacktemp/footer.php";?>
           
        </div>
    </div>


    <script src='js/jquery-2.2.3.min.js'></script>
    <script>
        $(document).ready(function () {
			
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script>
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
    <script>
        $(document).ready(function () {
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
    <script src="js/bootstrap.min.js"></script>
    
</body>

</html>