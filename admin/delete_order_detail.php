<?php
require_once"dbconfig.php";
extract($_REQUEST);

    $nn=iud("delete from orderdetail where orderid='$oid'");

if($nn==1)
{
	
	echo"<script>window.location='view_orders.php';</script>";
}
  else
{
	echo"<script>
	alert('Something Went Wrong');
	window.location='view_orders.php';</script>";
}  

?>