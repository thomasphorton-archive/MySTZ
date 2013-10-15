<?
	$line = $_GET['line'];
	$title = $line . " from STZ | Custom Tees and Hoodies";
	include 'inc.header.html.php';
	include 'inc.header.php';
	include 'inventory.php';
	include 'functions.php';


	switch ($line) {

		case "graphic-tees":

			$line_name = "graphic tees";

			break;

		case "pocket-tees":

			$line_name = "pocket tees";

			break;

		case "outer":

			$line_name = "outerwear";

			break;

		case "hats":

			$line_name = "headwear";

			break;

		case "tanks":

			$line_name = "tanks";

			break;

		case "ladies":

			$line_name = "ladies";

			break;

		case "accessories";

			$line_name = "bags & accessories";

			break;

		default:

			$line_name = "all products";

	}

	if (isset($_GET['shirtcolor'])){
		$shirt_color = $_GET['shirtcolor'];
		$numProducts = count($inventory);
		for($i=0;$i<$numProducts;$i++){
			if ($inventory[$i]['shirt_color'] != $shirt_color){
				unset($inventory[$i]);
			}
		}
	}
?>

	<div class="container">
	  <div class="row">
	    <div class="span12">
	      <span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <?=$line?></span>
	    </div>
	  </div>

<?

	

	switch ($line) {

		case "graphic-tees":

			display_items("graphic tees", "graphic-tees", $inventory);

			break;

		case "pocket-tees":

			display_items("pocket tees", "pocket-tees", $inventory);

			break;

		case "outer":

			echo "<h1>$line_name</h1>";

			display_items("baseball tees", "baseball-tees", $inventory);

			display_items("crew neck sweaters", "crewneck", $inventory);

			display_items("zip-up hoodies", "zip-up", $inventory);

			break;

		case "hats":

			echo "<h1>$line_name</h1>";

			display_items("hats", "hats", $inventory);

			display_items("beanies", "beanies", $inventory);

			break;

		case "tanks":

			display_items("tanks", "tanks", $inventory);

			break;

		case "ladies":

			display_items("ladies", "wmns", $inventory);

			break;

		case "accessories":

			display_items("backpacks", "backpacks", $inventory);

			break;

		default:

			echo "<h1>$line_name</h1>";

			display_items("graphic tees", "graphic-tees", $inventory);

			display_items("pocket tees", "pocket-tees", $inventory);

			display_items("baseball tees", "baseball", $inventory);

			display_items("crew neck sweaters", "sweater", $inventory);

			display_items("zip-up hoodies", "hoodie", $inventory);

			display_items("hats", "hats", $inventory);

			display_items("tanks", "tanks", $inventory);

			display_items("ladies", "wmns", $inventory);

	}

?>

	<? if ($line == "ladies"){ ?>
	  <div class="row">
	    <div class="span12">
			  <p>All graphics are available on women's styles. <a href="about.php">Contact us</a> for details.</p>
	    </div>
	  </div>
	<? } ?>

	  <div class="row">
	    <div class="span12">
	      <span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <?=$line?></span>
	    </div>
	  </div>
	</div><!--.container-->

	<script>
    $("img.lazy").show().lazyload({
      effect: 'fadeIn'
    });
  </script>
<?
	include 'inc.footer.php';
?>