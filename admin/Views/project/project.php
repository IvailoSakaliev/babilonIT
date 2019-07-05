<?php 
	include('Controllers/ProjectsController.php');
	$_controller = new ProjectsController();

	$nameError = $fimageError = $backImageError = $linkError = "";
	if (isset($_POST["addProduct"])) {
		$condition = false;
		$name = $_POST["name"];
		$frontIMage = AddFrontImage();
		$backImage =AddBAckIMage();
		$link = $_POST["link"];

		if ($name == "") {
			$nameError = "Name is requare !";
			}
			else
			{
				$condition = true;
			}

		if ($link == "") {
			$linkError = "Link is requare !";
			}
			else
			{
				$condition = true;
			}

		if ($frontIMage == "") {
			$fimageError = "Link is requare !";
			}
			else
			{
				$condition = true;
			}

		if ($backImage == "") {
			$backImageError = "Link is requare !";
			}
			else
			{
				$condition = true;
			}
		
		if ($condition) {
			$_controller->AddProject($name,$frontIMage,$backImage,$link);
			}
	}

	if (isset($_POST["EditProduct"])) {
		$name = $_POST["name"];
		$imageName = $_FILES["images"]["name"];
		$image2Name = $_FILES["backImage"]["name"];
		$frontIMage = "";
		$backImage = "";
		if ($imageName != "") {
			$frontIMage = AddFrontImage();
		}
		if ($image2Name != "") {
			$backImage = AddBAckIMage();
		}

		$link = $_POST["link"];
		$_controller->EditProduct($name,$frontIMage,$backImage,$link);
	}

	if (isset($_POST["DeleteProduct"])) {
		$_controller->DeleteProduct();
	}

	


	function AddFrontImage(){
		$imageName = $_FILES["images"]["name"];
		$imageTMPName = $_FILES["images"]["tmp_name"];
		$imageSize = $_FILES["images"]["size"];
		$imageError = $_FILES["images"]["error"];
		$imagetype = $_FILES["images"]["type"];

		$imageExp = explode('.', $imageName);
		$imageActualExp = strtolower(end($imageExp));
		$fimageError = UploadImages($imageTMPName,$imageError,$imageSize,$imageActualExp, $imageName);
		return $imageName;
	}

	function AddBAckIMage(){
		$image2Name = $_FILES["backImage"]["name"];
		$image2TMPName = $_FILES["backImage"]["tmp_name"];
		$image2Size = $_FILES["backImage"]["size"];
		$image2Error = $_FILES["backImage"]["error"];
		$image2type = $_FILES["backImage"]["type"];
		$image2Exp = explode('.', $image2Name);
		$image2ActualExp = strtolower(end($image2Exp));
		$backImageError = UploadImages($image2TMPName,$image2Error,$image2Size,$image2ActualExp, $image2Name);
		return $image2Name;
	}

	function UploadImages($imageTMPName,$imageError,$imageSize,$imageActualExp, $imageName){
		$allowed = array('jpg', 'jpeg', 'png');
		if (in_array($imageActualExp, $allowed) ) 
		{
		 	if ($imageError === 0) {
		 		if ($imageSize < 1000000) {
		 			$fileDestination = "../images/projects/".$imageName;
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
