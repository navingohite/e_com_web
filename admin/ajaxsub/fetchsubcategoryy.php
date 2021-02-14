<?php
require_once"dbconfig.php";
extract($_REQUEST);
$query="SELECT * FROM sub_category WHERE `category_id`='".$_POST['catid']."'";
$result=select($query);
?>
<option value="">Select Subcategory</option>
<?php
while($res=mysqli_fetch_array($result))
{
?>
<option value=<?=$res['id']?> <?php if($sub_cat==$res['id']){echo"selected";}?> ><?=$res['name']?></option>
<?php
    
}


?>