<nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    
                    
                    <ul class="top-icons-agileits-w3layouts float-right" style="margin-left:1000px">
                       
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o"><?php
						$at=select("select * from admin ");
						while($a=mysqli_fetch_array($at))
						{
							extract($a);
						
						?>
                                    <div class="profile-l align-self-center">
                                        <img src="images/<?=$image?>" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits"><?=ucwords($name)?></h3>
                                        <a href="mailto:info@example.com"><?=$email?>
										</a>
                                    </div>
									<?php
						}
									?>
                                </div>
                                <a href="update_profile.php" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-user mr-3"></i>My Profile</h4>
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>