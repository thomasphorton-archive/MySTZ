<?
	$title = "About STZ | Custom Tees and Hoodies";
	include 'inc.header.html.php';
	include 'inc.header.php'; 
?>

<div class="page">
<div class="page-wrapper clearfix">
<span class="breadCrumb"><a href="index.php">Home</a> > About</span>
	<form id="stickerPackForm" class="contactForm clearfix" action="form.send.sticker.php" method="post">
		<h2>Request a Sticker Pack</h2>
		<input type="text" placeholder="name" id="stickerName" name="name" />
		<input type="text" placeholder="email" id="stickerEmail" name="email" />
		<input type="text" placeholder="address line 1" id="stickerAddress1" name="address1" />
		<input type="text" placeholder="address line 2 (optional)" id="stickerAddress2" name="address2" />
		<input type="text" placeholder="city" id="stickerCity" name="city" />
		<input type="text" placeholder="state" id="stickerState" name="state" />
		<input type="text" placeholder="zip code" id="stickerZip" name="zip" />
		<input type="hidden" name="spamcheck" value="nospam" />
		<input type="submit" value="Request a Sticker Pack" />
	</form>
	
	<? include 'inc.contact.php'; ?>
	
	<section id="contactInfo" class="clearfix">
		<h1><a href="mailto:info@mystz.com">info@mystz.com</a></h1>
		<h2><a href="http://canvassedapparel.com">www.canvassedapparel.com</a></h2>
		<a href="http://canvassedapparel.com">blog</a> | <a href="http://canvassedapparel.com">team</a>
	</section>
	<span class="breadCrumb"><a href="index.php">Home</a> > About</span>
</div><!--#pageWrapper-->
</div>
<? 
	include 'inc.social.php'; 
	include 'inc.footer.php';
?>