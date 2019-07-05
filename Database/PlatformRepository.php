<?php 
	include('Database.php');

	class PlatformRepository
	{
		private $table;
		private $id;
		private $data;
		private $n = 0;
		function __construct()
		{
			$this->data = new Database();
			$this->table = $_SESSION['table'];
			$this->n = 0;
		}
		function GetPlatforms()
		{
			$condition = "Type = 'platform'";
			$result = $this->data->GetByParameters($this->table, $condition);
			while ($row = mysqli_fetch_array($result)) {
				$this->n++;
				$image = $row['Image'];
				$name = $row['Name'];
			echo '<div class="col-md-2">
					<div class="platformImage"><img src="../images/platforms/'.$image.'"></div>
					<h4>'.$name.'</h4>
				</div>';
			}
		}
		function GetDatabase()
		{
			$condition = "Type = 'databse'";
			$result = $this->data->GetByParameters($this->table, $condition);
			while ($row = mysqli_fetch_array($result)) {
				$this->n++;
				$image = $row['Image'];
				$name = $row['Name'];
			echo '<div class="col-md-2">
					<div class="platformImage"><img src="../images/platforms/'.$image.'"></div>
					<h4>'.$name.'</h4>
				</div>';
			}
		}
	}

 ?>