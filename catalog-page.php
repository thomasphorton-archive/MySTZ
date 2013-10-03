<?
	$title = "STZ Custom Clothing | Wake Skate Surf Snow";
	include 'inc.header.html.php';
	include 'inc.header.php';
?>
<script type="text/template" class="catalog-page">
  <div class="row">
    <div class="span9" style="position: relative;">
      <img src="<%- item.Images.Large[0] %>" class="productBigImage">
    </div>
    <div class="span3">
      <div class="product-data simpleCart_shelfItem">
        <span class="item_number" style="display:none;">4</span>
        <h1 class="product-title item_name"><%- item.Name %></h1>
        <h2 class="product-price">
          <span class="item_price">$<%- item.Price %></span>
          <span class="discount">Now:
            <span class="discounted_price"></span>
          </span>
        </h2>

        <p class="product-description-large item_description"></p>
      </div>

      <p class="product-description"><%- item.Description %></p>
      
      <a href="javascript:;" class="item_add btn ">Add to Cart</a>
    </div>
  </div><!--.productData-->
</div>
</script>
<script src="/libraries/underscore.js"></script>
<script>

  var urlParams;
  (window.onpopstate = function () {
      var match,
          pl     = /\+/g,  // Regex for replacing addition symbol with a space
          search = /([^&=]+)=?([^&]*)/g,
          decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
          query  = window.location.search.substring(1);

      urlParams = {};
      while (match = search.exec(query))
         urlParams[decode(match[1])] = decode(match[2]);
  })();
  
  var normalized_name = urlParams["name"];

  _.templateSettings.variable = "item";

  var template = _.template(
    $('script.catalog-page').html()
  );

  $(function(){

    $.getJSON( '/json/graphic_tees.json', function(data) {

      var item = _.where(data, { Name_Normalized: normalized_name });

      $('.product-container').append(
        template( item[0] )
      );

      console.log(item);

    });
  
  });

</script>

<div class="container">
  <div class="row">
    <div class="span12">
  	  <span class="breadCrumb"><a href="index.php">home</a> > products</span>
    </div>
  </div>

  <div class="product-container">

 </div>


	<div class="row">
    <div class="span12">
  	  <span class="breadCrumb"><a href="index.php">home</a> > products</span>
    </div>
  </div>
</div><!--.container-->

<?
	include 'inc.social.php';
	include 'inc.footer.php';
?>