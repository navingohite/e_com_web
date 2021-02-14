<?php
require_once"include/dbconfig.php";
if(isset($_SESSION['userid']))
{
	
}
else
{
	echo"<script>window.location='https://sayladda.com/login-register.php';</script>";
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

    <!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

    <?php include"include/header.php";?>
    <?php include"include/mobile_nav.php";?>
   
    
    
    <!-- main wrapper start -->
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
                                <h1>cart</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=$site?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper pt-50 pb-50">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Cart Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Thumbnail</th>
                                            <th class="pro-title">Product</th>
                                            <th class="pro-price">Price</th>
                                            <th class="pro-quantity">Quantity</th>
                                            <th class="pro-subtotal">Total</th>
                                            <th class="pro-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									
									$ui=select("SELECT * FROM `cart` INNER JOIN product ON cart.product_id=product.id WHERE cart.userid='".$_SESSION['userid']."' order by cart.id desc ");
									while($k=mysqli_fetch_array($ui))
									{
										extract($k);
									?>
                                        <tr>
                                            <td class="pro-thumbnail"><?php
						  $tt="SELECT * FROM `picture` where product_id='".$k['product_id']."' order by id asc limit 1";
								$abc=select($tt);
					$kbc=mysqli_fetch_array($abc);
					
								?>
											<a target="_blank" href="<?=$site?>/assets/upload/<?=$kbc['image']?>"><img class="img-fluid" src="<?=$site?>/assets/upload/<?=$kbc['image']?>" alt="<?=$kbc['image']?>" /></a>
											
											</td>
                                            <td class="pro-title"><a href="#"><?=ucwords($title)?></a></td>
                                            <td class="pro-price"><span>$ <?=$price?></span></td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty" ><input class="productid" cartid=<?=$k[0]?> product=<?=$k['product_id']?> type="text" value="<?=$quantity?>"></div>
                                            </td>
                                            <td class="pro-subtotal"><span>$ <?=$total_price?></span></td>
                                            <td class="pro-remove"><a href="api/remove_cart.php?id=<?=$k[0]?>"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
										<?php
									}
										?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- Cart Update Option -->
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 ml-auto">
                            <!-- Cart Calculation Area -->
                            <div class="cart-calculator-wrapper">
                                <div class="cart-calculate-items">
                                    <h3>Cart Totals</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                           
                                            <tr class="total">
                                                <td>Total</td>
                                                <td class="total-amount">
									<?php
									$ui=select("SELECT sum(cart.total_price) FROM `cart` INNER JOIN product ON cart.product_id=product.id WHERE cart.userid='".$_SESSION['userid']."' order by cart.id desc ");
									$ti=mysqli_fetch_array($ui);
									echo "$ ".$ti[0];
									?>
									</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <a href="<?=$site?>/checkout.php" class="btn btn__bg d-block">Proceed To Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
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
                                <h1>Empty </h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=$site?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </br></br>
    <?php
}
        ?>

    </main>
 <?php include"include/footer.php";?>
    
   
    <!--== End Footer Area Wrapper ==-->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!-- All vendor & plugins & active js include here -->
    <!--All Vendor Js -->
    <script src="assets/js/vendor.js"></script>
    <!-- Active Js -->
    <script src="assets/js/active.js"></script>
	<script>
	function update(a, b, c){
		
		$.ajax({
			type: 'POST',
			url:  'api/updatecart.php',
			data: {"newVal":a,"productid":b,"cartid":c},
			success: function(response){
				if(response==1)
				{
				window.location='<?=$site?>/cart.php';
				}
				else
				{
					alert('Something Went Wrong');
				}
			}
});
return false; 
	}
	$('.pro-qty').prepend('<span class="dec qtybtn">-</span>');
    $('.pro-qty').append('<span class="inc qtybtn">+</span>');
    $('.qtybtn').on('click', function () {
        var $button = $(this);
		 var productid = $button.parent().find('input').attr('product');
		 var cartid = $button.parent().find('input').attr('cartid');
		
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc'))
			{
            var newVal = parseFloat(oldValue) + 1;
		
			update(newVal, productid, cartid);
        } 
		else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
				update(newVal, productid, cartid);
            } else {
                newVal = 0;
            }
            }
			
        $button.parent().find('input').val(newVal);
    });
	</script>
</body>

</html>