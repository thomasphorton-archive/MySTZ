<?php
session_start();
include_once 'dbcon.php';

$user_name = $_POST['userName'];
$plain_pass = $_POST['plainPass'];
$hashed_pass = hash('sha256',$plain_pass);

$sql = "SELECT COUNT(*) FROM users WHERE user_name=? and hashed_pass=?";
	$q = $pdo->prepare($sql);
	$q->execute(array($user_name,$hashed_pass));
	
$success = (bool) $q->fetchColumn(0);
if($success){
	echo 'Success!<br><a href="messages.php">Click</a>';
	$_SESSION['userName'] = $user_name;
	$_SESSION['hashedPass'] = $hashed_pass;
}
else{
	echo 'Login failed.<br><a href="model.login.php">Try again.</a>';
}
?>