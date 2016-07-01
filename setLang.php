<?php
	session_start();
	$_SESSION['lang']=$_GET['l'];
	header('Location:index.php');
?>