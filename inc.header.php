<body>

<div class="lightbox">
	<div class="cart-wrapper span8">
		<span class="cart-close">X</span>
		<h2>Your Cart</h2>

		<h2>Items:</h2>
		<div class="simpleCart_items clearfix"></div>

		<div class="cart-totals">
			<div class="cart-row">
			<span class="cart-row-left">Cart Total:</span>
			<span class="simpleCart_total cart-row-right"></span>
			</div>

			<div class="cart-row">
			<span class="cart-row-left">Tax:</span>
			<span class="simpleCart_tax cart-row-right"></span>
			</div>

			<div class="cart-row">
			<span class="cart-row-left">Shipping:</span>
			<span class="simpleCart_shipping cart-row-right"></span>
			</div>

			<div class="cart-row">
			<span class="cart-row-left">TOTAL:</span>
			<span class="simpleCart_grandTotal cart-row-right"></span>
			</div>

			<div class="cart-row promo-holder">
				<input type="text" class="promo-field" placeholder="have a promo code?">
			</div>
			<div class="cart-row">
				<span class="promo-apply">Apply Promo Code</span>
				<div class="promo-result"></div>
			</div>

		</div>
		<a href="javascript:;" class="simpleCart_checkout btn">checkout</a>
	</div>
</div>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="./"><img src="/images/smallstzlogo.png"></a>
			<div id="main-menu">
					<ul class="nav pull-right" id="main-menu-right">
						<li class="dropdown">
							<a class="dropdown-toggle disabled" data-toggle="dropdown" href="products.php">products <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="products.line.php?line=graphic-tees">graphic tees</a></li>
								<li><a href="products.line.php?line=pocket-tees">pocket tees</a></li>
								<li><a href="products.line.php?line=outer">outerwear</a></li>
								<li><a href="products.line.php?line=ladies">ladies</a></li>
								<li><a href="products.line.php?line=hats">hats</a></li>
								<li><a href="products.line.php?line=accessories">bags & accessories</a></li>
								<li><a href="products.line.php?line=tanks">tanks</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle disabled" data-toggle="dropdown" href="shirtbuilder.select.php">custom builder <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="shirtbuilder.php?item=tee&style=graphic">custom graphic</a></li>
								<li><a href="shirtbuilder.php?item=tee&style=pocket">custom pocket</a></li>
								<li><a href="/builder.php#heather-charcoal/heather-charcoal/heather-charcoal/heather-charcoal/heather-charcoal/black/black/black/black/">hoodie</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle disabled" data-toggle="dropdown" href="about.php">about <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="about.contact.php">contact</a></li>
								<li><a href="about.faqs.php">faqs</a></li>
								<li><a href="about.contact.php">request a sticker pack</a></li>
							</ul>
						</li>
					</ul>
				</div>
		</div>
	</div>
</div>
<div class="header-cart-wrapper">
  <div class="container">
    <div class="pull-right" style="margin-top: 3px;">
      <span class="simpleCart_quantity"></span> items - <span class="simpleCart_total"></span>
      <a href="#" class="cart-show">View Cart</a>
    </div>
  </div>
</div>