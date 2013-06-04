<?
	include 'inventory.php';
	$title = 'Women\'s Flow Tank | STZ | Custom Tees and Outerwear';
	include 'inc.header.html.php';
	include 'inc.header.php'; 
?>

<script>
	$(function(){
		var selects = $('#tank-design, #tank-color'),
		tankDesign = $('#tank-design'),
		tankColor = $('#tank-color'),
		tankDescription = $('.tank-description');
		setDescription();
		
		selects.change(function(){
			setDescription();
		});
		
		function setDescription(){
			var tankDesc = tankDesign.val().toLowerCase() + ', ' + tankColor.val().toLowerCase();
			tankDescription.text(tankDesc);
			console.log(tankDesc);
		}
	});
</script>

<div class="container">
	<div class="row">
		<div class="span12">
			<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <a href="products.tanks.php">tanks</a> > Women's Razorback Tank</span>
		</div>
	</div>
	<div class="row">
		<img src="/images/tanks/tanks.razorback.main.jpg" class="span9">
		<div class="span3">
			<div class="product-data simpleCart_shelfItem">
				<span class="item_number" style="display:none;">1113</span>
				<span class="item_description tank-description" style="display:none;"></span>
				<h1 class="product-title item_name">Women's Razorback Tank</h1>
				<h2 class="product-price">
					<span class="item_price">$20</span>
					<span class="discount">Now: 
						<span class="discounted_price"></span>
					</span>
				</h2>
		
				<p class="product-description-large"></p>
				<label for="tank-design">Design</label>
				<select name="tank-design" id="tank-design"> 
					<option value="STZlife">STZlife</option> 
					<option value="Triangles">Triangles</option>
					<option value="Right Coast">Right Coast</option>
					<option value="Charlie Brown">Charlie Brown</option>
					<option value="Happy Shredding">Happy Shredding</option>
					<option value="Shred Til You're Dead">Shred Til You're Dead</option>
				</select>
				<label for="tank-color">Tank Color</label>
				<select name="tank-color" id="tank-color">
					<option value="Grey">Grey </option>
					<option value="White">White </option>
				</select>
				<? include 'inc.select-size.php'; ?>
				<p class="product-description-small"></p>
				<a href="javascript:;" class="item_add btn" >Add to Cart</a>
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
			<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <a href="products.tanks.php">tanks</a> > Women's Razorback Tank</span>
		</div>
	</div>
</div><!--.container-->
<? 
	include 'inc.social.php'; 
	include 'inc.footer.php';
?>