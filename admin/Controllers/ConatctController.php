<?php  
	
	class ConatctController
	{
		private $generic ;
		private $result;
		function __construct()
		{
			$this->generic =  new GenericController();
		}
		function Index(){
			echo "<h2>Email</h2>";
			$this->result = $this->generic->Index("contact");
			while ($row = mysqli_fetch_array($this->result)) {
				$id = $row['id'];
				$email = $row['email'];
				$subject = $row['subject'];
				$mesege = $row['mesege'];
				echo '
				 <div class="row admincontact">
							<div class="col-md-3">
							       <div>'.$email.'</div>
							     </div>
							     <div class="col-md-3">
							       <div>'.$subject.'</div>
							     </div>
							     <div class="col-md-3">
							       <div>'.$mesege.'</div>
							     </div>
							     <div class="col-md-3">
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
		function Delete(){
			$id = $_SESSION["delete"];
			$this->generic->Delete("contact", $id);
			header("Location: index.php?id=40");
		}
		function Edit()
		{
			$id = $_SESSION["edit"];
			$this->result = $this->generic->GetByID("contact", $id);
			while ($row = mysqli_fetch_array($this->result)) {
				$id = $row['id'];
				$email = $row['email'];
				$subject = $row['subject'];
				$mesege = $row['mesege'];
			echo '<div class="col-md-6">
					<h4>Email</h4>
					<p>'.$email.'</p>
					<h4>Subject</h4>
					<p>'.$subject.'</p>
					<h4>Masage</h4>
					<p>'.$mesege.'</p>
				</div>
				<div class="col-md-6">
					<form name="PostEmail"  method="post">
						<input type="text" name="email" value="'.$email.'">
						<input type="text" name="subject" value="'.$subject.'">
						<label>Message</label>
						<textarea rows="10" cols="60" name="postMesage" class="form-control" style="width:500px;margin-bottom:10px;"></textarea>
						<input type="submit" name="PostEmail" class="btn btn-warning" style="width:150px;" value="Send">
					</form>
				</div>';
			}
		}
	}
?>
