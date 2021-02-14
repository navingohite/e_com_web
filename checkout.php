<?php
require_once"include/dbconfig.php";
if(isset($_SESSION['userid']))
{
	
}
else
{
echo"<script>window.location='https://sayladda.com/'</script>";
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

    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,900" rel="stylesheet">

    <link href="assets/css/vendor.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    

</head>

<body>

    <?php include"include/header.php";?>
    <?php include"include/mobile_nav.php";?>
    
    <main class="body-bg">
<?php
$uo=select("select * from cart where userid='".$_SESSION['userid']."'");
$xt=mysqli_num_rows($uo);
if($xt>=1)
{
?>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>checkout</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=$site?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">checkout</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- checkout main wrapper start -->
        <div class="checkout-page-wrapper">
            <div class="container">
                
<div id="display"></div>
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checkout-billing-details-wrap">
                                <h2>Billing Details</h2>
                                <div class="billing-form-wrap">
                                   
                                       <?php
									   $t=select("select * from register where id='".$_SESSION['userid']."'");
									   $rt=mysqli_fetch_array($t);
									   ?>
                                                <div class="single-input-item">
                                                    <label for="f_name" class="required">Magacaaga oo Saddexen | Full Name</label>
                                                    <input type="text" id="name" value="<?=$rt['name']?>" placeholder="Magacaaga oo Saddexen | Full Name*"  required />
                                                </div>
                                           

                                        <div class="single-input-item">
                                            <label for="email" class="required">Email</label>
                                            <input type="email" placeholder="Email*" value="<?=$rt['email']?>" id="email"  required />
                                        </div>

                                        <div class="single-input-item">
                                            <label for="com-name">Cinwaanka | Address</label>
                                            <input type="text" placeholder="Cinwaanka | Address*" id="address" required />
                                        </div>
                                       
                                      
                                        <div class="single-input-item">
                                            <label for="town" class="required">Magaalada | City</label>
                                            <input type="text" placeholder="Magaalada | City*" id="region"  required />
                                        </div>
                                        
                                        <div class="single-input-item">
                                            <label for="street-address" class="required ">Wadanka | Country</label>
                                            <input type="text"  placeholder="Wadanka | Country*" id="country"   required />
                                        </div>



                                        <div class="single-input-item">
                                            <label for="state">Teleefan | Mobile</label>
                                            <input type="text" placeholder="Teleefan | Mobile*"  value="<?=$rt['mobile']?>" id="mobile" required  />
                                            <input type="hidden" placeholder="Teleefan | Mobile*" id="userid"  value="<?=$_SESSION['userid']?>" />
                                        </div>

                                        

                                        

                                       
                                    
                                </div>
                            </div>
                        </div>

                        <!-- Order Summary Details -->
                        <div class="col-lg-6">
                            <div class="order-summary-details">
                                <h2>Your Order Summary</h2>
                                <div class="order-summary-content">
                                    <!-- Order Summary Table -->
                                    <div class="order-summary-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="font-weight:bold">Products</th>
                                                    <th style="font-weight:bold">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody><?php
									$sum=0;
									$ui=select("SELECT * FROM `cart` INNER JOIN product ON cart.product_id=product.id WHERE cart.userid='".$_SESSION['userid']."' order by cart.id desc ");
									while($k=mysqli_fetch_array($ui))
									{
										extract($k);
									?>
                                                <tr>
                                                    <td><a href="single-product.php"><?=substr(ucwords($title), 0,30)?> <strong> × <?=$quantity?></strong></a>
                                                    </td>
                                                    <td>$ <?=$total_price?></td>
                                                </tr>
												<?php
												$sum=$sum+$total_price;
									}
												?>
                                                
                                            </tbody>
                                            <tfoot>
                                               
                                               
                                                <tr>
                                                    <td style="font-weight:bold">Total Amount</td>
                                                    <td style="font-weight:bold">$ <?=$sum?></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- Order Payment Method -->
                                    <div class="order-payment-method">
                                        <h5>PAYMENT METHODS</h5>
                                        </br>
                                         <div class="single-payment-method show">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="cashon2"  name="hu" value="cash_on" class="custom-control-input"  />
                                                    <label class="custom-control-label" for="cashon2">Cash on delivery</label>
                                                </div>
                                            </div>
                                           
                                        </div>
                                         <div class="single-payment-method show">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="cashon1"  name="hu" value="33210580_Salaam_Bank" class="custom-control-input"  />
                                                    <label class="custom-control-label" for="cashon1">33210580  | Salaam Bank (*789*33210580*Lacagta#)</label>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="single-payment-method show">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="cashon"  name="hu" value="614754448_EVC" class="custom-control-input"  />
                                                    <label class="custom-control-label" for="cashon">614754448 | EVC (*712*614754448*Lacagta#)</label>
                                                </div>
                                            </div>
                                           
                                        </div>
                                 
                                        <!-- <div class="single-payment-method">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="checkpayment" value="09088988_SAHAL" name="hu" class="custom-control-input" />
                                                    <label class="custom-control-label" for="checkpayment"> 09088988| SAHAL</label>
                                                </div>
                                            </div> 
                                            <div class="payment-method-details" data-method="check">
                                                <p>Mobile Payments [Dooro moobil number-ka aad lacagta kubixinaso | Choose the mobile number you want to pay the money]</p>
                                            </div>
                                        </div> -->
									
                                        <div class="single-payment-method">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="paypalpayment" value="624754448_EDAHAB" name="hu"  class="custom-control-input" />
                                                    <label class="custom-control-label" for="paypalpayment">624754448 | EDAHAB (*113*624754448*Lacagta#)</label>
                                                </div>
                                            </div>
                                            <div class="payment-method-details" data-method="paypal">
                                                <p>Mobile Payments [Dooro moobil number-ka aad lacagta kubixinaso | Choose the mobile number you want to pay the money]</p>
                                            </div>
                                        </div>
                                         <div class="single-payment-method">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="directbank"value="634754448 _ZAAD" name="hu"  class="custom-control-input" />
                                                    <label class="custom-control-label" for="directbank">634754448  | ZAAD (*880*634754448*Lacagta#)</label>
                                                </div>
                                            </div>
                                            <div class="payment-method-details" data-method="bank">
                                                <p>Mobile Payments [Dooro moobil number-ka aad lacagta kubixinaso | Choose the mobile number you want to pay the money]</p>
                                            </div>
                                        </div>
                                        <div class="summary-footer-area">
                                            <div class="custom-control custom-checkbox mb-20">
                                                <input type="checkbox" checked class="custom-control-input" id="terms" required />
                                                <label class="custom-control-label" checked for="terms">I have read and agree to
                                                    the website <a href="<?=$site?>">terms and conditions.</a></label>
                                            </div>
                                            <button type="submit" id="placeorder" class="btn btn__bg">Dhamaystir Dalabkaaga | Place Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                                    
                    </div>
                </div>
                <div id="char"></div>
				<div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>Ogeysiis | Notice</h1>
                                <ul class="breadcrumb">
                                    <li >Waxaad ku dalban kartaa Online waxaadna ka soo qaadan kartaa Xarunta sayladda | You can order by online and pick up from the Sayladda Store.

</li>
                                    <li >Dalabka Muqdisho gudihiisa ah wuxuu qaadanayaa 24-Saac gudahood in aad hesho | An Order inside Mogadishu will take 24 hours to be received.
</li>
                                    <li  >Dalabka ka baxsan Muqdisho gudaheeda wuxuu qaadanayaa 1-3 maalin in aad hesho | An Order outside Mogadishu will take 1-3 days to be received.</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
				



            </div>
        </div>
        <!-- checkout main wrapper end -->
<?php
}
else
{
    ?>
    <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>Empty cart</h1>
                                
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </br>
    <?php
}
?>
    </main>
    <!-- main wrapper end -->
<?php include"include/footer.php";?>
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/active.js"></script>
	<script>
		$(document).ready(function () {
		    $("#placeorder").click(function(){
		        $(this).prop('disabled', true);
		        var name=$("#name").val();
		        var address=$("#address").val();
		        var country=$("#country").val();
		        var region=$("#region").val();
		        var mobile=$("#mobile").val();
		        var email=$("#email").val();
		        var userid=$("#userid").val();
		        var shipping = $("input[name='shipping']:checked"). val();
				var payvia = $("input[name='hu']:checked"). val();
		         if(name=='' || address=='' || country=='' || region=='' || mobile=='' || email=='')
		         {
		             if(name=='')
		             {
		                $("#name").css("border","2px solid #FF0000");
		             }
		              if(address=='')
		             {
		                $("#address").css("border","2px solid #FF0000");
		             }
		             if(country=='')
		             {
		                $("#country").css("border","2px solid #FF0000");
		             }
		             if(region=='')
		             {
		                $("#region").css("border","2px solid #FF0000");
		             }
		             if(mobile=='')
		             {
		                $("#mobile").css("border","2px solid #FF0000");
		             }
		             if(email=='')
		             {
		                $("#email").css("border","2px solid #FF0000");
		             }
		             $("#display").html('<div class="alert alert-danger"><i>Something is missing...</i></div>');
		            
		         }
		         else
		         {
		             var myurl='<?=$site?>/api/submitformdata.php';
		            
		                  $.ajax({
		            type: 'POST',
			url: myurl,
			data: {"name":name,"address":address,"country":country,"region":region,"mobile":mobile,"email":email,"userid":userid,"payvia":payvia},
			success: function(response){
			  
			   if(response==1)
			   {
			       $("#char").html('<div class="breadcrumb-area"><div class="container"><div class="row"><div class="col-12"><div class="breadcrumb-wrap"><nav aria-label="breadcrumb"><h1>Thank you. Your order has been received.</h1><ul class="breadcrumb"><li class="breadcrumb-item"><a href="<?=$site?>">Home</a></li><li class="breadcrumb-item active" aria-current="page">checkout</li></ul></nav></div></div></div></div></div>');
			       
			      setTimeout(function(){
            window.location.href = 'https://sayladda.com';
         }, 10000);
			     
			   }
			   else
			   {
			      $("#char").html('<div class="breadcrumb-area"><div class="container"><div class="row"><div class="col-12"><div class="breadcrumb-wrap"><nav aria-label="breadcrumb"><h1 style="color:red">Something Went Wrong</h1></nav></div></div></div></div></div>');
			       setTimeout(function(){
            window.location.href = 'https://sayladda.com/checkout.php';
         }, 10000);
			   }
			}
		        });  
		         }
		 
		    });
		    
		   

		});
	</script>
</body>

</html>