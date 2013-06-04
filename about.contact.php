<?
	$title = "About STZ | Custom Tees and Hoodies";
	include 'inc.header.html.php';
	include 'inc.header.php';
?>

<div class="container">
  <div class="row">
    <div class="span12">
      <span class="breadCrumb"><a href="index.php">Home</a> > About</span>
    </div>
  </div>


<div class="row">
	<div class="span4">
		<form id="stickerPackForm" class="" action="form.send.sticker.php" method="post">
			<h2>Request a Sticker Pack</h2>

			<label for="stickerName">Name*</label>
			<input type="text" placeholder="name" id="stickerName" name="name" required="required" class="span4"/>

			<label for="stickerEmail">Email Address*</label>
			<input type="text" placeholder="email" id="stickerEmail" name="email" required="required" class="span4"/>

			<label for="stickerAddress1">Address*</label>
			<input type="text" placeholder="address line 1" id="stickerAddress1" name="address1" required="required" class="span4"/>

			<label for="stickerAddress2">Apt # (Optional)</label>
			<input type="text" placeholder="address line 2 (optional)" id="stickerAddress2" name="address2" class="span4"/>

			<label for="stickerCity">City*</label>
			<input type="text" placeholder="city" id="stickerCity" name="city" required="required" class="span4"/>

			<label for="stickerState">State*</label>
			<input type="text" placeholder="state" id="stickerState" name="state" required="required" class="span4"/>

			<label for="stickerZip">Zip code*</label>
			<input type="text" placeholder="zip code" id="stickerZip" name="zip" required="required" class="span4"/>

			<input type="hidden" name="spamcheck" value="nospam" />
			<button class="btn" type="submit">Request a Pack</button>
		</form>
	</div>
	<div class="span4">
		<? include 'inc.contact.php'; ?>
	</div>
	<div class="span4">
		<section id="contactInfo" class="clearfix">
			<h1><a href="mailto:info@mystz.com">info@mystz.com</a></h1>
			<h2><a href="http://canvassedapparel.com">www.canvassedapparel.com</a></h2>
			<a href="http://canvassedapparel.com">blog</a> | <a href="http://canvassedapparel.com">team</a>
		</section>
	</div>
</div>

<div class="row">
  <div class="span12">
    <span class="breadCrumb"><a href="index.php">Home</a> > About</span>
  </div>
</div>

</div>

<?
	include 'inc.footer.php';
?>