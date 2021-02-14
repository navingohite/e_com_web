<?php
require_once"include/dbconfig.php";
if(isset($_SESSION['userid']))
{
	
}
else
{
echo"<script>window.location='https://sayladda.com/'</script>";
}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>Online shopping site for electronics, women’s clothing, men’s clothing, baby & toys, groceries and etc.</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!-- Google fonts include -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,900" rel="stylesheet">

    <!-- All Vendor & plugins CSS include -->
    <link href="assets/css/vendor.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
<?php include"include/header.php";?>
    <?php include"include/mobile_nav.php";?>
       
    <main class="body-bg">

        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>my-account</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">my-account</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- my account wrapper start -->
        <div class="my-account-wrapper pt-50 pb-50">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <?php
                         if(isset($_REQUEST['Signin']))
					{
						extract($_REQUEST);
					 $n=iud("update `register` set  `password`='$np' where  `password`='$op' and id='".$_SESSION['userid']."'");
						 
						if($n==1)
						{
						echo"<div class='my-account-wrapper pt-50 pb-50'>
        <div class='alert alert-success'>Your password has been successfully changed!</div></div>";
                        }
						else
						{
							echo"<div class='my-account-wrapper pt-50 pb-50'><div class='alert alert-danger'>Something Went Wrong</div></div>";
						}
					}
					?>
                            <!-- My Account Page Start -->
                            <div class="myaccount-page-wrapper">
                                <!-- My Account Tab Menu Start -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-4">
                                        <div class="myaccount-tab-menu nav" role="tablist">
                                            <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                                Dashboard</a>
                                            <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                                Orders</a>
                                            <!--<a href="#download" data-toggle="tab"><i class="fa fa-cloud-download"></i>
                                                Download</a>-->
                                            <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i>
                                                Change Password</a>
                                            <!--<a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
                                                address</a>-->
                                            <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                                        </div>
                                    </div>
                                    <!-- My Account Tab Menu End -->

                                    <!-- My Account Tab Content Start -->
                                    <div class="col-lg-9 col-md-8">
                                        <div class="tab-content" id="myaccountContent">
                                            <!-- Single Tab Content Start -->
                                            <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                                <div class="myaccount-content">
                                                    <h3>Dashboard</h3>
                                                    <div class="welcome">
                                                        <p>Hello, <strong><?=$_SESSION['username']?></strong> (If Not <strong>Tuntuni
                                                            !</strong><a href="login-register.php" class="logout"> Logout</a>)</p>
                                                    </div>
                                                    <p class="mb-0">From your account dashboard. you can easily check &
                                                        view your recent orders, manage your shipping and billing addresses
                                                        and edit your password and account details.</p>
                                                </div>
                                            </div>
                                            <!-- Single Tab Content End -->

                                            <!-- Single Tab Content Start -->
                                            <div class="tab-pane fade" id="orders" role="tabpanel">
                                                <div class="myaccount-content">
                                                    <h3>Orders</h3>
                                                    <div class="myaccount-table table-responsive text-center">
                                                        <table class="table table-bordered">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>Order</th>
                                                                    <th>Date</th>
                                                                    <th>Orderid</th>
                                                                    <th>Payment Via</th>
                                                                    <th>Payment Status</th>
                                                                    <th>Delivery Status</th>
                                                                    <th>Address</th>
                                                                    <th>View Product</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
															<?php
															$b=1;
														//	echo "SELECT * FROM `orderdetail` WHERE userid=".$_SESSION['userid']."'";
															$m=select("SELECT * FROM `orderdetail` WHERE userid='".$_SESSION['userid']."' group BY orderid  order by id desc ");
															while($p=mysqli_fetch_array($m))
															{
																
															
															?>
                                                                <tr>
                                                                    <td><?=$b?>.</td>
                                                                    <td><?=$p['datet']?></td>
                                                                    <td><?=$p['orderid']?></td>
                                                                    <td><?=$p['payment_via']?></td>
                                                                    <td><?php
                                                                    if($p['status']=='0')
                                                                    {
                                                                        echo"<span style='color:red;font-weight:bold'>Awaiting Payment</span>";
                                                                    }
                                                                    else
                                                                    {
                                                                        echo "<span style='color:green;font-weight:bold'>".$p['status']."</span>";
                                                                    }
                                                                    
                                                                    
                                                                    ?></td>
                                                                    <td><?php
                                                                    if($p['delivary_status']=='0')
                                                                    {
                                                                        echo"<span style='color:red;font-weight:bold'>Processing Stock</span>";
                                                                    }
                                                                    else
                                                                    {
                                                                        echo "<span style='color:green;font-weight:bold'>".$p['delivary_status']."</span>";
                                                                    }
                                                                    
                                                                    
                                                                    ?></td>
                                                                    <td><?=$p['address']?></td>
                                                                    <td><a href="product.php?id=<?=$p['orderid']?>" class="btn btn__bg">View Product</a>
                                                                    </td>
                                                                </tr>
																<?php
																$b++;
																}
																?>
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Tab Content End -->

                                            <!-- Single Tab Content Start -->
                                            <div class="tab-pane fade" id="download" role="tabpanel">
                                                <div class="myaccount-content">
                                                    <h3>Downloads</h3>
                                                    <div class="myaccount-table table-responsive text-center">
                                                        <table class="table table-bordered">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>Product</th>
                                                                    <th>Date</th>
                                                                    <th>Expire</th>
                                                                    <th>Download</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Haven - Free Real Estate PSD Template</td>
                                                                    <td>Aug 22, 2018</td>
                                                                    <td>Yes</td>
                                                                    <td><a href="#" class="btn btn__bg"><i
                                                                        class="fa fa-cloud-download"></i>
                                                                            Download File</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>HasTech - Profolio Business Template</td>
                                                                    <td>Sep 12, 2018</td>
                                                                    <td>Never</td>
                                                                    <td><a href="#" class="btn btn__bg"><i
                                                                        class="fa fa-cloud-download"></i>
                                                                            Download File</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Tab Content End -->

                                            <!-- Single Tab Content Start -->
                                            <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                                <div class="myaccount-content">
                                                    <h3>Change Password</h3><form  method="post">
                                    <div class="single-input-item">
                                        <input type="password" name="op"  placeholder="Enter your old password" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="password" name="np"  placeholder="Enter your new password" required />
                                    </div>
									
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                            
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button name="Signin" class="btn btn__bg">Change Password</button>
                                    </div>
                                </form>
                                                </div>
                                            </div>
                                            <!-- Single Tab Content End -->

                                            <!-- Single Tab Content Start -->
                                            <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                                <div class="myaccount-content">
                                                    <h3>Billing Address</h3>
                                                    <address>
                                                        <p><strong>Alex Tuntuni</strong></p>
                                                        <p>1355 Market St, Suite 900 <br>
                                                            San Francisco, CA 94103</p>
                                                            <p>Mobile: (123) 456-7890</p>
                                                    </address>
                                                    <a href="#" class="btn btn__bg"><i class="fa fa-edit"></i>
                                                        Edit Address</a>
                                                </div>
                                            </div>
                                            <!-- Single Tab Content End -->

                                            <!-- Single Tab Content Start -->
                                            <div class="tab-pane fade" id="account-info" role="tabpanel">
                                                <div class="myaccount-content">
                                                    <h3>Account Details</h3>
                                                    <div class="account-details-form">
                                                        <form action="#">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="first-name" class="required">First
                                                                            Name</label>
                                                                        <input type="text" id="first-name" placeholder="First Name" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="last-name" class="required">Last
                                                                            Name</label>
                                                                        <input type="text" id="last-name" placeholder="Last Name" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="single-input-item">
                                                                <label for="display-name" class="required">Display Name</label>
                                                                <input type="text" id="display-name" placeholder="Display Name" />
                                                            </div>
                                                            <div class="single-input-item">
                                                                <label for="email" class="required">Email Addres</label>
                                                                <input type="email" id="email" placeholder="Email Address" />
                                                            </div>
                                                            <fieldset>
                                                                <legend>Password change</legend>
                                                                <div class="single-input-item">
                                                                    <label for="current-pwd" class="required">Current
                                                                        Password</label>
                                                                    <input type="password" id="current-pwd" placeholder="Current Password" />
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="single-input-item">
                                                                            <label for="new-pwd" class="required">New
                                                                                Password</label>
                                                                            <input type="password" id="new-pwd" placeholder="New Password" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="single-input-item">
                                                                            <label for="confirm-pwd" class="required">Confirm
                                                                                Password</label>
                                                                            <input type="password" id="confirm-pwd" placeholder="Confirm Password" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <div class="single-input-item">
                                                                <button class="btn btn__bg">Save Changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- Single Tab Content End -->
                                        </div>
                                    </div> <!-- My Account Tab Content End -->
                                </div>
                            </div> <!-- My Account Page End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php include"include/footer.php";?>
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/active.js"></script>
</body>

</html>