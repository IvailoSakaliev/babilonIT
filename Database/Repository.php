<?php 
	/**
	* 
	*/
	include("Database.php");
	class Repository 
	{
		private $table;
		private $id;
		private $data;

		function __construct(){
			$this->data = new Databace();
			$this->table = $_SESSION['table'];
		}
		
		function GetElement(){
			$condition = "`id` = '".$this->id." ' " ;
			$result = $this->data->GetByParameters($this->table,$condition );
			return $result;
		}
		
		function DeleteElement(){
			$this->data->Delete($this->table , $this->id);
		}
	}

?>