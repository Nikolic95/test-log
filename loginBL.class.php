<?php
	//loginBL.class.php
	include_once "loginDAL.class.php";
	
	class LoginBL
	{
		public function LoginUser()
		{
			if (ISSET($_POST["username"], $_POST["password"] ))
			{
				$username = trim($_POST["username"]);
				$password = trim($_POST["password"]);
				
				$isValid = $this -> validateLoginCredentials($username, $password);
				if($isValid)
				{
					$loginDAL = new LoginDAL();
					$isChecked = $loginDAL ->CheckLoginCredentials($username, $password);
					
					if ($isChecked)
					{
						$_SESSION["username"] = $username;
						header ("Location:home.php");
						exit;
					}
					else
					{
						?>
						<script>
							alert("Niste ulogovani");
						</script>	
						<?php
					}
				}
				else
				{
					//vrati gresku
				}
			}
		}
		public function IsUserLoggedIn()
		{
			$isLogged = false;
			if (ISSET($_SESSION["username"]))
			{
				$isLogged = true;
			}
			return $isLogged;
		}
		
		public function RedirectToLoginPage()
		{
			$isLogged =  $this->IsUserLoggedIn();
			if (!$isLogged)
			{
				header("location:index.php");
				exit;
			}
		}
		
		public function RedirectToHomePage()
		{
			$isLogged = $this->IsuserLoggedIn();
			if ($isLogged)
			{
				header("Location:home.php");
				exit;
			}
		}
		
		private function validateLoginCredentials($username, $password)
		{
			// TODO: validacija parametara - da li su uneti
			return true;
		}
	}
?>