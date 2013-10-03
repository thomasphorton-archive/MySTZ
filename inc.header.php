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
						<li><a href="/products.php">shop</a></li>
						<li><a href="/shirtbuilder.select.php">shirtbuilder</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">cart <span class="simpleCart_quantity"></span><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="cart-details">
									<div class="cart-panel">
										<h4>items in your cart <span class="simpleCart_quantity"></span></h4>
										<div class="simpleCart_items clearfix"></div>
										<a href="/checkout.php" class="btn">checkout</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
		</div>
	</div>
</div>