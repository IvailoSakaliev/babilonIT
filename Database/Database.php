<?php
	class Database
	{
		private $databaseName = "babiloni_ivailo";
		private $databaseHost = "localhost";
		private $databaseUser = "babiloni_ivailo";
		private $databasePassword = "universal96";
		// private $databaseName = "id4122283_ivo";
		// private $databaseHost = "localhost";
		// private $databaseUser = "root";
		// private $databasePassword = "";
		private $connection ;
		public $result;

		function __construct(){
			$this->connection = mysqli_connect( $this->databaseHost , $this->databaseUser, $this->databasePassword, $this->databaseName);
			
		}

		function QueryResult($query){
			$this->result = mysqli_query($this->connection, $query);
			$this->CloseDatabase();
		}

		function CloseDatabase(){
			//mysqli_close();
		}

		function Add($table, $values){
			$query = "INSERT INTO `$table` values(DEFAULT,  $values)";
			$this->QueryResult($query);
		}

		function Delete($table , $id){
			$query = "DELETE FROM `$table` WHERE `id`= $id";
			$this->QueryResult($query);
		}

		function GetAll($table){

			$query = "
						SELECT * FROM `$table` ORDER BY id
					";
			$this->QueryResult($query);
			return $this->result;
		}

		function GetByID($table, $id){
			$query = "
						SELECT * FROM `$table` WHERE `id`= $id
					";
			$this->QueryResult($query);
			return $this->result;		
		}

		function GetByParameters($table, $condition){
			$query =  "	SELECT * FROM `$table` WHERE  $condition ORDER BY id";
			$this->QueryResult($query);
			return $this->result;
		}

		function Edit($table, $id, $value){
			$query =  "	UPDATE `$table`
					SET $value
					WHERE id = $id";
			$this->QueryResult($query);
		}

	}
?>
