<?php
require_once"ajaxsub/dbconfig.php";
if(isset($_SESSION['login_cat']))
{
	
}
else
{
	header("location:../index.php");
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
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
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
        <!-- Sidebar Holder -->
        <?php include"breacktemp/sidebar.php";?>


        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
             <?php include"breacktemp/topbar.php";?>
			
            <!--// top-bar -->

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Tables</h2>
            <!--// main-heading -->

            <!-- Tables content -->
            <section class="tables-section">
                <!-- table1 -->
               
                <!--// table1 -->

              
                <!--// table2 -->

            
                <!--// table3 -->

                <!--// table4 -->

                <!-- table5 -->
               
                <!--// table5 -->

              
                <!--// table6 -->

                <!-- table7 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Responsive Table</h4>
					<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>
<span class="counter pull-right"></span>

                    <div class="table-responsive">
					<?php
					$r=select("SELECT * FROM (( `business_idea` INNER JOIN interested_people on business_idea.id=interested_people.business_id) INNER JOIN register on interested_people.userid=register.id) WHERE business_idea.userid=business_idea.userid='".$_SESSION['userid']."'");
					$num=mysqli_num_rows($r);
					if($num>=1)
					{
					?>
                        <table class="table table-hover table-bordered results">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Business Name</th>
                                    <th scope="col">Industry Type</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">User Mobile</th>
                                    <th scope="col">User Email</th>
                                    
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
                                    <td><?=ucwords($business_name)?></td>
                                    <td><?=ucwords($industry_type)?></td>
                                    <td><?=ucwords($name)?></td>
                                    <td><?=ucwords($email)?></td>
                                    <td><?=ucwords($mobile)?></td>
                                    
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
                <!--// table7 -->

            </section>

            <!--// Tables content -->

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
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
			  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
		  });
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