
<?php
	include('head.php');
	include("navigation.php");
	include("headerIndex.php");
	$emailError = $subjectError = $messageError = "";
	$email = $subject = $messege = "";
	if (isset($_POST['send']))
	{
		$isCorectInformation = true;
		if (!empty($_POST['email']))
			{
				$email = test_input($_POST['email']);
			}
			else
			{
				$emailError = "Field is requare!";
				$isCorectInformation = false;
			}
		if (!empty($_POST['subject']))
			{
				$subject = test_input($_POST['subject']);
			}
			else
			{
				$subjectError = "Field is requare!";
				$isCorectInformation = false;
			}
		if (!empty($_POST['messege']))
			{
				$messege = $_POST['messege'];

			}
			else
			{
				$subjectError = "Field is requare!";
				$isCorectInformation = false;
			}


		if ($isCorectInformation) {
			$_SESSION['table'] = "contact";
			include('../Database/ContactRepository.php');
			$data = new ContactRepository();
			$data->AddEmail($email, $subject, $messege);
			$email = $subject = $messege = "";
		}
	}

	function test_input($data)
	{
		$data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}
?>
<script type="text/javascript" src="../JS/menuFlad.js"></script>
<div class="row ">
	<div class="welcomeCovers" >
		<div class="ax ux" id="aboutUS" style="background-image: url(../images/home/164624.jpg)">
			<div class="dark">
				<div class="container" style="padding-top: 100px;">
						<h2>About Us</h2>
						<h3 >There are so many companies where you wii be able to find the solution of your problems. Who are Babilon IT? Such a simple question. We have a simple answer "The right choice". We are company which is in the commercial sector more tham 12 yeaars... </h3>
						<a href="template.php?id=abu" class="btn btn-primary">Lern more...</a>
				</div>
			</div>
		</div>
	</div>
	<div class="welcomeCovers">
		<div class="ax ux" id="projects" style="background-image: url(../images/home/work.jpg)">
			<div class="container" style="padding-top: 100px;">
					<h2>Projects</h2>
					<h3> We have experience at development to the web sites. You can see our portfolio on the link down. Besides web sites we had made apps too. Thats why we know how to do both.  </h3>
					<a href="template.php?id=pro" class="btn btn-primary">Lern more...</a>
			</div>
		</div>
	</div>
	<div class="wellcomeCovers" style="height: 500px">
		<div class="ax ux" id="servises" style="background-image: url(../images/home/servise.jpeg); " >
			<div class="dark">
				<div class="container" style="padding-top: 100px;">
					<h2>Servises</h2>
					<h3> Web development, android applications, content management system, e-commerce systems, visualizations,  </h3>
					<a href="template.php?id=ser" class="btn btn-primary">Lern more...</a>
				</div>
			</div>
		</div>
	</div>
	
	

</div>




<div class="row">
	<div class="row contactUs">
		<div class="container contact">
			<h1>Contacts</h1>

			<form method="post">
				<div class="row contactFrom">
					<div class="col-md-6">
						<label>Email</label>
						<input id="email" type="text" name="email" class="form-control" value="<?php echo $email ?>"></br>
						<?php
							echo $emailError;
						 ?>
					</div>
					<div class="col-md-6">
						<label>Subject</label>
						<input id="subject" type="text" name="subject" class="form-control" value="<?php echo $subject ?>"></br>
						<?php
							echo $subjectError;
						 ?>
					</div>
				</div>
				<label>Messege</label>
				<textarea name="messege" id="message" class="form-control" rows="13"><?php echo $messege ?></textarea>
						<?php
							echo $emailError. "</br>";
						 ?>
				<input type="submit" value="Sent!" name="send" class="btn btn-primary">
			</form>

		</div>
	</div>
</div>
		<?php
			include('footer.php');
		?>
		<!-- <div class="topButton">
			<a href=""><img src="../images/top.png" /></a>
		</div> -->

	<!-- <div class="chat">
		<img src="../images/chat.png">
	</div>
	<div class="chatWindow">
		<div class="mainLi">
			Let's chat
		</div>
		<div class="chatInfo">
			<div class="title">
				Vavilon IT
			</div>
			<div class="messeges">
				<div id="client">
					<p>1</p></div>
				<div id="me"><p>2</p></div>
			</div>
			<div class="inputBox">
				<div class="col-md-10">
					<input id="messege" type="test" name="messege">
				</div>
				<div class="col-md-1">
					<img id="sendMEssege" width="20px" src="../images/rightarrow.png">
				</div>
			</div>
		</div>
		
	</div> -->
</body>
</html>
