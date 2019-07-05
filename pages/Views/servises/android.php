

<script type="text/javascript" src="../JS/menuFladAnotherpage.js"></script>
<style type="text/css">
	body
	{
		background-image: url(../images/home2.jpg);
	}
</style>
<div class="row ">
	<div class="container serviseInfo">
				<h2>Mobile Application</h2>
					<div class="col-md-9">
						<h3>A mobile app or mobile application is a computer program or software application designed to run on a mobile device such as a phone/tablet or watch. Apps were originally intended for productivity assistance such as Email, calendar, and contact databases, but the public demand for apps caused rapid expansion into other areas such as mobile games, factory automation, GPS and location-based services, order-tracking, and ticket purchases, so that there are now millions of apps available</h3>
						<div class="row">
						<h4>Platforms</h4>

								<div class="serviseImage">
									<img src="../images/platforms/android.png">
								</div>
						</div>
							<div class="row">
						<h4>Data Base</h4>
									<div class="serviseImage">
										<img src="../images/platforms/MsSQL.png">
									</div>
									<div class="serviseImage">
										<img src="../images/platforms/firebase.png">
									</div>

								
							</div>

					</div>
					<div class="col-md-2">
						<div class="servise"><button  onclick="ShowContactForm()" class="btn btn-primary" href=""> Contact US</button></div>
					</div>
							
	</div>

</div>

<?php 
	include("contactLogic.php");
	include("alertBoxes.php");
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
