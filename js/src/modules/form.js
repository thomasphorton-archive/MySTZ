$(function() {

  var $ajaxForm = $('.form-ajax');

  $ajaxForm.submit(function(e) {

    e.preventDefault();

    var $this = $(this),
      url = $this.attr('action'),
      data = $this.serialize();

      console.log(data);

    $.post(url, data, function(resp) {

      if (resp === "1") {

        $this.find('fieldset').hide();

        $this.find('.form-success').fadeIn();

      } else {

        console.log('ajax form failure');

      }

    });

  });

});