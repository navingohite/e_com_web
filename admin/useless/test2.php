<?php
require_once"ajaxsub/dbconfig.php";
$query="SELECT * FROM cities WHERE `state_id`='".$_POST['stateid']."'";
$result=select($query);
$output='<option value="select_city">Select City</option>';

while($res=mysqli_fetch_array($result))
{
$output .='<option value="'.$res['id'].'">'.$res['name'].'</option>';
}
echo $output;

?>