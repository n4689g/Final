<?php
	session_start();
		$session=$_SESSION['s_n'];
			if($session=="")
			{
				header('location:home1.php');	
			}
		session_destroy();
		header('location:home1.php');
?>