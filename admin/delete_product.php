<?php

require_once"ajaxsub/dbconfig.php";
$n=iud("delete from product where id='".$_REQUEST['id']."'");

	$t=iud("delete from picture where product_id='".$_REQUEST['id']."'");

    $tt=iud("delete from size where product_id='".$_REQUEST['id']."'");

	echo"<script>window.location='view_product.php'</script>";

?>
