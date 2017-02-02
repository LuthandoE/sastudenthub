<?php
	session_start();
	
	if (!isset($_SESSION['user'])) {
		header("Location: index.php");
	} else if(isset($_SESSION['user'])!="") {
		header("Location: addNews.php");
	}
	
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("Location: admin.php");
		exit;
	}
