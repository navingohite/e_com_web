<?php

include_once 'dbconfig.php';



	extract($_POST);
	
	
    if(!empty($category_name) ){
		
        
            $uploadStatus = 1;
			
			
			
				
				
				$url = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["c_url"])));
 $query = "SELECT c_url FROM category  WHERE c_url LIKE '$url%'";
 $result=select($query);
  
  $total_row = mysqli_num_rows($result);
  if($total_row > 0)
  {
    foreach($result as $row)
   {
    $data[] = $row['c_url'];
   }
   
   if(in_array($url, $data))
   {
    $count = 0;
    while( in_array( ($url . '-' . ++$count ), $data) );
    $url = $url . '-' . $count;
   }
  }
				$insert = iud("INSERT INTO `category`(`category_name`,`c_url`) VALUES ('$category_name','$url')");
				
                if($insert==1){
					
					$message = 1;
                }
		
		
	}else{
		 $message = 'Please fill all the mandatory fields .';
	}

echo $message;
// Return response
//echo json_encode($response);