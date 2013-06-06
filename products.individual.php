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
?>

<div class="container">
	<div class="row">
		<div class="span12">
			<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <a href="products.line.php?line=<?=$product["line"]?>"><?=$product["line"]?></a> > <?=$product["title"]?></span>
		</div>
	</div>
	<div class="row">
	  <div class="span9" style="position: relative;">
		<img src="images/<?= $product["big_image"]?>" class="productBigImage">
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

		<? if ($product["title"] == "Custom Hoodie")
		{
			echo "<p>We're working on our custom hoodie builder, until it's finished please <a href='mailto:info@mystz.com'>email us</a> with any questions or custom orders.</p>

			<p>Please allow an additional 5-7 days for production.</p>

			<ul>
				<li>Made in America</li>
				<li>Hand-cut and assembled</li>
				<li>34\" Length (Shoulder seam to bottom of waist)</li>
				<li>iPod pocket</li>
				<li>Thumb holes</li>
				<li>Reinforced seams</li>
				<li>Shoelace drawstring waistband</li>
			</ul>

			<p>Custom options:<br />
			<u>Body Color</u>: Red / Navy / Black / Ash / Burgundy<br />
			<u>Sleeves:</u> Red / Navy / Black / Ash / Burgundy / Purple<br />
			<u>Hood:</u> Red / Navy / Black / Ash / Burgundy / Purple<br />
			<u>Pocket:</u> Red / Navy / Black / Ash / Burgundy / Purple / Mint / Pastel Yellow / Heather Charcoal / Royal Blue<br />
			<u>Cuffs:</u> Black / Charcoal / Royal Blue<br />
			<u>Laces:</u> Red / Navy / Black / Ash / Burgundy / Purple / Mint / Pastel Yellow / Heather Charcoal / Royal Blue
			</p>

			";
		}
		else{
		?>
			<p class="product-description-large item_description"><?=$product["description"]?></p>

			<?
				if ($product["line"]!= "hats"){
					include 'inc.select-size.php';
				}
			?>
			<p class="product-description-small"><?=$product["small_description"]?></p>
			<a href="javascript:;" class="item_add btn <? if ($product["soldout"]) echo 'disabled'; ?>" >Add to Cart</a>
	<? } ?>

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