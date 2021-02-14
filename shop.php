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
                    <div class="col-lg-3 order-2 order-lg-1">
                        <aside class="sidebar-wrapper">
                            <!-- single sidebar start -->
                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <h3>categories</h3>
                                </div>
                                <div class="sidebar-body">
                                    <!-- mobile menu navigation start -->
                                    <div class="shop-categories">
                                        <nav>
                                            <ul class="mobile-menu">
                                                <li class="menu-item-has-children"><a href="#">hand tools</a>
                                                    <ul class="dropdown">
                                                        <li><a href="product-details.php">fresh food</a></li>
                                                        <li><a href="product-details.php">junk food</a></li>
                                                        <li><a href="product-details.php">wet food</a></li>
                                                        <li><a href="product-details.php">dry food</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">digital tools</a>
                                                    <ul class="dropdown">
                                                        <li><a href="product-details.php">fresh food</a></li>
                                                        <li><a href="product-details.php">junk food</a></li>
                                                        <li><a href="product-details.php">wet food</a></li>
                                                        <li><a href="product-details.php">dry food</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">kids shoppers</a>
                                                    <ul class="dropdown">
                                                        <li><a href="product-details.php">fresh food</a></li>
                                                        <li><a href="product-details.php">junk food</a></li>
                                                        <li><a href="product-details.php">wet food</a></li>
                                                        <li><a href="product-details.php">dry food</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">electronics</a>
                                                    <ul class="dropdown">
                                                        <li><a href="product-details.php">fresh food</a></li>
                                                        <li><a href="product-details.php">junk food</a></li>
                                                        <li><a href="product-details.php">wet food</a></li>
                                                        <li><a href="product-details.php">dry food</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- mobile menu navigation end -->
                                </div>
                            </div>
                            <!-- single sidebar end -->

                            <!-- single sidebar start -->
                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <h3>Price filter</h3>
                                </div>
                                <div class="sidebar-body">
                                    <ul class="radio-container">
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="price" id="customCheck11">
                                                <label class="custom-control-label" for="customCheck11">$7.00 - $9.00 (2)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="price" id="customCheck21">
                                                <label class="custom-control-label" for="customCheck21">$10.00 - $12.00 (3)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="price" id="customCheck31">
                                                <label class="custom-control-label" for="customCheck31">$17.00 - $20.00 (3)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="price" id="customCheck41">
                                                <label class="custom-control-label" for="customCheck41"> $21.00 - $22.00 (1)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="price" id="customCheck51">
                                                <label class="custom-control-label" for="customCheck51">$25.00 - $30.00 (3)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- single sidebar end -->

                            <!-- single sidebar start -->
                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <h3>brand</h3>
                                </div>
                                <div class="sidebar-body">
                                    <ul class="checkbox-container">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Graphic corner</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Studio</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">Hastech</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">Quickiin</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- single sidebar end -->

                            <!-- single sidebar start -->
                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <h3>size</h3>
                                </div>
                                <div class="sidebar-body">
                                    <ul class="checkbox-container">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck111">
                                                <label class="custom-control-label" for="customCheck111">S (4)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck222">
                                                <label class="custom-control-label" for="customCheck222">M (5)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck333">
                                                <label class="custom-control-label" for="customCheck333">L (7)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck444">
                                                <label class="custom-control-label" for="customCheck444">XL (3)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- single sidebar end -->

                            <!-- single sidebar start -->
                            <div class="sidebar-banner">
                                <div class="img-container">
                                    <a href="#">
                                        <img src="assets/img/banner/sidebar-banner.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- single sidebar end -->
                        </aside>
                    </div>
                    <!-- sidebar area end -->

                    <!-- shop main wrapper start -->
                    <div class="col-lg-9 order-1 order-lg-2">
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
                                <!-- product single item start -->
                                <div class="col-md-4 col-sm-6">
                                    <!-- product grid start -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-1.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name"><a href="product-details.php">joust duffle bag</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product grid end -->

                                    <!-- product list item end -->
                                    <div class="product-list-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-1.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-list">
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <h5 class="product-name"><a href="product-details.php">Private Selection Wild Caught</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                                quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                                rem, accusantium adipisci officia eaque.</p>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product list item end -->
                                </div>
                                <!-- product single item start -->

                                <!-- product single item start -->
                                <div class="col-md-4 col-sm-6">
                                    <!-- product grid start -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-2.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name"><a href="product-details.php">hand suffle bag</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$40.00</span>
                                                <span class="price-old"><del>$60.00</del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product grid end -->

                                    <!-- product list item end -->
                                    <div class="product-list-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-2.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-list">
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <h5 class="product-name"><a href="product-details.php">Private Selection Wild Caught</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$35.00</span>
                                                <span class="price-old"><del>$60.00</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                                quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                                rem, accusantium adipisci officia eaque.</p>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product list item end -->
                                </div>
                                <!-- product single item start -->

                                <!-- product single item start -->
                                <div class="col-md-4 col-sm-6">
                                    <!-- product grid start -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-3.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name"><a href="product-details.php">joust duffle bag</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$30.00</span>
                                                <span class="price-old"><del>$79.00</del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product grid end -->

                                    <!-- product list item end -->
                                    <div class="product-list-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-3.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-list">
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <h5 class="product-name"><a href="product-details.php">Private Selection Wild Caught</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$30.00</span>
                                                <span class="price-old"><del>$69.00</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                                quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                                rem, accusantium adipisci officia eaque.</p>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product list item end -->
                                </div>
                                <!-- product single item start -->

                                <!-- product single item start -->
                                <div class="col-md-4 col-sm-6">
                                    <!-- product grid start -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-4.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name"><a href="product-details.php">smart tools bag</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$99.99</del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product grid end -->

                                    <!-- product list item end -->
                                    <div class="product-list-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-4.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-list">
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <h5 class="product-name"><a href="product-details.php">Private Selection Wild Caught</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$99.99</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                                quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                                rem, accusantium adipisci officia eaque.</p>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product list item end -->
                                </div>
                                <!-- product single item start -->

                                <!-- product single item start -->
                                <div class="col-md-4 col-sm-6">
                                    <!-- product grid start -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-5.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name"><a href="product-details.php">digital tool box</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$55.00</span>
                                                <span class="price-old"><del>$60.00</del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product grid end -->

                                    <!-- product list item end -->
                                    <div class="product-list-item mb-30">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-5.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-list">
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <h5 class="product-name"><a href="product-details.php">Private Selection Wild Caught</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$55.00</span>
                                                <span class="price-old"><del>$60.00</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                                quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                                rem, accusantium adipisci officia eaque.</p>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product list item end -->
                                </div>
                                <!-- product single item start -->

                                <!-- product single item start -->
                                <div class="col-md-4 col-sm-6">
                                    <!-- product grid start -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-6.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name"><a href="product-details.php">joust duffle bag</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del></del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product grid end -->

                                    <!-- product list item end -->
                                    <div class="product-list-item mb-30">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-5.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-list">
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <h5 class="product-name"><a href="product-details.php">Private Selection Wild Caught</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                                quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                                rem, accusantium adipisci officia eaque.</p>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product list item end -->
                                </div>
                                <!-- product single item start -->

                                <!-- product single item start -->
                                <div class="col-md-4 col-sm-6">
                                    <!-- product grid start -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-7.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name"><a href="product-details.php">digital meter scale</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$60.00</span>
                                                <span class="price-old"><del></del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product grid end -->

                                    <!-- product list item end -->
                                    <div class="product-list-item mb-30">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-5.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-list">
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <h5 class="product-name"><a href="product-details.php">Private Selection Wild Caught</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$60.00</span>
                                                <span class="price-old"><del></del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                                quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                                rem, accusantium adipisci officia eaque.</p>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product list item end -->
                                </div>
                                <!-- product single item start -->

                                <!-- product single item start -->
                                <div class="col-md-4 col-sm-6">
                                    <!-- product grid start -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-8.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name"><a href="product-details.php">joust duffle bag</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$20.00</span>
                                                <span class="price-old"><del>$30.0</del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product grid end -->

                                    <!-- product list item end -->
                                    <div class="product-list-item mb-30">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-8.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-list">
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <h5 class="product-name"><a href="product-details.php">Private Selection Wild Caught</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$20.00</span>
                                                <span class="price-old"><del>$30.00</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                                quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                                rem, accusantium adipisci officia eaque.</p>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product list item end -->
                                </div>
                                <!-- product single item start -->

                                <!-- product single item start -->
                                <div class="col-md-4 col-sm-6">
                                    <!-- product grid start -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-9.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name"><a href="product-details.php">joust duffle bag</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$40.00</span>
                                                <span class="price-old"><del>$45.00</del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product grid end -->

                                    <!-- product list item end -->
                                    <div class="product-list-item mb-30">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-9.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-list">
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <h5 class="product-name"><a href="product-details.php">Private Selection Wild Caught</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$45.00</span>
                                                <span class="price-old"><del>$40.00</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                                quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                                rem, accusantium adipisci officia eaque.</p>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product list item end -->
                                </div>
                                <!-- product single item start -->

                                <!-- product single item start -->
                                <div class="col-md-4 col-sm-6">
                                    <!-- product grid start -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-10.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name"><a href="product-details.php">digital duffle bag</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$70.00</span>
                                                <span class="price-old"><del>$50.00</del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product grid end -->

                                    <!-- product list item end -->
                                    <div class="product-list-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-10.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-list">
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <h5 class="product-name"><a href="product-details.php">Private Selection Wild Caught</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$70.00</span>
                                                <span class="price-old"><del>$50.00</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                                quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                                rem, accusantium adipisci officia eaque.</p>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product list item end -->
                                </div>
                                <!-- product single item start -->

                                <!-- product single item start -->
                                <div class="col-md-4 col-sm-6">
                                    <!-- product grid start -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-11.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name"><a href="product-details.php">hand suffle bag</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$40.00</span>
                                                <span class="price-old"><del>$60.00</del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product grid end -->

                                    <!-- product list item end -->
                                    <div class="product-list-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-11.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-list">
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <h5 class="product-name"><a href="product-details.php">Private Selection Wild Caught</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$35.00</span>
                                                <span class="price-old"><del>$60.00</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                                quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                                rem, accusantium adipisci officia eaque.</p>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product list item end -->
                                </div>
                                <!-- product single item start -->

                                <!-- product single item start -->
                                <div class="col-md-4 col-sm-6">
                                    <!-- product grid start -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-12.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name"><a href="product-details.php">joust duffle bag</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$30.00</span>
                                                <span class="price-old"><del>$79.00</del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product grid end -->

                                    <!-- product list item end -->
                                    <div class="product-list-item">
                                        <div class="product-thumb">
                                            <a href="product-details.php">
                                                <img src="assets/img/product/product-12.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.php" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.php" data-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-list">
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <h5 class="product-name"><a href="product-details.php">Private Selection Wild Caught</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$30.00</span>
                                                <span class="price-old"><del>$69.00</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                                quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                                rem, accusantium adipisci officia eaque.</p>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.php"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
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