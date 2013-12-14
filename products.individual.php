<?

	include 'inventory.php';

	$id = $_GET['id'];

	$numProducts = count($inventory);

	for ($i=0; $i<$numProducts; $i++) {

		if ($inventory[$i]["id"] == $id) {

			$product = $inventory[$i];

			$line = $inventory[$i]["line"];

		}

	}

	$title = $product["title"] . ' | STZ | Custom Tees and Outerwear';

	include 'inc.header.html.php';

?>

</head>

<body>

<?

	include 'inc.header.php';

	switch ($line) {

		case "graphic-tees":

			$cat_name = "graphic-tees";

			$mod = "tees.php";

			break;

		case "pocket-tees":

			$cat_name = "pocket-tees";

			$mod = "tees.php";

			break;

		case "outer":

			$cat_name = "outer";

			$mod = "tees.php";

			break;

		case "baseball-tees":

			$cat_name = "outer";

			$mod = "tees.php";

			break;

		case "crewneck":

			$cat_name = "outer";

			$mod = "tees.php";

			break;

		case "zip-up":

			$cat_name = "outer";

			$mod = "tees.php";

			break;

		case "hats":

			$cat_name = "hats";

			$mod = "hats.php";

			break;

		case "beanies":

			$cat_name = "hats";

			$mod = "hats.php";

			break;

		case "tanks":

			$cat_name = "tanks";

			$mod = "tees.php";

			break;

		case "wmns":

			$cat_name = "ladies";

			$mod = "tees.php";

			break;

		case "accessories";

			$cat_name = "accessories";

			$mod = "hats.php";

			break;

		case "backpacks";

			$cat_name = "backpacks";

			$mod = "hats.php";

			break;

		case "mystery":

			$cat_name = "mystery";

			$mod = "mystery.php";

			break;

		default:

			$cat_name = "all";

	}

?>

<div class="container">
	<div class="row">
		<div class="span12">
			<span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <a href="products.line.php?line=<?=$cat_name?>#<?=$product["line"]?>"><?=$product["line"]?></a> > <?=$product["title"]?></span>
		</div>
	</div>

	<div class="row">
	  <div class="span9" style="position: relative;">

			<img src="images/catalog/<?= $product["line"]?>/main/<?= $product["images"]["main"][0]?>" class="productBigImage" alt="<?=$product["title"]?>" title="<?=$product["title"]?>">

		  <? if ($product["message"]) { ?>

	    <span class="productMessage"><?= $product["message"]?></span>

	  	<? } ?>

	  	<span class="item_discountEligible hidden"><?= $product["discount_eligible"] ?> </span>

	  </div>

	  <? 

	  include "modules/catalog/$mod"; 

	  ?>
		
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
					if(isset($inventory[$randInv]) && $inventory[$randInv] != false){
					?>

					<a href="products.individual.php?id=<?=$inventory[$randInv]["id"]?>" onclick="_gaq.push(['_trackEvent', 'View Product', 'More Products', '<?= $inventory[$randInv]["title"];?>']);" class="span3 randThumbAnchor">
						<img src="/images/catalog/<?=$inventory[$randInv]["line"]?>/thumbs/<?=$inventory[$randInv]["images"]["thumb"]?>" class="randThumb" alt="<?=$inventory[$randInv]["title"]?>" title="<?=$inventory[$randInv]["title"]?>">
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