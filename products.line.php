<?
	$line = $_GET['line'];
	$title = $line . " from STZ | Custom Tees and Hoodies";
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



	<div class="container">
	  <div class="row">
	    <div class="span12">
	      <span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <?=$line?></span>
	    </div>
	  </div>

	<div class="row">
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
	data-product-title="<?= $product["title"]; ?>"
	data-product-color="<?= $product["shirt_color"]; ?>"
	onclick="_gaq.push(['_trackEvent', 'View Product', 'Product Image', '<?= $product["title"]; ?>']);"
	class="productLink column span3"
>
	<? if ($product["message"]) { ?>
  <span class="productMessage"><?= $product["message"]?></span>
	<? } ?>
  <img src="http://beta.mystz.com/images/smallstzlogo.png" data-original="images/<?= $product["product_image"]; ?>" title="<?= $product["title"]; ?>" class="productImage lazy">
  <span class="productDesc"><?= $product["title"]; ?></span>
</a>
<?
	$i++;
	} //end for loop
	}
?>
	</div>
	<? if ($line == "ladies"){ ?>
	  <div class="row">
	    <div class="span12">
			  <p>All graphics are available on women's styles. <a href="about.php">Contact us</a> for details.</p>
	    </div>
	  </div>
	<? }/*else if($line =="outer"){ ?>
			<br /><br /><br /><img src="images/banners/customhoodie.png" style="display:inline"> <? include 'inc.contact.php'; ?>
	<?	} */?>

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
	include 'inc.social.php';
	include 'inc.footer.php';
?>