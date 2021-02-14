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
			<h2 class="main-title-w3layouts mb-2 text-center">Raise Fund</h2>
			<div class="statusMsg"></div>
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
					<form id="fupForm" method="post" enctype="multipart/form-data">
		
                        
						
						<div class="form-row">
						<?php $t=select("select * from business_idea where id='".$_REQUEST['id']."'");
						while($rt=mysqli_fetch_array($t))
						{
							extract($rt);
						?>
						<div class="form-group col-md-6"><h3 style="color:green">Business Idea:  <?=ucwords($business_name)?></h3></div>
						<div class="form-group col-md-6"><h3 style="color:green">Industry Type:  <?=ucwords($industry_type)?></h3></div>
							<?php
						}
						?>
						</div>
						<div class="form-row">
                            
							
                            <div class="form-group col-md-2">
							<h4 style="color:green" >Business Status-> -></h4></div>
							<div class="form-group col-md-3">
<input type="radio" name="business_status" id="r"><label for="r">Running</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="business_status" id="a"><label for="a">Start</label>
								</div>
                           
								
							
							
                        </div>
						<div class="form-row">
						<div class="form-group col-md-6" ><label id="range_in_currency_e" for="inputAddress">Range In</label>
                      
                            <select class="form-control"  id="range_in_currency" name="range_in_currency"  >
							     
								<option value="">Currency</option>
								<option value="INR">INR</option>
								<option value="$">$</option>
								</select>
								</div>
								<div class="form-group col-md-6" >
								<label for="inputAddress2" id="required_investment_e">Total Required Investment   </label>
                            <input type="text" class="form-control r"   id="required_investment" name="required_investment" >
								</div>
								</div>
                        
								                       
						<div class="form-group">
                            <label for="inputAddress2" id="diserror">Partnership Percentage in Above Price  </label>
							<input type="hidden"  name="business_id"  value=<?=$_REQUEST['id']?>>
                            <input type="text" class="form-control r"   id="partnership_percentage" name="partnership_percentage" >
                        </div>
						
						<div class="form-group">
                            <label for="inputAddress2" id="diserror">Per Share Price </label>
                            <input type="text" class="form-control"   readonly id="share_price" name="per_share_price" >
                        </div>
						<div class="form-group">
                            <label for="inputAddress2" id="diserror">Business Valuation</label>
                            <input type="text" class="form-control"  readonly id="valuation" name="valuation" >
                        </div>
						<h3 style="color:green">Preferred investor location
								</h3>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="manpower_d" id="country_e"> Country</label>
								<select class="form-control" id="country" name="country"  required="">
							
                               <?php $r=select("select * from countries");
				while($t=mysqli_fetch_array($r))
				{extract($t);
				?>
				<option value="<?=$id?>"><?=$name?></option>
				<?php
				}
				?>
				</select>
				</div>
                            
                            <div class="form-group col-md-4">
                                <label for="inputZip" id="state_e"> State</label>
							<select class="form-control" id="state" name="state">
				
				</select></div>
				
				<div class="form-group col-md-4">
                 <label for="profit_amount" id="city_e"> City</label>
									<select class="form-control" id="city" name="city">
				
				</select>
				<input type="hidden"  id="userid" name="userid" value="<?=$_SESSION['userid']?>" class="form-control">
                          
                           </div>
						   
                        </div>
                        
						<div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress"></label>
                      <input type="radio" class="pricee" name="free_premium" id="free_premium" value="Free"  Checked>
    <label for="test1">Free</label> 
	<input type="radio" class="price" id="free_premium" name="free_premium" value="Premium" >
    <label for="test1">Premium</label> 
	  </div>
                            
                            <div class="form-group col-md-6" id="priceinput">
                                	</div>
                        </div>
								<input type="submit" name="submit" class="btn btn-success submitBtn" value="SUBMIT"/>
	
                       </form>
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
var pattern = /^\d+$/;
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
function calculate_data(){
	var required_investment= $("#required_investment").val();
	var partnership_percentage= $("#partnership_percentage").val();
	var abcd=required_investment*100/partnership_percentage;
	var ab=abcd/100;
	$("#valuation").attr('value',abcd);
	$("#share_price").attr('value',ab);
}
$("#required_investment").keyup(function(){
	var r=$(this).val();
					if(pattern.test(r))
					{
						$("#required_investment_e").html('Total Required Investment');
						$("#required_investment_e").css("color","black");
							$("#required_investment").css("border-color","#ddd");
					
					}
					else
					{
						$("#required_investment_e").html('Please Enter Only Number');
						$("#required_investment_e").css("color","red");
						$("#required_investment").css("border-color","red");
					}
	calculate_data();
});

$("#partnership_percentage").keyup(function(){
	calculate_data();
});
			
		$("#fupForm").on('submit', function(e){	
var valid=true;
var range_in_currency=$.trim($("#range_in_currency").val());
var country=$.trim($("#profit_currency").val());
var free_premium= $("input[name=free_premium]:checked").val();
var userid=$.trim($("#userid").val());
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
if(valid)
{
e.preventDefault();
		$.ajax({
			type: 'POST',
			url: 'ajaxsub/submit_fund.php',
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