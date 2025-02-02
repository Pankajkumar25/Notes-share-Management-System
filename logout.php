<?php
	session_start();
	unset($_SESSION['id']);
	unset($_SESSION['email_id']);
	header("Location:index.php");

//echo "Logout page";
	?>