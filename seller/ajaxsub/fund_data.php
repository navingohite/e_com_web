
	<?php 
	require_once"dbconfig.php";
	//print_r($_REQUEST);
	extract($_REQUEST);
	//var_dump($_REQUEST);
	
	 $query="SELECT * FROM `fund` INNER JOIN business_idea on fund.business_id=business_idea.id where 1>0 ";
	if($industry_type!='')
		{
			 $query.=" and business_idea.industry_type='$industry_type' ";
		}	
		if($range!='')
		{
			 $query.=" and fund.required_investment='$range' ";
		}	
		
	
	if($free==="true" and $premium==="true")
	 {
		//$query.=" and  fund.free_premium='Free'";
		 
	 }else if($free==="true" )
	 {
		$query.=" and  fund.free_premium='Free'";
		 
	 }else if($premium==="true")
	 {
		 $query.=" and  fund.free_premium='Premium'";
	 }
	// echo $query;
	
	$t=select($query);
	$rt=mysqli_num_rows($t);
	if($rt>=1)
	{
	while($tt=mysqli_fetch_array($t))
	{
		extract($tt);
	
	?>
     
     <a href="fund_view.php?id=<?=$tt[0]?>"> 
	 <div class="well">
        <div class="row">
        <div class="col-lg-4">
		<?php
		$ty=select("select * from register where id='$userid'");
		while($i=mysqli_fetch_array($ty))
		{
		?><img src="dash/ajaxsub/images/<?=$i['image']?>" class="img-thumbnail" style="height:200px;width:300px">
		
		
		
        </div>
		<div class="col-lg-8">
		<span style="color:green;font-size:18px">Name : <?=$i['name']?></span></br>
		<p style="color:blue"> Business Name : <?=ucwords($business_name)?></p>
		<p style="color:blue">Industry Type : <?=ucwords($industry_type)?></p></br>
		<p style="text-align:justify"> Description:<?=ucwords($description)?></p></br>
		<p style="text-align:justify;color:black"> Resource:<?=ucwords($resource)?></p>
		<p style="text-align:justify;color:blue"> Profit:<?=ucwords($profit_amount)?> <?=ucwords($profit_currency)?> 
		/<?=ucwords($profit_margin)?></p>
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
		
   