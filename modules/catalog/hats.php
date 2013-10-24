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

    <?

    if (count($product["options"]) > 1) {

      echo '<label for="product-option">Patch</label>';

      echo '<select id="product-option" class="product-option item_option">';

      foreach ($product["options"] as $option) {

        echo '<option value="' . $option["patch"] . '">' . $option["patch"] . '</option>';

      }

      echo '</select>';

    }

    ?>

    <p class="product-description-large"><?=$product["description"]?></p>

    <p class="product-description-small"><?=$product["small_description"]?></p>

    <p class="hidden item_description"></p>

    <a href="javascript:;" class="item_add btn <? if ($product["soldout"]) echo 'disabled'; ?>" >Add to Cart</a>

  </div>

</div><!--.productData-->

<script>

$(function(){

  var option = $('.product-option'),
    description = $('.item_description');

  description.text(option.val());

  option.change(function(){

    description.text($(this).val());

  })

});



</script>