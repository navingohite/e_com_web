<?php
require_once"../include/dbconfig.php";

$no = $_POST['getresult'];
$url = $_POST['geturl'];
   
								   
						$q1=select(" SELECT * FROM product WHERE sub_category IN( SELECT id FROM sub_category WHERE s_url='$url') limit $no, 4");
					$ty=mysqli_num_rows($q1);
					if($ty>=1)
					{
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
                                                <span class="price-old"><del>$ <?=$cut_price?></del></del></span>
                                            </div>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart"  href="<?=$site?>/product/<?=$p_url?>"><i class="ion-eye"></i> View Details</a>
                                            </div>
                                        </div>
                                    </div> </div>
                                   <?php
						}
					    
					}
					else
					{
					    echo 0;
					}
						
								   ?> 
								   
								   
