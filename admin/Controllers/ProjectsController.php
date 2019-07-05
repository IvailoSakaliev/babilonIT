<?php  
	class ProjectsController
	{
		private $generic ;
		private $result;
		function __construct()
		{
			$this->generic =  new GenericController();
		}

		function Index(){
			echo '<div class="row" ><a href="index.php?id=33" class="btn btn-default">Add new project</a></div>';
			$this->result = $this->generic->Index("projects");
			while ($row = mysqli_fetch_array($this->result)) {
				$id = $row["id"];
				$backImg = $row["backImage"];
				$fimage = $row["image"];
				$link = $row["link"];
			echo '<div class="col-md-4" >
					<div style="background-image: url(../images/projects/'.$backImg.');background-size: 100%; background-position-x: 25%;background-repeat: no-repeat;" >
						<a target="_black" href="'.$link.'"><img  width="100%" class="soc" src="../images/projects/'.$fimage.'">	</a>
					</div>
					<div class="row">
							<div class="col-md-6" style="text-align: center;">
							       		<form name="edit" method="post">
							       			<input type="hidden" style="float:right;" name="editID" value="'.$id.'" >
							       		<input style="width:100px;" type="submit" name="edit" value="Edit" class="btn btn-warning">
							     		</form>
							     	</div>
							     	<div class="col-md-6" method="post">
									     <form name="delete" method="post">
							       			<input type="hidden" style="float:right;" name="deleteID" value="'.$id.'" >
							       		<input style="width:100px;margin-left:-15px;" type="submit" name="delete" value="Delete" class="btn btn-danger">
							     		</form>
									</div>
					</div>
				</div>';
			}
		}

		function Add(){
			echo '<h1> Add new Product</h1>
					<div class="row addNewProduct" >
						<form name="addProduct" method="post" enctype="multipart/form-data" >
							 <div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" name="name">
							</div>
							 <div class="form-group">
								<label>FrontImage</label>
								<input type="file" class="form-control" name="images">
							</div>
							<div class="form-group">
								<label>BackImages</label>
								<input type="file" class="form-control" name="backImage">
							</div>
							 <div class="form-group">
								<label>Link</label>
								<input type="text" class="form-control" name="link">
							</div>

							<input type="submit" name="addProduct" value="Add" class="btn btn-success">
						</form>
				</div>';
		}

		function Edit(){
			$elementID = $_SESSION["edit"];
			$this->result = $this->generic->GetByID("projects",$elementID);
			while ($row = mysqli_fetch_array($this->result)) {
				$id = $row["id"];
				$name = $row["name"];
				$backImg = $row["backImage"];
				$fimage = $row["image"];
				$link = $row["link"];
			echo '<h1> Edit Product</h1>
					<div class="row addNewProduct" >
						<form name="EditProduct" method="post" enctype="multipart/form-data" >
							 <div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" value="'.$name.'" name="name">
							</div>
							 <div class="form-group">
								<label>FrontImage</label>
								<input type="file" value="'.$fimage.'" class="form-control" name="images">
							</div>
							<div class="form-group">
								<label>BackImages</label>
								<input type="file" class="form-control" name="backImage" value="'.$backImg.'">
							</div>
							 <div class="form-group">
								<label>Link</label>
								<input type="text" class="form-control" value="'.$link.'" name="link">
							</div>

							<input type="submit" name="EditProduct" value="Edit" class="btn btn-success">
						</form>
				</div>';
			}
		}

		function AddProject($name,$backImage,$frontIMage,$link){
			$condition ="'".$name."','".$frontIMage."','".$backImage."','".$link."'";
			$this->generic->Add("projects", $condition);
		}

		function EditProduct($name,$backImage,$frontIMage,$link)
		{
			$elementID = $_SESSION["edit"];
			$this->result = $this->generic->GetByID("projects",$elementID);
			while ($row = mysqli_fetch_array($this->result)) {
				$id = $row["id"];
				$nameDB = $row["name"];
				$backImg = $row["backImage"];
				$fimage = $row["image"];
				$linkDB = $row["link"];

				if ($backImage == "") {
					$backImage = $backImg ;
				}
				if ($frontIMage == "") {
					$frontIMage = $fimage;
				}
				$condition ="`id`= ".$id.",`name`='".$name."',`backImage`='".$backImage."',`image`='".$frontIMage."',`link`='".$link."'";
			$this->generic->Edit("projects", $id, $condition);
			}
		}

		function Delete()
		{
			echo '<h1> Are you shure!</h1>
					<div class="row addNewProduct" >
						<form name="DeleteProduct" method="post"  >
							 
							<input type="submit" name="DeleteProduct" value="Delete" class="btn btn-danger">
						</form>
				</div>';
		}

		function DeleteProduct()
		{
			$id = $_SESSION["delete"];
			$this->generic->Delete("projects",$id);
		}
	}
?>

