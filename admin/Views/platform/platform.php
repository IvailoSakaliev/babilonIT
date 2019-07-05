<?php 
	include('Controllers/PlatformController.php');
	$_controller = new PlatformController();


	if (isset($_POST["platformAdd"])) {
		$isOK = false;
		$nameError ;
		$name = $_POST["name"];
		$image = AddImage();
		$type = $_POST["type"];


		if ($name== "") {
			$nameError = "Name is requared";
		}else
		{
			$isOK = true;
		}
		if ($isOK == true) {
			$_controller->AddPlatform($name, $image, $type);	
		}	
	}

	if (isset($_POST["editPlarform"])) {
		$isOK = false;
		$nameError ;
		$name = $_POST["name"];
		$image = AddImage();
		$type = $_POST["type"];

		if ($name== "") {
			$nameError = "Name is requared";
		}else
		{
			$isOK = true;
		}
		if ($isOK == true) {
			$_controller->EditPlatform($name, $image, $type);	
		}
	}

	if (isset($_POST["DeletePlatformt"])) {
		$_controller->DeletePlatform();
	}

	function AddImage(){
		$imageName = $_FILES["img"]["name"];
		$imageTMPName = $_FILES["img"]["tmp_name"];
		$imageSize = $_FILES["img"]["size"];
		$imageError = $_FILES["img"]["error"];
		$imagetype = $_FILES["img"]["type"];

		$imageExp = explode('.', $imageName);
		$imageActualExp = strtolower(end($imageExp));
		$fimageError = UploadImagesPlatform($imageTMPName,$imageError,$imageSize,$imageActualExp, $imageName);
		return $imageName;
	}

	function UploadImagesPlatform($imageTMPName,$imageError,$imageSize,$imageActualExp, $imageName){
		$allowed = array('jpg', 'jpeg', 'png');
		if (in_array($imageActualExp, $allowed) ) 
		{
		 	if ($imageError === 0) {
		 		if ($imageSize < 1000000) {
		 			$fileDestination = "../images/platforms/".$imageName;
		 			move_uploaded_file($imageTMPName, $fileDestination);
		 		}
		 		else
		 		{
		 			 return "File is too big !";
		 		}
		 	}
		 	else
		 	{
		 		return "Connot upload this filoe because it's have problem";
		 	}
		}
		else
		{
			return  "You connot upload files of this type ! ";
		}
	}

 ?>