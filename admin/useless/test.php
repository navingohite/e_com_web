<?php
require_once"ajaxsub/dbconfig.php";
$query="SELECT * FROM states WHERE `country_id`='".$_POST['countryid']."'";
$result=select($query);
$output='<option value="select_state">Select State</option>';
while($res=mysqli_fetch_array($result))
{
$output .='<option value="'.$res['id'].'">'.$res['name'].'</option>';
}
echo $output;

?>