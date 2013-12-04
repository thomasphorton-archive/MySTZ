$(function(){

  $('.collapsible-pane').hide();
  $('.collapsible').prepend('<p><a class="collapsible-all" href="#">Show/Hide All</a></p>');
  $('.collapsible-all').click(function(e) {
    var obj = $(this).parents('.collapsible');
    obj.find('.collapsible-pane').slideToggle('fast').toggleClass('collapsible-open');
    obj.find('.collapsible-trigger').toggleClass('collapsible-open');
    e.preventDefault();
  });
  $('.collapsible-trigger').click(function(e) {
    var obj = $(this);
    obj.next('.collapsible-pane').slideToggle('fast').toggleClass('collapsible-open');
    obj.toggleClass('collapsible-open');
    e.preventDefault();
  });
});