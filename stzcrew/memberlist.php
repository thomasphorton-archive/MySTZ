<?php
		include 'controller/authenticate.php';

    // Everything below this point in the file is secured by the login system

    // We can retrieve a list of members from the database using a SELECT query.
    // In this case we do not have a WHERE clause because we want to select all
    // of the rows from the database table.
    $query = "
        SELECT
            id,
            username,
            email
        FROM users
    ";

    try
    {
        // These two statements run the query against your database table.
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
    catch(PDOException $ex)
    {
        // Note: On a production website, you should not output $ex->getMessage().
        // It may provide an attacker with helpful information about your code.
        die("Failed to run query: " . $ex->getMessage());
    }

    // Finally, we can retrieve all of the found rows into an array using fetchAll
    $rows = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<? include '../inc.header.php'; ?>

<h1>Memberlist</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>E-Mail Address</th>
    </tr>
    <?php foreach($rows as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td> <!-- htmlentities is not needed here because $row['id'] is always an integer -->
            <td><?php echo htmlentities($row['username'], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlentities($row['email'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="private.php">Go Back</a>

<? include '../inc.footer.php'; ?>
</body>
</html>