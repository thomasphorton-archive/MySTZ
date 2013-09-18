<?
  $type = $_GET["type"];
  switch ($type) {
    case "tank":
      $product_title = "mystery tank";
      $product_big_image = "images/mystery/tank.main.jpg";
      $product_id = "7001";
      $product_basePrice = 12;
      $product_description = "Not eligible for discounts.";
      $product_small_description = "Who doesn't love a good mystery? Here's how it works... Choose whether you want a unisex or women's fit and pick your size. You will get one of the tank styles featured in our product line. If you've already ordered one and want to scoop another, just leave a comment during checkout telling us what you have and we will try to send a different graphic.";
      $product_soldout = false;
      break;
    default:
      $product_title = "mystery tee";
      $product_big_image = "images/mystery/tee.main.jpg";
      $product_id = "7000";
      $product_basePrice = 12;
      $product_description = "Not eligible for discounts.";
      $product_small_description = "Who doesn't love a good mystery? Twelve bucks gets you one of the graphics featured in our product line and/or custom shirt builder. If you've already ordered one and want to scoop another, just leave a comment during checkout telling us what you have and we will try to send a different graphic.";
      $product_soldout = false;
  }

	$title = $product_title . ' | STZ | Custom Tees and Outerwear';
	include 'inc.header.html.php';
	include 'inc.header.php';
?>
<? if ($product_title == "mystery tank") { ?>
<script>
	$(function(){
		var productFitSelect = $('#product-fit'),
        mysteryFit = $('.mysteryFit');
		setDescription();

		productFitSelect.change(function(){
			setDescription();
		});

		function setDescription(){
			var mysteryDesc = productFitSelect.val().toLowerCase();
			mysteryFit.text(mysteryDesc);
		}
	});
</script>
<? } ?>

<div class="container">
	<div class="row">
		<div class="span12">
			<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <?=$product_title?></span>
		</div>
	</div>
	<div class="row">
	  <div class="span9" style="position: relative;">
		<img src="<?= $product_big_image?>" class="productBigImage">

	  </div>
		<div class="span3">
		<div class="product-data simpleCart_shelfItem">

			<span class="item_number" style="display:none;"><?=$product_id?></span>
      <span class="item_description mysteryFit" style="display:none;"></span>
			<h1 class="product-title item_name"><?=$product_title?></h1>
			<h2 class="product-price">
				<span class="item_price noDiscount">$<?=$product_basePrice?></span>
			</h2>

      <p class="product-description-large"></p>

      <? if ($product_title == "mystery tank") { ?>

				<label for="product-fit">Fit</label>

				<select name="product-fit" id="product-fit">
					<option value="unisex" selected>unisex</option>
					<option value="womens">women's</option>
				</select>

				<? } ?>

			<p class="product-description-large"><?=$product_description?></p>

      <? include 'inc.select-size.php'; ?>

			<p class="product-description-small"><?=$product_small_description?></p>
			<a href="javascript:;" class="item_add btn <? if ($product_soldout) echo 'disabled'; ?>" >Add to Cart</a>

		</div>
	</div><!--.productData-->
</div><!--.row-->

<div class="row">
	<div class="span12">
		<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <?=$product_title?></span>
	</div>
</div>
</div><!--.container-->
<?
	include 'inc.social.php';
	include 'inc.footer.php';
?>