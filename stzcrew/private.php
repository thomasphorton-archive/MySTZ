<?php include 'controller/authenticate.php'; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<? include '../inc.header.php'; ?>
<h1>STZ Crew</h1>

<h2>Welcome, <?=htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8');?></h2>

<a href="memberlist.php">Memberlist</a><br />
<a href="edit_account.php">Edit Account</a><br />
<a href="logout.php">Logout</a>

<? include '../inc.footer.php'; ?>
</body>
</html>