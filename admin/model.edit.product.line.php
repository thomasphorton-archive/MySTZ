<?php session_start();
include_once 'admin.includes/admin.header.php';
if (isset($_SESSION['user_name'])) {
?>

<script type="text/javascript" src="admin.includes/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
//$(document).ready(function(){
//	CKEDITOR.replace( 'bio' );	
//})

</script>
<div id=wrapper>
	<a href="roster.admin.php">Back to Roster</a><br>
	<a href="index.php">Back to Admin Panel</a>
	<form id="submitTicket" action="controller.edit.piece.php" method=post  enctype="multipart/form-data">
<?
$line_ID = $_GET['line_id'];
$qry       = $pdo->query("SELECT * FROM inventory WHERE line_id = $line_ID");
foreach ($qry as $row) {
?>
		
	
		
	<div class="ticketLine clearfix">
		<label for="hidden">Hide Artist?</label>
		<input type="checkbox" name=hidden id=hidden value="1" 
		<?
    if ($row['hidden'] == 1)
        echo 'checked';
?>	/>
	</div>	
<?
}
?>
		
		<input type="submit" class="submit" value="Update Artist Information" >
	</form>
	<a href="roster.admin.php">Back to Roster</a><br>
	<a href="index.php">Back to Admin Panel</a>
	
</div><!--#wrapper-->	

<?
}
else{
	include 'please.log.in.php';
}
include_once 'admin.includes/admin.footer.php';
?>
