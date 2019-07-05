<?php
	/**
	* 
	*/
	include('Database.php');
	class ServisesRepository  
	{
		private $table;
		private $id;
		private $data;

		function __construct(){
			$this->data = new Database();
			$this->table = $_SESSION['table'];
		}

		function GetAllServises(){
			
		}
		function GetProcentOfExperiance()
		{
			$result = $this->data->GetAll($this->table);
			while ($row = mysqli_fetch_array($result)) {
					echo "<h4>$row[years]+ years</h4>";
						}
		}
	}

 ?>