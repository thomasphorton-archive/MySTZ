<?
	$promo_code = preg_replace("/[^A-Za-z0-9 ]/", '', $_POST['data']);

	if ($promo_code == 'STZ20') {
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
	} else if ($promo_code == 'beta10' || $promo_code == 'hunter10' || $promo_code == 'tucker10' || $promo_code == 'chez10') {
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
	} else if ($promo_code == 'surfexpo15' || $promo_code == 'launchday15' || $promo_code == 'SURFEXPO15') {
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
	} else if ($promo_code == 'stzcrew30') {
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
	} else if ($promo_code == 'superdupertopsecret') {
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