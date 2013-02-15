	$(function(){
		sizes = $('.size-selector-size');
		sizeSelect = $('#paypalSizes');
		
		sizes.click(function(){
			sizes.removeClass(' size-selector-size-selected');
			$(this).addClass(' size-selector-size-selected');
			size = ($(this).data('size'));
			console.log(size);
			sizeSelect.val(size);
		});
	});