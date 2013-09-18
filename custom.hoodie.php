<?

  $title = 'Custom Hoodie Builder | STZ | Custom Tees and Outerwear';
  include 'inc.header.html.php';
  include 'inc.header.php';
  include 'inventory.php';

  $id = 72;
  $numProducts = count($inventory);
  for($i=0;$i<$numProducts;$i++){
    if ($inventory[$i]["id"] == $id){
      $product = $inventory[$i];
    }
  }
?>

<script>


$(function(){

var hbSelects = $('.hb-select');

hbSelects.change(function(){
  hoodiebuilder.updateString();
});

var hoodiebuilder = (function($, undefined) {

  return {
    updateString: function() {

      var newString = "";
      
      $.each(hbSelects, function(){

        var $this = $(this);

        newString += $this.data('prettyName') + ": " + $this.val() + "<br>"

      });

      console.log(newString);

      $('#customDetail').val(newString);

    }
  }

})(jQuery);

});
</script>

<div class="container">
<div class="row">
  <div class="span12">
    <span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <a href="products.line.php?line=outer">Outer</a> > Custom Hoodie Builder</span>
  </div>
</div>

<div class="row">
    
  <div class="span9" style="position: relative;">
    
  </div>

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

      <label for="hb-hood">Hood Color</label>

      <select name="hb-hood" id="hb-hood" data-pretty-name="Hood" class="hb-select">
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
      </select>

      <label for="hb-hood-string">Hood String Color</label>

      <select name="hb-hood-string" id="hb-hood-string" data-pretty-name="Hood Drawstring"  class="hb-select">
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
      </select>

      <label for="hb-front">Front Color</label>

      <select name="hb-front" id="hb-front"  data-pretty-name="Front Fabric"  class="hb-select">
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
      </select>

      <label for="hb-back">Back Color</label>

      <select name="hb-back" id="hb-back"  data-pretty-name="Back Fabric" class="hb-select">
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
      </select>

      <label for="hb-right">Right Sleeve Color</label>

      <select name="hb-right" id="hb-right"  data-pretty-name="Right Sleeve" class="hb-select">
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
      </select>

      <label for="hb-right-cuff">Right Cuff Color</label>

      <select name="hb-right-cuff" id="hb-right-cuff"  data-pretty-name="Right Cuff" class="hb-select">
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
      </select>

       <label for="hb-left">Left Sleeve Color</label>

      <select name="hb-left" id="hb-left"  data-pretty-name="Left Sleeve"  class="hb-select">
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
      </select>

      <label for="hb-left-cuff">Left Cuff Color</label>

      <select name="hb-left-cuff" id="hb-left-cuff"  data-pretty-name="Left Cuff" class="hb-select">
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
      </select>

       <label for="hb-pocket">Pocket Color</label>

      <select name="hb-pocket" id="hb-pocket"  data-pretty-name="Pocket Color"  class="hb-select">
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
      </select>

      <label for="hb-bottom-string">Waist Drawstring Color</label>

      <select name="hb-bottom-string" id="hb-bottom-string"  data-pretty-name="Waist Drawstring Color" class="hb-select">
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
      </select>

      <label for="hb-bottom">Bottom Cuff Color</label>

      <select name="hb-bottom" id="hb-bottom" data-pretty-name="Bottom Cuff"  class="hb-select">
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
      </select>

      <label for="hb-zipper">Zipper Color</label>

      <select name="hb-zipper" id="hb-zipper"  data-pretty-name="Zipper Color" class="hb-select">
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
      </select>

      <label for="hb-length">Hoodie Length</label>

      <select name="hb-length" id="hb-length"  data-pretty-name="Length" class="hb-select">
        <option value="32">32"</option>
        <option value="34">34"</option>
        <option value="36">36"</option>
      </select>

      <label for="hb-ipod-pocket">MP3 Player Pocket Location</label>

      <select name="hb-ipod-pocket" id="hb-ipod-pocket"  data-pretty-name="MP3 Pocket Location" class="hb-select">
        <option value="left">left</option>
        <option value="right">right</option>
        <option value="none">no pocket</option>
      </select>

      <label for="hb-patch">Add a Patch</label>

      <select name="hb-patch" id="hb-patch"  data-pretty-name="Patch"  class="hb-select">
        <option value="none">no patch</option>
        <option value="stzlife">STZlife</option>
        <option value="sendit">Send it to the Flats</option>
        <option value="happyshredding">Happy Shredding</option>
      </select>

      <input type="text" id="customDetail" class="item_description hidden">

      <p class="product-description-small"><?=$product["small_description"]?></p>
      <a href="javascript:;" class="item_add btn <? if ($product["soldout"]) echo 'disabled'; ?>" >Add to Cart</a>

    </div>
  </div><!--.productData-->
</div><!--.row-->

<div class="row">
  <div class="span12">
    <span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <a href="products.line.php?line=outer">Outer</a> > Custom Hoodie Builder</span>
  </div>
</div>
</div><!--.container-->
<?
  include 'inc.social.php';
  include 'inc.footer.php';
?>