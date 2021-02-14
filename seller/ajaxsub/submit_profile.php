<?php
$uploadDir = 'images/';
$response = array(
	'status' => 0,
	'message' => 'Form submission failed, please try again.'

 );

	extract($_POST);
	
	// Check whether submitted data is not empty
    if(!empty($username) && !empty($email)){
		// Validate email
        
            $uploadStatus = 1;
			$response['status'] = 0;
					
            // Upload file
			$uploadedFile = '';
            if(!empty($_FILES["file"]["name"])){
                
                // File path config
                $fileName = basename($_FILES["file"]["name"]);
                $targetFilePath = $uploadDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                
                // Allow certain file formats
                $allowTypes = array('jpg', 'jpeg','png');
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
                    $message = 'Sorry, Only  Jpg, & Jpeg & Png files are allowed to upload.';
                }
				if($uploadStatus == 1){
				include_once 'db.php';
				
				$insert = $db->query("UPDATE `register` SET `name`='$username',`email`='$email',`mobile`='$mobile',`password`='$password',`image`='$uploadedFile',`education`='$education',`address`='$address',`social_link`='$social_link',`country`='$country',`state`='$state',`city`='$city' where id='$userid'");
				
                if($insert){
					
					$message = 1;
                }
			}
            }
			else
			{
				if($uploadStatus == 1){
				include_once 'db.php';
				
				$insert = $db->query("UPDATE `register` SET `name`='$username',`email`='$email',`mobile`='$mobile',`password`='$password',`education`='$education',`address`='$address',`social_link`='$social_link',`country`='$country',`state`='$state',`city`='$city' where id='$userid'");
				
                if($insert){
					
					$message = 1;
                }
			}
			}
			
			
		
	}
	else{
		 $message = 'Please fill all the mandatory fields .';
	}

echo $message;
// Return response
//echo json_encode($response);