<?php
	// home.php
	session_start();
	
	include_once "loginBL.class.php";
	$loginBL = new LoginBL();
	$loginBL->RedirectToLoginPage();
	
	$username = $_SESSION["username"];
	printf("<div class='welcome'><h3>Welcome, %s</h3>", $username . "</div>");
?>
<html>
	<head>
		<link href="style.css" type="text/css" rel="stylesheet"> 
	</head>
	<body>
		<div class="welcome">
			<a href="logout.php"><input type="submit" name="submit" value="Logout" /></a>
		</div>
		<div style="color:#FFD700;">
			<h1>Lorem ipsum</h1>
			<p>
				<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In semper hendrerit sodales.</b>
				Maecenas ornare porta quam, vitae commodo augue suscipit fermentum. Phasellus nec nulla dui. 
				Vestibulum non enim in velit laoreet tincidunt eu at dui. Aliquam hendrerit lacus ante, in faucibus justo facilisis in.
			</p>
			<p>
				Maecenas quis hendrerit sem, eget rhoncus turpis. Mauris venenatis, ante aliquet placerat lobortis, purus magna luctus sem, vel eleifend purus ex in urna. 
				Cras mollis pulvinar mauris a commodo. In at bibendum eros. Aliquam erat volutpat. Sed lobortis lorem ac purus imperdiet porttitor. 
				Etiam vulputate scelerisque nibh sit amet dapibus. Vivamus iaculis suscipit libero vehicula aliquam. Pellentesque maximus maximus pretium.
			</p>
			<h2>Nunc</h2>
			<p>
				Nunc ut scelerisque elit. Phasellus eget orci eu dui mollis fringilla. Quisque gravida sapien ultricies dui finibus pretium. Morbi pharetra aliquet leo eget dictum. 
				Curabitur consectetur orci sit amet leo bibendum, sit amet porttitor leo maximus. Duis fringilla metus metus, eget consequat ipsum tincidunt et. 
				<b>Curabitur et tempus sapien, nec volutpat nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</b>
				Morbi id maximus sapien. Quisque nec sollicitudin libero. Vestibulum interdum, justo nec tristique eleifend, arcu ligula dictum lectus, vel tempus ligula nunc in ipsum. 
				Vestibulum vestibulum pellentesque lorem, in placerat urna cursus et.
			</p>
			<h3>Mauris</h3>
			<p>
				<b>Mauris enim dui, pharetra non arcu vitae, congue sollicitudin arcu. Fusce orci nisl, hendrerit quis venenatis elementum, tempus rutrum dolor.</b>
				Maecenas interdum sollicitudin dapibus. Donec viverra lacinia ipsum. Suspendisse et ligula ex. Donec a mattis velit. Suspendisse potenti. Mauris ac ipsum eros. 
				Praesent a metus ac ex consectetur vehicula.
			</p>
		</div>
	</body>
</html>