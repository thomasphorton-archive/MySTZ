<?
	$title = "Pocket Tee Builder | MySTZ.com | Build Your Own T-Shirt";
	include 'inc.header.html.php';
	include 'inc.header.php'; 
?>
<link rel="stylesheet" type="text/css" href="css/shirtmaker.css" />
<link rel="stylesheet" href="libraries/flexslider/flexslider.css" type="text/css" />
<script src="libraries/flexslider/jquery.flexslider.js"></script>  
<script type="text/javascript">
	$(document).ready(function() {
       
     var color = "Heather Grey";
     var graphic = "Flamingo";  
       
     var customString = color + ' ' + graphic;  
     customDetail = $('#customDetail');  
     customDetail.val(customString);
       
     graphicControl = $('.graphicControls');
     graphicControl.click(function(){
	    //console.log($(this).data('graphic'));
	    graphic = $(this).data('graphic');
	    customString = 'Shirt Color: ' + color + ' ' + 'Pocket: ' + graphic;
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
           
    $('#pocketOptions').flexslider({
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
      
      $pocket_options = array(
      	"Flamingo" => array(
       		"title" => "Flamingo",
       		"full_size" => "flamingo.png",
       		"thumb" => "flamingo.thumb.jpg"
       	),
       	"Grapefruit" => array(
       		"title" => "Grapefruit",
       		"full_size" => "gfruit.png",
       		"thumb" => "grapefruit.thumb.jpg"
       	),
       	"Jazzercize" => array(
       		"title" => "Jazzercise",
       		"full_size" => "jazzercise.png",
       		"thumb" => "jazzercize.thumb.jpg"
       	),
       	"'Merica" => array(
       		"title" => "'Merica",
       		"full_size" => "merica.png",
       		"thumb" => "merica.thumb.jpg"
       	),
       	"Mint" => array(
       		"title" => "Mint",
       		"full_size" => "mint.png",
       		"thumb" => "mint.thumb.png"
       	),
       	"Nerd" => array(
       		"title" => "Nerd",
       		"full_size" => "nerd.png",
       		"thumb" => "nerd.thumb.jpg"
       	),
       	"Polar Bear" => array(
       		"title" => "Polar Bear",
       		"full_size" => "polarbear.png",
       		"thumb" => "polarbear.thumb.jpg"
       	),/*
       	"Purp" => array(
       		"title" => "Purp",
       		"full_size" => "purp.png",
       		"thumb" => "purp.thumb.jpg"
       	),*/
       	"Tie Dye" => array(
       		"title" => "Tie Dye",
       		"full_size" => "tiedye.png",
       		"thumb" => "tiedye.thumb.jpg"
       	)
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
    	<div id="pocketOptions" class="flexslider graphicslide">
      	<ul class="slides">
        	<?	foreach ($pocket_options as $design){	?>
            <li><img src="images/shirtbuilder/pockets/<?=$design["full_size"]?>" alt="<?=$design["title"]?>" /></li>
          <?	} ?>
        </ul>
      </div><!--.flexslider1-->
    </div><!--.slider-->
  </div><!--#shirtMaker--> 
  <div class="flex-container" id="designContainer">
		<h2 class="step1">1. Pick Your Pocket</h2>
	  <ul id="designThumb">
	   	<?	foreach ($pocket_options as $design){ ?>
	     	<li class="graphicControls" data-graphic="<?=$design["title"]?>"><img src="images/shirtbuilder/pocketthumbs/<?=$design["thumb"]?>" alt="<?=$design["title"]?>" title="<?=$design["title"]?>" /></li>
	    <?	} ?>
	  </ul>
  </div><!--.flex-container-->  
  <div class="flex-container smallBox" id="swatchContainer">
  	<h2 class="step2">2. Pick Your Shirt Color</h2>
    <ul>
  	 	<?	foreach ($shirt_color_options as $color){ ?>
  	 		<li class="colorControls" data-color="<?=$color["title"]?>"><img src="images/shirtbuilder/swatches/<?=$color["thumb"]?>" alt="<?=$color["title"]?>" title="<?=$color["title"]?>"/></li>
            <?	} ?>
    </ul>
  </div><!--.flex-container-->
  <div id="size" class="smallBox">
  	<h2>3. Pick Your Size</h2>
  	<ul class="size-selector">
			<li class="size-selector-size size-selector-size-selected" data-size="Small">S</li>
			<li class="size-selector-size" data-size="Medium">M</li>
			<li class="size-selector-size" data-size="Large">L</li>
			<li class="size-selector-size" data-size="X-Large">XL</li>
			<li class="size-selector-size" data-size="XX-Large">XXL</li>
		</ul>
  </div><!--#size-->
  <div id="checkout" class="smallBox">
  <h2>4. Order It!</h2>
  <h3 style="color:white; text-align:center;">$35</h3>
  	<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="YCJUNADS97ZW6">
			<table>
			<tr><td><input type="hidden" name="on0" value="Sizes"></td></tr><tr><td><select id="paypalSizes" name="os0" style="display:none;">
				<option value="Small">Small $35.00 USD</option>
				<option value="Medium">Medium $35.00 USD</option>
				<option value="Large">Large $35.00 USD</option>
				<option value="X-Large">X-Large $35.00 USD</option>
				<option value="XX-Large">XX-Large $35.00 USD</option>
			</select> </td></tr>
			<tr><td><input type="hidden" name="on1" value="Shirt Details"></td></tr><tr><td><input type="text" id="customDetail" name="os1" maxlength="200" style="display:none;"></td></tr>
			</table>
			<input type="hidden" name="currency_code" value="USD">
			<div class="addToCartWrap">
			<input type="image" src="images/addToCart.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" onclick="_gaq.push(['_trackEvent', 'Add to Cart', 'Custom Pocket', 'Details to Be Added');">
			</div>
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>

  </div><!--#checkout-->
  <p style="color:gray;">Pocket size/placement are approximate. Please reference the <a target="_blank" href="stz.php?line=pocket">products page</a> for examples. Please allow an additional 5-7 days for production.</p>
</div><!--.page-wrapper-->

<? 
	include 'inc.social.php'; 
	include 'inc.footer.php';
?>