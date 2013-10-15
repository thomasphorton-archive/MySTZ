<?
	include 'inventory.php';
	$id = $_GET['id'];
	$numProducts = count($inventory);
	for($i=0;$i<$numProducts;$i++){
		if ($inventory[$i]["id"] == $id){
			$product = $inventory[$i];
			$line = $inventory[$i]["line"];
		}
	}
	$title = $product["title"] . ' | STZ | Custom Tees and Outerwear';
	include 'inc.header.html.php';
	include 'inc.header.php';

	switch ($line) {

		case "graphic-tees":

			$cat_name = "graphic-tees";

			break;

		case "pocket-tees":

			$cat_name = "pocket-tees";

			break;

		case "outer":

			$cat_name = "outer";

			break;

		case "baseball-tees":

			$cat_name = "outer";

			break;

		case "crewneck":

			$cat_name = "outer";

			break;

		case "zip-up":

			$cat_name = "outer";

			break;


		case "hats":

			$cat_name = "hats";

			break;

		case "beanies":

			$cat_name = "hats";

			break;

		case "tanks":

			$cat_name = "tanks";

			break;

		case "wmns":

			$cat_name = "ladies";

			break;

		case "accessories";

			$cat_name = "bags & accessories";

			break;

		default:

			$cat_name = "all";

	}
?>

<div class="container">
	<div class="row">
		<div class="span12">
			<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <a href="products.line.php?line=<?=$cat_name?>"><?=$product["line"]?></a> > <?=$product["title"]?></span>
		</div>
	</div>
	<div class="row">
	  <div class="span9" style="position: relative;">
		<img src="images/catalog/<?= $product["line"]?>/main/<?= $product["images"]["main"][0]?>" class="productBigImage">
	  <? if ($product["message"]) { ?>
    <span class="productMessage"><?= $product["message"]?></span>
  	<? } ?>
	  </div>
		<div class="span3">
		<div class="product-data simpleCart_shelfItem">

			<span class="item_number" style="display:none;"><?=$product["id"]?></span>
			<h1 class="product-title item_name"><?=$product["title"]?></h1>
			<h2 class="product-price">
				<span class="item_price">$<?=$product["basePrice"]?></span>
				<span class="discount">Now:
					<span class="discounted_price"></span>
				</span>
			</h2>

			<p class="product-description-large item_description"><?=$product["description"]?></p>

			<?
				if ($product["line"]!= "hats"){
					include 'inc.select-size.php';
				}
			?>
			<p class="product-description-small"><?=$product["small_description"]?></p>
			<a href="javascript:;" class="item_add btn <? if ($product["soldout"]) echo 'disabled'; ?>" >Add to Cart</a>

			<? if ($product["line"] == "stz" || $product["line"] =="pocket") {

				$color = $product["color_normalized"];

				$item = "tee";

				switch ($product["line"]) {
					case "stz":
						$style = "style";
						break;
					case "pocket":
						$style = "pocket";
						break;
				}

					$design = $product["design_normalized"];

					$custom_url = "/shirtbuilder.php?item=" . $item . "&design=" . $design . "&style=" . $style . "&color=" . $color;
			?>
				<a href="<?=$custom_url?>">Want to make it unique? Load it in the customizer</a>
			<?
				}
			?>
		</div>
	</div><!--.productData-->
</div><!--.row-->
<div class="row">

	<h2 class="span12">You also might like:</h2>
		<?
			$dontShow = array((int) $product["id"], 901, 902, 911);

			$length = count($inventory) -1;
			$i = 0;
			while ($i < 4){
				$randInv = (int) rand(0,$length);

				if (!in_array($inventory[$randInv]["id"], $dontShow)){
					$dontShow[] = (int) $inventory[$randInv]["id"];
					if(isset($inventory[$randInv])){
					?>

					<a href="products.individual.php?id=<?=$inventory[$randInv]["id"]?>" onclick="_gaq.push(['_trackEvent', 'View Product', 'More Products', '<?= $inventory[$randInv]["title"];?>']);" class="span3 randThumbAnchor">
						<img src="/images/catalog/<?=$inventory[$randInv]["line"]?>/thumbs/<?=$inventory[$randInv]["images"]["thumb"]?>" class="randThumb">
							<span class="productDesc"><?= $inventory[$randInv]["title"] ?></span>
					</a>
					<?
					$i++;
					}
				}
			}
		?>

</div>
<div class="row">
	<div class="span12">
		<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <a href="products.line.php?line=<?=$cat_name?>"><?=$product["line"]?></a> > <?=$product["title"]?></span>
	</div>
</div>
</div><!--.container-->
<?
	include 'inc.footer.php';
?>