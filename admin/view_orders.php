<?php
require_once"ajaxsub/dbconfig.php";
if(isset($_SESSION['admin_login']))
{
	
}
else
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sayladda | Admin</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
        
    </script>
    
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    
    <link rel="stylesheet" href="css/style4.css">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" rel="stylesheet">
    

   <style>
   

.results tr[visible='false'],
.no-result{
  display:none;
}

.results tr[visible='true']{
  display:table-row;
}

.counter{
  padding:8px; 
  color:#ccc;
}
   </style>
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="wrapper">
        <?php include"breacktemp/sidebar.php";?>
  <div id="content">
             <?php include"breacktemp/topbar.php";?>
            <h2 class="main-title-w3layouts mb-2 text-center">View Order Detail's</h2>
            <section class="tables-section">
                <div class="outer-w3-agile mt-3">
                    <div class="form-group pull-right">
</div>
<?php 
if(isset($_REQUEST['payment_status']))
{
    extract($_REQUEST);
    $t=iud("update orderdetail set status='$status' where orderid='$order'");
    if($t>=1)
    {
        echo"<script>alert('Successfully Updated');</script>";
    }
    else
    {
        echo"<script>alert('Something Went Wrong');</script>";
        
    }
}
if(isset($_REQUEST['delivery_status']))
{
    extract($_REQUEST);
    $t=iud("update orderdetail set delivary_status='$del_status' where orderid='$order'");
    if($t>=1)
    {
        echo"<script>alert('Successfully Updated');</script>";
    }
    else
    {
        echo"<script>alert('Something Went Wrong');</script>";
        
    }
}
?>
<span class="counter pull-right"></span>

                    <div class="table-responsive">
					<?php
					$r=select("SELECT * FROM `orderdetail`   group by orderid order by orderdetail.id desc");
					$num=mysqli_num_rows($r);
					if($num>=1)
					{
					?>
                        <table  id="example" class="results table table-striped table-bordered" style="width:80%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Address </th>
                                    <th scope="col">Order Id</th>
                                    
                                    <th scope="col">Payment Method </th>
                                    <th scope="col">Product Detail</th>
                                    <th scope="col">Payment Status</th>
                                    <th scope="col">Delivery Status</th>
                                     <th scope="col">Edit</th>
                                     <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
							$n=1;
							while($res=mysqli_fetch_array($r))
							{
								extract($res);
							
							?>
                                <tr style="text-align:center">
								    <th scope="row"><?=$n?>.</th>
                                    <td><?=ucwords($name)?></td>
                                    <td><?=ucwords($email)?></td>
                                    <td><?=ucwords($mobile)?></td>
                                    <td><?=ucwords($address)?>,<?=ucwords($country)?>,<?=ucwords($city)?></td>
                                    <td><span style="background-color:yellow;color:black" ><?=$res['orderid']?></span></td>
                                    
						        <td><?=$payment_via?></td>
						        
						        
                                    <td><a href="view_product_detail.php?pid=<?=$res['orderid']?>"><span style="color:Green"><i class="fa fa-eye"></i></span></a></td>
									<td>
									<?php
										if($res['status']=='0')
									{
									    ?>
											<a style="color:red;font-weight:bold">Awaiting Payment</a>
											</br></br>
										<?php
									}
									else
									{
									    ?>
									   <a style="color:Blue;font-weight:bold"><?=$res['status'];?></a>
											</br></br> 
												<?php
									}
									
									?>
									<form method="post">
									    <input type="hidden" name="order" value="<?=$orderid?>">
									    <select name="status">
									        <option value="0">Select New Payment Status </option>
									        <option value="0">Awaiting Payment</option>
									        <option value="Payment Received">Payment Received</option>
									        <option value="Payment Updated">Payment Updated</option>
									        <option value="Completed">Completed</option>
									        <option value="Refunded">Refunded</option>
									        
									    </select>
									    </br></br>
									    <input type="submit" class="btn btn-info" name="payment_status">
									</form>
									</td>
									<td>
									<?php
										if($res['delivary_status']=='0')
									{
									    ?>
											<a style="color:red;font-weight:bold">Processing Stock</a>
											</br></br>
										<?php
									}
									else
									{
									    ?>
									   <a style="color:Blue;font-weight:bold"><?=$res['delivary_status'];?></a>
											</br></br> 
												<?php
									}
									
									?>
									<form method="post">
									    <input type="hidden" name="order" value="<?=$orderid?>">
									    <select name="del_status">
									        <option value="0">Select New Delivery Status </option>
									        <option value="0">Processing Stock</option>
									        <option value="Ready For Packing">Ready For Packing</option>
									        <option value="Ready To Deliver">Ready To Deliver</option>
									        <option value="Delivery In Progress">Delivery In Progress</option>
									        <option value="Delivered">Delivered</option>
									        <option value="Received">Received</option>
									        <option value="Returned">Returned</option>
									    </select>
									    </br></br>
									    <input type="submit" class="btn btn-info" name="delivery_status">
									</form>
									</td>
									
									 <td><a href="edit_product_detail.php?oid=<?=$res['orderid']?>"><span style="color:Blue"><i class="fa fa-edit"></i></span></a></td>
									 <td><a href="delete_order_detail.php?oid=<?=$res['orderid']?>"><span style="color:red"><i class="fa fa-trash"></i></span></a></td>
									
                                </tr>
                              <?php
							  $n++;
							}
							  ?>  
                            </tbody>
                        </table>
						<?php
					}
					else
					{
						?>
						<h1>No Data Found
						</h1>
					<?php
					}
						?>
                    </div>
                </div>
            </section>
            <?php include"breacktemp/footer.php";?>
        </div>
    </div>
    <script src='js/jquery-2.2.3.min.js'></script>
    
    <script src='https://code.jquery.com/jquery-3.3.1.js'></script>
    
    <script src='https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js'></script>
    


    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- dropdown nav -->
    <script>

        $(document).ready(function () {
    
    $('#example').DataTable();

			 
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>