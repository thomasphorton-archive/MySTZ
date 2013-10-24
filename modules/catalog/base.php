<div class="span3">
  <div class="product-data simpleCart_shelfItem">

    <span class="item_number" style="display:none;"><?=$product["id"]?></span>
    <h1 class="product-title item_name"><?=$product["title"]?></h1>
    <h2 class="product-price">
      <span class="item_price">$<?=$product["basePrice"]?></span>
      <span class="discount">Now:
        <span class="discounted_price"></span>
      </span>
    </h2>

    <p class="product-description-large item_description"><?=$product["description"]?></p>

    <?
      if ($product["line"]!= "hats"){
        include 'inc.select-size.php';
      }
    ?>
    <p class="product-description-small"><?=$product["small_description"]?></p>
    <a href="javascript:;" class="item_add btn <? if ($product["soldout"]) echo 'disabled'; ?>" >Add to Cart</a>

    <? if ($product["line"] == "stz" || $product["line"] =="pocket") {

      $color = $product["color_normalized"];

      $item = "tee";

      switch ($product["line"]) {
        case "stz":
          $style = "style";
          break;
        case "pocket":
          $style = "pocket";
          break;
      }

        $design = $product["design_normalized"];

        $custom_url = "/shirtbuilder.php?item=" . $item . "&design=" . $design . "&style=" . $style . "&color=" . $color;
    ?>
    <a href="<?=$custom_url?>">Want to make it unique? Load it in the customizer</a>
    <?
      }
    ?>
  </div>
</div><!--.productData-->