	<?php
$site="https://sayladda.com";

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

	
	
					
							extract($_REQUEST);
							$r=iud("delete from cart where id='$id'");
							 if($r==1)
							 {
							 echo"<script>window.location='$site/cart.php'</script>";
							 }
							 else
							 {
							     	 echo"<script>
									 alert('something went worng');
									 window.location='$site/cart.php'</script>";
							
							 }
						
						?>