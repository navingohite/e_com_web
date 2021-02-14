<?php
require_once"dbconfig.php";

$query="SELECT * FROM sub_category WHERE `category_id`='".$_POST['catid']."'";
$result=select($query);
$output='<option value="">Select Subcategory</option>';

while($res=mysqli_fetch_array($result))
{
$output .='<option value="'.$res['id'].'">'.$res['name'].'</option>';
}
echo $output;

?>