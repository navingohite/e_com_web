<?php
require_once"include/dbconfig.php";
if(isset($_SESSION['userid']))
{
if(isset($_REQUEST['id']))
{
    $ji=select("select * from wishlist where pid='".$_REQUEST['id']."' and userid='".$_SESSION['userid']."'");
    $kp=mysqli_num_rows($ji);
    if($kp==1)
    {
        
    }
    else
    {
   iud("INSERT INTO `wishlist`(`pid`, `userid`) VALUES  ('".$_REQUEST['id']."', '".$_SESSION['userid']."') ");
    }
    
}

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
                                <h1>wishlist</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=$site?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">wishlist</li>
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
                                            <th class="pro-price">Price</th>
                                            <th class="pro-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $hj=select("SELECT * FROM `wishlist` INNER JOIN product ON wishlist.pid=product.id WHERE wishlist.userid='".$_SESSION['userid']."'");
while($uj=mysqli_fetch_array($hj))
{
    extract($uj);
?>
                                        <tr>
                                             <?php
                                                            $ab = select("SELECT * FROM `picture` where product_id='" . $pid . "' LIMIT 1");
                                                            while ($kb = mysqli_fetch_array($ab)) {
                                                                extract($kb);
                                                                ?>
                                            <td class="pro-thumbnail"><a href="<?=$site?>/product/<?=$p_url?>"><img class="img-fluid" src="<?=$site?>/assets/upload/<?=$image?>" alt="Product" /></a></td>
                                           <?php
                                                            }
                                           ?><td class="pro-title"><a href="<?=$site?>/product/<?=$p_url?>"><?=$title?></a></td>
                                            <td class="pro-price"><span> $ <?=$price?></span></td>
                                        
                                            <td class="pro-remove"><a href="<?=$site?>/api/remove_wishlist.php?id=<?=$uj[0]?>"><i class="fa fa-trash-o"></i></a></td>
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
                <!-- Wishlist Page Content End -->
            </div>
        </div>
        <!-- wishlist main wrapper end -->

    </main>
    <!-- main wrapper end -->

    <!--== Start Footer Area Wrapper ==-->
    <footer class="footer-wrapper bg-dark ">

        <!-- footer top area start -->
        <div class="footer-top">
            <div class="container">
                <div class="footer-features-inner">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="single-features-item footer-feature-item">
                                <div class="features-icon">
                                    <i class="ion-ios-telephone"></i>
                                </div>
                                <div class="features-content">
                                    <h5>+252 61 4754448
</h5>
                                    <p>Free support line!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="single-features-item footer-feature-item">
                                <div class="features-icon">
                                    <i class="ion-help-buoy"></i>
                                </div>
                                <div class="features-content">
                                    <h5>info@sayladda.com</h5>
                                    <p>Orders Support!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="single-features-item footer-feature-item">
                                <div class="features-icon">
                                    <i class="ion-clock"></i>
                                </div>
                                <div class="features-content">
                                    <h5>Saturday-Thursday</h5>
                                    <p>Working Days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer top area start -->

        <!-- footer widget area start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="footer-widget-inner">
                    <div class="row">
                        <!-- footer widget item start -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget-item">
                                <div class="footer-widget-logo">
                                    <a href="index.php">
                                        <img src="assets/img/logo/logo.png" alt="">
                                    </a>
                                </div>
                                <div class="footer-widget-body">
                                    <p>
                                      At Sayladda we care about your online shopping. Our agents at Sayladda online Shopping market are available 24/7 to serve you. 
                                      Sayladda "Your gateway to online shopping”. If you need any assistance please do not hesitate to contact with us at any time!</p>
                                    <h6 class="contact-info-title">Contact info:</h6>
                                    <p>Km4, Somoil building, 2nd floor, Mogadishu, Somalia.</p>
                                    <div class="footer-social-link">
                                        <a href="https://www.facebook.com/Sayladda/"><i class="fa fa-facebook"></i></a>
                                        <a href="https://www.instagram.com/sayladdasomalia/"><i class="fa fa-instagram"></i></a>
                                        <a href="https://twitter.com/sayladda"><i class="fa fa-twitter"></i></a>
                                        <a href="https://www.youtube.com/channel/UC_mTMIdFVbIme37jfe0ZEdg?view_as=subscriber"><i class="fa fa-youtube"></i></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer widget item end -->

                        <!-- footer widget item start -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget-item">
                                <div class="footer-widget-title">
                                    <h5>information</h5>
                                </div>
                                <ul class="footer-widget-body">
                                    <li><a href="#">Specials</a></li>
                                    <li><a href="#">New products</a></li>
                                    <li><a href="#">Top sellers</a></li>
                                    <li><a href="#">Our stores</a></li>
                                    <li><a href="#">About us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer widget item end -->

                        <!-- footer widget item start -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget-item">
                                <div class="footer-widget-title">
                                    <h5>my account</h5>
                                </div>
                                <ul class="footer-widget-body">
                                    <li><a href="my-account.php">my account</a></li>
                                    <li><a href="login-register.php">login/register</a></li>
                                    <li><a href="#">my orders</a></li>
                                    <li><a href="#">my credit slips</a></li>
                                    <li><a href="#">my addresses</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer widget item end -->

                        <!-- footer widget item start -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget-item">
                                <div class="footer-widget-title">
                                    <h5>customer service</h5>
                                </div>
                                <ul class="footer-widget-body">
                                    <li><a href="#">site map</a></li>
                                    <li><a href="#">special</a></li>
                                    <li><a href="#">returns</a></li>
                                    <li><a href="#">Order history</a></li>
                                    <li><a href="#">my account</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer widget item end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- footer widget area end -->

        <!-- newsletter area start -->
        <div class="newsletter-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <div class="newsletter-title">
                            <div class="newsletter-icon">
                                <i class="ion-ios-email"></i>
                            </div>
                            <h3>join Sayladda newsletter</h3>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-7">
                        <div class="newsletter-inner">
                            <form id="mc-form">
                                <input type="email" class="news-field" id="mc-email" autocomplete="off" placeholder="Enter your email address">
                                <button class="news-btn" id="mc-submit">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="payment-method">
                            <img src="assets/img/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter area end -->

        <!-- footer bottom area start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright © 2020 <a href="#">Sayladda</a>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom area end -->

    </footer>
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
</body>

</html>