<?
	$title = "Who Do You Think We Are?";
	$meta_description = "it was all a dream.";
	include 'inc.header.html.php';
	include 'inc.header.php'; 
?>

<div class="page-wrapper">
<span class="breadCrumb"><a href="index.php">Home</a> > About</span>

<p>We are Canvassed Apparel and STZ (pronounced steez) is our brand. STZ is a wake/skate/surf/snow clothing company geared towards promoting the fun in sports. We use our experience and passion for the board-sport culture to shape the STZ apparel line, striving to make quality products with emphasis on fit and style - if we can-t see ourselves wearing it, it won-t be  part of the STZ line. Currently, the STZ line consists of graphic tees, pocket tees and outerwear, all of which have stocked or custom options.</p>

<p>It all started in 2008 hand-making t-shirt designs in our garage. They were inspired by some of Quint's artwork using anything and everything we thought wouldn't wash out in the washing machine. The designs were fun and unique by incorporating "splatter" in all of the styles, but sometimes lacking in quality due to our materials and methods. That's when we became STZ which originally stood for Splatter Teez and correlated with the boardsport term, steez or steezy. Canvassed Apparel came from our inspiration to make t-shirts from canvas art and we wanted to make sure that was always a part of our brand. From day one and still going strong, all graphics are available on canvas by request and at STZ special events. Today, all of the STZ line is produced in-house and all outerwear and pocket tee production is handled locally in North Carolina.</p>

<div class="clearfix">
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
		<button class="btn" type="submit">Request a Pack</button>
	</form>
	
	<? include 'inc.contact.php'; ?>
	
	<section id="contactInfo" class="clearfix">
		<h1><a href="mailto:info@mystz.com">info@mystz.com</a></h1>
		<h2><a href="http://canvassedapparel.com">www.canvassedapparel.com</a></h2>
		<a href="http://canvassedapparel.com">blog</a> | <a href="http://canvassedapparel.com">team</a>
	</section>
</div>
	<span class="breadCrumb"><a href="index.php">Home</a> > About</span>
</div><!--#pageWrapper-->

<? 
	include 'inc.social.php'; 
	include 'inc.footer.php';
?>