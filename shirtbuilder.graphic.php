<?
	$title = "";
	include 'inc.header.html.php';
	include 'inc.header.php'; 
?>
<link rel="stylesheet" type="text/css" href="css/shirtmaker.css" />
<link rel="stylesheet" href="libraries/flexslider/flexslider.css" type="text/css" />
<script src="libraries/flexslider/jquery.flexslider.js"></script>  
<script type="text/javascript">
	$(document).ready(function() {
       
     var color = "Fatigue";
     var graphic = "Beast Mode";  
       
     var customString = color + ' ' + graphic;  
     customDetail = $('#customDetail');  
     customDetail.val(customString);
       
     graphicControl = $('.graphicControls');
     graphicControl.click(function(){
	    //console.log($(this).data('graphic'));
	    graphic = $(this).data('graphic');
	    customString = color + ' ' + graphic;
	    customDetail.val(customString);
    })
    
    colorControl = $('.colorControls');
    colorControl.click(function(){
	    //console.log($(this).data('color'));
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
 
	  sizes = $('.size');
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
      $shirt_color_options = array(
       	"Fatigue",
       	"Gold",
       	"Green",
       	"Blue",
       	"Charcoal",
       	"Dark Navy",
       	"Deep Red",
       	"Grey",
       	"Latte",
       	"Maroon",
       	"Navy",
       	"Orange",
       	"Purple",
       	"Red",
       	"White",	
       	"Black",	
      );
      
      $design_options = array(
      	"Beast Mode" => array(
       		"title" => "Beast Mode",
       		"full_size" => "beastmode.black.png",
       		"thumb" => "beastmode.thumb.png",
       	),
       	"Daps n Pounds" => array(
       		"title" => "Daps n Pounds",
       		"full_size" => "dapsnpounds.black.png",
       		"thumb" => "dapsnpounds.thumb.png",
       	),
       	"Double STZ Burger" => array(
       		"title" => "Double STZ Burger",
       		"full_size" => "doublestzburger.black.png",
       		"thumb" => "doublestzburger.thumb.png",
       	),
       	"El Caputo" => array(
       		"title" => "El Caputo",
       		"full_size" => "elcaputo.black.png",
       		"thumb" => "elcaputo.thumb.png",
       	),
       	"Emergency Mustache" => array(
       		"title" => "Emergency Mustache",
       		"full_size" => "emergencymustache.black.png",
       		"thumb" => "emergencymustache.thumb.png",
       	),
       	"En Garde" => array(
       		"title" => "En Garde",
       		"full_size" => "engarde.black.png",
       		"thumb" => "engarde.thumb.png",
       	),
       	"Gorilla Boombox" => array(
       		"title" => "Gorilla Boombox",
       		"full_size" => "gorillaboombox.black.png",
       		"thumb" => "gorillaboombox.thumb.png",
       	),
       	"Skyline" => array(
       		"title" => "Skyline",
       		"full_size" => "homegrown.black.png",
       		"thumb" => "skyline.thumb.png",
       	),
       	"I Skate NC" => array(
       		"title" => "I Skate NC",
       		"full_size" => "iskatenc.black.png",
       		"thumb" => "iskatenc.thumb.png",
       	),
       	"Moostache" => array(
       		"title" => "Moostache",
       		"full_size" => "moostache.black.png",
       		"thumb" => "moostache.thumb.png",
       	),
       	"Party Animals" => array(
       		"title" => "Party Animals",
       		"full_size" => "partyanimals.black.png",
       		"thumb" => "partyanimals.thumb.png",
       	),
       	"Peace" => array(
       		"title" => "Peace",
       		"full_size" => "peace.black.png",
       		"thumb" => "peace.thumb.png",
       	),
       	"Ride NC" => array(
       		"title" => "Ride NC",
       		"full_size" => "ridenc.black.png",
       		"thumb" => "ridenc.thumb.png",
       	),
       	"Right Coast" => array(
       		"title" => "Right Coast",
       		"full_size" => "rightcoast.black.png",
       		"thumb" => "rightcoast.thumb.png",
       	),
       	"Shoot All Shred" => array(
       		"title" => "Shoot All Shred",
       		"full_size" => "shootallshred.black.png",
       		"thumb" => "shootallshred.thumb.png",
       	),
       	"Shred Til You're Dead" => array(
       		"title" => "Shred Til You're Dead",
       		"full_size" => "shredtilyouredead.black.png",
       		"thumb" => "shredtilyouredead.thumb.png",
       	),
       	"Triangles" => array(
       		"title" => "Triangles",
       		"full_size" => "triangles.black.png",
       		"thumb" => "triangles.thumb.png",
       	),
       	"Hand Shredded" => array(
       		"title" => "Hand Shredded",
       		"full_size" => "wakeskatesurfsnow.black.png",
       		"thumb" => "handshredded.thumb.png",
       	),
       	"Yes We Can" => array(
       		"title" => "Yes We Can",
       		"full_size" => "wecandoit.black.png",
       		"thumb" => "wecandoit.thumb.png",
       	),
      );
       ?>

<div class="page-wrapper shirtMaker">
	<div id="shirtViewer">
  	<div class="slider">
    	<div id="colorOptions" class="flexslider" >
      	<ul class="slides">
        	<?	foreach ($shirt_color_options as $color){	?>
          	<li><img src="images/shirtbuilder/blanks/<?=$color?>.jpg" alt="<?=$color?>" /></li>
          <?	} ?>
        </ul>
      </div><!--.flexslider-->
    </div><!--.slider-->
    <div class="slider">
    	<div id="graphicOptions" class="flexslider graphicslide">
      	<ul class="slides">
        	<?	foreach ($design_options as $design){	?>
            <!--<li><img src="images/shirtbuilder/graphics/<?=$design?>.png" alt="<?=$design?>" /></li>--><li><img src="images/shirtbuilder/graphics/<?=$design["full_size"]?>" alt="<?=$design["title"]?>" /></li>
          <?	} ?>
        </ul>
      </div><!--.flexslider1-->
    </div><!--.slider-->
  </div><!--#shirtMaker--> 
  <div class="flex-container" id="designContainer">
		<h2 class="step1">1. Pick Your Graphic</h2>
	  <ul id="designThumb">
	   	<?	foreach ($design_options as $design){ ?>
	     	<li class="graphicControls" data-graphic="<?=$design["title"]?>"><img src="images/shirtbuilder/graphicthumbs/<?=$design["thumb"]?>" alt="<?=$design["title"]?>" /></li>
	    <?	} ?>
	  </ul>
  </div><!--.flex-container-->  
  <div class="flex-container smallBox" id="swatchContainer">
  	<h2 class="step2">2. Pick Your Shirt Color</h2>
    <ul>
  	 	<?	foreach ($shirt_color_options as $color){ ?>
  	 		<li class="colorControls" data-color="<?=$color?>"><img src="images/shirtbuilder/swatches/<?=$color?>.png" alt="<?=$color?>" /></li>
            <?	} ?>
    </ul>
  </div><!--.flex-container-->
  <div id="size" class="smallBox">
  	<h2>3. Pick Your Size</h2>
  	<ul class="size-selector clearfix">
			<li class="size-selector-size size-selector-size-selected" data-size="Small">S</li>
			<li class="size-selector-size" data-size="Medium">M</li>
			<li class="size-selector-size" data-size="Large">L</li>
			<li class="size-selector-size" data-size="X-Large">XL</li>
			<li class="size-selector-size" data-size="XX-Large">XXL</li>
		</ul>
  </div><!--#size-->
  <div id="checkout" class="smallBox">
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
			<div class="addToCartWrap">
			<input type="image" src="images/addToCart.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" onclick="_gaq.push(['_trackEvent', 'Add to Cart', 'Custom Graphic', 'Details to Be Added');">
			</div>
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>

  </div><!--#checkout-->
  <p style="color:gray;">Graphic size/placement are approximate. Please reference the <a target="_blank" href="stz.php?line=stz">products page</a> for examples. Please allow 2-3 days for production.</p>
</div><!--#pageWrapper-->



<? 
	include 'inc.social.php'; 
	include 'inc.footer.php';
?>