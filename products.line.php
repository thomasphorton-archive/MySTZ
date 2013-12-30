<?
	$line = $_GET['line'];
	$title = $line . " from STZ | Custom Tees and Hoodies";
	include 'inc.header.html.php';

?>

</head>

<body>

<?

	include 'inc.header.php';

?>

	<div class="container">
	  <div class="row">
	    <div class="span12">
	      <span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <?=$line?></span>
	    </div>
	  </div>

    <div class="row" id="target"></div>
  


<script type="text/html" id='catalogItems'>

  <h2 class="span12">Group</h2>

  <%

  console.log(line);

    _.each(line, function(item) {

  %>

  <a href="products.individual.php?id=<%= item.id %>" 
    data-product-title="<%= item.title %>" 
    data-product-color="" 
    onclick="ga('send', 'View Product', 'Product Image', '<%= item.title %>');" 
    class="productLink column span3">

    <img src="/images/placeholder.products.png" 
      data-original="/images/catalog/<%= item.line %>/thumbs/<%= item.image_name %>" 
      alt="<%= item.title %>" 
      title="<%= item.title %>" 
      class="productImage" />

    <span class="productDesc"><%= item.title %></span>

    <% if (item.in_stock === "0") { %>

      <span class="productMessage">Sold Out!</span>

    <% } %>

  </a>

  <%

});

    %>

</script>

<script>

$(function() {

  template = $("#catalogItems").html();

  $.post('inventory-json.php', function(resp) {

    var inv = $.parseJSON(resp);

    console.log(inv);

    items = _.sortBy(inv, function(item) {
      return -item.in_stock;
    });

    lines = _.groupBy(items, 'line');

    _.each(lines, function(line) {

      $("#target").append(_.template(template,{line:line}));

    });

    $(".productImage").show().lazyload({
      effect: 'fadeIn'
    });

  });

});

    
</script>

	  <div class="row">
	    <div class="span12">
	      <span class="breadCrumb"><a href="index.php">home</a> > <a href="products.php">products</a> > <?=$line?></span>
	    </div>
	  </div>
	</div><!--.container-->

<?
	include 'inc.footer.php';
?>