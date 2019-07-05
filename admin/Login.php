<?php
    $nameError = $passError = "";
    	$name = $pass = "";
    	if (isset($_POST['login'])) {

    		$isCorectInfromation = true;
    		if (!empty($_POST['user'])) {
    			$name = test_input($_POST['user']);
    			if (strlen($name) > 3) {
    					if (!preg_match("/^[a-zA-Z0-9]*$/",$name))
    					{
    						$nameError = "Невалидно потребителско име. ";
    						$isCorectInfromation = false;
    					}
    				}
    				else
    				{
    					$nameError = "Недостатъчни символи";
    					$isCorectInfromation = false;
    				}
    		}
    		else
    		{
    			$nameError = "полето е задължително";
    		}
    		if (!empty($_POST['pass'])) {
    			$pass = test_input($_POST['pass']);

    			if (strlen($pass) > 5) {
    					if (!preg_match("/^[a-zA-Z0-9]*$/",$pass))
    					{
    						$passError = "Невалидна парола";
    						$isCorectInfromation = false;
    					}
    				}
    				else
    				{
    					$passError = "Недостатъчни символи";
    					$isCorectInfromation = false;
    				}
    		}
    		else
    		{
    			$passError = "Полето е задължително";
    		}
    		if ($isCorectInfromation) {
    			include('../Database/Login.php');
    			$login = new Login($name, $pass);
    			$nameError = $login->LoginInSystem();
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
    <html>
    <head>
    	<title>Login</title>
    	<?php include("../css/bootstrap.php") ?>
    	 <link rel="stylesheet" type="text/css" href="css/loginStyle.css">
    	 <meta charset="utf-8">
    </head>
    <body>

    	<div id="loginForm">
    		<h1>Login</h1>
    		<form method="post">


    			<label>Username</label>
    			<input type="text" class="form-control" value="<?php echo $name ?>" name="user">
    			<p style="color:red">
    				<?php
    					if ($nameError != "") {
    						echo $nameError;
    					}
    				 ?>
    			</p>
    			<label>Password</label>
    			<input type="password" class="form-control" name="pass">
    			<p style="color: red">
    				<?php
    					if ($passError != "") {
    						echo $passError;
    					}
    				 ?>
    			 </p>
    			<input type="checkbox" name="rememberMe" value="remember" style="margin-top:20px;margin-right: 5px;">Remember me

    			<input type="submit" value="Login" class="btn btn-success" name="login">
    		</form>
    	</div>
    	<div id="backToSite" style="width: 100px;margin: 0 auto;
    	margin-top: 20px;">
    		<a href="../index.php" >	&larr; Back to site</a>
    	</div>
    </body>
    </html>
