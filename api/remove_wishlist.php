	<?php
//session_start();

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
		
	
					
							extract($_REQUEST);
							$r=iud("delete from wishlist where id='$id'");
							 if($r==1)
							 {
							 echo"<script>window.location='$site/wishlist.php'</script>";
							 }
							 else
							 {
							     	 echo"<script>
									 alert('something went worng');
									 window.location='$site/wishlist.php'</script>";
							
							 }
						
						?>