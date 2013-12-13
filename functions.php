<?

function display_items($title, $cat, $inv) {

  $numProducts = count($inv);
  for($i=0; $i<$numProducts; $i++) {
    if ($inv[$i]['line'] != $cat){
      unset($inv[$i]);
    }
  }

?>

<?

foreach ($inv as $product) {

  if ($product["featured"]) {

    $featured[] = $product;

  } else if ($product["soldout"]) {

    $soldout[] = $product;

  } else {

    $regular[] = $product;

  }

} 

?>

<div class="row">
  <h2 class="span12 category-title" id="<?=$cat?>"><?=$title?></h2>

<? 

  $numProducts = count($featured);
  if ($numProducts != 0) {
    $i = 0;

  foreach ($featured as $product) { 

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
  <img src="/images/placeholder.products.png" data-original="/images/catalog/<?= $product["line"] ?>/thumbs/<?= $product["images"]["thumb"]; ?>" alt="<?= $product["title"]; ?>" title="<?= $product["title"]; ?>" class="productImage lazy">
  <span class="productDesc"><?= $product["title"]; ?></span>
</a>
<?
      $i++;
    } //end for loop

?>

<? } ?>

<? 

  $numProducts = count($regular);
  if ($numProducts != 0) {
    $i = 0;

  foreach ($regular as $product) { 

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
  <img src="/images/placeholder.products.png" data-original="/images/catalog/<?= $product["line"] ?>/thumbs/<?= $product["images"]["thumb"]; ?>" alt="<?= $product["title"]; ?>" title="<?= $product["title"]; ?>" class="productImage lazy">
  <span class="productDesc"><?= $product["title"]; ?></span>
</a>
<?
      $i++;
    } //end for loop

?>

<? } ?>

<? 

  $numProducts = count($soldout);
  if ($numProducts != 0) {
    $i = 0;

  foreach ($soldout as $product) { 

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
  <img src="/images/placeholder.products.png" data-original="/images/catalog/<?= $product["line"] ?>/thumbs/<?= $product["images"]["thumb"]; ?>" alt="<?= $product["title"]; ?>" title="<?= $product["title"]; ?>" class="productImage lazy">
  <span class="productDesc"><?= $product["title"]; ?></span>
</a>
<?
      $i++;
    } //end for loop

?>

<? } ?>

</div>

<? } ?>




