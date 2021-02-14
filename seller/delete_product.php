<?php

require_once"ajaxsub/dbconfig.php";
$n=iud("delete from product where id='".$_REQUEST['id']."'");
if($n==1)
{
	$t=iud("delete from picture where product_id='".$_REQUEST['id']."'");
if($t>=1)
{
	echo"<script>window.location='view_product.php'</script>";
}
else
{
	echo"<script>
	alert('Something Went Wrong');
	window.location='view_product.php'</script>";
}
}
else
{
	echo"<script>
	alert('Something Went Wrong');
	window.location='view_product.php'</script>";
}
?>
