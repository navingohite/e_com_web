<?php
require_once"ajaxsub/dbconfig.php";
if(isset($_SESSION['admin_login']))
{
	
}
else
{
	echo"<script>window.locaion='index.php'</script>";
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
            <h2 class="main-title-w3layouts mb-2 text-center">Update Product</h2>
            <section class="forms-section">
                <div class="container-fluid">
                    <div class="row">
                    </div>
                </div>
				
				
                <div class="outer-w3-agile mt-3">
                    <?php 
				if(isset($_REQUEST['submitt']))
				{
					extract($_REQUEST);
					$url = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["p_url"])));
					$i = iud("Update  `product` Set `title`='$title', `p_url`='$url', `category`='$category', `sub_category`='$sub_category', `price`='$price', `cut_price`='$cut_price', `discount`='$dp',`description`='$description' where id='".$_REQUEST['id']."'");
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
						$ru=select("select * from picture where product_id='".$_REQUEST['id']."' and image='$name'");
    $tu=mysqli_num_rows($ru);
    if($tu==1)
    {
        
    }
    else
    {
	$p=iud("INSERT INTO `picture`( `product_id`, `image`) VALUES ('".$_REQUEST['id']."','$name')");
    }				
						
					}
				}
			
							
							
if(isset($_POST['color'])){
	$valuess = $_POST['color'];
foreach ($valuess as $ss){
    $ruu=select("select * from color where product_id='".$_REQUEST['id']."' and color='$ss'");
     $tuu=mysqli_num_rows($ruu);
    if($tuu==1)
    {
        
    }
    else
    {
       	$ii=iud("INSERT INTO `color`( `product_id`, `color`) VALUES ('$id','$ss')"); 
    }
   
}
}
if(isset($_POST['size'])){
	$values = $_POST['size'];
foreach ($values as $s){
    $ru=select("select * from size where product_id='".$_REQUEST['id']."' and size='$s'");
    $tu=mysqli_num_rows($ru);
    if($tu==1)
    {
        
    }
    else
    {
       	$ii=iud("INSERT INTO `size`( `product_id`, `size`) VALUES ('$id','$s')"); 
    }
   
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
						
						echo "<div class='alert alert-success'>Successfully updated</div>";
					}								
				}
				
			
				}
				
				?>
                    <h4 class="tittle-w3-agileits mb-4"></h4>
                   <form id="fupForm" method="post" enctype="multipart/form-data">
		
                        <?php
						$pid=$_REQUEST['id'];
						$at=select("select * from product where id='".$_REQUEST['id']."'");
						while($a=mysqli_fetch_array($at))
						{
							extract($a)
						
						?>
					    <div class="form-row">
						<div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror"> Product Name</label>
                                <input type="text"  name="title" value="<?=$title?>" class="form-control" id="category_name">
                        </div>
						<div class="form-group col-md-6">
                                <label for="category_name" >Product url</label>
                                <input type="text"  name="p_url" value="<?=$p_url?>" class="form-control" id="">
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
									<option value="<?=$r['id']?>" <?=$category==$r['id']?"selected":""?>><?=$r['category_name']?></option>
								<?php
								}
								?>
								</select>
                        </div>
						<div class="form-group col-md-6">
						    <input type="hidden" value="<?=$sub_category?>" id="sub_cate">
                                <label for="category_name">Sub Category</label>
                                <select  name="sub_category" id="sub" class="form-control">
								
								</select>
                        </div>
					    </div>
						<div class="form-row">
						<div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror">Price</label>
                                <input type="text"  name="price"  value="<?=$price?>" class="form-control" id="">
                        </div>
					    
						<div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror">Cut Price</label>
                                <input type="text"  name="cut_price" value="<?=$cut_price?>" class="form-control" id="">
                        </div>
					    </div>
						<div class="form-row">
						<div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror">Discount Percentage</label>
                                <input type="text"  name="dp" value="<?=$discount?>" class="form-control" id="">
                        </div>
					    
						<div class="form-group col-md-6">
                                <label for="category_name" id="business_nameerror">Description</label>
                                <textarea name="description"   class="form-control" id=""><?=$description?></textarea>
                        </div>
					    </div>
						<div class="form-row">
						<div class="form-group col-md-12">
                                <label for="category_name" id="business_nameerror">Images</label>
                        <input type="file" name="files[]" multiple="multiple" />
			 </div>
					  <div class="form-group col-md-6">SIZE: </br>

    <?php
 $resultyu = select("SELECT * FROM sizedata "); 
 while($rowu = mysqli_fetch_array($resultyu))
 {
 $focus=explode(",",$rowu[1]);
  
 ?>
<input type="checkbox" value=<?php echo $rowu[1];  ?> name="size[ ]"   /><?php echo $rowu[1];  ?>&nbsp;
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
                        <input type="submit" name="submitt" class="btn btn-success" value="Update"/>
	
                       </form>
					   <?php
					   echo"</br></br>";
					$r=select("SELECT * FROM `picture` where product_id='".$_REQUEST['id']."'");
					$num=mysqli_num_rows($r);
					if($num>=1)
					{
						while($abc=mysqli_fetch_array($r))
						{
							extract($abc);
					?>
                       
    <a href="https://sayladda.com/assets/upload/<?=$image?>"> <img class="img-fluid z-depth-1" src="https://sayladda.com/assets/upload/<?=$image?>" style="height:100px;width:150px" alt="video"
        data-toggle="modal" data-target="#modal3"></a>
		<button class="btn btn-info picdelete" picture_id="<?=$abc[0]?>">X
		</button>

 
						<?php
					}
					}
					else
					{
						?>
						<h1>No Images
						</h1>
					<?php
					}
					echo"</br></br>";	
					$rr=select("SELECT * FROM `size` where product_id='".$_REQUEST['id']."'");
					$numm=mysqli_num_rows($rr);
					if($numm>=1)
					{
						while($abcd=mysqli_fetch_array($rr))
						{
							extract($abcd);
					?>
                       
    <button class='btn'><?=$abcd[2]?></button>
		<button class="btn btn-danger sizedelete " sizeid="<?=$abcd[0]?>">X
		</button>&nbsp;&nbsp;

 
						<?php
					}
					}
					else
					{
						?>
						<h3 style="color:red">No size Selected
						</h3>
					<?php
					}
					echo"</br></br>";	
					$rrr=select("SELECT * FROM `color` where product_id='".$_REQUEST['id']."'");
					$nummm=mysqli_num_rows($rrr);
					if($nummm>=1)
					{
						while($abbcd=mysqli_fetch_array($rrr))
						{
							extract($abbcd);
					?>
                       
    <button class='btn'><?=ucwords($abbcd[2])?></button>
		<button class="btn btn-danger colordelete " sizeid="<?=$abbcd[0]?>">X
		</button>&nbsp;&nbsp;

 
						<?php
					}
					
					}
					else
					{
						?>
						<h3 style="color:red">No size Selected
						</h3>
					<?php
					}
					
						?>
                    </td></tr>


  
  
						<?php
					}
					   
						
						
					   ?>
                </div>
				
               
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
			
function anmol(){
	var catid=$("#category").val();
		var sub_cat=$("#sub_cate").val();

		    $.ajax({
			type: 'POST',
			url: 'ajaxsub/fetchsubcategoryy.php',
			data: {"catid":catid,"sub_cat":sub_cat},
		    success: function(response)
			{
				$("#sub").html(response);
			}
});
}
anmol();
						
			$("#category").change(function(){
anmol();
});
			
$(".picdelete").click(function(){
var picture_id=$(this).attr('picture_id');
		    $.ajax({
			type: 'POST',
			url: 'ajaxsub/deletepicture.php',
			data: {"picture_id":picture_id},
		    success: function(response)
			{
				if(response==1)
				{
					alert('Success');
					location.reload();
				}
				else
				{
					alert('Something went Wrong');
				}
			}
});
return false();
});	

$(".sizedelete").click(function(){
var sizeid=$(this).attr('sizeid');
		    $.ajax({
			type: 'POST',
			url: 'ajaxsub/deletesize.php',
			data: {"sizeid":sizeid},
		    success: function(response)
			{
				if(response==1)
				{
					alert('Success');
					location.reload();
				}
				else
				{
					alert('Something went Wrong');
				}
			}
});
return false();
});	

$(".colordelete").click(function(){
var colorid=$(this).attr('sizeid');
		    $.ajax({
			type: 'POST',
			url: 'ajaxsub/deletecolor.php',
			data: {"colorid":colorid},
		    success: function(response)
			{
				if(response==1)
				{
					alert('Success');
					location.reload();
				}
				else
				{
					alert('Something went Wrong');
				}
			}
});
return false();
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