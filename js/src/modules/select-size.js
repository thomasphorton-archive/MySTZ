$(function(){
	sizes = $('.size-selector-size');
	sizeHolder = $('.item_size');

	sizes.click(function(){
		sizes.removeClass(' size-selector-size-selected');
		$(this).addClass(' size-selector-size-selected');
		size = ($(this).data('size'));
		sizeHolder.val(size);
	});
});