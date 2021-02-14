<aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="ion-android-close"></i>
            </div>

            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box-offcanvas">
                   <form action="<?=$site?>/search.php" method="post">
                        <input type="text" name="text" placeholder="<?php if(isset($_REQUEST['text'])){echo $_REQUEST['text'];}else{echo"Search Here...";}?>">
                        <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                    </form>
					
                </div>
                 <div class="mobile-navigation">

                     <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children active"><a href="<?=$site?>">Home</a>
                                
                            </li>
							<?php
												$qtq=select("select * from category order by id asc");
												while($apa=mysqli_fetch_array($qtq))
												{
													extract($apa);
?>
                            
                            <li class="menu-item-has-children "><a href="#"><?=ucfirst($category_name)?></a>
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
                            <li><a href="<?=$site?>/contact-us.php">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->

                <div class="mobile-settings">
                    <ul class="nav">
                         <!--<li>
                            <div class="dropdown mobile-top-dropdown">
                                <a class="dropdown-toggle" id="currency" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Currency
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="currency">
                                    <a class="dropdown-item" href="#">$ USD</a>
                                    <a class="dropdown-item" href="#">$ EURO</a>
                                </div>
                            </div>
                        </li>-->
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    My Account
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                    <?php
									//print_r($_SESSION);
									if(isset($_SESSION['login']))
{
	?>
	
                                    <a class="dropdown-item" href="<?=$site?>/my-account.php">My account</a>
                                     <a class="dropdown-item" href="<?=$site?>/logout.php">Logout</a>
                                    
	<?php
}
else
{
	?>
	
                                   <a class="dropdown-item" href="<?=$site?>/login-register.php"> Login</a>
                                    <a class="dropdown-item" href="<?=$site?>/login-register.php">Register</a>
	<?php
}
?>
                                    
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li><i class="fa fa-mobile"></i>
                                <a href="#">+252 840911</a>
                                <li><i class="fa fa-mobile"></i>
                                <a href="#">+252 61 4754448</a>
                                <li><i class="fa fa-mobile"></i>
                                <a href="#">+252 62 4754448</a>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>
                                <a href="#">info@sayladda.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget">
                          <a href="https://www.facebook.com/Sayladda/"><i class="fa fa-facebook"></i></a>
                                        <a href="https://www.instagram.com/sayladdasomalia/"><i class="fa fa-instagram"></i></a>
                                        <a href="https://twitter.com/sayladda"><i class="fa fa-twitter"></i></a>
                                        <a href="https://www.youtube.com/channel/UC_mTMIdFVbIme37jfe0ZEdg?view_as=subscriber"><i class="fa fa-youtube"></i></a>
                                
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>