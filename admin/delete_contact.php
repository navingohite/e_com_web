<?php
require_once"dbconfig.php";
extract($_REQUEST);
$n=iud("delete from contact where id='$id'");
if($n==1)
{
	echo"<script>window.location='view_contact.php';</script>";
}
else
{
	echo"<script>
	alert('Something Went Wrong');
	window.location='view_contact.php';</script>";
}
?>