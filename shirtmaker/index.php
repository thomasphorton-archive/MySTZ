<!DOCTYPE html>
<html>
   <head>
      <title>STZ Shirt Maker Prototype</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" type="text/css" href="../css/frontendstyle.css" />
      <link rel="stylesheet" type="text/css" href="../css/shirtmaker.css" />
      <link rel="stylesheet" href="../flexslider/flexslider.css" type="text/css" />
       <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
       <script src="jquery.js"></script>
      <script src="../flexslider/jquery.flexslider.js"></script>  
      <script type="text/javascript">
         $(document).ready(function() {
         
         	collapseSwitch = $('.collapseSwitch')
         	collapseSwitch.click(function(){
	         	$(this).next().slideToggle();
         	})
         
           $('.flexslider').flexslider({
              animation: "slide",
              direction: "vertical",
              slideshow: false,
              manualControls: ".colorControls",
              controlsContainer: ".flex-container"
           });
           
           $('.flexslider1').flexslider({
              animation: "slide",
              direction: "horizontal",
              slideshow: false,
              manualControls: ".designControls",
              controlsContainer: ".flex-container"
           });
         });
      </script>
   </head>
   <?
      $shirt_color_options = array(
       	"Black",
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
      );
      
      $design_options = array(
       	"beastmode.black",
       	"dapsnpounds.black",
       	"doublestzburger.black",
       	"elcaputo.black",
       	"emergencymoustache.black",
       	"engarde.black",
       	"gorillaboombox.black",
       	"homegrown.black",
       	"iskatenc.black",
       	"moostache.black",
       	"partyanimals.black",
       	"patch.black",
       	"peace.black",
       	"ridenc.black",
       	"rightcoast.black",
       	"shootallshred.black",
       	"shredtilyouredead.black",
       	"triangles.black",
       	"wakeskatesurfsnow.black",
       	"wecandoit.black",	
      );
       ?>
   <body class="clearfix">
      <div id="wrapper" class="clearfix">
         <div id="shirtMaker">
            <div class="slider">
               <div class="flexslider">
                  <ul class="slides">
                     <?	foreach ($shirt_color_options as $color){	?>
                     <li><img src="blanks/<?=$color?>.jpg" alt="<?=$color?>" /></li>
                     <?	} ?>
                  </ul>
               </div>
               <!--.flexslider-->
            </div>
            <!--.slider-->
            <div class="slider">
               <div class="flexslider1">
                  <ul class="slides">
                     <?	foreach ($design_options as $design){	?>
                     <li><img src="graphics/<?=$design?>.png" alt="<?=$design?>" /></li>
                     <?	} ?>
                  </ul>
               </div>
               <!--.flexslider1-->
            </div>
            <!--.slider-->
         </div>
         <!--#shirtMaker-->
         
         <div class="flex-container" id="designContainer">
	         <h2 class="collapseSwitch">1. Pick a Design (Click to Hide)</h2>
	         <ul id="designThumb">
	           <?	foreach ($design_options as $design){ ?>
	           <li class="designControls"><img src="graphics/<?=$design?>.png" alt="<?=$design?>" /></li>
	           <?	} ?>
	         </ul>
         </div>
         <!--.flex-container-->
         
         <div class="flex-container" id="swatchContainer">
         	<h2 class="collapseSwitch">2. Pick a Color (Click to Hide)</h2>
          <ul>
          	<?	foreach ($shirt_color_options as $color){ ?>
            <li class="colorControls"><img src="swatches/<?=$color?>.png" alt="<?=$color?>" /><h4><?=$color?></h4></li>
            <?	} ?>
          </ul>
          </div>
         <!--.flex-container-->
         
      </div>
   </body>
