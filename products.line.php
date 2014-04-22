<?
	$line = $_GET['line'];
	$title = $line . " from STZ | Custom Tees and Hoodies";
	include 'inc.header.html.php';

?>
<script type="text/javascript">
$(function(){
  $('#nav').localScroll(800);

  $('.subnav').waypoint(function(direction){

    var $this = $(this);
		console.log($this);
    if (direction === "up") {
      $this.removeClass('subnav-fixed-top');
    } else if(direction === "down") {
      $this.addClass('subnav-fixed-top');
    }

  }, {offset: 60});

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

<?

	include 'inventory.php';
	include 'functions.php';
	include 'inc.header.php';
?>

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

	<script>
    $("img.lazy").show().lazyload({
      effect: 'fadeIn'
    });
  </script>
<?
	include 'inc.footer.php';
?>
