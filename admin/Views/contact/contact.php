<?php 
	include("bloks/class.phpmailer.php");
	if (isset($_POST["PostEmail"])) {
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$postMesage = $_POST["postMesage"];
		
			$mail = new PHPMailer();

			$mail->IsSMTP();
			$mail->CharSet = 'UTF-8';

			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPDebug = 2;                   
			$mail->SMTPAuth   = true;  
			$mail->SMTPSecure = 'tls';             
			$mail->Port = 587;                  
			$mail->Username   = "vaviloncidi@gmail.com";
			$mail->Password   = "160118883vavilonci";        
			$mail->isHTML(true);   
			$mail->From =  "vaviloncidi@gmail.com";                       
			$mail->Subject = $subject;
			$mail->Body    = $postMesage;
			$mail->AddAddress($email);

			if (!$mail->Send()) {
				echo "ok";
			}
			else
			{
				echo "no";
			}
	}
?>