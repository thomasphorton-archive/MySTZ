<?
	include 'inventory.php';
	$id = $_GET['id'];
	$numProducts = count($inventory);
	for($i=0;$i<$numProducts;$i++){
		if ($inventory[$i]["id"] == $id){
			$product = $inventory[$i];
		}
	}
	$title = $product["title"] . ' | STZ | Custom Tees and Outerwear';
	include 'inc.header.html.php';
	include 'inc.header.php';

	if (count($product["options"]) >= 2) {

		$colorway_select = "<select class='colorway-select' id='colorway-select'>";

		foreach($product["options"] as $colorway) {

			$colorway_option = strtolower($colorway["shirt"] . "/" . $colorway["graphic"]);

			$colorway_select .= "<option value='" . $colorway_option . "'>" . $colorway_option . "</option>";

		}

		$colorway_select .= "</select>";

	}

?>

<script>
	
	$(function(){

		var colorwaySelect = $('.colorway-select');

		colorwaySelect.change(function(){

			var colorway = $(this).val();

			$('.item_description').text(colorway)

		});

	});

</script>

<div class="container">
	<div class="row">
		<div class="span12">
			<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <a href="products.line.php?line=<?=$product["line"]?>"><?=$product["line"]?></a> > <?=$product["title"]?></span>
		</div>
	</div>
	<div class="row">
	  <div class="span9" style="position: relative;">
		<img src="/images/<?= $product["images"]["main"][0]?>" class="productBigImage">
	  <? if ($product["message"]) { ?>
    <span class="productMessage"><?= $product["message"]?></span>
  	<? } ?>
	  </div>
		<div class="span3">
		<div class="product-data simpleCart_shelfItem">

			<span class="item_number hidden"><?=$product["id"]?></span>
			<h1 class="product-title item_name"><?=$product["title"]?></h1>
			<h2 class="product-price">
				<span class="item_price">$<?=$product["basePrice"]?></span>
				<span class="discount">Now:
					<span class="discounted_price"></span>
				</span>
			</h2>

			<? if ($colorway_select) { ?>

			<label for="colorway-select">Color:</label>

			<? echo $colorway_select; ?>

			<? } ?>

			<p class="item_description hidden"></p>
			<?
			
					include 'inc.select-size.php';
			
			?>
			<p class="product-description-small"><?=$product["description"]?></p>
			<a href="javascript:;" class="item_add btn <? if ($product["soldout"]) echo 'disabled'; ?>" >Add to Cart</a>


		</div>
	</div><!--.productData-->
</div><!--.row-->
<div class="row">

		<h2 class="span12">You also might like:</h2>
			<?
				$dontShow = array((int) $product["id"], 99999, 99998, 1111, 1112, 1113, 1114);

				$length = count($inventory) -1;
				$i = 0;
				while ($i < 4){
					$randInv = (int) rand(0,$length);

					if (!in_array($inventory[$randInv]["id"], $dontShow)){
						$dontShow[] = (int) $inventory[$randInv]["id"];
						if(isset($inventory[$randInv])){
						?>

						<a href="products.individual.php?id=<?=$inventory[$randInv]["id"]?>" onclick="_gaq.push(['_trackEvent', 'View Product', 'More Products', '<?= $inventory[$randInv]["title"];?>']);" class="span3 randThumbAnchor">
							<img src="images/<?=$inventory[$randInv]["product_image"]?>" class="randThumb">
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
		<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <a href="products.line.php?line=<?=$product["line"]?>"><?=$product["line"]?></a> > <?=$product["title"]?></span>
	</div>
</div>
</div><!--.container-->
<?
	include 'inc.social.php';
	include 'inc.footer.php';
?>