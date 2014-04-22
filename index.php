<?
	$title = "MySTZ | Custom T-Shirts and Hoodies | Wake Skate Surf Snow";
	$meta_description = "custom built graphic tees, pocket tees, and hoodies. happy shredding.";
	include 'inc.header.html.php';
?>

<link rel="stylesheet" href="/css/libs/flexslider/flexslider.css" type="text/css" />
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

</head>


<?
	include 'inventory.php';
?>

<body>

<? include 'inc.header.php';  ?>

	<div class="container index-container">
		<div class="row">
			<div class="span12">
			  <div class="flexslider">
          <ul class="slides">
            <li>
              <a href="/products.php?line=new">
                <img src="/images/banners/banner_newproduct.jpg" class="index-banner-image" alt="Custom Hoodies for Snowboarding">
              </a>
            </li>
            <li>
							<a href="/products.php#graphic-tees">
              	<img src="/images/banners/banner_tees.jpg" class="index-banner-image" alt="Snowboarding at App Ski Mountain">
							</a>
            </li>
            <li>
              <a href="/products.php#tanks">
                <img src="/images/banners/banner_tanks.jpg" class="index-banner-image" alt="Snapback Hats and Beanies">
              </a>
            </li>
            <li>
							<a href="/products.php#hats">
              	<img src="/images/banners/banner_hats.jpg" class="index-banner-image" alt="Jeff Mathis Wakeboarding">
							</a>
            </li>
            <li>
              <a href="/products.php#outer">
                <img src="images/banners/banner_fleece.jpg" class="index-banner-image" alt="Zip-up Hoodies Custom Made">
              </a>
            </li>
          </ul>
        </div>
			</div>
		</div>

		<div class="row">
			<div class="span6"  style="position:relative;">
				<a href="/products.individual.php?id=23">
					<img src="/images/index/thank-blank-for.gif" alt="Thank ___ By Garrett Ginner">
          <h3 class="product-name">Featured: Thank ___ by Garrett Ginner</h3>
        </a>
			</div>

			<div class="span6">
				<a href="/products.php">
					<img src="/images/index/products.jpg" alt="Gear for Wake, Skate, Surf or Snow">
				</a>
			</div>
		</div>

		<div class="row">
			<div class="span6">
				<iframe src="http://player.vimeo.com/video/71291356?autoplay=0" width="100%" frameborder="0" style="min-height: 333px;" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</div>

			<div class="span6">
        <iframe src="http://snapwidget.com/in/?h=c3R6bGlmZXxpbnw3MHw2fDN8fG5vfDMwfG5vbmV8b25TdGFydHxubw==&amp;v=251113" title="Instagram Widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:600px; height:300px"></iframe>
			</div>
		</div>

		<div class="row">
			<div class="span6 index-facebook-plugin">
				<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&amp;appId=144825008977547";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-like" data-href="https://www.facebook.com/pages/STZ-Canvassed-Apparel/166458200044265?fref=ts" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>
			</div>
			<div class="span6">
				<img src="/images/index/index-happy-shredding.png" alt="Happy Shredding!">
			</div>
		</div>

	</div>

<?
	include 'inc.footer.php';
?>
