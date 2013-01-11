<?php session_start();
	session_destroy();
	include_once 'admin.includes/admin.header.php';
	?>
	<div id="wrapper" class="clearfix">
	<h2>Thank you for Logging Out.</h2>
	<a href="index.php"><h3>Log Back In.</h3></a>
	</div>
	<?
	
	include_once 'admin.includes/admin.footer.php';
?>