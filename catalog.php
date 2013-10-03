<?
	$title = "STZ Custom Clothing | Wake Skate Surf Snow";
	include 'inc.header.html.php';
	include 'inc.header.php';
?>
<script type="text/template" class="catalog-entry">
  <a href="/catalog-page.php?name=<%-item.Name_Normalized%>" class="productLink column span3">
    <img src="<%-item.Images.Thumb%>" title="<%- item.Name %>">
    <span class="productDesc"><%- item.Name %></span>
  </a>
</script>
<script src="/libraries/underscore.js"></script>
<script>
  
  _.templateSettings.variable = "item";

  var template = _.template(
    $('script.catalog-entry').html()
  );

  $(function(){

    $.getJSON( '/json/graphic_tees.json', function(data) {

      $.each(data, function(){

        $('.product-graphic-tee').append(
          template( this )
        );

      });

    });
  
  });

</script>

<div class="container">
  <div class="row">
    <div class="span12">
  	  <span class="breadCrumb"><a href="index.php">home</a> > products</span>
    </div>
  </div>


 <h2>Graphic Tees</h2>
 <div class="row product-container product-graphic-tee">

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