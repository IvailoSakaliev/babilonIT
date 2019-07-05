
<script type="text/javascript" src="../JS/menuFladAnotherpage.js"></script>
<style type="text/css">
	body
	{
		background-image: url(../images/home2.jpg);
	}
</style>
<div class="row ">
	<div class="container serviseInfo">
				<h2>E-commerse</h2>
					<div class="col-md-9">
						<h3>E-commerce is the activity of buying or selling of products on online services or over the Internet. Electronic commerce draws on technologies such as mobile commerce, electronic funds transfer, supply chain management, Internet marketing, online transaction processing, electronic data interchange (EDI), inventory management systems, and automated data collection systems.</h3>
						<div class="row">
						<h4>Platforms</h4>

								<div class="serviseImage">
									<img src="../images/platforms/wordpress.png">
								</div>
								<div class="serviseImage">
									<img src="../images/platforms/php.png">
								</div>
								<div class="serviseImage">
									<img src="../images/platforms/magento.png">
								</div>
						</div>
							<div class="row">
						<h4>Data Base</h4>
								
									<div class="serviseImage">
										<img src="../images/platforms/mySQL.png">
									</div>
									<div class="serviseImage">
										<img src="../images/platforms/firebase.png">
									</div>
							</div>
					</div>
					<div class="col-md-3">
						<div class="servise"><button  onclick="ShowContactForm()" class="btn btn-primary" href=""> Contact US</button></div>
					</div>
							
	</div>

</div>




<?php 
	include("contactLogic.php");

 ?>


<div class="contactPage" onclick="CloseContactForm()">
	
</div>
<div class="contactForm">
	<div class="container">
			<h1>Contacts</h1>
			<h1 class="closeContact" onclick="CloseContactForm()">x</h1>
			<div class="col-md-4">
				<form method="post">
				<div class="row contactFrom">
						<label>Email</label></br>
						<?php
							echo $emailError;
						 ?>
						<input id="email" type="text" name="email" class="form-control" value="<?php echo $email ?>"></br>
						
						<label>Subject</label></br>
						<?php
							echo $subjectError;
						 ?>
						<input id="subject" type="text" name="subject" class="form-control" value="<?php echo $subject ?>"></br>
						
					
				
				<label>Messege</label>
				<textarea name="messege" id="message" class="form-control" rows="13"><?php echo $messege ?></textarea>
						<?php
							echo $emailError. "</br>";
						 ?>
				<input type="submit"  value="Sent!" name="send" class="btn btn-warning send">
			</div>
			</div>
			</form>
			</div>

		</div>
</div>