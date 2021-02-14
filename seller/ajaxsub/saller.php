<?php
$uploadDir = 'images/';
$response = array(
	'status' => 0,
	'message' => 'Form submission failed, please try again.'
 );
	extract($_POST);
	
	// Check whether submitted data is not empty
    if(!empty($email) ){
	
if(!empty($password) ){
		// Validate email
        
            $uploadStatus = 1;
			
			
			if($uploadStatus == 1){
				// Include the database config file
				include_once 'db.php';
				
				// Insert form data in the database
				$insert = $db->query("INSERT INTO `saller`( `name`, `email`, `mobile`, `password`) VALUES  ('$name','$email','$mobile','$password')");
				
                if($insert){
					
					$message = 1;
                }
			}
		
	}
	else{
		 $message = 'Please fill  the password fields .';
	}
	}else{
		 $message = 'Please fill all the email fields .';
	}

echo $message;
// Return response
//echo json_encode($response);