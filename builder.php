<?
  include 'inventory.php';

  $id = 931;

  $numProducts = count($inventory);

  for ($i=0; $i<$numProducts; $i++) {

    if ($inventory[$i]["id"] == $id) {

      $product = $inventory[$i];

      $line = $inventory[$i]["line"];

    }

  }

  $title = "STZ Hoodie Builder | Custom Graphics and Pocket Tees | MySTZ";
  include 'inc.header.html.php';

?>

<link rel="stylesheet" type="text/css" href="/css/libs/flexslider/flexslider.css"  />
<link rel="stylesheet" type="text/css" href="/css/builder.css" />

</head>

<body>
<?
  include 'inc.header.php';
?>

<div class="container">    
  <div class="row">
    <div class="span12">
      <span class="breadCrumb"><a href="index.php">home</a> > custom hoodie builder</span>
    </div>
  </div>
 
  <div class="row">
    <div class="builder-wrapper span9 clearfix">
      <div id="builder-view" ></div>
      <div class="builder-hider"></div>
    </div>
    

    <div class="span3">
      <div class="simpleCart_shelfItem product-data">

        <span class="item_number hidden"><?=$product["id"]?></span>
        <span class="item_discountEligible hidden"><?=$product["discount_eligible"] ?> </span>

        <h1 class="product-title item_name"><?=$product["title"]?></h1>

        <h2 class="product-price">

          <span class="item_price">$<?=$product["basePrice"]?></span>

          <span class="discount">Now:
            <span class="discounted_price"></span>
          </span>

        </h2>

        <div id="builder-controls"></div>

        <label for="product-length" class="product-length-label">Length</label>

        <select name="product-length" class="item_length" id="product-length">
          <option value="32">32"</option>
          <option value="34">34"</option>
          <option value="36">36"</option>

        </select>

        <div id="checkout">
          
          <a href="javascript:;" class="item_add btn">Add to Cart</a>
          <span id="customDetail" class="item_description hidden"></span>
        </div><!--#checkout-->
      </div>
    </div>
  </div>

  <div class="row">
    <div class="span12">
      <span class="breadCrumb"><a href="index.php">home</a> > custom hoodie builder</span>
    </div>
  </div>

</div><!--#pageWrapper-->

<?
  include 'inc.footer.php';
?>
