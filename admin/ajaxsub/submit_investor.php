<?php
$uploadDir = 'images/';
$response = array(
	'status' => 0,
	'message' => 'Form submission failed, please try again.'
 );

	extract($_POST);
	
	// Check whether submitted data is not empty
    if(!empty($industry_type)){
		// Validate email
        
            $uploadStatus = 1;
			$response['status'] = 0;
					
           /* // Upload file
			$uploadedFile = '';
            if(!empty($_FILES["file"]["name"])){
                
                // File path config
                $fileName = basename($_FILES["file"]["name"]);
                $targetFilePath = $uploadDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                
                // Allow certain file formats
                $allowTypes = array('doc', 'docx');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to the server
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                        $uploadedFile = $fileName;
                    }else{
                        $uploadStatus = 0;
                        $message = 'Sorry, there was an error uploading your file.';
                    }
                }else{
                    $uploadStatus = 0;
                    $message = 'Sorry, Only  DOC, & DOCX files are allowed to upload.';
                }
            }*/
			
			if($uploadStatus == 1){
				// Include the database config file
				include_once 'db.php';
				
				// Insert form data in the database
				$insert = $db->query("INSERT INTO `investor_profile`(`industry_type`, `range_in_currency`, `min_range`, `max_range`, `description`, `country`, `state`, `city`, `free_premium`,`premium_amount`,`userid`) VALUES ('$industry_type','$range_in_currency','$min_range','$max_range','$description','$country','$state','$city','$free_premium','$preprice','$userid')");
				
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