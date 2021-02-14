<?php
require_once"ajaxsub/dbconfig.php";
extract($_REQUEST);
if(isset($_REQUEST['pending']))
{
   $n=iud("UPDATE `orderdetail` SET `status`='1' WHERE `orderid`='".$odid."' ");
if($n>=1)
{
    
        echo'<script>window.location="view_orders.php";</script>';
    
}
}

if(isset($_REQUEST['approve']))
{
   $n=iud("UPDATE `orderdetail` SET `status`='2' WHERE `orderid`='".$odid."' ");
if($n==1)
{
    if($n>=1)
    {
        echo'<script>window.location="view_orders.php";</script>';
    }
} 
}


?>