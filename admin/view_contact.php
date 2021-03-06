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
        <?php include"breacktemp/sidebar.php";?>
  <div id="content">
             <?php include"breacktemp/topbar.php";?>
            <h2 class="main-title-w3layouts mb-2 text-center">View Saller Details</h2>
            <section class="tables-section">
                <div class="outer-w3-agile mt-3">
                    <div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>
<span class="counter pull-right"></span>

                    <div class="table-responsive">
					<?php
					$r=select("SELECT * FROM `contact` order by id desc");
					$num=mysqli_num_rows($r);
					if($num>=1)
					{
					?>
                        <table class="table table-hover table-bordered results">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col"> Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Message</th>
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
                                    <td><?=ucwords($name)?></td>
                                    <td><?=ucwords($email)?></td>
                                    <td><?=ucwords($mobile)?></td>
                                    <td><?=ucwords($message)?></td>
                                    <td><a href="delete_contact.php?id=<?=$res[0]?>"><button class="btn btn-danger">Delete</button></a></td>
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