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
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

    <link href="css/fontawesome-all.css" rel="stylesheet">
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
            <h2 class="main-title-w3layouts mb-2 text-center">View Product Detail</h2>
            <section class="tables-section">
                <div class="outer-w3-agile mt-3">
                    <div class="form-group pull-right">
    
</div>
<span class="counter pull-right"></span>

                    
					<?php
					$r=select("SELECT * from product LEFT JOIN saller ON product.AddBy=saller.id order by product.id desc");
					$num=mysqli_num_rows($r);
					if($num>=1)
					{
					?>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col"> Product Title</th>
                                    <th scope="col"> Product Url</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Subcategory</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Cut-Price</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">Added By</th>
                                    <th scope="col">Image</th>
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
                                <tr>
								    <th scope="row"><?=$n?>.</th>
                                    <td><?=ucwords($title)?></td>
                                    <td><?=ucwords($p_url)?></td>
                                    <td><?php
									$q=select("SELECT category_name FROM `product` INNER JOIN category on product.category=category.id where product.id='".$res[0]."'");
									while($qs=mysqli_fetch_array($q))
									{
										echo ucwords($qs['category_name']);
									}
									?></td>
                                    <td><?php
									$q=select("SELECT name FROM `product` INNER JOIN sub_category on product.sub_category=sub_category.id where product.id='".$res[0]."'");
									while($qs=mysqli_fetch_array($q))
									{
										echo ucwords($qs['name']);
									}
									?></td>
                                    <td><?=ucwords($price)?></td>
                                    <td><?=ucwords($cut_price)?></td>
                                    <td><?=ucwords($discount)?></td>
                                    <td>
                                    
                                    <?php
                                    if($res['AddBy']==NULL)
                                    {
                                        echo"Admin";
                                    }
                                    else
                                    {
									$q=select("SELECT * FROM `saller` INNER JOIN product on saller.id=product.AddBy where product.AddBy='".$res['AddBy']."'");
									while($qs=mysqli_fetch_array($q))
									{
									 echo ucwords($qs['name']);
							        }
                                    }
									?></td>
                                    <td><a href="view_images.php?id=<?=$res[0]?>"><button class="btn btn-delete">View </button></a></td>
									<td><a href="edit_product.php?id=<?=$res[0]?>"><button class="btn btn-delete">Edit</button></a></td>
									<td><a href="delete_product.php?id=<?=$res[0]?>"><button class="btn btn-delete">Delete</button></a></td>
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
          
 
    $('#example').DataTable();


            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- dropdown nav -->
    <script>

        $(document).ready(function () {
			  
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