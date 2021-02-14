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
			$uploadedFile = '';
            if(!empty($_FILES["file"]["name"])){
                
                // File path config
                $fileName = basename($_FILES["file"]["name"]);
                $targetFilePath = $uploadDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                
                // Allow certain file formats
                $allowTypes = array('jpg', 'jpeg', 'png');
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
                    $message = 'Sorry, Only  JPG, JPEG, & PNG files are allowed to upload.';
                }
            }
			
			if($uploadStatus == 1){
				// Include the database config file
				include_once 'db.php';
				
				// Insert form data in the database
				$insert = $db->query("INSERT INTO `saller`( `name`, `email`, `mobile`, `password`,`image`,`shop_name`,`person_designation`)
				VALUES  ('$name','$email','$mobile','$password','$fileName','$shop_name','$person_designation')");
				
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