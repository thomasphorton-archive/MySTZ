<?
	$title = "Build a Custom Graphic Tee";
	$meta_description = "build a one-of-a-kind piece of art. then wear it.";
	include 'inc.header.html.php';
	include 'inc.header.php'; 
  include 'shirtbuilder.shirts.php';
  include 'shirtbuilder.graphicoptions.php'; 
?>
<link rel="stylesheet" type="text/css" href="css/shirtmaker.css" />
<link rel="stylesheet" href="libraries/flexslider/flexslider.css" type="text/css" />
<script src="libraries/flexslider/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/select-size.js"></script> 
<script type="text/javascript">
	$(document).ready(function() {
       
     var color = "Heather Grey";
     var graphic = "Beast Mode";  
       
     var customString = color + ' ' + graphic;  
     customDetail = $('#customDetail');  
     customDetail.val(customString);
       
     graphicControl = $('.graphicControls');
     graphicControl.click(function(){
	    graphic = $(this).data('graphic');
	    customString = color + ' ' + graphic;
	    customDetail.val(customString);
    })
    
    colorControl = $('.colorControls');
    colorControl.click(function(){
	    color = $(this).data('color');
	    customString = color + ' ' + graphic;
	    customDetail.val(customString);
    })
                
    $('#colorOptions').flexslider({
    	animation: "slide",
      direction: "vertical",
      slideshow: false,
      manualControls: ".colorControls",
      controlsContainer: ".flex-container"
    });
           
    $('#graphicOptions').flexslider({
      animation: "slide",
      direction: "horizontal",
      slideshow: false,
      manualControls: ".graphicControls",
      controlsContainer: ".flex-container"
    });
		
		var designSlider = $('.graphicslide').data('flexslider');
		var colorSlider = $('.colorslide').data('flexslider');
		
		num_designs = <?=count($design_options)?>;		
		num_shirts = <?=count($shirt_color_options)?>;
		
		randomize = $('.shirtmaker-randomize');
		randomize.click(function(){
			rand_design = Math.ceil(Math.random() * num_designs);
			rand_shirt = Math.ceil(Math.random() * num_shirts);
			designSlider.flexAnimate(rand_design - 1);
			colorSlider.flexAnimate(rand_shirt - 1);
			graphic = graphicControl.filter(':nth-child(' + rand_design + ')').data('graphic');
			color = colorControl.filter(':nth-child(' + rand_shirt + ')').data('color');
			customString = color + ' ' + graphic;
	    customDetail.val(customString);
		});
		
	 });
	 
	 
</script>



<div class="page-wrapper shirtMaker">
	<div id="shirtViewer">
  	<div class="slider">
    	<div id="colorOptions" class="flexslider colorslide" >
      	<ul class="slides">
        	<?	foreach ($shirt_color_options as $color){	?>
          	<li><img src="images/shirtbuilder/blanks/<?=$color["shirt"]?>" alt="<?=$color["title"]?>" /></li>
          <?	} ?>
        </ul>
      </div><!--.flexslider-->
    </div><!--.slider-->
    <div class="slider">
    	<div id="graphicOptions" class="flexslider graphicslide">
      	<ul class="slides">
        	<?	foreach ($design_options as $design){	?>
            <li><img src="images/shirtbuilder/graphics/<?=$design["full_size"]?>" alt="<?=$design["title"]?>" /></li>
          <?	} ?>
        </ul>
      </div><!--.flexslider1-->
    </div><!--.slider-->
  </div><!--#shirtMaker--> 
  
  <span class="shirtmaker-randomize" onclick="_gaq.push(['_trackEvent', 'Custom Shirt', 'Randomized', 'Details to Be Added']);">Randomize</span>
  
  <div class="flex-container shirtmaker-step" id="designContainer">
		<h2 class="step1">1. Pick Your Graphic</h2>
	  <ul id="designThumb">
	   	<?	foreach ($design_options as $design){ ?>
	     	<li class="graphicControls" data-graphic="<?=$design["title"]?>"><img src="images/shirtbuilder/graphicthumbs/<?=$design["thumb"]?>" alt="<?=$design["title"]?>" /></li>
	    <?	} ?>
	  </ul>
  </div><!--.flex-container-->  
  <div class="flex-container shirtmaker-step" id="swatchContainer">
  	<h2 class="step2">2. Pick Your Shirt Color</h2>
    <ul class="color-options-container">
  	 	<?	foreach ($shirt_color_options as $color){ ?>
  	 		<li class="colorControls" data-color="<?=$color["title"]?>"><img src="images/shirtbuilder/swatches/<?=$color["thumb"]?>" alt="<?=$color["title"]?>" /></li>
            <?	} ?>
    </ul>
  </div><!--.flex-container-->
  <div id="size" class="shirtmaker-step">
  	<h2>3. Pick Your Size</h2>
  	<ul class="size-selector clearfix">
			<li class="size-selector-size size-selector-size-selected" data-size="Small">S</li>
			<li class="size-selector-size" data-size="Medium">M</li>
			<li class="size-selector-size" data-size="Large">L</li>
			<li class="size-selector-size" data-size="X-Large">XL</li>
			<li class="size-selector-size" data-size="XX-Large">XXL</li>
		</ul>
  </div><!--#size-->
  <div id="checkout" class="shirtmaker-step">
  <h2>4. Order It!</h2>
  <h3 style="color:white; text-align:center;">$30</h3>
  	<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="CGR3KNGDVRKTG">
			<table>
			<tr><td><input type="hidden" name="on0" value="Sizes"></td></tr><tr><td><select id="paypalSizes" name="os0" style="display:none;">
				<option value="Small">Small $30.00 USD</option>
				<option value="Medium">Medium $30.00 USD</option>
				<option value="Large">Large $30.00 USD</option>
				<option value="X-Large">X-Large $30.00 USD</option>
				<option value="XX-Large">XX-Large $32.00 USD</option>
			</select> </td></tr>
			<tr><td><input type="hidden" name="on1" value="Shirt Details"></td></tr><tr><td><input type="text" id="customDetail" name="os1" maxlength="200" style="display:none;"></td></tr>
			</table>
			<input type="hidden" name="currency_code" value="USD">
			
			<button type="submit" class="btn" name="submit" onclick="_gaq.push(['_trackEvent', 'Add to Cart', 'Custom Graphic', 'Details to Be Added']);">Add to Cart</button>
		
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>

  </div><!--#checkout-->
  <p class="shirtmaker-step">Graphic size/placement are approximate. Please reference the <a target="_blank" href="stz.php?line=stz">products page</a> for examples. Please allow 2-3 days for production.</p>
</div><!--#pageWrapper-->



<? 
	include 'inc.social.php'; 
	include 'inc.footer.php';
?>