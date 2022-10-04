<?php
	session_start();
	if(!isset($_SESSION["matric"])){
	header("Location:../studentlogin.php");

		exit();
	}
?>