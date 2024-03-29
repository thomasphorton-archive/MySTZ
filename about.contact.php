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
		<form id="stickerPackForm" class="form-ajax" id="form-sticker" action="forms/send.sticker.php" method="post">
			<fieldset>
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

				<label for="addEmail"><input type="checkbox" id="addEmail" name="addEmail" value="yes">I'd like to receive the occasional email from STZ</label>

				<input type="hidden" name="spamcheck" value="nospam" />
				<button class="btn" type="submit">Request a Pack</button>

			</fieldset>

			<div class="form-success text-content">
				<h2>Yeah buddy!</h2>
				<p>We hear you loud and clear- we'll get a sticker pack out to you!</p>
				<p>Please allow 5-7 days for delivery. Happy Shredding!</p>
			</div>
			
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
			<a href="http://www.valdostawakecompound.com/" target="_blank">
			<img src="/images/retail/valdosta-wake.png" alt="Valdosta Wake Compound">
			</a>

			<a href="http://icywakessurfshop.com/" target="_blank">
				<img src="/images/retail/icy-wakes.png" alt="IcyWakes Surf Shop">
			</a>

			<a href="http://edgeoworldnc.wordpress.com/" target="_blank">
				<img src="/images/retail/edge-of-the-world.png" alt="Edge of the World Snowboard Shop">
			</a>

			<a href="http://www.facebook.com/Roguewaveboca" target="_blank">
				<img src="/images/retail/rogue-wave.png" alt="Rogue Wave Sun & Surf">
			</a>

			<a href="http://www.appskimtn.com/about-us/alpine-ski-shop" target="_blank">
				<img src="/images/retail/alpine-ski-shop.png" alt="Alpine Ski Shop">
			</a>
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