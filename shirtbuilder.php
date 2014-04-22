<?
include ('shirtbuilder/shirtbuilder.graphics.php');
include ('shirtbuilder/shirtbuilder.tees.php');

$item_name = 'Custom Graphic Tee';
$item_number = '911';
$item_price = '$22';
$production_time = '3-5 days';

$title = "STZ Shirtbuilder | Custom Graphics and Pocket Tees | MySTZ";
include 'inc.header.html.php';

?>

<link rel="stylesheet" type="text/css" href="/css/libs/flexslider/flexslider.css" />
<link rel="stylesheet" type="text/css" href="/css/shirtmaker.css" />

<script>

"use strict";

var item = urlParams.item || "tee",
    style = urlParams.style || "graphic",
    colorNormalized,
    designNormalized;

$(function() {

  var color,
    $color_control = $('.colorControls'),
    num_colors = $color_control.length,
    colorStart,
    design,
    designStart,
    $design_control = $('.designControls'),
    num_designs = $design_control.length,
    $custom_detail = $('#customDetail'),
    $randomize = $('.shirtmaker-randomize');

  if (urlParams.design) {
    design = urlParams.design;
    designStart = $('#designContainer')
    .find("[data-design-normalized='" + design + "']")
    .index();
  } else {
    design = $('.designControls:eq(0)').data('design');
    designStart = 0;
  }

  if (urlParams.color) {
    color = urlParams.color;
    colorStart = $('#swatchContainer')
    .find("[data-color-normalized='" + color + "']")
    .index();
  } else {
    color = $('.colorControls:eq(0)').data('color');
    colorStart = 0;
  }

  updateShirtString(color, item, design, style);

  $design_control.click(function() {
    var $this = $(this);
    design = $this.data('design');
    designNormalized = $this.data('design-normalized');
    updateShirtString(color, item, design, style);
  });

  $color_control.click(function() {
    var $this = $(this);
    color = $this.data('color');
    colorNormalized = $this.data('color-normalized');
    updateShirtString(color, item, design, style);
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

  var designSlider = $('.designslide').data('flexslider'),
    colorSlider = $('.itemslide').data('flexslider');

  $randomize.click(function() {

    var rand_design = Math.ceil(Math.random() * num_designs),
      rand_color = Math.ceil(Math.random() * num_colors);

    designSlider.flexAnimate(rand_design - 1);
    colorSlider.flexAnimate(rand_color - 1);

    design = $design_control
      .filter(':nth-child(' + rand_design + ')')
      .data('design');
    designNormalized = $design_control
      .filter(':nth-child(' + rand_design + ')')
      .data('design-normalized');

    color = $color_control
      .filter(':nth-child(' + rand_color + ')')
      .data('color');
    colorNormalized = $color_control
      .filter(':nth-child(' + rand_color + ')')
      .data('color-normalized');

    updateShirtString(color, item, design, style);

  });

  function updateShirtString(color, item, design, style) {

    var customString = [
      color,
      item +', ',
      design,
      style
    ].join(" ").toLowerCase();

    var customURL = [
      "/shirtbuilder.php",
      "?color=" + colorNormalized,
      "&item=" + item,
      "&design=" + designNormalized,
      "&style=" + style
    ].join("");

    $custom_detail.val(customString);

  }

});

</script>

</head>

<body>

  <?  include 'inc.header.php';  ?>

  <div class="container">
    <div class="row">
      <div class="shirtMaker simpleCart_shelfItem span12">
        <div class="row">
          <div id="shirtViewer" class="span4 fixed">
            <span class="shirtmaker-randomize">randomize</span> <span class="shirtmaker-share">share</span>
            <div class="slider">
              <div id="colorOptions" class="flexslider itemslide" >
                <ul class="slides">
                  <?  foreach ($item_color as $option){  ?>
                    <li><img src="<?=$option["shirt"]?>" alt="<?=$option["title"]?>" class=" lazy"/></li>
                    <?  } ?>
                  </ul>
                </div><!--.flexslider-->
              </div><!--.slider-->
              <div class="slider">
                <div id="designOptions" class="flexslider designslide">
                  <ul class="slides">
                    <?  foreach ($design_options as $design){  ?>
                      <li><img src="<?=$design["full_size"]?>" alt="<?=$design["title"]?>" class=" lazy" /></li>
                      <?  } ?>
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
                        <?  foreach ($design_options as $design){ ?>
                          <div class="designControls span1" data-design="<?=$design["title"]?>" data-design-normalized="<?=$design["normalized"]?>"><img src="<?=$design["thumb"]?>" alt="<?=$design["title"]?>" /></div>
                          <?  } ?>
                        </div>
                      </div>
                    </div>
                  </div><!--.flex-container-->
                  <div class="flex-container shirtmaker-step row" id="swatchContainer">
                    <h2 class="step2">2. Pick Your Shirt Color</h2>
                    <div class="color-options-container row">
                      <div class="span7 well">
                        <div class="row">
                          <?  foreach ($item_color as $option){ ?>
                            <div class="colorControls span1" data-color="<?=$option["title"]?>" data-color-normalized="<?=$option["normalized"] ?>"><img src="<?=$option["thumb"]?>" alt="<?=$option["title"]?>" /></div>
                            <?  } ?>
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

          <?
          include 'inc.footer.php';
          ?>
