<?
	$line = $_GET['line'];
	$title = $line . " from STZ | Custom Tees and Hoodies";
	include 'inc.header.html.php';

?>
<script>
$(function(){

  $('.nav-catalog-section a').click(function(e){
    e.preventDefault();

    target = $(this).attr('href');

    $(target).goTo();

  });

});

(function($) {
  $.fn.goTo = function() {
    $('html, body').animate({
        scrollTop: $(this).offset().top  + 'px'
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

	$numProducts = count($inventory);

	if ($_GET["line"] === "new") {
		$new = true;
	} else {
		$new = false;
	}
?>

  <div class="navbar subnav subnav-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <ul class="nav-catalog-section">
          <li><a href="#graphic-tees">Graphic Tees</a></li>
          <li><a href="#pocket-tees">Pocket Tees</a></li>
          <li><a href="#tanks">Tanks</a></li>
          <li><a href="#baseball-tees">Baseball Tees</a></li>
          <li><a href="#crewneck">Crewneck</a></li>
          <li><a href="#zip-up">Hoodies</a></li>
					<li><a href="#wmns">Ladies</a></li>
          <li><a href="#hats">Hats</a></li>
          <li><a href="#backpacks">Bags & Accessories</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top: 60px;">
    <? display_items("Graphic Tees", "graphic-tees", $inventory, $new);  ?>

    <? display_items("Pocket Tees", "pocket-tees", $inventory, $new);  ?>

    <? display_items("Tanks", "tanks", $inventory, $new);  ?>

    <? display_items("Baseball Tees", "baseball-tees", $inventory, $new);  ?>

    <? display_items("Crewneck", "crewneck", $inventory, $new);  ?>

    <? display_items("Hoodies", "zip-up", $inventory, $new);  ?>

		<? display_items("Ladies", "wmns", $inventory, $new);  ?>

    <? display_items("Hats", "hats", $inventory, $new);  ?>

		<? display_items("Beanies", "beanies", $inventory, $new);  ?>

    <? display_items("Bags", "backpacks", $inventory, $new);  ?>

		<? display_items("Accessories", "accessories", $inventory, $new);  ?>
  </div>

	<script>
    $("img.lazy").show().lazyload({
      effect: 'fadeIn'
    });
  </script>
<?
	include 'inc.footer.php';
?>
