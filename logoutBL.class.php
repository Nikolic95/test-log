<?php
	//logoutBL.class.php
	include_once "loginBL.class.php";
	
	class LogoutBL
	{
		public function LogoutUser()
		{
			$loginBL = new LoginBL();
			$isLogged =$loginBL->IsUserLoggedIn();
			
			if ($isLogged)
			{
				UNSET($_SESSION["username"]);
				session_destroy();
			}
			
			header("Location:index.php");
			exit;
		}
	}
?>