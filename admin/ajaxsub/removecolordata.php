<?php
require_once"dbconfig.php";
$n=iud("Delete FROM `colordata` where id='".$_REQUEST['id']."'");

echo"<script>window.location='https://sayladda.com/admin/view_color.php';</script>";

?>