<?
session_start();
include_once 'admin.includes/admin.header.php';
?>

	<div id=wrapper>
<?
if (isset($_SESSION['user_name'])) {
?>
		<h1>Pick a product line to edit:</h1>

		<?
    $qry = $pdo->query("SELECT * FROM product_line");
    foreach ($qry as $row) {
?>

				<a href="model.edit.product.line.php?line_id=<?= $row['line_id']; ?>" class=rosterLine>
		<?
        echo $row['name'];
        if ($row['hidden'] == 1) {
            echo ' (Hidden)';
        }
?>		
				</a>

<?
    }
?>
			<a href="model.add.product.line.php" class=rosterLine>Add a New Product Line</a>
	
			<a href="index.php">Back to Admin Panel</a>
<?
}
else{
	include 'please.log.in.php';
}
?>	
		
	</div><!--#wrapper-->

<?
include_once 'admin.includes/admin.footer.php';
?>