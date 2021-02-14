<?php
require_once"ajaxsub/dbconfig.php";
if(isset($_SESSION['seller_login']))
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
    <title>Hello </title>
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
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    </head>
	<body>
    <div class="wrapper">
        <?php include"breacktemp/sidebar.php";?>

        <div id="content">
            <?php include"breacktemp/topbar.php";?>
			
			<div id="success"></div>
			<div class="statusMsg"></div>
            <h2 class="main-title-w3layouts mb-2 text-center">Add Product</h2>
            <section class="forms-section">
                <div class="container-fluid">
                    <div class="row">
                    </div>
                </div>
				
				
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4"></h4>
                   <form id="fupForm" method="post" enctype="multipart/form-data">
		
                        
					    <div class="form-row">
						<div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror"> Product Name</label>
                                <input type="text"  name="title" class="form-control" id="category_name">
                        </div>
						<div class="form-group col-md-6">
                                <label for="category_name" >Sub Title</label>
                                <input type="text"  name="sub_title" class="form-control" id="">
                        </div>
					    </div>
						<div class="form-row">
						<div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror">Category</label>
                                <select  name="category" id="category" class="form-control">
								<?php
								$res=select("select * from category");
								while($r=mysqli_fetch_array($res))
								{
									extract($r);
								?>
									<option value="<?=$r['id']?>"><?=$r['category_name']?></option>
								<?php
								}
								?>
								</select>
                        </div>
						<div class="form-group col-md-6">
                                <label for="category_name">Sub Category</label>
                                <select  name="sub_category" id="sub" class="form-control">
								
								</select>
                        </div>
					    </div>
						<div class="form-row">
						<div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror">Price</label>
                                <input type="text"  name="price" class="form-control" id="">
                        </div>
					    
						<div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror">Cut Price</label>
                                <input type="text"  name="cut_price" class="form-control" id="">
                        </div>
					    </div>
						<div class="form-row">
						<div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror">Discount Percentage</label>
                                <input type="text"  name="dp" class="form-control" id="">
                        </div>
					    
						<div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror">Description</label>
                                <input type="text"  name="description" class="form-control" id="">
                        </div>
					    </div>
						<div class="form-row">
						<div class="form-group col-md-12 ">
                                <label for="category_name" id="business_nameerror">Images</label>
                        <input type="file" name="files[]" multiple="multiple" />
			 </div> <div class="form-group col-md-6">SIZE: </br>

    <?php
 $resultyu = select("SELECT * FROM sizedata "); 
 while($rowu = mysqli_fetch_array($resultyu))
 {
 $focus=explode(",",$rowu[1]);
  
 ?>
<input type="checkbox" value=<?php echo $rowu[1];  ?> name="size[ ]"  /><?php echo $rowu[1];  ?>&nbsp;
<?php

}

?>
        
    
</div>
<div class="form-group col-md-6">COLOR: </br>
&nbsp;&nbsp;
<?php
 $resulty = select("SELECT * FROM colordata "); 
 while($row = mysqli_fetch_array($resulty))
 {
 $focus=explode(",",$row[1]);
  
 ?>
<input type="checkbox" value=<?php echo $row[1];  ?> name="color[ ]"  /><?php echo $row[1];  ?>&nbsp;
<?php

}

?>
    
    
</div>					    
						
					    </div>
                        <input type="submit" name="submit" class="btn btn-success" value="SUBMIT"/>
	
                       </form>
                </div>
				<?php 
				if(isset($_REQUEST['submit']))
				{
					$sid=$_SESSION['sellerid'];
					extract($_REQUEST);
					$url = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["title"])));
 $query = "SELECT p_url FROM product  WHERE p_url LIKE '$url%'";
 $result=select($query);
  
  $total_row = mysqli_num_rows($result);
  if($total_row > 0)
  {
    foreach($result as $row)
   {
    $data[] = $row['p_url'];
   }
   
   if(in_array($url, $data))
   {
    $count = 0;
    while( in_array( ($url . '-' . ++$count ), $data) );
    $url = $url . '-' . $count;
   }
  }
					$i = iud("INSERT INTO `product`(`title`, `p_url`, `category`, `sub_category`, `price`, `cut_price`, `discount`,`AddBy`,
					`description`) VALUES ('$title','$url','$category','$sub_category','$price','$cut_price','$dp','$sid','$description')");
					if($i==1)
					{
					   	$errors = array();
				$uploadedFiles = array();
				$extension = array("jpeg","jpg","png","gif");
				$bytes = 1024;
				$KB = 1024;
				$totalBytes = $bytes * $KB;
				$UploadFolder = "../assets/upload/";
				
				$counter = 0;
				
				foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
					$temp = $_FILES["files"]["tmp_name"][$key];
					$name = $_FILES["files"]["name"][$key];
					
					if(empty($temp))
					{
						break;
					}
					
					$counter++;
					$UploadOk = true;
					
					
					
					$ext = pathinfo($name, PATHINFO_EXTENSION);
					if(in_array($ext, $extension) == false){
						$UploadOk = false;
						array_push($errors, $name." is invalid file type.");
					}
					
					
					
					if($UploadOk == true){
						move_uploaded_file($temp,$UploadFolder."/".$name);
						array_push($uploadedFiles, $name);
						$an=select("SELECT MAX(id) FROM `product`");
						while($m=mysqli_fetch_array($an))
						{
							$id=$m[0];
							$p=iud("INSERT INTO `picture`( `product_id`, `image`) VALUES ('$id','$name')");
						}
						
					}
				}
				$ann=select("SELECT MAX(id) FROM `product`");
						while($mm=mysqli_fetch_array($ann))
						{
							$id=$mm[0];
							$values = $_POST['size'];
							$valuess = $_POST['color'];

foreach ($values as $s){
   	$ii=iud("INSERT INTO `size`( `product_id`, `size`) VALUES ('$id','$s')");
}
foreach ($valuess as $ss){
   	$ii=iud("INSERT INTO `color`( `product_id`, `color`) VALUES ('$id','$ss')");
}
			
						}
				if($counter>0){
					if(count($errors)>0)
					{
						echo "<b>Errors:</b>";
						echo "<br/><ul>";
						foreach($errors as $error)
						{
							echo "<li>".$error."</li>";
						}
						echo "</ul><br/>";
					}
					
					if(count($uploadedFiles)>0){
						echo "<b>Uploaded Files:</b>";
						echo "<br/><ul>";
						foreach($uploadedFiles as $fileName)
						{
							 "<li>".$fileName."</li>";
						}
						echo "</ul><br/>";
						
						echo count($uploadedFiles)." file(s) are successfully uploaded.";
					}								
				}
				else
				    {
					echo "Please, Select file(s) to upload.";
				    } 
					}
					else
					{
	                   echo "Smething Wrong.";
				   
					}
				
			
				}
				
				?>
               
            </section>

             <?php include"breacktemp/footer.php";?>
           
        </div>
    </div>


    <script src='js/jquery-2.2.3.min.js'></script>
    <script>
        $(document).ready(function () {
				$(".country").click(function(){
        var countries = [];
        $.each($(".country option:selected"), function(){            
            countries.push($(this).val());
        });
        $("#getdata").html("You have selected the size - " + countries.join(", "));
    });
			$("#category").change(function(){
			var catid=$("#category").val();
		    $.ajax({
			type: 'POST',
			url: 'ajaxsub/fetchsubcategory.php',
			data: {"catid":catid},
		    success: function(response)
			{
				$("#sub").html(response);
			}
});
});
			
	


			
			
		
			
			
			
			
			
			
			
			
			
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script>
        (function () {
            'use strict';

            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
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
    <script src="js/bootstrap.min.js"></script>
    
</body>

</html>