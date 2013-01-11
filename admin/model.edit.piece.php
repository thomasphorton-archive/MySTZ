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
	<form id="submitTicket" action="controller.edit.record.php" method=post  enctype="multipart/form-data">
<?
$artist_ID = $_GET['artist_id'];
$qry       = $pdo->query("SELECT * FROM roster WHERE artist_id = $artist_ID");
foreach ($qry as $row) {
?>
		
	<div class="ticketLine clearfix" style="display:none">
		<input type=text name=artistID id=artistID value="<?= $row['artist_id']; ?>">
	</div>
		
	<div class="ticketLine clearfix">
		<label for="artistName">Artist Name:</label>
		<input type=text name=artistName id=artistName value="<?= $row['artist_name']; ?>">
	</div>
		
	<div class="ticketLine clearfix">
		<label for="facebookURL">Facebook URL:</label>
		<input type=text name=facebookURL id=facebookURL value="<?= $row['facebook_url']; ?>">
	</div>
		
	<div class="ticketLine clearfix">
		<label for="twitterURL">Twitter URL:</label>
		<input type=text name=twitterURL id=twitterURL value="<?= $row['twitter_url']; ?>">
	</div>
			
	<div class="ticketLine clearfix">
		<label for="youtubeURL">Youtube URL:</label>
		<input type=text name=youtubeURL id=youtubeURL value="<?= $row['youtube_url']; ?>">
	</div>
		
	<div class="ticketLine clearfix">
		<label for="soundcloudURL">Soundcloud URL:</label>
		<input type=text name=soundcloudURL id=soundcloudURL value="<?= $row['soundcloud_url']; ?>">
	</div>
		
	<div class="ticketLine clearfix">
		<label for="hypemURL">Hypem URL:</label>
		<input type=text name=hypemURL id=hypemURL value="<?= $row['hypem_url']; ?>">
	</div>
	
	<div class="ticketLine clearfix">
		<label for="frontPic">Front Picture (.png):</label>
		<img src="../images/<?= $row['front_pic_url']; ?>" width="200px">
		<input type="file" name="frontPic" id="frontPic" /> 
	</div>
	
	<div class="ticketLine clearfix">
		<label for="backPic">Back Picture (.jpg):</label>
		<img src="../images/<?= $row['back_pic_url']; ?>" width="200px">
		<input type="file" name="backPic" id="backPic" /> 
	</div>
		
	<div class="ticketLine clearfix">
		<label for="bio">Short Bio:</label>
		<textarea name=bio id=bio ><?= $row['bio']; ?></textarea>
	</div>
		
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
