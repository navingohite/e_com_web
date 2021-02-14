<?php
require_once"dbconfig.php";
$n=iud("Delete FROM `size` where id='".$_REQUEST['sizeid']."'");
echo $n;

?>