<?php
	include 'controller/login.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<? include '../inc.header.php'; ?>
<h1>Login</h1>
<form action="login.php" method="post">
    Username:<br />
    <input type="text" name="username" value="<?php echo $submitted_username; ?>" autocomplete="off"/>
    <br /><br />
    Password:<br />
    <input type="password" name="password" value="" />
    <br /><br />
    <input type="submit" value="Login" />
</form>
<a href="register.php">Register</a>
<? include '../inc.footer.php'; ?>
</body>
</html>