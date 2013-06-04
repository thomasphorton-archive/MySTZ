<?
	$title = "STZ Custom Clothing | Wake Skate Surf Snow";
	include 'inc.header.html.php';
	include 'inc.header.php'; 
?>

<div class="container">
	<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <?=$line?></span>
	<div class="row">
		<a href="products.tanks.unisex.php" class="column span3 productLink" 
			data-product-title="Men's Tank" 
			onclick="_gaq.push(['_trackEvent', 'View Product', 'Product Image', 'Men\'s Tank']);"
		>
		  <img src="images/tanks/tanks.unisex.products.jpg" title="Men's Tank" class="productImage">
      <span class="productDesc">Unisex Tank</span>
		</a>
		
		<a href="products.tanks.ultrasoft.php" class="column span3 productLink" 
			data-product-title="Ultrasoft Tank" 
			onclick="_gaq.push(['_trackEvent', 'View Product', 'Product Image', 'Ultrasoft Tank']);"
		>
		  <img src="images/tanks/tanks.ultrasoft.products.jpg" title="Ultrasoft Tank" class="productImage">
      <span class="productDesc">Ultrasoft Tank</span>
		</a>
		
		<a href="products.tanks.razorback.php" class="column span3 productLink" 
			data-product-title="Razorback Tank" 
			onclick="_gaq.push(['_trackEvent', 'View Product', 'Product Image', 'Razorback Tank']);"
		>
		  <img src="images/tanks/tanks.razorback.products.jpg" title="Unisex Tank" class="productImage">
      <span class="productDesc">Women's Razorback Tank</span>
		</a>
		
		<a href="products.tanks.flow.php" class="column span3 productLink" 
			data-product-title="Flow Tank" 
			onclick="_gaq.push(['_trackEvent', 'View Product', 'Product Image', 'Flow Tank']);"
		>
		  <img src="images/tanks/tanks.flow.products.jpg" title="Flow Tank" class="productImage">
      <span class="productDesc">Women's Flow Tank</span>
		</a>
	
	</div>
	<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <?=$line?></span>
	</div><!--.container-->
<? 
	include 'inc.social.php'; 
	include 'inc.footer.php';
?>