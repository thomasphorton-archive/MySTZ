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
	showResult('STZ20: <br> 20% discount');

	var priceSpan = $('.simpleCart_shelfItem').find('.item_price');

	$.each(priceSpan, function(){
		var price = $(this).text();
		console.log(price);
		var discountPrice = price.replace('$', '') * 0.8;
		$(this).siblings('.discount').children('.discounted_price').text('$' + discountPrice);
	});

	priceSpan.addClass('strikethrough');


	$('.discount').show();

})();

<?
	} else if ($promo_code == 'beta10') {
?>

	(function() {
		simpleCart.each(function (item, x){
			item.price(item.price()*0.9);
			item.set('promocode', user.promoCode)
		});
		simpleCart.update();
		showResult('beta10: <br> 10% discount');

		price = $('.item_price')

		discountPrice = price.text().replace('$', '') * 0.9;
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