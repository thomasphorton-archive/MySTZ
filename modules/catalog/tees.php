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

    <p class="product-description-large"><?=$product["description"]?></p>

    <? include 'inc.select-size.php';?>

    <?

    if (count($product["options"]) > 1) {

      echo '<label for="product-option">';

      switch ($product["line"]) {

          case "graphic-tees":

            echo "Shirt Color / Graphic Color";

            break;

          case "pocket-tees":

            echo "Shirt Color";

            break;

          case "baseball-tees":

            echo "Graphic";

            break;

          case "crewneck";

            echo "Patch";

            break;

          case "zip-up";

            echo "Patch";

            break;

        }

      echo '</label>';

      echo '<select id="product-option" class="product-option item_option">';

      foreach ($product["options"] as $option) {

        switch ($product["line"]) {

          case "graphic-tees":

            $string = $option["shirt"] . ' / ' . $option["graphic"];

            break;

          case "pocket-tees":

            $string = $option["shirt"];

            break;

          case "baseball-tees":

            $string = $option["graphic"];

            break;

          case "crewneck";

            $string = $option["patch"];

            break;

          case "zip-up";

            $string = $option["patch"];

            break;

        }

        

        echo '<option value="' . $string . '">' . $string . '</option>';

      }

      echo '</select>';

    }

    ?>

    <p class="hidden item_description"></p>

    <p class="product-description-small"><?=$product["small_description"]?></p>

    <a href="javascript:;" class="item_add btn <? if ($product["soldout"]) echo 'disabled'; ?>" >Add to Cart</a>

    <? 

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

    <!--<a href="<?=$custom_url?>">Want to make it unique? Load it in the customizer</a>-->

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