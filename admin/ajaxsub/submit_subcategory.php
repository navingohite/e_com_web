<?php
include_once 'dbconfig.php';
extract($_POST);
	if(!empty($category_id) ){
				
				$url = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["s_url"])));
 $query = "SELECT s_url FROM sub_category  WHERE s_url LIKE '$url%'";
 $result=select($query);
  
  $total_row = mysqli_num_rows($result);
  if($total_row > 0)
  {
    foreach($result as $row)
   {
    $data[] = $row['s_url'];
   }
   
   if(in_array($url, $data))
   {
    $count = 0;
    while( in_array( ($url . '-' . ++$count ), $data) );
    $url = $url . '-' . $count;
   }
  }
				
				$insert = iud("INSERT INTO `sub_category`(`category_id`, `name`, `s_url`) VALUES ('$category_id','$name','$url')");
				
                if($insert==1){
					
					$message = 1;
                }
			
		
	}else{
		 $message = 'Please fill all the mandatory fields .';
	}

echo $message;
