<?

function display_items($title, $cat, $inv) {

  $numProducts = count($inv);
  for($i=0; $i<$numProducts; $i++) {
    if ($inv[$i]['line'] != $cat){
      unset($inv[$i]);
    }
  }

  $numProducts = count($inv);
  if ($numProducts != 0) {
    $i = 0;

?>

<div class="row">
  <h2 class="span12 category-title" id="<?=$cat?>"><?=$title?></h2>

<?

foreach ($inv as $product){

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
  <img src="/images/placeholder.products.png" data-original="/images/catalog/<?= $product["line"] ?>/thumbs/<?= $product["images"]["thumb"]; ?>" title="<?= $product["title"]; ?>" class="productImage lazy">
  <span class="productDesc"><?= $product["title"]; ?></span>
</a>
<?
      $i++;
    } //end for loop

?>
</div>
<?

  }
}

?>