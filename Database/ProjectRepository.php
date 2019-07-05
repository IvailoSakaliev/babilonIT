<?php
	/**
	* 
	*/
	include('Database.php');
	class ProjectRepository  
	{
		private $table;
		private $id;
		private $data;
		private $n = 0;

		function __construct(){
			$this->data = new Database();
			$this->table = $_SESSION['table'];
			$this->n = 0;
		}

		function GetProjects(){
			$result = $this->data->GetAll($this->table);
			while ($row = mysqli_fetch_array($result)) {
				$this->n++;
				$image = $row['image'];
				$bimage = $row['backImage'];
				$link = $row['link'];
				echo '
				<div class="col-md-4">
					<div style="background-image: url(../images/projects/'.$bimage.');background-size: 100%; background-repeat: no-repeat; height: 200px;" >
						<a target="_black" href="'.$link.'"><img  width="100%" class="soc" src="../images/projects/'.$image.'">	</a>
					</div>
				</div>';
			}
		}
	}
?>