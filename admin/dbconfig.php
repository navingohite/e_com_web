<?php

session_start();
   define("server","localhost",true);
	define("user","abdiqani_abdiqan",true);
	define("password","ecommerceweb",true);
	define("database","abdiqani_shop",true);
		$cid=mysqli_connect(server,user,password,database) or die("connection error");
	
	function iud($query)
	{
		$cid=mysqli_connect(server,user,password,database) or die("connection error");
	$result=mysqli_query($cid,$query);
	$n=mysqli_affected_rows($cid);
	mysqli_close($cid);
	return $n;
	}
	
function select($query)
{
	$cid=mysqli_connect(server,user,password,database) or die("connection error");
	$result=mysqli_query($cid,$query);
	mysqli_close($cid);
	return $result;
}













?>
	