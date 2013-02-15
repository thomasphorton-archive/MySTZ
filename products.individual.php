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
	$meta_description = "rock your stz with " . $product["title"] . " from STZ.";
	include 'inc.header.html.php';
	include 'inc.header.php'; 
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/select-size.js"></script>

<div class="page-wrapper" 
  itemscope itemtype="http://schema.org/Product">
	<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <a href="products.line.php?line=<?=$product["line"]?>"><?=$product["line"]?></a> > <?=$product["title"]?></span>
	<div id="picWrapper">
			<img src="images/<?= $product["big_image"]?>" class="product-image-main" itemprop="image">
	</div><!--#picWrapper-->
<div class="product-data">
  
	<h1 class="product-title" itemprop="name"><?=$product["title"]?></h1>
	<h2 class="product-price" itemprop="price"><?=$product["basePrice"]?></h2>
	
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
	
	<p class="product-description-small"><?=$product["small_description"]?></p>
	<? if ($product["line"]!= "hats"){ ?>
		<ul class="size-selector clearfix">
			<li class="size-selector-size size-selector-size-selected" data-size="small" onclick="_gaq.push(['_trackEvent', 'Picked Size', 'S', '<?= $product["title"];?>']);">S</li>
			<li class="size-selector-size" data-size="medium" onclick="_gaq.push(['_trackEvent', 'Picked Size', 'M', '<?= $product["title"];?>']);">M</li>
			<li class="size-selector-size" data-size="large" onclick="_gaq.push(['_trackEvent', 'Picked Size', 'L', '<?= $product["title"];?>']);">L</li>
			<li class="size-selector-size" data-size="x-large" onclick="_gaq.push(['_trackEvent', 'Picked Size', 'XL', '<?= $product["title"];?>']);">XL</li>
			<li class="size-selector-size" data-size="xx-large" onclick="_gaq.push(['_trackEvent', 'Picked Size', 'XXL', '<?= $product["title"];?>']);">XXL</li>
		</ul>
		<? } ?>
		<p class="product-description-large">
			<?=$product["description"]?>
		</p>
		
		<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="<?=$product["paypal_code"]?>">
			<? if ($product["line"]!= "hats"){ ?>
			<table>
			<tr><td><input type="hidden" name="on0" value="size"></td></tr><tr><td><select id="paypalSizes" name="os0" style="display:none;" >
				<option value="small">Small</option>
				<option value="medium">Medium</option>
				<option value="large">Large</option>
				<option value="x-large">X-Large</option>
				<option value="xx-large">XX-Large</option>
			</select> </td></tr>
			</table>
			<? } ?>
			<input type="hidden" name="currency_code" value="USD">
			<button type="submit" name="submit" class="btn" onclick="_gaq.push(['_trackEvent', 'Add to Cart', '<?= $product["title"]; ?>']);">Add to Cart</button>
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
		<? } ?>
		
</div><!--#bigDesc-->
<section class="clearfix">

	<h2>You also might like:</h2>

	<ul class="nav-more">
		<?
			$dontShow = array($product["id"]);
			$length = count($inventory) -1;
			$i = 0;
			while ($i < 4){
				$randInv = rand(0,$length);
				
				if (!in_array($randInv, $dontShow)){
					$dontShow[] = $randInv;
					if(isset($inventory[$randInv])){
					?>
					
					<a href="products.individual.php?id=<?=$inventory[$randInv]["id"]?>" onclick="_gaq.push(['_trackEvent', 'View Product', 'More Products', '<?= $inventory[$randInv]["title"];?>']);" >
						<li><img src="images/<?=$inventory[$randInv]["more_thumb"]?>" class="randThumb">
							<span class="productDesc"><?= $inventory[$randInv]["title"] ?></span>
					</li></a>
					<?
					$i++;
					}
				}
			}		
		?>

	</ul>
</section>
<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <a href="products.line.php?line=<?=$product["line"]?>"><?=$product["line"]?></a> > <?=$product["title"]?></span>
</div><!--.page-wrapper-->
<? 
	include 'inc.social.php'; 
	include 'inc.footer.php';
?>