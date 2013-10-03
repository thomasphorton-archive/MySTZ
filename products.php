<?

	$title = " from STZ | Custom Tees and Hoodies";
	include 'inc.header.html.php';
	include 'inc.header.php';
	include 'inventory.php';
	include "functions.php"; 
?>

	<script>

	$(function(){
		catLink = $('.category-nav li a');

		catLink.click(function(e){
			e.preventDefault();

			var target = $(this).attr('href');

			goToByScroll(target);

		});
	});

	function goToByScroll(id){

		var scrollDistance = parseInt($(id).offset().top) - 70;

		console.log(scrollDistance);

    $('html,body').animate({
      scrollTop: scrollDistance
    }, 'slow');
	}

	</script>

	<style>

		.white-box {
			background: white;
		}

		.category-nav {
			text-align: center;
			list-style-type: none;
			padding: 0;
			margin: 0;
			height: 36px;
		}

		.category-nav li {
			display: inline-block;
			margin: 0 2px;
		}

		.category-nav a {
			padding: 10px;
		}

		.category-nav a:hover {
			text-decoration: none;
		}

	</style>

<div class="white-box">
	<div class="container">
		<div class="row">
				
			<ul class="category-nav">
				<li><a href="#graphic">Graphics</a></li>
				<li><a href="#pocket">Pockets</a></li>
				<li><a href="#baseball">Baseball</a></li>
				<li><a href="#sweater">Sweaters</a></li>
				<li><a href="#hoodie">Hoodies</a></li>
				<li><a href="#hats">Hats</a></li>
				<li><a href="#backpacks">Backpacks</a></li>
			</ul>

		</div>
	</div>
</div>

<div class="container">

<? 

	// display_items("Category Title", "Category Shortcode", $inventory_array);
	display_items("Graphic Tees", "graphic", $inventory); 
	display_items("Pocket Tees", "pocket", $inventory); 
	display_items("Tanks", "tank", $inventory); 
	display_items("Baseball Shirts", "baseball", $inventory); 
	display_items("Sweaters", "sweater", $inventory);
	display_items("Hoodies", "hoodie", $inventory);
	display_items("Hats", "hats", $inventory);
	display_items("Bags & Accessories", "backpacks", $inventory);
	display_items("STZ for the Ladies", "ladies", $inventory);
?>

</div><!--.container-->

<script>

  $("img.lazy").show().lazyload({
    effect: 'fadeIn'
  });

</script>

<?	include 'inc.footer.php';  ?>