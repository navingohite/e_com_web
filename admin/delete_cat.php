<?php
require_once"dbconfig.php";
extract($_REQUEST);
$n=iud("delete from category where id='$id'");
if($n==1)
{
	echo"<script>window.location='view_cat.php';</script>";
}
else
{
	echo"<script>
	alert('Something Went Wrong');
	window.location='view_cat.php';</script>";
}
?>