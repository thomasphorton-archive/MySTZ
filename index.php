
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test</title>
<? include 'inventory.php'; ?>
<? include 'functions.php'; ?>
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/css/style.css" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.localscroll-1.2.7-min.js"></script>
<script src="js/jquery.scrollTo-1.4.2-min.js"></script>
<script src="js/lazyload.min.js"></script>
<script src="libraries/simplecart/simpleCart.js"></script>
<script src="js/cart.js"></script>
<script src="js/tracking.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31771252-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
$(document).ready(function(){
  $('#nav').localScroll(800);
  
  //.parallax(xPosition, speedFactor, outerHeight) options:
  //xPosition - Horizontal position of the element
  //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
  //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
  $('#intro').parallax("50%", 0.05);
  $('#second').parallax("50%", 0.2);
  $('#third').parallax("50%", 0.1);
  $('#fourth').parallax("50%", 0.05);
  $('#fifth').parallax("50%", 0.2);
  $('#sixth').parallax("50%", 0.1);
  $('#seventh').parallax("50%", 0.05);
  $('#eigth').parallax("50%", 0.02);
  $('#ninth').parallax("50%", 0.02);

  $('.subnav').waypoint(function(direction){

    var $this = $(this);

    if (direction === "up") {
      $this.removeClass('subnav-fixed-top');
    } else if(direction === "down") {
      $this.addClass('subnav-fixed-top');
    }

  }, {offset: 60});

  var product = $('.product-image, .product-inner');

  product.click(function(e){

    e.preventDefault();

    $this = $(this);

    parent = $this.closest('.product');

    if (parent.hasClass("is-active")) {
      parent.removeClass("span12").removeClass("is-active").addClass("span3");
    } else {
      product.closest('.product').not($this).removeClass("span12").removeClass("is-active").addClass("span3");
      parent.removeClass("span3").addClass("span12").addClass("is-active").goTo();

    }

    
  });

  $("img.lazy").show().lazyload({
    effect: 'fadeIn'
  });

  $('.nav-catalog-section a').click(function(e){
    e.preventDefault();

    target = $(this).attr('href');

    $(target).goTo();

  });

});

(function($) {
  $.fn.goTo = function() {
    $('html, body').animate({
        scrollTop: $(this).offset().top - 120 + 'px'
    }, 'slow');
    return this; // for chaining...
  }
})(jQuery);

</script>

</head>

<body>

  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="brand" href="./"><img src="/images/smallstzlogo.png"></a>
        <div id="main-menu">
            <ul class="nav pull-right" id="main-menu-right">
              <li><a href="/shirtbuilder.select.php">shirtbuilder</a></li>
              <li><a href="/products.php">shop</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">cart <span class="simpleCart_quantity"></span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="cart-details">
                    <div class="cart-panel">
                      <h4>items in your cart <span class="simpleCart_quantity"></span></h4>
                      <div class="simpleCart_items clearfix"></div>
                      <a href="/checkout.php" class="btn">checkout</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
      </div>
    </div>
  </div>
  
  <div id="intro">
    <div class="container">
      <div class="row row-hero">
        <div class="column span6">
          <div class="white-box">
            <img src="/images/shirtbuilder/select/select.graphic.png" alt="">
          </div>
        </div>

        <div class="column span6">
          <div class="white-box">
            <img src="/images/shirtbuilder/select/select.pocket.png" alt="">
          </div>
        </div>
      </div>
    </div> <!--.container-->
  </div> <!--#intro-->
  
  <div class="navbar subnav">
    <div class="navbar-inner">
      <div class="container">
        <ul class="nav-catalog-section">
          <li><a href="#graphic">Graphic Tees</a></li>
          <li><a href="#pocket">Pocket Tees</a></li>
          <li><a href="#tanks">Tanks</a></li>
          <li><a href="#baseball">Baseball Shirts</a></li>
          <li><a href="#sweater">Sweaters</a></li>
          <li><a href="#hoodie">Hoodies</a></li>
          <li><a href="#hats">Hats</a></li>
          <li><a href="#backpacks">Bags & Accessories</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div id="second">
    <div class="container">
      <? display_items("Graphic Tees", "graphic", $inventory);  ?>
    </div> <!--.container-->
  </div> <!--#second-->
  
  <div id="third">
    <div class="container">
      <? display_items("Pocket Tees", "pocket", $inventory);  ?>
    </div>
  </div> <!--#third-->

  <div id="fourth">
    <div class="container">
      <? display_items("Tanks", "tanks", $inventory);  ?>
    </div>
  </div> <!--#third-->
  
  <div id="fifth">
    <div class="container">
      <? display_items("Baseball Shirts", "baseball", $inventory);  ?>
    </div>
  </div> <!--#fifth-->

  <div id="sixth">
    <div class="container">
      <? display_items("Sweaters", "sweater", $inventory);  ?>
    </div>
  </div> <!--#fifth-->

  <div id="seventh">
    <div class="container">
      <? display_items("Hoodies", "hoodie", $inventory);  ?>
    </div>
  </div> <!--#fifth-->

  <div id="eigth">
    <div class="container">
      <? display_items("Hats", "hats", $inventory);  ?>
    </div>
  </div> <!--#fifth-->

  <div id="ninth">
    <div class="container">
      <? display_items("Bags & Accessories", "backpacks", $inventory);  ?>
    </div>
  </div> <!--#fifth-->

</body>

</html>
