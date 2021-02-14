<?php
require_once"dbconfig.php";
$n=iud("Delete FROM `picture` where id='".$_REQUEST['picture_id']."'");
echo $n;

?>