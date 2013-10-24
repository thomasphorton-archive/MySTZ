<?
	$title = "MySTZ | Custom T-Shirts and Hoodies | Wake Skate Surf Snow";
	$meta_description = "custom built graphic tees, pocket tees, and hoodies. happy shredding.";
	include 'inc.header.html.php';
	include 'inventory.php';
?>
<link rel="stylesheet" href="libraries/flexslider/flexslider.css" type="text/css" />
<link rel="icon" href="images/favicon.ico">
<script src="libraries/flexslider/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('.flexslider').flexslider({
      animation: "slide",
			animationLoop: true,
			controlNav: false,
			slideshowSpeed: 4000,
    });
	 });
</script>
<? include 'inc.header.php';  ?>

	<div class="container index-container">
		<div class="row">
			<div class="span12">
			  <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="images/banners/andrewkris.jpg" class="index-banner-image">
            </li>
            <li>
              <a href="/products.line.php?line=hats">
                <img src="images/banners/hats.jpg" class="index-banner-image">
              </a>
            </li>
            <li>
              <img src="images/banners/jeffgrass.jpg" class="index-banner-image">
            </li>
            <li>
              <a href="/products.line.php?line=outer">
                <img src="images/banners/zipup.jpg" class="index-banner-image">
              </a>
            </li>
          </ul>
        </div>

			</div>
		</div>

		<div class="row">
			<div class="span6">
				<a href="/products.individual.php?id=921">
					<img src="/images/index/mysterytee.jpg">
				</a>

        <a href="/products.individual.php?id=922">
          <img src="/images/index/mysterytank.jpg"  style="margin-top: 30px;">
        </a>
			</div>

			<div class="span6">
				<a href="/shirtbuilder.select.php">
					<img src="/images/index/products.jpg">
				</a>
			</div>
		</div>

		<div class="row">
			<div class="span6">
				<iframe src="http://player.vimeo.com/video/70168317?autoplay=0" width="100%" frameborder="0" style="min-height: 333px;" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</div>

			<div class="span6">
				<div class="row" style="margin-top: 0;">
				<?php include 'inc.instagram.php'; ?>
					<div class="span2">
						<img src="/images/index/index-instagram-logo.png">
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="span6 index-facebook-plugin">
				<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=144825008977547";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-like" data-href="https://www.facebook.com/pages/STZ-Canvassed-Apparel/166458200044265?fref=ts" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>
			</div>
			<div class="span6">
				<img src="/images/index/index-happy-shredding.png">
			</div>
		</div>

	</div>

<?
	include 'inc.footer.php';
?>