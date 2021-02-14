
	<?php 
	require_once"dbconfig.php";
	extract($_REQUEST);
	 $qq="select * from investor_profile where 1>0 ";
	    if($industry_type!='')
		{
			 $qq.=" and industry_type='$industry_type' ";
		}
		if($min_range!='')
		{
			 $qq.=" and min_range='$min_range' ";
		}
	   if($max_range!='')
		{
			 $qq.=" and max_range='$max_range' ";
		}
       if($country!='')
		{
			 $qq.=" and country='$country' ";
		}	
       if($state!='')
		{
			 $qq.=" and state='$state' ";
		}	
if($city!='')
		{
			 $qq.=" and city='$city' ";
		}
if($free==="true" and $premium==="true")
	 {
		//$query.=" and  fund.free_premium='Free'";
		 
	 }else if($free==="true" )
	 {
		$qq.=" and free_premium='Free'";
		 
	 }else if($premium==="true")
	 {
		 $qq.=" and free_premium='Premium'";
	 }		

	
	$t=select($qq);
	$rt=mysqli_num_rows($t);
	if($rt>=1)
	{
	while($tt=mysqli_fetch_array($t))
	{
		extract($tt);
	
	?>
     
      <a href="investor_view.php?id=<?=$id?>"><div class="well">
        <div class="row">
        <div class="col-lg-4">
		<?php
		$ty=select("select * from register where id='$userid'");
		while($i=mysqli_fetch_array($ty))
		{
		?><img src="dash/ajaxsub/images/<?=$i['image']?>" class="img-thumbnail" style="height:200px;width:300px">
		
		
		
        </div>
		<div class="col-lg-8">
		Name : <?=ucwords($i['name'])?></br>
		Industry Type : <?=ucwords($industry_type)?></br>
		<p style="text-align:justify"> <?=ucwords($description)?></p>
		
        </div>
		<?php
		}
		?>
        </div>
      </div></a>
     
<?php
	}
	}
	else
	{
	?>
	</br>
	</br>
	</br>
	</br>
	<div class="alert alert-danger" style="text-align:center">
    <strong>No Data Found!</strong>
  </div>
	<?php
	}
?>    	
		
   