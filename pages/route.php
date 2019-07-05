<?php
	$adress = $_SERVER['REQUEST_URI'] ;
	$id = substr($adress, -3);
	switch ($id) {
		case 'abu':
				return include('Views/aboutUs.php');
			break;
		case 'pro':
				Settable("projects", "project.php");
			break;
		case 'ser':
				Settable("servises", "servise.php");
			break;
		case 'car':
				Settable("career", "career.php");
			break;
		case 'pla':
				Settable("platform", "platforms.php");
			break;
		case 'web':
				Settable("web", "servises/web.php");
			break;
		case 'cms':
				Settable("cms", "servises/cms.php");
			break;
		case 'app':
				Settable("app", "servises/android.php");
			break;
		case 'com':
				Settable("com", "servises/e_commerse.php");
			break;
		default:

			break;
	}
	
	function Settable($table, $page)
	{
		$_SESSION['table'] = $table;
		return include('Views/'.$page.'');
	}
 ?>
