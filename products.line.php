<?
	$line = $_GET['line'];
	$title = $line . " from STZ | Custom Tees and Hoodies";
	$meta_description = "check out our " . $line . ". you'll look good in it.";

	include 'inc.header.html.php';
	include 'inc.header.php'; 
	include 'inventory.php'; 

	$numProducts = count($inventory);
	for($i=0;$i<$numProducts;$i++){
		if ($inventory[$i]['line'] != $line){
			unset($inventory[$i]);
		}
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

	<div class="page-wrapper">
		<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <?=$line?></span>
	<div class="clearfix">
	<!--<span class="specialsBanner"></span>-->
<?
	$numProducts = count($inventory);	
	if ($numProducts == 0){
		echo 'Sorry, no products match your search. <a href="lines.php">Start Over!</a>';
	} else {
	$i = 0;
	foreach ($inventory as $product){		
?>
<a href="products.individual.php?id=<?=$product["id"];?>" 
	class="product-individual-link" 
	data-product-title="<?= $product["title"]; ?>" 
	data-product-color="<?= $product["shirt_color"]; ?>" 
	data-link-type="products.line"
>
	<div class="productWrapper <? if ($i == 0 && $product["line"] == "outer") echo 'special';?>">
			<img src="images/<?= $product["product_image"]; ?>" title="<?= $product["title"]; ?>" class="productImage">
			<span class="productDesc">
				<?= $product["title"]; ?>
			</span>
	</div><!--.productWrapper-->
</a>
<?
	$i++;
	} //end for loop
	}
?>
	</div>
	<? if ($line == "ladies"){ ?>
			<p>All graphics are available on women's styles. <a href="about.php">Contact us</a> for details.</p>
	<? }/*else if($line =="outer"){ ?>
			<br /><br /><br /><img src="images/banners/customhoodie.png" style="display:inline"> <? include 'inc.contact.php'; ?>
	<?	} */?>
	<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <?=$line?></span>
	</div><!--.page-wrapper-->
<? 
	include 'inc.social.php'; 
	include 'inc.footer.php';
?>