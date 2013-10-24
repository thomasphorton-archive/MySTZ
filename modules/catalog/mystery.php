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

    <? include 'inc.select-size.php';?>

    <p class="product-description-small"><?=$product["small_description"]?></p>

    <a href="javascript:;" class="item_add btn <? if ($product["soldout"]) echo 'disabled'; ?>" >Add to Cart</a>

   <? if ($product_title == "mystery tank") { ?>

        <label for="product-fit">Fit</label>

        <select name="product-fit" id="product-fit">
          <option value="unisex" selected>unisex</option>
          <option value="womens">women's</option>
        </select>

        <? } ?>

  </div>

</div><!--.productData-->