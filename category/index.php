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
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!-- Google fonts include -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,900" rel="stylesheet">

    <!-- All Vendor & plugins CSS include -->
    <link href="<?=$site?>/assets/css/vendor.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="<?=$site?>/assets/css/style.css" rel="stylesheet">

    

</head>

<body>

    <?php include"../include/header.php";?>
    <?php include"../include/mobile_nav.php";?>
   
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
                                    <li class="breadcrumb-item"><a href="<?=$site?>">Home</a></li>
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
                    <!-- 
                    <div class="col-lg-3 order-2 order-lg-1">
                        <aside class="sidebar-wrapper">
                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <h3>categories</h3>
                                </div>
                                <div class="sidebar-body">
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
                                </div>
                            </div>
                          
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
                          
                          
                            <div class="sidebar-banner">
                                <div class="img-container">
                                    <a href="#">
                                        <img src="assets/img/banner/sidebar-banner.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </aside>
                    </div>
                    -->
                    <div class="col-lg-12 order-1 order-lg-2">
                        <div class="">
                            
                            <div class="shop-product-wrap grid-view row"  id="result_para">
                                <!-- product single item start -->
                               
                                   <?php
								   
						$q1=select(" SELECT * FROM product WHERE sub_category IN( SELECT id FROM sub_category WHERE s_url='".$_REQUEST['url']."') limit 0, 8");
						while($a1=mysqli_fetch_array($q1))
						{
							extract($a1);
						
						?> <div class="col-md-3 col-sm-6">
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="<?=$site?>/product/<?=$p_url?>">
											<?php
								$ab=select("SELECT * FROM `picture` where product_id='".$id."' LIMIT 1");
					while($kb=mysqli_fetch_array($ab))
					                {
						extract($kb);
								?>
                                                <img style="height:200px;width:247px" src="../assets/upload/<?=$image?>"  alt="">
												<?php
									}
												?>
                                            </a>
                                            <div class="add-to-links">
                                                        <a href="<?=$site?>/wishlist.php?id=<?=$a1['id']?>" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        </div>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name"><a href="<?=$site?>/product/<?=$p_url?>"><?=substr(ucwords($title),0,25)?></a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$ <?=$price?></span>
                                                <span class="price-old"><del>$ <?=$cut_price?></del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="<?=$site?>/product/<?=$p_url?>"><i class="ion-eye"></i> View Details</a>
                                            </div>
                                        </div>
                                    </div> </div>
                                   <?php
						}
								   ?> 
								   
								   
                                    
                               
                                
                                

                                
                            </div>
                           <div class="paginatoin-area text-center">
                                <ul class="pagination-box"  id="nomore">
                                    <img id="loading-image" src="https://cdn.dribbble.com/users/563824/screenshots/4268258/untitled_180_3.gif" style="
        width:200px;
    height:120px;
    margin: auto;
    -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
    animation: sk-rotateplane 1.2s infinite ease-in-out; display:none;"/>
                                    <input type="hidden" id="result_no" value="6">
					 <input type="hidden" id="urll" value="<?=$_REQUEST['url']?>">
                                    <li><a class="next"  id="load" style="background-color:#24babb">Load More<i class="ion-ios-load"></i></a></li>
                                <div id="abc"></div>
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
    function loadmore()
            {
                var val = document.getElementById("result_no").value;
                var url = document.getElementById("urll").value;
                $.ajax({
                    type: 'post',
                    url: 'get_data.php',
                    data: {
                        getresult: val,
                        geturl: url
                    },
                    beforeSend: function() {
              $("#loading-image").show();
              $("#load").hide();
           },
                    success: function (response) {
                       if(response==0)
                       {
                           $("#loading-image").hide();
                         $("#load").hide();
                         $('#nomore').html('<button  type="button" style="background-color:#14cfe0;color:white" class="btn  btn-2"> NO  MORE</button>');
                       }
                       else
                       {
                        $("#loading-image").hide();
                         $("#load").show();
						$('#result_para').append(response);
                        document.getElementById("result_no").value = Number(val) + 3;
                       }
                    }
                   });
			}
			
	  $("#load").click(function () {
		            loadmore();
      });
    </script>
</body>

</html>