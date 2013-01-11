<?php //messages.php
	session_start();
	if(!isset($_SESSION['userName'])){
		$loggedin = FALSE;
		echo 'nope';
	}
	else{
		$user = $_SESSION['userName'];
		$loggedin = TRUE;
		echo 'yep';
	}
		
?>