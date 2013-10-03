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

  <div class="column span3 product simpleCart_shelfItem">
    <div class="row">
      <div class="span3">
        <img src="/images/placeholder.products.png" data-original="images/<?= $product["images"]["thumb"]; ?>" class="product-image lazy">
        <div class="product-inner">
          <span class="product-title item_name">
            <?= $product["title"]; ?>
          </span>
          <span class="price regular item_price">$<?=$product["basePrice"]?></span>
        </div>
      </div>
      <div class="span9 product-details">
        <div style="display: block; height: 50px;">
          <ul class="size-selector">
            <li class="size-selector-size size-selector-size-selected" data-size="small" value="small">S</li>
            <li class="size-selector-size" data-size="medium" value="medium">M</li>
            <li class="size-selector-size" data-size="large" value="large">L</li>
            <li class="size-selector-size" data-size="x-large" value="x-large">XL</li>
            <li class="size-selector-size" data-size="xx-large" value="xx-large">XXL</li>
          </ul>
        </div>
        <span class="item_description tank-description"><?= $product["description"] ?></span>
        <span class="item_size">small</span>
        <a href="javascript:;" class="item_add btn" >Add to Cart</a>
      </div>
    </div>
  </div>
<?
      $i++;
    } //end for loop

?>
</div>
<?

  }
}

?>