var user = {};
var getPricesFor = [];
var priceHolder;

simpleCart({
  checkout: {
    type: "PayPal",
    email: "t.clark@canvassedapparel.com"
  },
  cartColumns: [
  	{ attr: "name" , label: "Name" },
  	{ attr: "size" , label: "Size" },
  	{ attr: "description", label: "Detail"},
  	{ attr: "price" , label: "PRICE", view: 'currency' } ,
    { view: "decrement" , label: false , text: "-" } ,
    { attr: "quantity" , label: "QTY" } ,
    { view: "increment" , label: false , text: "+" } ,
    { attr: "total" , label: "TOTAL", view: 'currency' } ,
    { view: "remove" , text: "Remove" , label: false }
  ],
});

simpleCart.shipping(function(){
  if (user.freeshipping) {
    return 0;
  } else {
    if (simpleCart.total() <= 40) {
      return 5;
    } else if (simpleCart.total() <= 60) {
      return 7;
    } else if (simpleCart.total() <= 80) {
      return 10;
    } else if (simpleCart.total() <= 120) {
      return 12;
    } else {
      return 0;
    }
  }
});

simpleCart.bind( 'afterAdd' , function( item ) {
  track('Cart', 'Add', item.get('name') + ' ' + item.get('size'));
  $('.header-cart-wrapper').show();
  showCart();
});

simpleCart.bind( 'beforeRemove' , function( item ) {
  track('Cart', 'Remove',  item.get('name') + ' ' + item.get('size'));
});

simpleCart.bind( 'beforeCheckout', function(data){
  track('Cart', 'Checkout', simpleCart.grandTotal());
  debugger;
});

$(function(){

  disabled = $('.disabled');
  disabled.removeClass('item_add');

	promoField = $('.promo-field');
	$('.promo-apply').click(function(){
		checkPromo();
		track('Cart', 'Promo Code', $('.promo-field').val());
	});

	simpleCart.ready(function(){

		if (simpleCart.quantity() >= 1) {
			$('.header-cart-wrapper').show();
		};

		resetPrices(function(){
			applyDiscount();
		});
	});

	$('.cart-show').click(function(e){
	  e.preventDefault();
		showCart();
	});

	$('.cart-close').click(function(){
		$('.lightbox').hide();
	});
});

function checkPromo(){
	user.promoCode = promoField.val();
	$.cookie('promo_code', user.promoCode);
	resetPrices(function(){
		applyDiscount();
	});
	simpleCart.update();
};


function resetPrices(callback) {

	callback = callback || function(){};
	getPricesFor = [];

	simpleCart.each(function (item, x){
		getPricesFor.push(item.get('number'));

	});

	$.ajax({
  	type: "POST",
    url: "modules/get-prices.php",
    data: {data : getPricesFor}
  }).done(function(data){
	  priceHolder = $.parseJSON(data);
	  var i = 0;
	  //console.log(priceHolder);
	  simpleCart.each(function(item){
		  item.price(priceHolder[i]);
		  i++;
	  });
	  callback();
	  simpleCart.update();
  });

};

function applyDiscount(){
	user.promoCode = $.cookie('promo_code');
	$.ajax({
		type: "POST",
		url: "modules/check-promo-code.php",
		data: {data : user.promoCode},
		dataType: 'script'
	}).done(function(data){
		data;
	});
};

function showCart() {
	resetPrices(function(){
		window.scrollTo(0,0);
		applyDiscount();
		$('.lightbox').fadeIn();
	});
}

function showResult(msg) {
	$('.promo-result').slideDown().html(msg);
}