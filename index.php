<?
	$title = "MySTZ | Custom T-Shirts and Hoodies | Wake Skate Surf Snow";
	include 'inc.header.html.php';
?>
<link rel="stylesheet" href="libraries/flexslider/flexslider.css" type="text/css" />
<link rel="icon" href="images/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="libraries/flexslider/jquery.flexslider.js"></script>  
<script type="text/javascript">
	$(document).ready(function() {
    $('.flexslider').flexslider({
      animation: "slide",
			animationLoop: true,
			controlNav: false,
    });
	 });
</script>
<header class="header">
	<div class="header-index">
		<a href="index.php"><div class="header-index-logo"></div></a>
		<a href="index.php"><div class="header-index-mystz"></div></a>
		<ul class="nav nav-index">
			<li><a href="index.php"><img src="images/navbuttons/home.sprite.png" /></a></li>
			<li><a href="products.php"><img src="images/navbuttons/products.sprite.png" /></a></li>
			<li><a href="shirtbuilder.select.php"><img src="images/navbuttons/shirtbuilder.sprite.png" /></a></li>
			<li><a href="about.php"><img src="images/navbuttons/about.sprite.png" /></a></li>
		</ul>
		<ul class="social social-index">
			<li><a href="https://facebook.com/pages/STZ-Canvassed-Apparel/166458200044265" target="_blank"><img src="images/social/facebook.png"></a></li>
			<li><a href="https://twitter.com/stzlife" target="_blank"><img src="images/social/twitter.png"></a></li>
			<li><a href="https://vimeo.com/stz" target="_blank"><img src="images/social/vimeo.png"></a></li>
			<li>
				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="images/cart.png" id="viewCart" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

			</li>
		</ul>
	</div>
</header>

<div class="page-wrapper page-wrapper-index">
	<div class="flexslider slider-main">
	<ul class="slides">
		<li><a href="products.line.php?line=outer"><img src="images/bigfrontbanners/blackstzlifehoodie.png" class="slider-main-image"></a></li>
		<li><a href="products.php"><img src="images/bigfrontbanners/productryannikki.png" class="slider-main-image"></a></li>
		<li><a href="products.line.php?line=ladies"><img src="images/bigfrontbanners/womens.png" class="slider-main-image"></a></li>
		<li><a href="products.individual.php?id=72"><img src="images/bigfrontbanners/customhoodies.png" class="slider-main-image"></a></li>
		<li><a href="products.line.php?line=hats"><img src="images/bigfrontbanners/hats.png" class="slider-main-image"></a></li>
	</ul>
	</div><!--#flexslider-->
	
	<section class="clearfix">
		<ul class="nav-more">
			<li><a href="products.line.php?line=stz"><img src="images/smallfrontbanners/stz.png" alt="Outer STZ" /></a></li>
			<li><a href="products.line.php?line=pocket"><img src="images/smallfrontbanners/pocketstz.png" alt="Outer STZ" /></a></li>
			<li><a href="shirtbuilder.select.php"><img src="images/smallfrontbanners/shirtbuilder.png" alt="Pocket STZ" /></a></li>
			<li><a href="http://canvassedapparel.com" target="_blank"><img src="images/smallfrontbanners/canvassedapparel.png" alt="Pocket STZ" /></a></li>
		</ul>
	</section>
</div><!--.page-wrapper-->

<? 
	include 'inc.social.php'; 
	include 'inc.footer.php';
?>