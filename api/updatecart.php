<?php
require_once"../include/dbconfig.php";
extract($_REQUEST);

    $yu=select("select price from product where id='$productid'");
    while($i=mysqli_fetch_array($yu))
    {
       extract($i); 
    }
    $date=date("y-m-d");
	$price=$price*$newVal;
$n=iud("update `cart` set `quantity`='$newVal', `total_price`='$price' where  `product_id`='$productid' and id='$cartid'");
echo $n;
	


?>