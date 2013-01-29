<?
	$title = "Custom Screen Printed Tees | MySTZ.com";
	include 'inc.header.html.php';
	include 'inc.header.php'; 
?>
<link rel="stylesheet" type="text/css" href="css/shirtmaker.css" />
<link rel="stylesheet" href="libraries/flexslider/flexslider.css" type="text/css" />
<script src="libraries/flexslider/jquery.flexslider.js"></script>  
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
 
	  sizes = $('.size-selector-size');
		sizeSelect = $('#paypalSizes');
			
		sizes.click(function(){
			sizes.removeClass(' size-selector-size-selected');
			$(this).addClass(' size-selector-size-selected');
			size = ($(this).data('size'));
			//console.log(size);
			sizeSelect.val(size);
		})
		
	 });
</script>

<?
    include ('shirtbuilder.shirts.php');
      
      $design_options = array(
      	"Beast Mode" => array(
       		"title" => "Beast Mode",
       		"full_size" => "beastmode.black.png",
       		"thumb" => "beastmode.black.thumb.png",
       	),
       	"Daps n Pounds" => array(
       		"title" => "Daps n Pounds",
       		"full_size" => "dapsnpounds.grey.png",
       		"thumb" => "dapsnpounds.grey.thumb.png",
       	),
       	"Double STZ Burger" => array(
       		"title" => "Double STZ Burger",
       		"full_size" => "doublestzburger.black.png",
       		"thumb" => "doublestzburger.black.thumb.png",
       	),
       	"El Caputo" => array(
       		"title" => "El Caputo",
       		"full_size" => "elcaputo.black.png",
       		"thumb" => "elcaputo.black.thumb.png",
       	),
       	"Emergency Mustache" => array(
       		"title" => "Emergency Mustache",
       		"full_size" => "emergencymustache.black.png",
       		"thumb" => "emergencymustache.black.thumb.png",
       	),/*
       	"En Garde" => array(
       		"title" => "En Garde",
       		"full_size" => "engarde.black.png",
       		"thumb" => "engarde.black.thumb.png",
       	),*/
       	"Gorilla Boombox" => array(
       		"title" => "Gorilla Boombox",
       		"full_size" => "gorillaboombox.black.png",
       		"thumb" => "gorillaboombox.black.thumb.png",
       	),
       	"Skyline" => array(
       		"title" => "Skyline",
       		"full_size" => "skyline.black.png",
       		"thumb" => "skyline.black.thumb.png",
       	),
       	"I Skate NC" => array(
       		"title" => "I Skate NC",
       		"full_size" => "iskatenc.black.png",
       		"thumb" => "iskatenc.black.thumb.png",
       	),
       	"I Skate NC" => array(
       		"title" => "I Skate NC (Blue)",
       		"full_size" => "iskatenc.blue.png",
       		"thumb" => "iskatenc.blue.thumb.png",
       	),
       	"Moostache" => array(
       		"title" => "Moostache",
       		"full_size" => "moostache.black.png",
       		"thumb" => "moostache.black.thumb.png",
       	),
       	"Party Animals" => array(
       		"title" => "Party Animals",
       		"full_size" => "partyanimals.grey.png",
       		"thumb" => "partyanimals.grey.thumb.png",
       	),
       	"Peace" => array(
       		"title" => "Peace (Black)",
       		"full_size" => "peace.black.png",
       		"thumb" => "peace.black.thumb.png",
       	),
       	"Peace" => array(
       		"title" => "Peace (Blue)",
       		"full_size" => "peace.blue.png",
       		"thumb" => "peace.blue.thumb.png",
       	),
       	"Ride NC Black" => array(
       		"title" => "Ride NC (Black)",
       		"full_size" => "ridenc.black.png",
       		"thumb" => "ridenc.black.thumb.png",
       	),
       	"Ride NC Orange" => array(
       		"title" => "Ride NC (Orange)",
       		"full_size" => "ridenc.orange.png",
       		"thumb" => "ridenc.orange.thumb.png",
       	),
       	"Right Coast" => array(
       		"title" => "Right Coast",
       		"full_size" => "rightcoast.black.png",
       		"thumb" => "rightcoast.black.thumb.png",
       	),
       	"Shoot All Shred" => array(
       		"title" => "Shoot All Shred",
       		"full_size" => "shootallshred.black.png",
       		"thumb" => "shootallshred.black.thumb.png",
       	),
       	"Shred Til You're Dead" => array(
       		"title" => "Shred Til You're Dead",
       		"full_size" => "shredtilyouredead.black.png",
       		"thumb" => "shredtilyouredead.black.thumb.png",
       	),
       	"Triangles" => array(
       		"title" => "Triangles",
       		"full_size" => "triangles.black.png",
       		"thumb" => "triangles.black.thumb.png",
       	),
       	"Hand Shredded" => array(
       		"title" => "Hand Shredded",
       		"full_size" => "handshredded.black.png",
       		"thumb" => "handshredded.black.thumb.png",
       	),
       	"We Can Do It" => array(
       		"title" => "We Can Do It",
       		"full_size" => "wecandoit.black.png",
       		"thumb" => "wecandoit.black.thumb.png",
       	),
       	"Happy Shredding" => array(
       		"title" => "Happy Shredding",
       		"full_size" => "happyshredding.orange.png",
       		"thumb" => "happyshredding.orange.thumb.png",
       	),
       	"KJ Gorilla" => array(
       		"title" => "KJ Gorilla",
       		"full_size" => "kjgorilla.black.png",
       		"thumb" => "kjgorilla.black.thumb.png",
       	),
       	"OG Whaler Black" => array(
       		"title" => "OG Whaler (Black)",
       		"full_size" => "ogwhaler.black.png",
       		"thumb" => "ogwhaler.black.thumb.png",
       	),
       	"OG Whaler White" => array(
       		"title" => "OG Whaler (White)",
       		"full_size" => "ogwhaler.white.png",
       		"thumb" => "ogwhaler.white.thumb.png",
       	),
       	"Slush Buddie" => array(
       		"title" => "Slush Buddie (White)",
       		"full_size" => "slushbuddie.white.png",
       		"thumb" => "slushbuddie.white.thumb.png",
       	),
       	"STZ Life" => array(
       		"title" => "STZ Life",
       		"full_size" => "stzlife.black.png",
       		"thumb" => "stzlife.black.thumb.png",
       	),
       	"Too Fresh" => array(
       		"title" => "Too Fresh",
       		"full_size" => "toofresh.blue.png",
       		"thumb" => "toofresh.blue.thumb.png",
       	),
      );
       ?>

<div class="page-wrapper shirtMaker">
	<div id="shirtViewer">
  	<div class="slider">
    	<div id="colorOptions" class="flexslider" >
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
    <ul>
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
			
			<button type="submit" class="btn-cart" name="submit" onclick="_gaq.push(['_trackEvent', 'Add to Cart', 'Custom Graphic', 'Details to Be Added');">Add to Cart</button>
		
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>

  </div><!--#checkout-->
  <p class="shirtmaker-step">Graphic size/placement are approximate. Please reference the <a target="_blank" href="stz.php?line=stz">products page</a> for examples. Please allow 2-3 days for production.</p>
</div><!--#pageWrapper-->



<? 
	include 'inc.social.php'; 
	include 'inc.footer.php';
?>