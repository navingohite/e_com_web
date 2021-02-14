 <div class="main-banner-area pt-30">
            <div class="container">
                <div class="row custom-row-2 no-gutters">
                    <!-- category menu start -->
                    <div class="col-xl-3">
                        <div class="category-dropdown-wrapper">
                            <div class="category-toggle-wrap">
                                <div class="category-toggle category-toggle-style_3">
                                    <i class="ion-android-menu"></i>
                                    shop by categories
                                </div>
                                <nav class="category-menu category-menu-style_3">
                                    <ul style="padding-bottom:15px" class="categories-list categories-list-style_3">
                                         <?php 
						$w=select("select * from sub_category order by name ASC limit 0, 11");
						while($as=mysqli_fetch_array($w))
						{
						extract($as);
							?>
                                    <li><a href="<?=$site?>/category"><?=ucwords($name)?></a></li>
									<?php
						}
									?>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- category menu start -->

                    <!-- slider area start -->
                    <div class="col-xl-9 col-lg-11">
                        <section class="slider-area">
                            <div class="hero-slider-active slick-arrow-style slick-dot-style">
                                <!-- single slider item start -->
                                <div class="hero-slider-item stlder-style_2">
                                    <div class="d-flex align-items-center justify-content-center bg-img h-100" data-bg="assets/img/slider/home3-slide1.jpg">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="hero-slider-content hero-slider-content_3 text-center">
                                                    <h1>high end<br>power tools</h1>
                                                        <a href="<?=$site?>" class="btn-outline">shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single slider item end -->

                                <!-- single slider item start -->
                                <div class="hero-slider-item stlder-style_2">
                                    <div class="d-flex align-items-center justify-content-center bg-img h-100" data-bg="assets/img/slider/home3-slide2.jpg">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="hero-slider-content hero-slider-content_3 text-center">
                                                    <h1>milwaukee <br>m18 fuel</h1>
                                                        <a href="shop.html" class="btn-outline">shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single slider item start -->
                            </div>
                        </section>
                    </div>
                    <!-- slider area end -->

                    <!-- banner-statistics-area start 
                    <div class="col-xl-3 col-lg-4">
                        <div class="row no-gutters">
                            <div class="col-md-12 col-sm-6">
                                <div class="img-container">
                                    <a href="#"><img src="assets/img/banner/img1_home3.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6">
                                <div class="img-container">
                                    <a href="#"><img src="assets/img/banner/img2_home3.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner-statistics-area end -->
                </div>
            </div>
        </div>