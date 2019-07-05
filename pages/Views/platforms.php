
<style type="text/css">
	body
	{
		background-image: url(../images/home2.jpg);
	}
</style>
<div class="row platformss">
	<script type="text/javascript" src="../JS/menuFladAnotherpage.js"></script>
	<div class="container" >
		<h2 style="margin-bottom: 60px">Platforms</h2>	
		<div class="imagePlatform">
			<div class="row">
				<?php 
					include("../Database/PlatformRepository.php");
					$data = new PlatformRepository();
					$data->GetPlatforms();
				 ?>
			</div>
		
		</div>
			<h2>Databse</h2>
			<div class="imagePlatform" style="text-align: center">
				<?php 
					$data->GetDatabase();
				?>
			</div>
	</div>
</div>

