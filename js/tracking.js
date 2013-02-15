$(function(){
	productLink = $('.product-individual-link');
	
	productLink.click(function(){
		source = $(this).data('linkType');
		product = $(this).data('productTitle');
		track('Viewed Product', source, product);
	});
	
	btn = $('.btn');
	btn.click(function(e){
		product = $(this).data('productTitle');
		size = 'Unknown'; //come back to this
		track('Added to Cart', product, size);
	});
	
});

function track(category, action, label){
	_gaq.push(['_trackEvent', category, action, label]);
}