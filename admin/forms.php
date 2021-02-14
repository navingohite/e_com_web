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
            <h2 class="main-title-w3layouts mb-2 text-center">Add Category</h2>
            <section class="forms-section">
                <div class="container-fluid">
                    <div class="row">
                    </div>
                </div>
				
				
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4"></h4>
                   <form id="fupForm" method="post" enctype="multipart/form-data">
		
                        <div class="form-row">
						
                            <div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror">Category Name</label>
                                <input type="text"  name="category_name" class="form-control" id="category_name">
                            </div>
							 </div> <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror">Category Url</label>
                                <input type="text"  name="c_url" class="form-control" id="c_url">
                            </div>
                            </div>
                           
							
                        <input type="submit" name="submit" class="btn btn-success" value="SUBMIT"/>
	
                       </form>
                </div>
               
            </section>

             <?php include"breacktemp/footer.php";?>
           
        </div>
    </div>


    <script src='js/jquery-2.2.3.min.js'></script>
    <script>
        $(document).ready(function () {
			
		$("#fupForm").on('submit', function(e){	
var valid=true;
var category_name=$.trim($("#category_name").val());
if(valid)
{


e.preventDefault();
		$.ajax({
			type: 'POST',
			url: 'ajaxsub/submit_category.php',
			data: new FormData(this),
			//dataType: 'json',
			contentType: false,
			cache: false,
			processData:false,
			/* beforeSend: function(){
				$('.submitBtn').attr("disabled","disabled");
				$('#fupForm').css("opacity",".5");
			}, */
			success: function(response){
				
				
				console.log(response);
				$('.statusMsg').html('');
				if(response == 1){
					$('#fupForm')[0].reset();
					$('.statusMsg').html('<p class="alert alert-success">Submitted Successful</p>');
				}else{
					$('.statusMsg').html('<p class="alert alert-danger">'+response+'</p>');
				}
				$('#fupForm').css("opacity","");
				$(".submitBtn").removeAttr("disabled");
			}
});
}
else
{
		$('.statusMsg').html('<p class="alert alert-danger">Please fill all the mandatory fields</p>');
				
}	

return false;
});	


			
			
		
			
			
			
			
			
			
			
			
			
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