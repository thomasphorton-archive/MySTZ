<?
	$promo_code = preg_replace("/[^A-Za-z0-9 ]/", '', $_POST['data']);
	
	$promo_code = strtoupper($promo_code);

	if ($promo_code == 'STZ20' || $promo_code == 'GREG20' || $promo_code == 'DIXON20' || $promo_code == 'HUNTER20') {
?>

(function() {
		simpleCart.each(function (item, x){
			item.price(item.price()*0.8);
			item.set('promocode', user.promoCode)
		});
		simpleCart.update();
		showResult( user.promoCode + ': <br> 20% discount');

		price = $('.item_price')

		discountPrice = price.text().replace('$', '') * 0.8;
		price.addClass('strikethrough');

		$('.discounted_price').text('$' + discountPrice);
		$('.discount').show();

	})();
<?
	} else if ($promo_code == 'HUNTER10' || $promo_code == 'TUCKER10' || $promo_code == 'CHEZ10') {
?>

	(function() {
		simpleCart.each(function (item, x){
			item.price(item.price()*0.9);
			item.set('promocode', user.promoCode)
		});
		simpleCart.update();
		showResult( user.promoCode + ': <br> 10% discount');

		price = $('.item_price')

		discountPrice = price.text().replace('$', '') * 0.9;
		price.addClass('strikethrough');

		$('.discounted_price').text('$' + discountPrice);
		$('.discount').show();

	})();

<?

} else if ($promo_code == 'EARLYXMAS25') {
?>

	(function() {
		simpleCart.each(function (item, x){
			item.price(item.price()*0.75);
			item.set('promocode', user.promoCode);
		});
		simpleCart.update();
		showResult( user.promoCode + ': <br> 25% discount');

		price = $('.item_price')

		discountPrice = price.text().replace('$', '') * 0.75;
		price.addClass('strikethrough');

		$('.discounted_price').text('$' + discountPrice);
		$('.discount').show();

	})();

<?

	} else if ($promo_code == 'surfexpo15' ||  $promo_code == 'SURFEXPO15') {
?>

	(function() {
		simpleCart.each(function (item, x){
			item.price(item.price()*0.85);
			item.set('promocode', user.promoCode)
		});
		simpleCart.update();
		showResult( user.promoCode + ': <br> 15% discount');

		price = $('.item_price')

		discountPrice = price.text().replace('$', '') * 0.85;
		price.addClass('strikethrough');

		$('.discounted_price').text('$' + discountPrice);
		$('.discount').show();

	})();

<?
	} else if ($promo_code == 'STZCREW30') {
?>

	(function() {
		simpleCart.each(function (item, x){
			item.price(item.price()*0.7);
			item.set('promocode', user.promoCode)
		});
		simpleCart.update();
		showResult('stzcrew30: <br> 30% discount');

		price = $('.item_price')

		discountPrice = price.text().replace('$', '') * 0.7;
		price.addClass('strikethrough');

		$('.discounted_price').text('$' + discountPrice);
		$('.discount').show();

	})();

<?
	} else if ($promo_code == 'SUPERDUPERTOPSECRET') {
?>

	(function() {
		simpleCart.each(function (item, x){
			item.price(item.price()*0.001);
			item.set('promocode', user.promoCode)
		});
		simpleCart({
		  shippingFlatRate: 0
		});
		simpleCart.update();
		showResult('superdupertopsecret: <br> 99.9% discount <br> free shipping');

		price = $('.item_price')

		discountPrice = price.text().replace('$', '') * 0.001;
		price.addClass('strikethrough');

		$('.discounted_price').text('$' + discountPrice);
		$('.discount').show();

		user.freeshipping = true;

	})();

		<?

	} else {
?>
	(function() {
		showResult('invalid code');
	})()
<?
	}
?>