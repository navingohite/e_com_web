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
        <title>Online shopping site for electronics, women’s clothing, men’s clothing, baby & toys, groceries and etc.</title>
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,900" rel="stylesheet">
        <link href="assets/css/vendor.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>

        <?php
        include"include/index_header.php";
        include"include/index_mobile_header.php";
        ?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60068b9fa9a34e36b96de1c9/1escp2rjn';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
        <main class="body-bg">

            <?php include"include/index-slider.php"; ?>

            <section class="service-features pt-50">
                <div class="container">
                    <div class="service-features-inner bg-white">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-features-item">
                                    <div class="features-icon">
                                        <i class="ion-android-sync"></i>
                                    </div>
                                    <div class="features-content">
                                        <h5>Free return</h5>
                                        <p>30 days money back guarantee!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col lg-4 col-md-4">
                                <div class="single-features-item">
                                    <div class="features-icon">
                                        <i class="ion-social-usd"></i>
                                    </div>
                                    <div class="features-content">
                                        <h5>Free Shipping</h5>
                                        <p>Free shipping on all order</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-features-item">
                                    <div class="features-icon">
                                        <i class="ion-help-buoy"></i>
                                    </div>
                                    <div class="features-content">
                                        <h5>support 24/7</h5>
                                        <p>We support online 24 hours a day</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- service features end -->

            <!-- deals area start -->
            <section class="deals-area pt-50">
                <div class="container">
                    <div class="deals-wrapper bg-white">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-header-deals">
                                    <div class="section-title-deals">
                                        <h4>Latest Products</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="deals-item-wrapper">
                                    <div class="deals-carousel-active slick-arrow-style">


                                        <?php
                                        $q1 = select(" SELECT * FROM product  order by id desc limit 0,3");
                                        while ($a1 = mysqli_fetch_array($q1)) {
                                            extract($a1);
                                            ?>
                                            <div class="deals-slider-item">
                                                <div class="deals-item">
                                                    <div class="deals-thumb">
                                                        <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                            <?php
                                                            $ab = select("SELECT * FROM `picture` where product_id='" . $id . "' LIMIT 1");
                                                            while ($kb = mysqli_fetch_array($ab)) {
                                                                extract($kb);
                                                                ?>
                                                                <img style="height:200px;width:247px" src="assets/upload/<?= $image ?>">
                                                                <?php
                                                            }
                                                            ?>
                                                        </a>
                                                        <div class="add-to-links">
                                                        <a href="wishlist.php?id=<?=$a1['id']?>" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="deals-content">

                                                        <h4 class="product-name"> <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                                <?= substr(ucwords($title), 0, 25) ?></a>
                                                        </h4>
                                                        <p class="product-desc"><?= substr($description, 0, 50) ?></p>
                                                        <div class="price-box">
                                                            <span class="price-regular">$ <?= $price ?></span>
                                                            <span class="price-old"><del>$ <?= $cut_price ?></del></span>
                                                        </div>
                                                        <a class="btn btn-cart" href="<?= $site ?>/product/<?= $p_url ?>"><i class="ion-eye"></i> View Detail</a>
                                                        <!-- <div class="product-countdown" data-countdown="2019/05/20"></div>-->
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
                </div>
            </section>

            <div class="banner-statistics-area pt-50">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="img-container">
                                <a href="#"><img src="assets/img/banner/img3_home3.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner statistics end -->

            <!-- features categories area start -->
            <section class="features-categories-area pt-50">
                <div class="container">
                    <div class="section-wrapper bg-white">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-header">
                                    <!-- section title start -->
                                    <div class="section-title">
                                        <h4>Mens Wear</h4>
                                    </div>
                                    <!-- section title start -->

                                    <!-- product tab menu start -->
                                    <div class="feature-menu">
                                        <ul class="nav justify-content-start justify-content-lg-end">
                                            <li><a data-toggle="tab" class="active" href="#one">T-Shirts & Shirts</a></li>
                                            <li><a data-toggle="tab" href="#two">Pants</a></li>
                                            <li><a data-toggle="tab" href="#three"> Shoes</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 col-md-9">
                                <div class="products-area-wrapper mt-30">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="one">
                                            <div class="features-categories-wrapper">
                                                <div class="features-categories-active slick-arrow-style">
                                                    <?php
                                                    $q1 = select(" SELECT * FROM product  where sub_category='13' order by rand() limit 0,4");
                                                    while ($a1 = mysqli_fetch_array($q1)) {
                                                        extract($a1);
                                                        ?>
                                                        <div class="product-slide-item">
                                                            <div class="product-item">
                                                                <div class="product-thumb">
                                                                    <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                                        <?php
                                                                        $ab = select("SELECT * FROM `picture` where product_id='" . $id . "' LIMIT 1");
                                                                        while ($kb = mysqli_fetch_array($ab)) {
                                                                            extract($kb);
                                                                            ?>
                                                                            <img style="height:300px;width:347px" src="assets/upload/<?= $image ?>">
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </a>
                                                                    <div class="add-to-links">
                                                        <a href="wishlist.php?id=<?=$a1['id']?>" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h5 class="product-name"> <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                                            <?= substr(ucwords($title), 0, 25) ?></a>
                                                                    </h5> <div class="price-box">
                                                                        <span class="price-regular">$ <?= $price ?></span>
                                                                        <span class="price-old"><del>$ <?= $cut_price ?></del></span>
                                                                    </div>
                                                                    <div class="product-item-action">
                                                                        <a class="btn btn-cart" href="<?= $site ?>/product/<?= $p_url ?>"><i class="ion-eye"></i>View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>

                                                    <!-- product item start -->


                                                    <!-- product item start -->

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="two">
                                            <div class="features-categories-wrapper">
                                                <div class="features-categories-active slick-arrow-style">
                                                    <?php
                                                    $q1 = select(" SELECT * FROM product  where sub_category='14' order by rand() limit 0,4");
                                                    while ($a1 = mysqli_fetch_array($q1)) {
                                                        extract($a1);
                                                        ?>
                                                        <div class="product-slide-item">
                                                            <div class="product-item">
                                                                <div class="product-thumb">
                                                                    <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                                        <?php
                                                                        $ab = select("SELECT * FROM `picture` where product_id='" . $id . "' LIMIT 1");
                                                                        while ($kb = mysqli_fetch_array($ab)) {
                                                                            extract($kb);
                                                                            ?>
                                                                            <img style="height:300px;width:347px" src="assets/upload/<?= $image ?>">
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </a>
                                                              <div class="add-to-links">
                                                        <a href="wishlist.php?id=<?=$a1['id']?>" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        </div>  </div>
                                                                <div class="product-content">
                                                                    <h5 class="product-name"> <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                                            <?= substr(ucwords($title), 0, 25) ?></a>
                                                                    </h5> <div class="price-box">
                                                                        <span class="price-regular">$ <?= $price ?></span>
                                                                        <span class="price-old"><del>$ <?= $cut_price ?></del></span>
                                                                    </div>
                                                                    <div class="product-item-action">
                                                                        <a class="btn btn-cart" href="<?= $site ?>/product/<?= $p_url ?>"><i class="ion-eye"></i>View Details</a>
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
                                        <div class="tab-pane fade" id="three">
                                            <div class="features-categories-wrapper">
                                                <div class="features-categories-active slick-arrow-style">
                                                    <!-- product item start -->
                                                    <?php
                                                    $q1 = select(" SELECT * FROM product  where sub_category='15' order by rand() limit 0,4");
                                                    while ($a1 = mysqli_fetch_array($q1)) {
                                                        extract($a1);
                                                        ?>
                                                        <div class="product-slide-item">
                                                            <div class="product-item">
                                                                <div class="product-thumb">
                                                                    <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                                        <?php
                                                                        $ab = select("SELECT * FROM `picture` where product_id='" . $id . "' LIMIT 1");
                                                                        while ($kb = mysqli_fetch_array($ab)) {
                                                                            extract($kb);
                                                                            ?>
                                                                            <img style="height:300px;width:347px" src="assets/upload/<?= $image ?>">
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </a>
                                                              <div class="add-to-links">
                                                        <a href="wishlist.php?id=<?=$a1['id']?>" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        </div>  </div>
                                                                <div class="product-content">
                                                                    <h5 class="product-name"> <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                                            <?= substr(ucwords($title), 0, 25) ?></a>
                                                                    </h5> <div class="price-box">
                                                                        <span class="price-regular">$ <?= $price ?></span>
                                                                        <span class="price-old"><del>$ <?= $cut_price ?></del></span>
                                                                    </div>
                                                                    <div class="product-item-action">
                                                                        <a class="btn btn-cart" href="<?= $site ?>/product/<?= $p_url ?>"><i class="ion-eye"></i>View Details</a>
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
                                    <div class="img-container">
                                        <a href="https://sayladda.com/category/shirts-t-shirts-trousers">
                                            <img src="assets/img/banner/Men.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="section-banner">
                                    <img src="assets/img/banner/MenSlideBanner.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features categories area end -->

            <!-- features categories area start -->
            <section class="features-categories-area pt-50">
                <div class="container">
                    <div class="section-wrapper bg-white">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-header">
                                    <!-- section title start -->
                                    <div class="section-title">
                                        <h4>Womens Wear</h4>
                                    </div>
                                    <!-- section title start -->

                                    <!-- product tab menu start -->
                                    <div class="feature-menu">
                                        <ul class="nav justify-content-start justify-content-lg-end">
                                            <li><a data-toggle="tab" class="active" href="#four">Abaya Dirac Tops</a></li>
                                            <!--  <li><a data-toggle="tab" href="#five">tablet</a></li>
                                            <li><a data-toggle="tab" href="#six">Ibuypower</a></li>-->
                                        </ul>
                                    </div>
                                    <!-- product tab menu start -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 col-md-9">
                                <div class="products-area-wrapper mt-30">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="four">
                                            <div class="features-categories-wrapper">
                                                <div class="features-categories-active slick-arrow-style">
                                                    <!-- product item start -->
                                                    <?php
                                                    $q1 = select(" SELECT * FROM product  where sub_category='20' order by rand() limit 0,4");
                                                    while ($a1 = mysqli_fetch_array($q1)) {
                                                        extract($a1);
                                                        ?>
                                                        <div class="product-slide-item">
                                                            <div class="product-item">
                                                                <div class="product-thumb">
                                                                    <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                                        <?php
                                                                        $ab = select("SELECT * FROM `picture` where product_id='" . $id . "' LIMIT 1");
                                                                        while ($kb = mysqli_fetch_array($ab)) {
                                                                            extract($kb);
                                                                            ?>
                                                                            <img style="height:300px;width:347px" src="assets/upload/<?= $image ?>">
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </a>
                                                              <div class="add-to-links">
                                                        <a href="wishlist.php?id=<?=$a1['id']?>" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        </div>  </div>
                                                                <div class="product-content">
                                                                    <h5 class="product-name"> <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                                            <?= substr(ucwords($title), 0, 25) ?></a>
                                                                    </h5> <div class="price-box">
                                                                        <span class="price-regular">$ <?= $price ?></span>
                                                                        <span class="price-old"><del>$ <?= $cut_price ?></del></span>
                                                                    </div>
                                                                    <div class="product-item-action">
                                                                        <a class="btn btn-cart" href="<?= $site ?>/product/<?= $p_url ?>"><i class="ion-eye"></i>View Details</a>
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
                                    <div class="img-container">
                                        <a href="https://sayladda.com/category/abaya-dira-sako-tops">
                                            <img src="assets/img/banner/Women.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="section-banner">
                                    <img src="assets/img/banner/WomenSlideBanner.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features categories area end -->

            <!-- features categories area start -->
            <section class="features-categories-area pt-50">
                <div class="container">
                    <div class="section-wrapper bg-white">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-header">
                                    <!-- section title start -->
                                    <div class="section-title">
                                        <h4>Electronic</h4>
                                    </div>
                                    <!-- section title start -->

                                    <!-- product tab menu start -->
                                    <div class="feature-menu">
                                        <ul class="nav justify-content-start justify-content-lg-end">
                                            <li><a data-toggle="tab" class="active" href="#seven">Mobile</a></li>
                                            <li><a data-toggle="tab" href="#eight">Laptop</a></li>
                                        </ul>
                                    </div>
                                    <!-- product tab menu start -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 col-md-9">
                                <div class="products-area-wrapper mt-30">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="seven">
                                            <div class="features-categories-wrapper">
                                                <div class="features-categories-active slick-arrow-style">
                                                    <!-- product item start -->
                                                    <?php
                                                    $q1 = select(" SELECT * FROM product  where sub_category='10' order by rand() limit 0,4");
                                                    while ($a1 = mysqli_fetch_array($q1)) {
                                                        extract($a1);
                                                        ?>
                                                        <div class="product-slide-item">
                                                            <div class="product-item">
                                                                <div class="product-thumb">
                                                                    <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                                        <?php
                                                                        $ab = select("SELECT * FROM `picture` where product_id='" . $id . "' LIMIT 1");
                                                                        while ($kb = mysqli_fetch_array($ab)) {
                                                                            extract($kb);
                                                                            ?>
                                                                            <img style="height:300px;width:347px" src="assets/upload/<?= $image ?>">
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </a>
                                                              <div class="add-to-links">
                                                        <a href="wishlist.php?id=<?=$a1['id']?>" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        </div>  </div>
                                                                <div class="product-content">
                                                                    <h5 class="product-name"> <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                                            <?= substr(ucwords($title), 0, 25) ?></a>
                                                                    </h5> <div class="price-box">
                                                                        <span class="price-regular">$ <?= $price ?></span>
                                                                        <span class="price-old"><del>$ <?= $cut_price ?></del></span>
                                                                    </div>
                                                                    <div class="product-item-action">
                                                                        <a class="btn btn-cart" href="<?= $site ?>/product/<?= $p_url ?>"><i class="ion-eye"></i>View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>

                                                    <!-- product item start -->

                                                    <!-- product item start -->
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="eight">
                                            <div class="features-categories-wrapper">
                                                <div class="features-categories-active slick-arrow-style">
                                                    <!-- product item start -->
                                                     <?php
                                                    $q1 = select(" SELECT * FROM product  where sub_category='9' order by rand() limit 0,4");
                                                    while ($a1 = mysqli_fetch_array($q1)) {
                                                        extract($a1);
                                                        ?>
                                                        <div class="product-slide-item">
                                                            <div class="product-item">
                                                                <div class="product-thumb">
                                                                    <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                                        <?php
                                                                        $ab = select("SELECT * FROM `picture` where product_id='" . $id . "' LIMIT 1");
                                                                        while ($kb = mysqli_fetch_array($ab)) {
                                                                            extract($kb);
                                                                            ?>
                                                                            <img style="height:300px;width:347px" src="assets/upload/<?= $image ?>">
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </a>
                                                              <div class="add-to-links">
                                                        <a href="wishlist.php?id=<?=$a1['id']?>" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        </div>  </div>
                                                                <div class="product-content">
                                                                    <h5 class="product-name"> <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                                            <?= substr(ucwords($title), 0, 25) ?></a>
                                                                    </h5> <div class="price-box">
                                                                        <span class="price-regular">$ <?= $price ?></span>
                                                                        <span class="price-old"><del>$ <?= $cut_price ?></del></span>
                                                                    </div>
                                                                    <div class="product-item-action">
                                                                        <a class="btn btn-cart" href="<?= $site ?>/product/<?= $p_url ?>"><i class="ion-eye"></i>View Details</a>
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
                                    <div class="img-container">
                                        <a href="#">
                                            <img src="assets/img/banner/img06_bottom_home6.gif" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="section-banner">
                                    <img src="assets/img/banner/img06_car6.gif" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features categories area end -->

            <!-- most viewed product area start -->
            <section class="most-viewed-products pt-50 pb-50">
                <div class="container">
                    <div class="deals-wrapper bg-white">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-header-deals">
                                    <div class="section-title-deals">
                                        <h4>Most Viewed</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="most-viewed-carousel-2 slick-arrow-style">
                                    <!-- product item start -->
                                   <?php
                                                    $q1 = select(" SELECT * FROM product  order by rand() limit 0,5");
                                                    while ($a1 = mysqli_fetch_array($q1)) {
                                                        extract($a1);
                                                        ?>
                                                        <div class="product-slide-item">
                                                            <div class="product-item">
                                                                <div class="product-thumb">
                                                                    <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                                        <?php
                                                                        $ab = select("SELECT * FROM `picture` where product_id='" . $id . "' LIMIT 1");
                                                                        while ($kb = mysqli_fetch_array($ab)) {
                                                                            extract($kb);
                                                                            ?>
                                                                            <img style="height:250px;width:300px" src="assets/upload/<?= $image ?>">
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </a>
                                                              <div class="add-to-links">
                                                        <a href="wishlist.php?id=<?=$a1['id']?>" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        </div>  </div>
                                                                <div class="product-content">
                                                                    <h5 class="product-name"> <a href="<?= $site ?>/product/<?= $p_url ?>">
                                                                            <?= substr(ucwords($title), 0, 25) ?></a>
                                                                    </h5> <div class="price-box">
                                                                        <span class="price-regular">$ <?= $price ?></span>
                                                                        <span class="price-old"><del>$ <?= $cut_price ?></del></span>
                                                                    </div>
                                                                    <div class="product-item-action">
                                                                        <a class="btn btn-cart" href="<?= $site ?>/product/<?= $p_url ?>"><i class="ion-eye"></i>View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>

                                   
                                    <!-- product item start -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- most viewed product area end -->

            <!-- brand logo area start --
            <div class="brand-logo-area bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="brand-logo-slider">
                                <div class="brand-logo-carousel">
                                    <!-- brand single item start --
                                    <div class="brand-item">
                                        <img src="assets/img/brand/brand-1.png" alt="">
                                    </div>
                                    <!-- brand single item end -->

                                    <!-- brand single item start --
                                    <div class="brand-item">
                                        <img src="assets/img/brand/brand-2.png" alt="">
                                    </div>
                                    <!-- brand single item end -->

                                    <!-- brand single item start --
                                    <div class="brand-item">
                                        <img src="assets/img/brand/brand-3.png" alt="">
                                    </div>
                                    <!-- brand single item end -->

                                    <!-- brand single item start --
                                    <div class="brand-item">
                                        <img src="assets/img/brand/brand-4.png" alt="">
                                    </div>
                                    <!-- brand single item end -->

                                    <!-- brand single item start --
                                    <div class="brand-item">
                                        <img src="assets/img/brand/brand-5.png" alt="">
                                    </div>
                                    <!-- brand single item end -->

                                    <!-- brand single item start --
                                    <div class="brand-item">
                                        <img src="assets/img/brand/brand-3.png" alt="">
                                    </div>
                                    <!-- brand single item end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand logo area end -->

        </main>

        <?php include"include/footer.php"; ?>
        <div class="scroll-top not-visible">
            <i class="fa fa-angle-up"></i>
        </div>
        <script src="assets/js/vendor.js"></script>

        <script src="assets/js/active.js"></script>
    </body>

</html>