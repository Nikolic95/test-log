<?php
	session_start();
	include_once "loginBL.class.php";
	
	$loginBL = new LoginBL();
	$loginBL->RedirectToHomePage();
	
	if (ISSET($_POST["submit"]))
	{
	
		$loginBL -> LoginUser();
	}
?>

<html>
	<head>
		<title>Login</title>
		<link href="style.css" type="text/css" rel="stylesheet"> 
	</head>
	
	<body>
		<div id="log">
			<h1>Login</h1>
			<div>
				<form action="#" method="POST">
                    <label for="name">Username: </label> 
                    <br>
                    <input type="text" id="username" name="username" size="20" maxlength="30" placeholder="Upišite vaše ime"/>
                    <br>
                    <label for="email">Password: </label>
                    <br>
                    <input type="password" id="password" name="password" size="20" placeholder="Upišite vašu šifru"/>
                    <br>
					<br>
                    <input type="submit" name="submit" value="Login" />
					<input type="reset" name="Reset" />
                </form>
					</div>
			
			<text>
			<i>Get involved in our platform, and 
			keep up with these latest trends and styles, stay 
			up to date.
			Find everything that interests you blah blah blah :)</i>
			</text>
			</div>
		</div>
	</body>
</html>