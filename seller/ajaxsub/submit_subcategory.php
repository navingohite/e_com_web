<?php
$uploadDir = 'images/';
$response = array(
	'status' => 0,
	'message' => 'Form submission failed, please try again.'
 );
	extract($_POST);
	
	// Check whether submitted data is not empty
    if(!empty($category_id) ){
		// Validate email
        
            $uploadStatus = 1;
			
			
			if($uploadStatus == 1){
				// Include the database config file
				include_once 'db.php';
				
				// Insert form data in the database
				$insert = $db->query("INSERT INTO `sub_category`(`category_id`, `name`) VALUES ('$category_id','$name')");
				
                if($insert){
					
					$message = 1;
                }
			}
		
	}else{
		 $message = 'Please fill all the mandatory fields .';
	}

echo $message;
// Return response
//echo json_encode($response);