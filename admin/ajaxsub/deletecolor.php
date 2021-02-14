<?php
require_once"dbconfig.php";
$n=iud("Delete FROM `color` where id='".$_REQUEST['colorid']."'");
echo $n;

?>