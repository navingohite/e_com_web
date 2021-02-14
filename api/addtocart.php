<?php
require_once"../include/dbconfig.php";
extract($_REQUEST);
if(isset($_REQUEST['sizedata']))
{
   $sizedata;
}
else
{
	$sizedata='Null'; 
    
}
if(isset($_REQUEST['colordata']))
{
    $colordata;
}
else
{
    
	$colordata='Null';
}
    $yu=select("select price from product where id='$id'");
    while($i=mysqli_fetch_array($yu))
    {
       extract($i); 
    }
    $date=date("y-m-d");
	$price=$price*$quantity;
$n=iud("INSERT INTO `cart`( `product_id`, `userid`,`quantity`,`total_price`,`pdate`,`product_size`, `product_color`) VALUES ('$id', '$userid','$quantity','$price','$date', '$sizedata', '$colordata' )");
echo $n;
	


?>