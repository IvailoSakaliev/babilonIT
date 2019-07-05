
<script type="text/javascript" src="../JS/menuFladAnotherpage.js"></script>
<style type="text/css">
	body
	{
		background-image: url(../images/home2.jpg);
	}
</style>
<div class="row" >
	<div class="container projects">
		<h2>Projects</h2>
			 <?php 
				include("../Database/ProjectRepository.php");
				$data = new ProjectRepository();
				$data->GetProjects();
			 ?>  
			</div>
</div>