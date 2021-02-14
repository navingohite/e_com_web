<?php
require_once"../include/dbconfig.php";
require 'class/class.phpmailer.php';
extract($_REQUEST);
 $date=date("d/m/yy");
   
 $rand = "IERFUIEHHJSBVJBNVBMNBJLHGUIHWUHGIHGJVBDNKGJWRIJITI9789748412131564878798777112315REIUYTUTYUGGBJHVBHJFD";
 $rand=str_Shuffle($rand);
 $rand=substr($rand,0,8).$userid;

if(isset($_REQUEST['name']))
{
     "select * from cart where userid='$userid' and status='0'";
    $res=select("select * from cart where userid='$userid' and status='0'");
   
while($y=mysqli_fetch_array($res))
{
    $pid=$y[1];

     $randstring = rand();
         $a="INSERT INTO `orderdetail`( `orderid`, `name`, `address`, `country`, `region`, `mobile`, `email`,`payment_via`,`pid`,`userid`,`datet`,`quantity`,`total_price`,`size`,`color`
) VALUES ('$rand', '$name','$address','$country','$region','$mobile','$email','$payvia','$pid','$userid','$date','".$y['quantity']."','".$y['total_price']."','".$y['product_size']."','".$y['product_color']."') ";
       
  $n=iud($a);
  
  

    
}



$headers = 'From:Sayladda@sayladda.com' . "\r\n" .
            'Reply-To: sayladda@sayladda.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion() ."\r\n" .
            'Content-type:text/html;charset=UTF-8';
$querya="select orderid from orderdetail where orderid='.$rand.' and userid='.$userid.' and status=0";
 $ty="SELECT * FROM ((orderdetail INNER JOIN cart on orderdetail.cartid=cart.id) INNER JOIN product on cart.product_id=product.id) WHERE orderdetail.orderid='".$rand."' and orderdetail.status='0' and cart.status='1' and cart.userid='".$_SESSION['userid']."'";
$ui="SELECT * FROM `cart` INNER JOIN product ON cart.product_id=product.id WHERE cart.userid='".$_SESSION['userid']."' order by cart.id desc ";
  $to="SELECT sum(total_price) FROM `cart` INNER JOIN product ON cart.product_id=product.id WHERE cart.userid='".$_SESSION['userid']."' order by cart.id desc ";

			$t=select($ty);
			$abc=select($ui);
				$tu=select($to);
 $message = '<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #24babb;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #24babb;
  color: white;
}
</style>
</head>
<body>
<p style="font-weight:bold">Hi '.ucwords($name).' ,</p></br>';

$message.='
<p style="text-align:justify">Thanks for your order. It’s on-hold until we confirm that payment has been received. In the meantime, here’s a reminder of what you ordered:</p><h3 style="font-weight:bold;color:blue;text-align:left">[Order ID: '.$rand.' ]&nbsp;&nbsp;[Date : '.date('d/m/yy').'] </h3> 
</br></br></br></br>';



$message.='<table id="customers" > 
  <tr>
    <th>S.N.</th>
			 <th>Product Name</th>
			 <th>Quantity</th>
			 <th>Price</th>
			 	 
  </tr>';
   $num=1;
while($at=mysqli_fetch_array($abc)){
$message .='
<tr>
<td>'.$num.'.</td>
<td>'.$at['title'].'</td>
<td>'.$at['quantity'].'</td>
<td>$ '.$at['total_price'] .'</td>

			 
</tr>';
$num++;
}
$message.='<tr style="width:100%">';
while($att=mysqli_fetch_array($tu)){
$message .='
<td>-</td>
<td>-</td>
<td>-</td>

<td style="font-weight:bold">Sub-total : $ '.$att[0] .'</td>';

}
$message.='</tr></table>
</br>
<h2 style="font-weight:bold;color:blue">Billing Address</h2>
<div style="float: left;
  text-align: left;
  width: 320px;
  border: 3px solid #24babb;
  margin: 4px;
  padding: 6px;" >';
  
  $message .='<h4>Name: '.ucwords($name).'</h4>';
  $message .='<h4>Mobile: '.$mobile.'</h4>';
  $message .='<h4>Address: '.ucwords($address).'</h4>';
  $message .='<h4>City: '.$region.'</h4>';
  $message .='<h4>Country: '.$country.'</h4>';
  $message .='<h4>Email: '.$email.'</h4>';
  
 $message .=' 
</div>
</body></html>';

if(mail($email,'Sales', $message, $headers))

{
    iud("delete from cart where userid='$userid' and status='0'");
echo'1';
} 
else
{
    echo 'Unable to send email. Please try again.';
}
}




?>