<?php
require_once"include/dbconfig.php";
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

    

</head>

<body>

    <?php include"include/header.php";?>
    <?php include"include/mobile_nav.php";?>
   
    <!-- off-canvas menu end -->



    <!-- main wrapper start -->
    <main class="body-bg">

        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>shop</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">shop</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- page main wrapper start -->
        <div class="shop-main-wrapper pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <!-- sidebar area start -->
                   
                    <!-- sidebar area end -->

                    <!-- shop main wrapper start -->
                    <div class="col-lg-12 order-1 order-lg-2">
                        <div class="shop-product-wrapper">
                            <!-- shop product top wrap start -->
                            <div class="shop-top-bar">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                        <div class="top-bar-left">
                                            <div class="product-view-mode">
                                                <a class="active" href="#" data-target="grid-view"><i class="fa fa-th"></i></a>
                                                <a href="#" data-target="list-view"><i class="fa fa-list"></i></a>
                                            </div>
                                            <div class="product-amount">
                                                <p>Showing 1–16 of 21 results</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 order-1 order-md-2">
                                        <div class="top-bar-right">
                                            <div class="product-short">
                                                <p>Sort By : </p>
                                                <select class="nice-select" name="sortby">
                                                    <option value="trending">Relevance</option>
                                                    <option value="sales">Name (A - Z)</option>
                                                    <option value="sales">Name (Z - A)</option>
                                                    <option value="rating">Price (Low &gt; High)</option>
                                                    <option value="date">Rating (Lowest)</option>
                                                    <option value="price-asc">Model (A - Z)</option>
                                                    <option value="price-asc">Model (Z - A)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop product top wrap start -->

                            <!-- product item list start -->
                            <div class="shop-product-wrap grid-view row">
							<?php
							if(isset($_REQUEST['text']))
							{
								   $q="SELECT * FROM product WHERE title  LIKE '%".$_REQUEST['text']."%' order by id desc";
							}
							else
							{
								 $q="SELECT * FROM product order by rand()";
							}
							
							$q1=select($q);
						while($a1=mysqli_fetch_array($q1))
						{
							extract($a1);
						
						?>
                               
                                <div class="col-md-3 col-sm-6">
                                    <!-- product grid start -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                           <a href="<?=$site?>/product/<?=$p_url?>">
                                               <?php
								$ab=select("SELECT * FROM `picture` where product_id='".$id."' LIMIT 1");
					while($kb=mysqli_fetch_array($ab))
					                {
						extract($kb);
								?>
                                                <img style="height:200px;width:247px" src="<?=$site?>/assets/upload/<?=$image?>"  alt="">
												<?php
									}
												?> </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name"><a href="<?=$site?>/product/<?=$p_url?>"><?=substr(ucwords($title),0,25)?></a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$ <?=$price?></span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product grid end -->

                                    <!-- product list item end -->
                                    
                                    <!-- product list item end -->
                                </div>
								<?php
									}
								?>
                                <!-- product single item start -->

                                <!-- product single item start -->
                              
                                    <!-- product grid end -->

                                    
                                    <!-- product list item end -->
                                </div>
                                <!-- product single item start -->
                            </div>
                            <!-- product item list end -->

                            <!-- start pagination area -->
                            <div class="paginatoin-area text-center">
                                <ul class="pagination-box">
                                    <li><a class="previous" href="#"><i class="ion-ios-arrow-left"></i>Prev</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a class="next" href="#">Next<i class="ion-ios-arrow-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- end pagination area -->
                        </div>
                    </div>
                    <!-- shop main wrapper end -->
                </div>
            </div>
        </div>
        <!-- page main wrapper end -->

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
                                    <h5>0123456789</h5>
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
                                    <h5>mail@yourdomain.com</h5>
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
                                    <h5>Mon - Fri / 8:00 - 18:00</h5>
                                    <p>Working Days/Hours!</p>
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
                                    <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                                    <h6 class="contact-info-title">Contact info:</h6>
                                    <p>169-C, Technohub, Dubai Silicon Oasis.</p>
                                    <div class="footer-social-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-youtube"></i></a>
                                        <a href="#"><i class="fa fa-rss"></i></a>
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
                            <h3>join Gengar newsletter</h3>
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
                            <p>Copyright © 2019 <a href="#">Gengar</a>. All rights reserved.</p>
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