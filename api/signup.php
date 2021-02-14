	<?php
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

	
	
					if(isset($_REQUEST['signup']))
						{
							extract($_REQUEST);
							$r=select("select * from register where email='$email'");
							$at=mysqli_num_rows($r);
							 if($at==1)
							 {
							 echo"<div class='alert alert-danger'>You have already registered with this email address...</div>";
							 }
							 else
							 {
							     	 $query="INSERT INTO `register`( `name`,  `email`,`mobile`, `password`) VALUES ('$name','$email','$mobile','$password')";
							
							 $n=iud($query);
							
							if($n==1)
							{
								echo 1;
							}
							else
							{
							echo"<div class='alert alert-danger'>Something Went Wrong Please Try Again Later.</div>";
								
							}
							 }
						
						}
						?>