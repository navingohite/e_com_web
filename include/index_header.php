<header class="header-area">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header top start -->
            <div class="header-top theme-color">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                        <div class="header-top-settings">
                              <!--      <ul class="nav align-items-center">
                                    <li class="language">
                                        <span>Language:</span>
                                        English
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list">
                                            <li><a href="#"><img src="assets/img/icon/en.png" alt=""> english</a></li>
                                            <li><a href="#"><img src="assets/img/icon/fr.png" alt=""> french</a></li>
                                        </ul>
                                    </li>
                                    <li class="curreny-wrap">
                                        <span>Currency:</span>
                                        $ USD
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list curreny-list">
                                            <li><a href="#">$ usd</a></li>
                                            <li><a href="#"> € EURO</a></li>
                                        </ul>
                                    </li>
                                </ul>--->
                            </div>  
                        </div>
                        <div class="col-lg-6">
                            <div class="header-links">
                                <ul class="nav justify-content-end">
                                    <li>Welcome to Sayladda</li>
                                    <?php
									//print_r($_SESSION);
									if(isset($_SESSION['login']))
{
	?>
	
                                    <li><a href="<?=$site?>/my-account.php">My Account</a></li>
                                    <li><a href="<?=$site?>/logout.php">Logout</a></li>
	<?php
}
else
{
	?>
	
                                    <li><a href="<?=$site?>/login-register.php">Sign In</a></li>
                                    <li><a href="<?=$site?>/login-register.php">Create an Account</a></li>
	<?php
}
?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle area start -->
            <div class="header-middle-area header-middle-area-style_3">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- start logo area -->
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="<?=$site?>/">
                                    <img src="<?=$site?>/assets/img/logo/logo123.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- start logo area -->

                        <!-- start search box area -->
                        <div class="col-lg-5">
                            <div class="search-box-wrapper">
							
                                <form action="<?=$site?>/search.php" method="post" class="search-box-inner">
                                    <input type="text" class="search-field" name="text" placeholder="<?php if(isset($_REQUEST['text'])){echo $_REQUEST['text'];}else{echo"Enter your search key";}?>">
                                    <button class="search-btn"><i class="ion-ios-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- start search box end -->

                        <!-- mini cart area start -->
                        <div class="col-lg-4">
                            <div class="header-configure-wrapper">
                                <div class="header-configure-area">
                                    <ul class="nav justify-content-end">
                                        <style>


.notification {
 
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 1px;
}



.notification .badge {
  position: absolute;
  top: -8px;
  right: -8px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: #17a2b8;
  color: white;
}
</style>

                                        <?php
									if(isset($_SESSION['login']))
{
	?>
	
                                   <li>
                                            <a class="notification" href="<?=$site?>/wishlist.php">
                                                <i class="ion-android-favorite-outline"> <span class="badge"><?php
                                                $uio=select("SELECT * FROM `wishlist` WHERE userid='".$_SESSION['userid']."'");
                                                $yu=mysqli_num_rows($uio);
                                                if($yu>0)
                                                {
                                                    echo $yu;
                                                }
                                                
                                                ?></span></i>
                                            </a>
                                        </li>
                                        <?php
}
else
{
	?>
	
                                   <li>
                                            <a href="<?=$site?>/wishlist.php">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                        </li>	<?php
}
?>
 <?php
									if(isset($_SESSION['login']))
{
	?>
                                        <li class="mini-cart-wrap">
                                            <a class="notification" href="<?=$site?>/cart.php">
                                                <i class="ion-bag"><span class="badge"><?php
                                                $uiou=select("SELECT * FROM `cart` WHERE userid='".$_SESSION['userid']."'");
                                                $yup=mysqli_num_rows($uiou);
                                                if($yup>0)
                                                {
                                                    echo $yup;
                                                }
                                                
                                                ?></span></i>
                                            </a>
											<?php
												$ui=select("SELECT * FROM `cart` INNER JOIN product ON cart.product_id=product.id WHERE cart.userid='".$_SESSION['userid']."' order by cart.id desc  limit 0, 2");
								$num=	mysqli_num_rows($ui);
										if($num>=1)
											{
											if(isset($_SESSION['userid']))
											{
											?>
                                            <ul class="cart-list">
											<?php
									$sum=0;
								while($k=mysqli_fetch_array($ui))
									{
										extract($k);
									?>
                                                <li>
                                                    <div class="cart-img">
													<?php
						  $tt="SELECT * FROM `picture` where product_id='".$k['product_id']."' order by id asc limit 1";
								$abc=select($tt);
					$kbc=mysqli_fetch_array($abc);
					
								?>
                                                        <a href="<?=$site?>/product-details.php"><img src="<?=$site?>/assets/upload/<?=$kbc['image']?>" alt=""></a>
                                                    </div>
                                                    <div class="cart-info">
                                                        <h4><a href="<?=$site?>/product/<?=$p_url?>"><?=ucfirst($title)?></a></h4>
                                                        <span class="cart-qty">Qty. <?=$quantity?></span>
                                                        <span>$ <?=$total_price?></span>
                                                    </div>
                                                    
                                                </li>
                                                <?php
												$sum=$sum+$total_price;
									}
												?>
                                                <li class="mini-cart-price">
                                                    <span class="subtotal">subtotal : </span>
													<?php
													$uiii=select("SELECT sum(cart.total_price) FROM `cart` INNER JOIN product ON cart.product_id=product.id WHERE cart.userid='".$_SESSION['userid']."' order by cart.id desc  limit 0, 2");
													$xy=mysqli_fetch_array($uiii);
													?>
                                                    <span class="subtotal-price ml-auto">$ <?=$xy[0]?></span>
                                                </li>
                                                <li>
                                                    <div class="mini-cart-button">
                                                        <a class="check-btn" href="<?=$site?>/cart.php">View Cart</a>
                                                       
                                                    </div>
                                                </li>
                                            </ul>
											<?php
											}
											}
											?>
                                        </li>
                                        <?php
}
else
{
    ?>
     <li class="mini-cart-wrap">
                                            <a href="<?=$site?>/cart.php">
                                                <i class="ion-bag"></i>
                                            </a>
                                            </li>
    <?php
}
                                        
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- mini cart area end -->
                    </div>
                </div>
            </div>
            <!-- header middle area end -->

            <!-- main menu area start -->
            <div class="main-menu-area sticky bg-white">
                <div class="container bdr-top-3">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="main-menu home-main">
                                <!-- main menu navbar start -->
                                <nav class="desktop-menu">
                                    <ul>
                                        <li class="active"><a href="index.php">Home <i class="fa fa-home"></i></a>
                                            
                                        </li>
                                       
                                        
										<?php
										
												$qtq=select("select * from category order by id asc limit 0,7");
												while($apa=mysqli_fetch_array($qtq))
												{
													extract($apa);
?>
                                        <li><a href="<?=$site?>"><?=ucfirst($category_name)?> <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
											<?php
												$qq=select("select * from sub_category where category_id='".$apa[0]."'");
												while($aa=mysqli_fetch_array($qq))
												{
													extract($aa);
?>
                                          <li><a href="<?=$site?>/category/<?=$s_url?>"><?=ucwords($name)?></a></li>
     <?php											
		}
	?>
                                                
                                            </ul>
                                        </li>
										<?php
												}
										?>
										 <li><a href="<?=$site?>">Other <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                        <?php
												$qtq=select("select * from category order by id asc limit 7,30");
												while($apa=mysqli_fetch_array($qtq))
												{
													extract($apa);
?>
                                       
                                                <li><a href="#"><?=ucfirst($category_name)?><i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
													<?php
												$qq=select("select * from sub_category where category_id='".$apa[0]."'");
												while($aa=mysqli_fetch_array($qq))
												{
													extract($aa);
?>
                                                        <li><a href="<?=$site?>/category/<?=$s_url?>"><?=ucwords($aa['name'])?></a></li>
                                                       <?php
												}
													   ?>
													   </ul>
                                                </li>
												<?php
												}
												?>
                                                
                                               
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </nav>
                                <!-- main menu navbar end -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- main menu area end -->
        </div>
        <!-- main header start -->

        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="index.php">
                                    <img src="assets/img/logo/logo123.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="cart.php">
                                        <i class="ion-bag"></i>
                                    </a>
                                </div>
                                <div class="mobile-menu-btn">
                                    <div class="off-canvas-btn">
                                        <i class="ion-android-menu"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="category-toggle-wrap">
                            <div class="category-toggle">
                                <i class="ion-android-menu"></i>
                                all categories
                                <span><i class="ion-android-arrow-dropdown"></i></span>
                            </div>
                            <nav class="category-menu">
                                <ul class="categories-list">
                                   
                                   
                                   <?php 
						$w=select("select * from sub_category order by name ASC  limit 0, 11 ");
						while($as=mysqli_fetch_array($w))
						{
						extract($as);
							?>
                                    <li><a href="<?=$site?>/category/<?=$s_url?>"><?=ucwords($name)?></a></li>
									<?php
						}
									?>
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
    </header>
	