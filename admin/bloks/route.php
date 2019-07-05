<?php

	$adress = $_SERVER['REQUEST_URI'] ;
	$ids = substr($adress, -2);
	$id = $ids ;
	$idElement = 0;
	if (isset($_POST["edit"])) {
		$id =  substr($ids,0, 1).'1';
		$_SESSION["edit"] = $_POST["editID"];
	}
	if (isset($_POST["delete"])) {
		$id = substr($ids,0,1).'2';
		$_SESSION["delete"] = $_POST["deleteID"];
	}
	

	require_once("Controllers/ProjectsController.php");
	require_once("Controllers/ConatctController.php");
	require_once("Controllers/PlatformController.php");
	$project = new ProjectsController();
	$contact = new ConatctController();
	$platform = new PlatformController();
	
	
	
	switch ($id) {
		// case 10:
		// 	IndexPage($biography);
		// 	break;
		// case 11:
		// 	EditPage($biography, $idElement);
		// 	break;
		// case 12:
		// 	Delete($biography,$idElement);
		// 	break;
		
		case 30:
			IndexPage($project);
			break;
		case 31:
			EditPage($project);
			break;
		case 32:
			Delete($project);
			break;	
		case 33:
			AddNewElement($project);
			break;

		case 40:
			IndexPage($contact);
			break;		
		case 41:
			EditPage($contact);
			break;		
		case 42:
			Delete($contact);
			break;	
		case 50:
			IndexPage($platform);
			break;		
		case 51:
			EditPage($platform);
			break;		
		case 52:
			Delete($platform);
			break;
		case 53:
			AddNewElement($platform);
			break;		
	}

	function IndexPage($model)
	{
		$model->Index();
	}

	function EditPage($model)
	{
		$model->Edit();
	}
	function Delete($model)
	{
		$model->Delete();
	}
	function AddNewElement($model)
	{
		$model->Add();
	}
 ?>

 	