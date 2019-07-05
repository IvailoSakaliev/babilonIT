
<script type="text/javascript" src="../JS/menuFladAnotherpage.js"></script>
<style type="text/css">
	body
	{
		background-image: url(../images/home2.jpg);
	}
</style>
<div class="row ">
	<div class="container serviseInfo">
				<h2>Web Development</h2>
					<div class="col-md-9">
						
						<h3>Creating modern web applications for your business, based to the newest and appropriate platforms for develope. We offer high quality and accessible prices. <b>If you have some idea we can make it real.</b> </h3>

						<ul>We can create for you everypfing:
							<li>Blog</li>
							<li>Travel</li>
							<li>Socail</li>
							<li>Games</li>
							<li>Business</li>
							<li>Technology</li>
							<li>Other</li>
						</ul>

						<div class="row">
							<h4>Platforms</h4>
								<div class="serviseImage">
									<img src="../images/platforms/php.png">
								</div>
								<div class="serviseImage">
									<img src="../images/platforms/angular.jpg">
								</div>
								<div class="serviseImage">
									<img src="../images/platforms/laravel.png">
								</div>
								<div class="serviseImage">
									<img src="../images/platforms/wordpress.png">
								</div>
								<div class="serviseImage">
									<img src="../images/platforms/joomla.jpg">
								</div>
								<div class="serviseImage">
									<img src="../images/platforms/drupal.png">
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
						<div class="servise">
							<button  onclick="ShowContactForm()" class="btn btn-primary" href=""> Contact US</button>
						</div>
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