<?php
require_once"dbconfig.php";
//require_once"validation.php";

	if(isset($_REQUEST['login']))
	{
		extract($_REQUEST);
		$result=select("select * from saller where email='$email' and password='$password'");
		$num=mysqli_num_rows($result);
if($num==1)
{
	while($r=mysqli_fetch_array($result))
	{
		extract($r);
		$_SESSION['seller_login']="yes";
		$_SESSION['sellerid']=$id;
		$_SESSION['id']=$email;
		echo"<script>window.location='index.php';</script>";
		
	}
}
else
{
	echo"<script>
	alert('Email Or Password Incorrect');
	window.location='index.php';</script>";
}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	










?>