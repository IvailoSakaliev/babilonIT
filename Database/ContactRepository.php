<?php
	/**
	* 
	*/
	include('Database.php');
	class ContactRepository  
	{
		private $table;
		private $id;
		private $data;

		function __construct(){
			$this->data = new Database();
			$this->table = $_SESSION['table'];
		}

		function AddEmail($email, $subject, $messege)
		{
			$condition = "'".$email."','".$subject."','".$messege."'";
			$this->data->Add($this->table, $condition);
		}
	}

 ?>