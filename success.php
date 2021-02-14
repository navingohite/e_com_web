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

        <!-- breadcrumb area start -->
       
       <!--<div class="breadcrumb-area"><div class="container"><div class="row"><div class="col-12"><div class="breadcrumb-wrap"><nav aria-label="breadcrumb"><h1>Mahadsanid. Dalab kaagii waan helnay.</h1> <br><h1>Thank you. Your order has been received..</h1><ul class="breadcrumb"></ul>
       </br></br>
       <a href="<?=$site?>"><button class="btn" style="background-color:#24babb;color:white">Back to Home</button></a>
       </nav></div></div></div></div></div>

   </br>
    </br>
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
			       $("#char").html('<div class="breadcrumb-area"><div class="container"><div class="row"><div class="col-12"><div class="breadcrumb-wrap"><nav aria-label="breadcrumb"><h1>Waad ku mahadsan tahay dalabkaaga. Adeega dalabkaagu wuxuu noqon doonaa mid tagan oo aan lafulin illaa iyo inta aan ka xaqiijinano in lacagta aan helnay.</h1><h1>	Thanks for your order. It’s on-hold until we confirm that payment has been received.</h1><ul class="breadcrumb"><li class="breadcrumb-item"><a href="<?=$site?>">Home</a></li><li class="breadcrumb-item active" aria-current="page">checkout</li></ul></nav></div></div></div></div></div>');
			       
			      setTimeout(function(){
            window.location.href = 'https://sayladda.com/checkout.php';
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