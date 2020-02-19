<?php
	//logout.php
	session_start();
	include_once "logoutBL.class.php";
	
	$logoutBL = new logoutBL();
	$logoutBL->LogoutUser();
?>