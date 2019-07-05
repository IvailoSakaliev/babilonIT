<?php
	session_start();
  include('../Database/Database.php');
  include('../Servises/EncriptServise.php');
	class Login
	{
		private $username;
		private $password;
    	private $data;
    	private $_encript;

		function __construct($user, $pass)
		{
      		$this->data = new Database();
			$this->_encript = new EncriptServise();
			$this->username = $this->_encript->EncriptData($user);
			$this->password = $this->_encript->EncriptData($pass);
		}

		function LoginInSystem()
		{
			$table = "login";
			
			
			$condition = "username = '".$this->username ."' && password = '".$this->password."'";
			$result = 	$this->data->GetByParameters($table, $condition);
			$incorectUser = true;
					while ($row = mysqli_fetch_assoc($result)) {
						if ($this->username == $row['username']  && $this->password == $row['password']) {
							if ($row['id'] == '1') {

								$_SESSION['user'] = 'admin';
                				header('Location: index.php');
							}
							else
							{
								return "Non-existent user";
							}

						}
						else
						{
							return "incorect user";
						}
						$incorectUser = false;
					}
			if ($incorectUser) {
				return "incorect user";
			}


		}

		function LoggOut()
		{
			session_unset();
		}
	}
?>
