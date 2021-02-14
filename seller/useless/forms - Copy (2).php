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
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Forms :: w3layouts</title>
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
            <h2 class="main-title-w3layouts mb-2 text-center">Forms</h2>
            <section class="forms-section">
                <div class="container-fluid">
                    <div class="row">
                    </div>
                </div>
				
				
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4"></h4>
                    <form  method="post" enctype="multipart/form-data">
					<div class="form-row">
                            <div class="form-group col-md-6">
                               <input type="radio" id="typeplan" value="business_idea_plan" name="typeplan" checked >
                           <label for="test1">Business Idea/Plan</label> </div>
                            <div class="form-group col-md-6">
                                <input type="radio" id="typeplan" value="case_study" name="typeplan">
                             <label for="test2">Case Study</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" id="business_nameerror">Business Name</label>
                                <input type="text" id="business_name" class="form-control" id="inputEmail4" required="">
                            </div>
							
                            <div class="form-group col-md-6">
							<label for="inputPassword4">Industry Type</label>
                                <select class="form-control" id="industry_type" >
								<option value="null">Select Any Type</option>
								
								<?php
								$a=select("select * from industry_type");
								while($b=mysqli_fetch_array($a))
								{extract($b);
								?>
								<option value="<?=$type?>"><?=ucwords($type)?></option>
								<?php
								}
								?>
								</select>
                            </div>
							
                        </div>
                        <div class="form-row">
						<div class="form-group col-md-4"><label for="inputAddress">Range In</label>
                      
                            <select class="form-control" id="range_in_currency"  required="">
							     
								<option>Currency</option>
								<option value="INR">INR</option>
								<option value="$">$</option>
								</select>
								</div>
								<div class="form-group col-md-4">
								     <label for="inputAddress">Minimum Range</label>
                      
                            <select class="form-control" id="min_range"  required="">
								<?php
								$a=select("select * from range_range");
								while($b=mysqli_fetch_array($a))
								{extract($b);
								?>
								<option value="<?=$max?>"><?=ucwords($max)?></option>
								<?php
								}
								?>
								</select>
								</div>
								<div class="form-group col-md-4">
                            
                            <label for="inputAddress">Maximum Range</label>
                       <select class="form-control" id="max_range"  required="">
								<?php
								$a=select("select * from range_range");
								while($b=mysqli_fetch_array($a))
								{extract($b);
								?>
								<option value="<?=$max?>"><?=ucwords($max)?></option>
								<?php
								}
								?></select>
								</div>
								</div>
                        <div class="form-group">
                            <label for="inputAddress2">Minimum Resource Requiremnt </label>
                            <textarea class="form-control" id="resource" >Space, Hardware, Equipment, Software</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="manpower_d" id="manpower_error">ManPower Description</label>
                                <textarea class="form-control" id="manpower_d" ></textarea>
                            </div>
                            
                            <div class="form-group col-md-2">
                                <label for="inputZip">Profit/ Margin</label>
							 <select class="form-control" id="profit_margin"  required="">
								
								<option value="day">Per Day</option>
								<option value="month">Per Month</option>
								<option value="year">Per Year</option>
								</select></div>
								<div class="form-group col-md-2">
                                <label for="profit_amount" id="profit_amount_error">Amount</label>
									<input type="text"  id="profit_amount" class="form-control">
									<input type="hidden"  id="userid" value="<?=$_SESSION['userid']?>" class="form-control">
                          
                           </div>
						   <div class="form-group col-md-2">
                                <label for="inputZip">Currency</label>
									<select class="form-control" id="profit_currency"  required="">
							     
								<option>Currency</option>
								<option value="INR">INR</option>
								<option value="$">$</option>
								</select>
                          
                           </div>
								
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2" id="fileerror" >Upload File </label>
							 <input type="file" name="uploadFile" id="uploadFile" accept=".doc, .docx" />
      
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
                        <button type="submit" id="submit" name="business_idea" class="btn btn-primary">Submit</button>
                    </form>
                </div>
               
            </section>

             <?php include"breacktemp/footer.php";?>
           
        </div>
    </div>


    <script src='js/jquery-2.2.3.min.js'></script>
    <script>
        $(document).ready(function () {
			
			
		$("#submit").click(function(){
var valid=true;
//var typeplan=$.trim($("#typeplan").val());
var typeplan= $("input[name=typeplan]:checked").val();
var business_name=$.trim($("#business_name").val());
var industry_type=$.trim($("#industry_type").val());
var range_in_currency=$.trim($("#range_in_currency").val());
var min_range=$.trim($("#min_range").val());
var max_range=$.trim($("#max_range").val());
var resource=$.trim($("#resource").val());
var profit_margin=$.trim($("#profit_margin").val());
var manpower_d=$.trim($("#manpower_d").val());
var profit_amount=$.trim($("#profit_amount").val());
var profit_currency=$.trim($("#profit_currency").val());
var uploadFile=$.trim($("#uploadFile").val());
var preprice=$.trim($("#preprice").val());
//var free_premium=$.trim($("#free_premium").val());
var free_premium= $("input[name=free_premium]:checked").val();

var userid=$.trim($("#userid").val());



if(business_name.length<2)
{
$("#business_nameerror").html('Invalid Business Name');
$("#business_nameerror").css("color","red");
$("#business_name").css("border-color","red");
valid=false;
}
else
{
$("#business_nameerror").html('Business Name');
$("#business_nameerror").css("color","black");
$("#business_name").css("border-color","#ddd");
}

if(manpower_d.length<20)
{
$("#manpower_error").html('Description Length Must Be 20 characters');
$("#manpower_error").css("color","red");
$("#manpower_d").css("border-color","red");
valid=false;
}
else
{
$("#manpower_error").html('ManPower Description');
$("#manpower_error").css("color","black");
$("#manpower_d").css("border-color","#ddd");
}
if(!(/^\d*$/.test(profit_amount)))
{
$("#profit_amount_error").html('Only Numeric Value Accepted');
$("#profit_amount_error").css("color","red");
$("#profit_amount").css("border-color","red");

}
else
{
$("#profit_amount_error").html('Amount');
$("#profit_amount_error").css("color","black");
$("#profit_amount").css("border-color","#ddd");
}
if (!(/\.(doc|docx|pdf)$/i).test(uploadFile)) {              
    $("#fileerror").html('You must select doc/docx File');
$("#fileerror").css("color","red");
$("#uploadFile").css("border-color","red");
valid=false;
}
else
{
$("#fileerror").html('Upload File');
$("#fileerror").css("color","black");
$("#uploadFile").css("border-color","#ddd");
}

if(valid)
{
var mymethod="post";
var myurl="myphp.php";
var mydata="type="+typeplan+"&business_name="+business_name+"&industry_type="+industry_type+"&range_in_currency="+range_in_currency+"&min_range="+min_range+"&max_range="+max_range+"&resource="+resource+"&profit_margin="+profit_margin+"&manpower_d="+manpower_d+"&profit_amount="+profit_amount+"&profit_currency="+profit_currency+"&uploadFile="+uploadFile+"&preprice="+preprice+"&free_premium="+free_premium+"&userid="+userid+"&business_idea=yes";
alert(mydata);

$.ajax({
	
	method:mymethod,
	url:myurl,
   contentType: 'multipart/form-data',
	data:mydata,
	success:function(result)
	{
		if(result==1)
		{
			alert("successful");
		}
		else
		{
			alert(result);
		}
		}
});	
}
return false;
});	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			$('.price').on('click',function(){
				
$('#priceinput').html('<label for="inputEmail4">Price</label><input type="text" class="form-control" id="preprice" placeholder="Business Name" value="5" readonly>');			
				
			});
			$('.pricee').on('click',function(){
				
$('#priceinput').html('<label for="inputEmail4"></label><input type="hidden" class="form-control" id="preprice" placeholder="Business Name" value="0" readonly>');			
				
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