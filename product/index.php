<?php
require_once"../include/dbconfig.php";
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
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon" />

    <!-- Google fonts include -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,900" rel="stylesheet">

    <!-- All Vendor & plugins CSS include -->
    <link href="../assets/css/vendor.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">

   

</head>

<body>

    <!-- Start Header Area -->
    <?php include"../include/header.php";?>
    <?php include"../include/mobile_nav.php";?>


    <main class="body-bg">

        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>product details</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="shop.php">shop</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">product details</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- page main wrapper start -->
        <div class="shop-main-wrapper pt-50">
            <div class="container">
                <div class="row">
                    <!-- product details wrapper start -->
                    <div class="col-lg-12 order-1 order-lg-2">
                        <!-- product details inner end -->
                        <div class="product-details-inner">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="product-large-slider mb-20">
									<?php
						 $t="SELECT * FROM `picture` where product_id in (select id from product where p_url='".$_REQUEST['url']."')";
								$ab=select($t);
					while($kb=mysqli_fetch_array($ab))
					{
						extract($kb);
								?>
                                        <div class="pro-large-img img-zoom">
                                            <img src="../assets/upload/<?=$image?>" style="height:500px;width:547px"alt="" />
                                        </div>
										<?php
					}
										?>
                                        
                                    </div>
                                    <div class="pro-nav slick-row-10 slick-arrow-style">
									<?php
						 $t="SELECT * FROM `picture` where product_id in (select id from product where p_url='".$_REQUEST['url']."')";
								$ab=select($t);
					while($kb=mysqli_fetch_array($ab))
					{
						extract($kb);
								?>
                                        <div class="pro-nav-thumb">
                                            <img src="../assets/upload/<?=$image?>" style="height:100px" alt="" />
                                        </div>
										<?php
					}
										?>
                                       
                                    </div>
                                </div>
								 <?php
						 $t="SELECT * FROM `product` where p_url='".$_REQUEST['url']."'";
								$ab=select($t);
					while($kb=mysqli_fetch_array($ab))
					{
						extract($kb);
								?>
                                <div class="col-lg-7">
                                    <div class="product-details-des">
                                        <h5 class="product-name"><?=$title?></h5>
                                        
                                        <div class="price-box">
                                            <span class="price-regular">$ <?=$price?></span>
                                            <span class="price-old"><del></del></span>
                                        </div>
                                        <p><?=$description?></p>
                                        <!--<div class="availability mt-10 mb-20">
                                            <i class="ion-checkmark-circled"></i>
                                            <span>200 in stock</span>
                                        </div>-->
                                       
                                        
											 <?php
						$po=select("select * from size where product_id IN (SELECT id FROM `product` where p_url='".$_REQUEST['url']."') order by id desc");
						$pp=mysqli_num_rows($po);
						if($pp>=1)
						{
						    echo	'<span style="font-weight:bold"> </span>'; 
						    echo '<input type="hidden" id="sizedata"  value="">';
						    ?>
							<div class="pro-size mb-26 mt-26">
                                            <h5>size :</h5>
						    <select class="sizebutton nice-select form-control" num="<?=$pp?>">
						        <option value="">Select</option>
						        <?php
						    while($i=mysqli_fetch_array($po))
						    {
					?>
					<option value="<?=$i['size']?>"><?=$i['size']?></option>
					<?php
					}
					?>
					
					</select> </div><?php
						}
						?>
                                            
                                       
                                        <?php
						$poo=select("select * from color where product_id IN (SELECT id FROM `product` where p_url='".$_REQUEST['url']."') order by id desc");
						$ppp=mysqli_num_rows($poo);
						if($ppp>=1)
						{
						    echo '<input type="hidden" id="colordata"  value="">';
						    ?><div class="color-option mb-26">  <h5>color :</h5>
						    <select class="nice-select colorbutton form-control" num="<?=$ppp?>">
						          <option value="">Select</option>
						    <?php
						    while($ii=mysqli_fetch_array($poo))
						    {
					?>
							        <option value="<?=$ii['color']?>"><?=$ii['color']?></option>
				
				
					<?php
					}
					?>
					</select> </div>
					<?php
						}
						?>	
                                         <div class="quantity-cart-box d-flex align-items-center">
                                            <div class="quantity">
                                                <div class="pro-qty"><input type="text" class="quan" value="1"></div>
                                            </div>
                                            <div class="action_link">
											<?php
											if(isset($_SESSION['userid']))
										{
											$rp=select("SELECT id FROM `product` where p_url='".$_REQUEST['url']."'");
											$oo=mysqli_fetch_array($rp);
											?>
											
                                                <a class="Cartt btn btn-cart" userid=<?=$_SESSION['userid']?> val="<?=$oo[0]?>" href="#"><i class="ion-bag"></i>Add to cart</a>
												<?php
										}
										else
										{
											?>
                                                <a class="btn btn-cart" href="<?=$site?>/login-register.php"><i class="ion-bag"></i>Add to cart</a><?php
										}
												?>
                                            </div>
                                        </div>
                                        <div class="like-icon mt-20">
                                            <a class="facebook" href="https://www.facebook.com/Sayladda/"><i class="fa fa-facebook"></i>like</a>
                                            <a class="twitter" href="https://twitter.com/sayladda"><i class="fa fa-twitter"></i>tweet</a>
                                            <a class="instagram" href="https://www.instagram.com/sayladdasomalia"><i class="fa fa-instagram"></i>follow</a>
                                            <a class="Youtube" href="https://www.youtube.com/channel/UC_mTMIdFVbIme37jfe0ZEdg?view_as=subscriber"><i class="fa fa-youtube"></i>Youtube</a>
                                        </div>
                                        <div class="share-icon mt-18">
                                            <h5>share product:</h5>
                                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?=$site?>/product/<?=$_REQUEST['url']?>" ><i class="fa fa-facebook"></i></a>
                                            <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fsayladda.com%2F&text=Sayladda"><i class="fa fa-twitter"></i></a>
                                             <a href="https://www.instagram.com/sahre/?sayladdasomalia/"><i class="fa fa-instagram"></i></a>
                                            <a href="https://youtube.com/share?url=https%3A%2F%2Fsayladda.com%2F"><i class="fa fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php
					}
							?>
                        </div>
                        <div class="product-details-reviews mt-50">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-review-info">
                                        <ul class="nav review-tab">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#tab_one">description</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_two">information</a>
                                            </li>
                                          
                                        </ul>
                                        <div class="tab-content reviews-tab">
                                            <div class="tab-pane fade show active" id="tab_one">
                                                <div class="tab-one">
                                                    <p><?=$description?></p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab_two">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                       <?php
                                                        $po7=select("select * from color where product_id IN (SELECT id FROM `product` where p_url='".$_REQUEST['url']."') order by id desc");
				                                   $ok=mysqli_num_rows($po7);
                                                       if($ok>=1)
						{
                                                       
                                                       ?> <tr>
                                                            <td>color</td>
                                                            <td>
                            <?php
                           
						    while($ii=mysqli_fetch_array($po7))
						    {
					?>     <?=$ii['color']?>, 
					           <?php
						    }
					?></td>
                                                        </tr>
                                                        <?php
						}
                                                        ?>
                                                        <?php
						$po8=select("select * from size where product_id IN (SELECT id FROM `product` where p_url='".$_REQUEST['url']."') order by id desc");
						$ppl=mysqli_num_rows($po8);
						if($ppl>=1)
						{
						    ?>
                                                        <tr>
                                                            <td>size</td>
                                                            <td><?php
                           
						    while($ii7=mysqli_fetch_array($po8))
						    {
					?>     <?=$ii7['size']?>, 
					           <?php
						    }
					?></td>
                                                        </tr>
                                                        <?php
						}
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details reviews end -->
                    </div>
                    <!-- product details wrapper end -->
                </div>
            </div>
        </div>
        <!-- page main wrapper end -->

        <!-- most viewed product area start -->
        <section class="related-products-area pt-50 pb-50">
            <div class="container">
                <div class="deals-wrapper bg-white">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-header-deals">
                                <div class="section-title-deals">
                                    <h4>Related Product</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="most-viewed-carousel-2 slick-arrow-style">
                                
<?php
						echo  $t="SELECT * FROM `product` where category in (select category from product where p_url='".$_REQUEST['url']."') order by rand() limit 0,5"; 
								$ab=select($t);
								echo mysqli_num_rows($ab);
								while($kb=mysqli_fetch_array($ab))
					{
						extract($kb);
								?>
                                <div class="product-slide-item">
                                    <div class="product-item mb-0">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
											<?php
						 $tt="SELECT * FROM `picture` where product_id='".$kb[0]."' order by id desc limit 1";
								$abc=select($tt);
					$kbc=mysqli_fetch_array($abc);
					
								?>
                                                <img src="../assets/upload/<?=$kbc['image']?>" style="height:300px" alt="">
												
                                            </a>
                                            <div class="add-to-links">
                                                        <a href="<?=$site?>/wishlist.php?id=<?=$kb['id']?>" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        </div>
                                        </div>
                                        <div class="product-content p-0">
                                            <h5 class="product-name"><a href="<?=$site?>/product/<?=$p_url?>"><?=substr(ucwords($title),0,25)?></a></h5>

											<div class="price-box">
                                                <span class="price-regular">$ <?=$price?></span>
                                                <span class="price-old"><del>$ <?=$cut_price?></del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="<?=$site?>/product/<?=$p_url?>"><i class="ion-eye"></i> View Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
<?php
					}
?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php include"../include/footer.php";?>
    <!--== End Footer Area Wrapper ==-->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!-- All vendor & plugins & active js include here -->
    <!--All Vendor Js -->
    <script src="../assets/js/vendor.js"></script>
    <!-- Active Js -->
    <script src="../assets/js/active.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			var myurl="<?=$site?>/api/addtocart.php";
		    $(".sizebutton").change(function(){
		        var numm=$(this).attr('num');
		       var size=$(this).val();

		        if(numm>=1)
		        {
		            $("#sizedata").val(size);
		        }
		        else
		        {
		            
		        }
		    });
		    $(".colorbutton").change(function(){
		        var numm=$(this).attr('num');
		       var color=$(this).val();

		        if(numm>=1)
		        {
		            $("#colordata").val(color);
		        }
		        else
		        {
		            
		        }
		    });
		    	$(".Cartt").click(function(e){
	  			var productid=$(this).attr('val');
var userid=$(this).attr('userid');
var sizedata= $("#sizedata").val();
var colordata= $("#colordata").val();
var numm=$(".sizebutton").attr('num');
var numm1=$(".colorbutton").attr('num');
var quantity=$(".quan").val();

if(numm>=1 && numm1>=1)
{
   if(sizedata=='' &&  colordata=='')
    {
        
       alert('Please Select Size & Color');
        
    }
    else
    {
        if(sizedata=='')
        {
          alert('Please Select Size ');   
        }
        else
        {
            if(colordata=='')
            {
                alert('Please Select Color ');
            }
            else
            {
				
          $.ajax({
			type: 'POST',
			url: myurl,
			data: {"id":productid,"userid":userid,"sizedata":sizedata,"colordata":colordata,"quantity":quantity},
			success: function(response){
				
				
				if(response==1)
				{
				window.location='<?=$site?>/cart.php';
				}
				
				if(response==2)
				{
					alert('Already Added To Cart');
				}
				
			}
});
return false;  
        }
        
    }
    
}
}
else if(numm>=1)
{
   if(sizedata=='')
    {
        
       alert('Please Select Size ');
        
    }
    else
    {
    $.ajax({
			type: 'POST',
			url:  myurl,
			data: {"id":productid,"userid":userid,"sizedata":sizedata,"quantity":quantity},
			success: function(response){
				
				if(response==1)
				{
				window.location='<?=$site?>/cart.php';
				}
				
				if(response==2)
				{
					alert('Already Added To Cart');
				}
				
			}
});
return false;  
       
        
    
    
}
}
else if( numm1>=1)
{
   if( colordata=='')
    {
        
       alert('Please Select Color');
        
    }
    else
    {

          $.ajax({
			type: 'POST',
			url:  myurl,
			data: {"id":productid,"userid":userid,"colordata":colordata,"quantity":quantity},
			success: function(response){
				
				if(response==1)
				{
				window.location='<?=$site?>/cart.php';
				}
				
				if(response==2)
				{
					alert('Already Added To Cart');
				}
				
			}
});
return false;  
        
        
    
    
}
}

else
{
   $.ajax({
			type: 'POST',
			url:  myurl,
			data: {"id":productid,"userid":userid,"quantity":quantity},
			success: function(response){
				
				if(response==1)
				{
				window.location='<?=$site?>/cart.php';
				}
				
				if(response==2)
				{
					alert('Already Added To Cart');
				}
				
			}
});
return false; 
}

	  			    


});
		    
		    
			
		});
		
		
	// quantity change js
    $('.pro-qty').prepend('<span class="dec qtybtn">-</span>');
    $('.pro-qty').append('<span class="inc qtybtn">+</span>');
    $('.qtybtn').on('click', function () {
        var $button = $(this);
		 
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
			 
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
				 
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });

	</script>
</body>

</html>