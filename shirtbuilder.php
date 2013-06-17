<?
	if (isset($_GET['item'])) {
		$item = preg_replace("/[^A-Za-z0-9 ]/", '', $_GET['item']);
	} else {
		$item = 'tee';
	}

	if (isset($_GET['style'])) {
		$style = preg_replace("/[^A-Za-z0-9 ]/", '', $_GET['style']);
	} else {
		$style = 'graphic';
	}

	if (isset($_GET['design'])) {
		$design = preg_replace("/[^A-Za-z0-9 ]/", '', $_GET['design']);
	} else {
		$design = NULL;
	}

	if (isset($_GET['color'])) {
		$color = preg_replace("/[^A-Za-z0-9 ]/", '', $_GET['color']);
	} else {
		$color = NULL;
	}

	switch ($style){
		case 'graphic':
			include ('shirtbuilder/shirtbuilder.graphics.php');
			break;
		case 'pocket':
			include ('shirtbuilder/shirtbuilder.pockets.php');
			break;
		default:
			include ('shirtbuilder/shirtbuilder.graphics.php');
	}

	switch ($item){
		case 'tee':
			include ('shirtbuilder/shirtbuilder.tees.php');
			break;
		default:
			include ('shirtbuilder/shirtbuilder.tees.php');
	}

	if ($style == 'graphic' && $item == 'tee') {
		$item_name = 'Custom Graphic Tee';
		$item_number = '99998';
		$item_price = '$22';
		$default_color = 'Heather Charcoal';
		$default_design = 'Beast Mode';
		$production_time = '3-5 days';
	}
	elseif ($style == 'pocket' && $item == 'tee') {
		$item_name = 'Custom Pocket Tee';
		$item_number = '99999';
		$item_price = '$25';
		$default_color = 'Heather Charcoal';
		$default_design = 'Flamingo';
		$production_time = '5-7 days';
	}

	$title = "STZ Shirtbuilder | Custom Graphics and Pocket Tees | MySTZ";
	include 'inc.header.html.php';
	include 'inc.header.php';
?>
<link rel="stylesheet" type="text/css" href="css/shirtmaker.css" />
<link rel="stylesheet" href="libraries/flexslider/flexslider.css" type="text/css" />
<script src="libraries/flexslider/jquery.flexslider.js"></script>
<script type="text/javascript">



var item = '<?=$item?>';
var style = '<?=$style?>';
var color = '<?=$default_color?>';
var design = '<?=$default_design?>';
var colorNormalized;
var designNormalized;

var customString;

$(document).ready(function() {

  <? if ($design) { ?>
		design = '<?=$design?>';
		console.log(design);
		var designStart = ($('#designContainer').find("[data-design-normalized='" + design + "']").index());
<? } else { ?>
		var designStart = 0;

<? }


 	if ($color) { ?>
		color = '<?=$color?>';
		console.log(color);
		var colorStart = ($('#swatchContainer').find("[data-color-normalized='" + color + "']").index());
<? } else { ?>
		var colorStart = 0;
<? } ?>

	customDetail = $('#customDetail');
  updateShirtString();

  designControl = $('.designControls');
  designControl.click(function(){
  	design = $(this).data('design');
  	designNormalized = $(this).data('design-normalized');
    updateShirtString();
  });

  colorControl = $('.colorControls');
  colorControl.click(function(){
    color = $(this).data('color');
    colorNormalized = $(this).data('color-normalized');
    updateShirtString();
  });

  $('#colorOptions').flexslider({
  	animation: "slide",
    direction: "vertical",
    slideshow: false,
    manualControls: ".colorControls",
    controlsContainer: ".flex-container",
    startAt: colorStart
  });

  $('#designOptions').flexslider({
    animation: "slide",
    direction: "horizontal",
    slideshow: false,
    manualControls: ".designControls",
    controlsContainer: ".flex-container",
    startAt: designStart
  });

	var designSlider = $('.designslide').data('flexslider');
	var colorSlider = $('.itemslide').data('flexslider');

	num_designs = <?=count($design_options)?>;
	num_colors = <?=count($item_color)?>;

	randomize = $('.shirtmaker-randomize');
	randomize.click(function(){
		rand_design = Math.ceil(Math.random() * num_designs);
		rand_color = Math.ceil(Math.random() * num_colors);
		designSlider.flexAnimate(rand_design - 1);
		colorSlider.flexAnimate(rand_color - 1);
		design = designControl.filter(':nth-child(' + rand_design + ')').data('design');
		designNormalized = designControl.filter(':nth-child(' + rand_design + ')').data('design-normalized');
		colorNormalized = colorControl.filter(':nth-child(' + rand_color + ')').data('color-normalized');
		updateShirtString();
	});

});

function updateShirtString() {
	customString = (color + ' ' + item +', ' + design + ' ' + style).toLowerCase();
	customURL = "http://beta.mystz.com/shirtbuilder.php?color=" + colorNormalized + "&item=" + item + "&design=" + designNormalized + "&style=" + style;
	console.log(customURL);
	customDetail.val(customString);
}
</script>

<div class="container">
	<div class="row">
		<div class="shirtMaker simpleCart_shelfItem span12">
			<div class="row">
				<div id="shirtViewer" class="span4 fixed">
					<span class="shirtmaker-randomize">randomize</span> <span class="shirtmaker-share">share</span>
			  	<div class="slider">
			    	<div id="colorOptions" class="flexslider itemslide" >
			      	<ul class="slides">
			        	<?	foreach ($item_color as $option){	?>
			          	<li><img src="<?=$option["shirt"]?>" alt="<?=$option["title"]?>" class=" lazy"/></li>
			          <?	} ?>
			        </ul>
			      </div><!--.flexslider-->
			    </div><!--.slider-->
			    <div class="slider">
			    	<div id="designOptions" class="flexslider designslide">
			      	<ul class="slides">
			        	<?	foreach ($design_options as $design){	?>
			            <li><img src="<?=$design["full_size"]?>" alt="<?=$design["title"]?>" class=" lazy" /></li>
			          <?	} ?>
			        </ul>
			      </div><!--.flexslider1-->
			    </div><!--.slider-->
			  </div><!--#shirtViewer-->
				<div class="span7 pull-right">
				  <div class="flex-container shirtmaker-step row" id="designContainer">
				  	<h1 class="item_name"><?=$item_name?></h1>
						<h2 class="step1">1. Pick Your Graphic</h2>
					  <div id="designThumb" class="row">
					  	<div class="span7 well">
					  		<div class="row">
					   	<?	foreach ($design_options as $design){ ?>
					     	<div class="designControls span1" data-design="<?=$design["title"]?>" data-design-normalized="<?=$design["normalized"]?>"><img src="<?=$design["thumb"]?>" alt="<?=$design["title"]?>" /></div>
					    <?	} ?>
					  		</div>
					  	</div>
					  </div>
				  </div><!--.flex-container-->
				  <div class="flex-container shirtmaker-step row" id="swatchContainer">
				  	<h2 class="step2">2. Pick Your Shirt Color</h2>
				    <div class="color-options-container row">
				    	<div class="span7 well">
				    		<div class="row">
				  	 	<?	foreach ($item_color as $option){ ?>
				  	 		<div class="colorControls span1" data-color="<?=$option["title"]?>" data-color-normalized="<?=$option["normalized"] ?>"><img src="<?=$option["thumb"]?>" alt="<?=$option["title"]?>" /></div>
				      <?	} ?>
				    		</div>
				    	</div>
				    </div>
				  </div><!--.flex-container-->
				  <div id="size" class="shirtmaker-step row">
				  	<h2 class="span7">3. Pick Your Size</h2>
				  	<? include 'inc.select-size.php'; ?>
				  </div><!--#size-->
				  <div id="checkout" class="shirtmaker-step row">
					  <h2 class="">4. Order It!</h2>
					  <h2 class="product-price">
							<span class="item_price"><?=$item_price?></span>
							<span class="discount">Now:
								<span class="discounted_price"></span>
							</span>
						</h2>
					  <span class="item_number" style="display: none;"><?=$item_number?></span>
				  	<a href="javascript:;" class="item_add btn">Add to Cart</a>
				  	<input type="text" id="customDetail" class="item_description" style="display: none">
				  </div><!--#checkout-->
					<div class="row">
						<p>Graphic size/placement are approximate. Please reference the <a target="_blank" href="/products.php">products page</a> for examples. Please allow <?=$production_time?> days for production.</p>
					</div>
				</div>
			</div>
	  </div>
	</div>
</div><!--#pageWrapper-->
	<script>

      $("img.lazy").show().lazyload({
        effect: 'fadeIn'
      });
  </script>
<?
	include 'inc.social.php';
	include 'inc.footer.php';
?>