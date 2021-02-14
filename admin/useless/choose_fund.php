<?php
require_once"ajaxsub/dbconfig.php";
if(isset($_SESSION['login_cat']))
{
	
}
else
{
	header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	
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
            <h2 class="main-title-w3layouts mb-2 text-center">Create Your Profile</h2>
			<?php
			
			$tt=mysqli_num_rows(select("select * from business_idea where userid='".$_SESSION['userid']."'"));
			if($tt>=1)
			{
				?>
				
				<section class="forms-section">
                <div class="container-fluid">
                    <div class="row">
                    </div>
                </div>
				
				
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4"></h4>
					<a href="business.php"><button class="btn btn-primary">Add More Business</button></a>
							
                   </br>
                   </br>
                               <table class="table">
							   <tr style="font-weight:bold">
							   <td>#</td>
							   <td>Business Name</td>
							   <td>Industry Type</td>
							   <td>Raise Fund</td>
							   </tr>
							   
								<?php
								$api=1;
								$a=select("select * from business_idea where userid='".$_SESSION['userid']."'");
								while($b=mysqli_fetch_array($a))
								{extract($b);
								?>
							   <tr>
							   <td><?=$api?></td>
							   <td><?=ucwords($business_name)?></td>
							   <td><?=$industry_type?></td>
							   <td><a href="fund.php?id=<?=$id?>">
							   <button class="btn btn-primary">Raise Fund</button></a></td>
							   </tr>
							   <?php
							   $api++;
								}
								?>
							   </table>
								
							
								
                            
                        
                </div>
               
            </section>
				<?php
			}
			else
			{
				?>
				<div class="alert alert-success">"submit your business idea to create raise fund”. This Help Investor To 
Know More About Business Plan <a href="business.php" class="alert-link">Ok</a>
</div>
				<?php
			}
			?>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
            

             <?php include"breacktemp/footer.php";?>
           
        </div>
    </div>


    <script src='js/jquery-2.2.3.min.js'></script>
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
		
		
var valid=true;
var industry_type=$.trim($("#industry_type").val());
var range_in_currency=$.trim($("#range_in_currency").val());
var min_range=$.trim($("#min_range").val());
var max_range=$.trim($("#max_range").val());
var description=$.trim($("#description").val());
var country=$.trim($("#profit_currency").val());
var state=$.trim($("#profit_currency").val());
var state=$.trim($("#profit_currency").val());
//var uploadFile=$.trim($("#uploadFile").val());
//var free_premium=$.trim($("#free_premium").val());
var free_premium= $("input[name=free_premium]:checked").val();

var userid=$.trim($("#userid").val());

if(industry_type==="")
{
$("#inerror").html('Please Select Industry Type');
$("#inerror").css("color","red");
$("#industry_type").css("border-color","red");
valid=false;
}
else
{
$("#inerror").html('Industry Type');
$("#inerror").css("color","black");
$("#industry_type").css("border-color","#ddd");
}

if(range_in_currency==="")
{
$("#range_in_currency_e").html('Please Select Currency');
$("#range_in_currency_e").css("color","red");
$("#range_in_currency").css("border-color","red");
valid=false;
}
else
{
$("#range_in_currency_e").html('Range In');
$("#range_in_currency_e").css("color","black");
$("#range_in_currency").css("border-color","#ddd");
}

if(min_range==="")
{
$("#min_range_e").html('Please Select Minimum Range');
$("#min_range_e").css("color","red");
$("#min_range").css("border-color","red");
valid=false;
}
else
{
$("#min_range_e").html('Minimum Range');
$("#min_range_e").css("color","black");
$("#min_range").css("border-color","#ddd");
}

if(max_range==="")
{
$("#max_range_e").html('Please Select Maximum Range');
$("#max_range_e").css("color","red");
$("#max_range").css("border-color","red");
valid=false;
}
else
{
$("#max_range_e").html('Maximum Range');
$("#max_range_e").css("color","black");
$("#max_range").css("border-color","#ddd");
}

if(description.length<15)
{
$("#diserror").html('Description Length Must Be 15 characters');
$("#diserror").css("color","red");
$("#description").css("border-color","red");
valid=false;
}
else
{
$("#diserror").html('Business Name');
$("#diserror").css("color","black");
$("#description").css("border-color","#ddd");
}






if(valid)
{


e.preventDefault();
		$.ajax({
			type: 'POST',
			url: 'ajaxsub/submit_investor.php',
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
					$('.statusMsg').html('<p class="alert alert-success">Submitted Successful</p>');
				}else{
					$('.statusMsg').html('<p class="alert alert-danger">'+response+'</p>');
				}
				$('#fupForm').css("opastate","");
				$(".submitBtn").removeAttr("disabled");
			}
});
}
else
{
		$('.statusMsg').html('<p class="alert alert-danger">Please Fill All The Mandatory Fields</p>');
				
}	

return false;
});	

$('#priceinput').html('<label for="inputEmail4"></label><input type="hidden" class="form-control"  name="preprice" id="preprice" placeholder="Business Name" value="0" readonly>');		
			
			$('.price').on('click',function(){
				$('#priceinput').html('');	
$('#priceinput').html('<label for="inputEmail4">Price</label><input type="text" class="form-control" name="preprice" id="preprice" placeholder="Business Name" value="5" readonly>');			
					
			});
			$('.pricee').on('click',function(){
				$('#priceinput').html('');	
$('#priceinput').html('<label for="inputEmail4"></label><input type="hidden" class="form-control"  name="preprice" id="preprice" placeholder="Business Name" value="0" readonly>');			
				
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