<?
	$title = "About STZ | Custom Tees and Hoodies";
	include 'inc.header.html.php';
?>
</head>
<body>
<?
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
		<form id="stickerPackForm" class="" action="forms/send.sticker.php" method="post">
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
		<div class="text-content">
			<h2>Contact Us</h2>
			<p><a href="mailto:returns@mystz.com">returns@mystz.com</a></p>
			<p><a href="mailto:customerservice@mystz.com">customerservice@mystz.com</a></p>
			<p><a href="mailto:sales@mystz.com">sales@mystz.com</a></p>
			<p><a href="mailto:info@mystz.com">info@mystz.com</a></p>
			<h2>Available At</h2>
			<a href="http://www.valdostawakecompound.com/" target="_blank"><img src="/images/retail/vwc.png"></a>
			<a href="http://icywakessurfshop.com/" target="_blank"><img src="/images/retail/icywakes.png"></a>
		</div>
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