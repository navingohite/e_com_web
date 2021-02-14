<?php
require_once"ajaxsub/dbconfig.php";
if(isset($_SESSION['admin_login']))
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
            <h2 class="main-title-w3layouts mb-2 text-center">Update Product Detail</h2>
            <section class="forms-section">
                <div class="container-fluid">
                    <div class="row">
                    </div>
                </div>
				
				<?php
				if(isset($_REQUEST['update']))
				{
					extract($_REQUEST);
					
					   $nn=iud("update orderdetail set name='$name', address='$address', mobile='$mobile', email='$email' where orderid='".$_REQUEST['oid']."'");
					  
				    echo"<div class='alert alert-success'>Successful</div>";
				
				}
				?>
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4"></h4>
                   <form id="fupForm" method="post" enctype="multipart/form-data">
		<?php
		$r=select("SELECT * FROM `orderdetail` where  orderid='".$_REQUEST['oid']."' group by orderid");
		while($a=mysqli_fetch_array($r))
						{
							extract($a);
		?>
                        <div class="form-row">
						<div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror"> Name</label>
                                <input type="text"  name="name" value="<?=$a['name']?>" class="form-control" >
                        </div>
						</div>
                            <div class="form-row">
						    <div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror"> Email</label>
                                <input type="text"  name="email" value="<?=$a['email']?>" class="form-control" >
                            </div>
							
                            </div>
                            <div class="form-row">
						
                            <div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror"> Mobile</label>
                                <input type="text"  name="mobile" value="<?=$a['mobile']?>" class="form-control" >
                            </div>
							
                            </div><div class="form-row">
						
                            <div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror"> Address</label>
                                <input type="text"  name="address" value="<?=$a['address']?>" class="form-control" >
                            </div></div>
                            <div class="form-row">
							<div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror"> Price</label>
                                 <input type="text"  name="price" value="<?=$a['total_price']?>" class="form-control" >
                               
                            </div></div>
							
                            
						<?php
							}
							?>	
                        <input type="submit" name="update" class="btn btn-success" value="Update"/>
	
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