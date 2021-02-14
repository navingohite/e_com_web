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
    <title>Online shopping site for electronics, women’s clothing, men’s clothing, baby & toys, groceries and etc.</title>

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
       

    
    <main class="body-bg">

        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>Product</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=$site?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- wishlist main wrapper start -->
        <div class="wishlist-main-wrapper pt-50 pb-50">
            <div class="container">
                <!-- Wishlist Page Content Start -->
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Wishlist Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Thumbnail</th>
                                            <th class="pro-title">Product</th>
                                            <th class="pro-price">Quantity</th>
                                            <th class="pro-quantity">Total Price</th>
                                            <th class="pro-subtotal">Size </th>
                                            
                                            <th class="pro-remove">Color</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
										$b=1;
										$m=select("SELECT * FROM `orderdetail` INNER JOIN product ON orderdetail.pid=product.id  WHERE orderdetail.orderid='".$_REQUEST['id']."' ");
										while($p=mysqli_fetch_array($m))
										{
										    extract($p);
									    ?>
                                                            
                                        <tr>
                                            <?php
                                                            $ab = select("SELECT * FROM `picture` where product_id='" . $pid . "' LIMIT 1");
                                                            while ($kb = mysqli_fetch_array($ab)) {
                                                                extract($kb);
                                                                ?>
                                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="<?=$site?>/assets/upload/<?=$image?>" alt="Product" /></a></td>
                                           <?php
                                                            }
                                           ?>
                                            <td class="pro-title"><a href="<?=$site?>/product/<?=$p_url?>"><?=$p['title']?></a></td>
                                            <td class="pro-price"><span><?=$p[15]?></span></td>
                                            <td class="pro-quantity"><span >$ <?=$p[16]?></span></td>
                                            <td class="pro-quantity"><span class="text-success"><?=$p[17]?></span></td>
                                         <td class="pro-quantity"><span class="text-success"> <?=$p[18]?></span></td>
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
    
    </main>
    <?php include"include/footer.php";?>
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <script src="assets/js/vendor.js"></script>
    <!-- Active Js -->
    <script src="assets/js/active.js"></script>
</body>

</html>