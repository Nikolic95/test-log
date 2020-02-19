<?php
	// loginDAL.class.php
	
	class LoginDAL
	{
		public function checkLoginCredentials($username, $password)
		{
			//TODO upit ka bazi
			
			$isValid = false;
			$validUsernames = array("admin", "sasa", "masa");
			if(in_array($username, $validUsernames)&& $password == "admin")
			{
				$isValid = true;
			}
			return $isValid;
		}
	}
?>
