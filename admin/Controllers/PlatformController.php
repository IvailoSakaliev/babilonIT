<?php 
	class PlatformController
	{
		private $generic ;
		private $result;
		function __construct()
		{
			$this->generic =  new GenericController();
		}

		// get 
		function Index(){
			echo '<div class="row" ><a href="index.php?id=53" class="btn btn-default">Add new platform</a></div>';
			$this->result = $this->generic->Index("platform");
			while ($row = mysqli_fetch_array($this->result)) {
				$id = $row["ID"];
				$name = $row["Name"];
				$Image = $row["Image"];
				echo '
					
					<div class="col-md-3">
						<div class="platformImage"style=" width:130px; height:130px;background-image:url(../images/platforms/'.$Image.');background-size:100%; background-position: center">
						</div>
						<h4>'.$name.'</p>
						<div class="row">
							<div class="col-md-6">
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
					</div>
				';

			}
		}

		function Add(){
			echo '<h2>Add new platform</h2>
			<div class="row addNewProduct">
				<div class="col-md-4">
					<form method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name="name">
						</div>
						<div class="form-group">
							<label>Image</label>
							<input type="file" class="form-control" name="img">
						</div>
						<div class="form-group">
							<label>Type</label>
							<select name="type" class="form-control">
								<option value="platform">Platforms</option>
								<option value="databse">Database</option>
							</select>
						</div>
						<input type="submit" name="platformAdd" class="btn btn-success" value="Add">
					</form>
				</div>
			</div>';
		}

		function AddPlatform($nameS, $imageS, $typeS)
		{
			$value = "'".$nameS."','".$imageS."','".$typeS."'";
			$this->generic->Add("platform",$value );
		}

		function Edit(){
			$elementID = $_SESSION["edit"];
			$this->result = $this->generic->GetByID("platform",$elementID);
			while ($row = mysqli_fetch_array($this->result)) {
				$id = $row["ID"];
				$name = $row["Name"];
				$Image = $row["Image"];
				$type = $row["Type"];
			echo '<h2>Edit platform</h2>
					<div class="row addNewProduct">
						<div class="col-md-4">
							<form method="post" name="editPlarform" enctype="multipart/form-data">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" name="name"
									value="'.$name.'">
								</div>
								<div class="form-group">
									<label>Image</label>
									<input type="file" class="form-control" name="img">
								</div>
								<div class="form-group">
									<label>Type</label>
									<select name="type" class="form-control">
									';
									if ($type == "platform") {
										echo '<option value="platform" selected>Platforms</option>
											<option value="databse">Database</option>';
									}
									else if($type == "database")
									{
										echo '<option value="platform">Platforms</option>
										<option value="databse" selected>Database</option>';
									}
									echo '	
									</select>
								</div>
								<input type="submit" name="editPlarform" class="btn btn-warning" value="Edit">
							</form>
						</div>
					</div>';
				}
		}
		function EditPlatform($nameS, $imageS, $typeS)
		{
			$elementID = $_SESSION["edit"];
			$this->result = $this->generic->GetByID("platform",$elementID);
			while ($row = mysqli_fetch_array($this->result)) {
				$id = $row["ID"];
				$name = $row["Name"];
				$Image = $row["Image"];
				$type = $row["Type"];

				if ($imageS == "") {
					$imageS = $Image;
				}

				$value = "`ID`= ".$id.",`Name`='".$nameS."',`Image`='".$imageS."',`Type`='".$typeS."'";
				$this->generic->Edit("platform",$id,$value );
			}

		}

		function Delete()
		{
			echo '<h1> Are you shure!</h1>
					<div class="row addNewProduct" >
						<form name="DeleteProduct" method="post"  >
							 
							<input type="submit" name="DeletePlatformt" value="Delete" class="btn btn-danger">
						</form>
				</div>';
		}
		function DeletePlatform()
		{
			$id = $_SESSION["delete"];
			$this->generic->Delete("platform",$id);
		}
	}

 ?>