<?php
require_once"dbconfig.php";
$n=iud("Delete FROM `sizedata` where id='".$_REQUEST['id']."'");

echo"<script>window.location='https://sayladda.com/admin/view_size.php';</script>";

?>