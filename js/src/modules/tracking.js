$(function(){
	productLink = $('.product-individual-link');

	productLink.click(function(){
		source = $(this).data('linkType');
		product = $(this).data('productTitle');
		track('Viewed Product', source, product);
	});

});

function track(category, action, label){
	_gaq.push(['_trackEvent', category, action, label]);
}