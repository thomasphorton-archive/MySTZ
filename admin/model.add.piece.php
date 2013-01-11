<?php session_start();
	include_once 'admin.includes/admin.header.php';
	if (isset($_SESSION['user_name'])) {
?>
		
<div id=wrapper>
	<a href="roster.admin.php">Back to Roster</a><br>
	<a href="index.php">Back to Admin Panel</a>
	<form id="submitTicket" action="controller.add.record.php" method=post enctype="multipart/form-data">
		<div class="ticketLine clearfix">
			<label for="artistName">Artist Name:</label>
			<input type=text name=artistName id=artistName value="">
		</div>
		<div class="ticketLine clearfix">
			<label for="facebookURL">Facebook URL:</label>
			<input type=text name=facebookURL id=facebookURL value="">
		</div>
		<div class="ticketLine clearfix">
			<label for="twitterURL">Twitter URL:</label>
			<input type=text name=twitterURL id=twitterURL value="">
		</div>
		<div class="ticketLine clearfix">
			<label for="youtubeURL">Youtube URL:</label>
			<input type=text name=youtubeURL id=youtubeURL value="">
		</div>
		<div class="ticketLine clearfix">
			<label for="soundcloudURL">Soundcloud URL:</label>
			<input type=text name=soundcloudURL id=soundcloudURL value="">
		</div>
		<div class="ticketLine clearfix">
			<label for="hypemURL">Hypem URL:</label>
			<input type=text name=hypemURL id=hypemURL value="">
		</div>		
		<div class="ticketLine clearfix">
			<label for="frontPic">Front Picture (.png):</label>
			<input type="file" name="frontPic" id="frontPic" /> 
		</div>
		<!--<div class="ticketLine clearfix">
			<label for="backPic">Front Picture (.png):</label>
			<input type="file" name="backPicURL" id="backPicURL" /> 
		</div>-->
		<div class="ticketLine clearfix">
			<label for="backPicURL">Back Picture URL:</label>
			<input type=text name=backPicURL id=backPicURL value="">
		</div>
		<div class="ticketLine clearfix">
			<label for="bio">Short Bio:</label>
			<textarea name=bio id=bio></textarea>
		</div>
		<div class="ticketLine clearfix">
			<label for="hidden">Hide Artist?</label>
			<input type="checkbox" name=hidden id=hidden value="1"/>
		</div>
		<input type="submit" class="submit" value="Add New Artist" >
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