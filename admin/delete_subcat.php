<?php
require_once"dbconfig.php";
extract($_REQUEST);
$n=iud("delete from sub_category where id='$id'");
if($n==1)
{
	echo"<script>window.location='view_subcat.php';</script>";
}
else
{
	echo"<script>
	alert('Something Went Wrong');
	window.location='view_subcat.php';</script>";
}
?>