<?
	$title = "MySTZ | Custom T-Shirts and Hoodies | Wake Skate Surf Snow";
	$meta_description = "custom built graphic tees, pocket tees, and hoodies. happy shredding.";
	include 'inc.header.html.php';
	include 'inventory.php';
?>
<link rel="stylesheet" href="libraries/flexslider/flexslider.css" type="text/css" />
<link rel="icon" href="images/favicon.ico">
<script src="libraries/flexslider/jquery.flexslider.js"></script>  
<script type="text/javascript">
	$(document).ready(function() {
    $('.flexslider').flexslider({
      animation: "slide",
			animationLoop: true,
			controlNav: false,
    });
	 });
</script>
<? include 'inc.header.php';  ?>

<div class="page-wrapper page-wrapper-index">
	<div class="flexslider slider-main">
	<ul class="slides">
		<li><a href="products.line.php?line=outer"><img src="images/bigfrontbanners/blackstzlifehoodie.png" class="slider-main-image"></a></li>
		<li><a href="products.php"><img src="images/bigfrontbanners/productryannikki.png" class="slider-main-image"></a></li>
		<li><a href="products.line.php?line=ladies"><img src="images/bigfrontbanners/womens.png" class="slider-main-image"></a></li>
		<li><a href="products.individual.php?id=72"><img src="images/bigfrontbanners/customhoodies.png" class="slider-main-image"></a></li>
		<li><a href="products.line.php?line=hats"><img src="images/bigfrontbanners/hats.png" class="slider-main-image"></a></li>
	</ul>
	</div><!--#flexslider-->
	
	<section class="clearfix">
		<ul class="nav-more shadow clearfix">
			<li><a href="products.line.php?line=stz"><img src="images/smallfrontbanners/stz.png" alt="Outer STZ" /></a></li>
			<li><a href="products.line.php?line=pocket"><img src="images/smallfrontbanners/pocketstz.png" alt="Outer STZ" /></a></li>
			<li><a href="shirtbuilder.select.php"><img src="images/smallfrontbanners/shirtbuilder.png" alt="Pocket STZ" /></a></li>
			<li><a href="http://canvassedapparel.com" target="_blank"><img src="images/smallfrontbanners/canvassedapparel.png" alt="Pocket STZ" /></a></li>
		</ul>
	</section>
	
	<section>

	<h2>Popular this week:</h2>

	<ul class="nav-more shadow clearfix">
		<?
			$dontShow = array($product["id"], 99999, 99998);
			$length = count($inventory) -3;
			$i = 0;
			while ($i < 4){
				$randInv = rand(0,$length);
				
				if (!in_array($inventory[$randInv]["id"], $dontShow)){
					$dontShow[] = $randInv;
					if(isset($inventory[$randInv])){
					?>
					
					<a href="products.individual.php?id=<?=$inventory[$randInv]["id"]?>" 
							class="product-individual-link"
							data-product-title="<?= $inventory[$randInv]["title"]; ?>"
							data-link-type="products.individual" >
						<li class="tall"><img src="images/<?=$inventory[$randInv]["product_image"]?>" class="randThumb">
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

<section>

	<h2>Popular last week:</h2>

	<ul class="nav-more shadow clearfix">
		<?
			
			$length = count($inventory) -1;
			$i = 0;
			while ($i < 4){
				$randInv = rand(0,$length);
				
				if (!in_array($randInv, $dontShow)){
					$dontShow[] = $randInv;
					if(isset($inventory[$randInv])){
					?>
					
					<a href="products.individual.php?id=<?=$inventory[$randInv]["id"]?>" 
							class="product-individual-link"
							data-product-title="<?= $inventory[$randInv]["title"]; ?>"
							data-link-type="products.individual" >
						<li class="tall"><img src="images/<?=$inventory[$randInv]["product_image"]?>" class="randThumb">
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
</div><!--.page-wrapper-->

<? 
	include 'inc.social.php'; 
	include 'inc.footer.php';
?>