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


					if(isset($_REQUEST['email']))
						{
							extract($_REQUEST);
							$r=select("select * from register where email='$email'");
							$at=mysqli_num_rows($r);
							 if($at==1)
							 {
								 $token="DAEJIORWIAURIYIUYFUFBVJBJFVNMARQOUORIUIWTUIUJNAFN57487789712154567487971167897";
								 $token=str_shuffle($token);
								 $token=substr($token,0,10);
								 $pass="45925928758975@e##%^%^^%@#@@MMCNMNkdhefkhwuiey!!!##%%ncmnmnsbfhggfyuwruiouowu97879";
								  $pass=str_shuffle($pass);
								 $pass=substr($pass,0,8);
								 $u=iud("update register set token='$token',password='$pass' where email='$email'");
								 $to = $email;
         $subject = "Forget Password";
         
         $message = "<h4>Hi,</span></h4>";
         $message .= "<h4>in order to reset your password, please click on the link below:</h4>";
         $message .= "<a  style='background-color:#24babb;color:white;text-decoration:none' href='".$site."/reset.php?email=$email&token=$token'>&nbsp;&nbsp;".$site."/yourpass.phpemail=$email--token=$token</a>";
           $message .= "<h5>Regards:</h5>";
           $message .= "<span>sayladda</span></br></br>";
       
         $header = "From:sayladda@sayladda.com \r\n";
         $header .= "Cc:sayladda@sayladda.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo 1;
         }else {
            echo 2;
         }
							 }
							 else
							 {
							     	 echo 0;
							 }
						
						}
						?>