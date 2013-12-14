$(function() {

  var $ajaxForm = $('.form-ajax');

  $ajaxForm.submit(function(e) {

    e.preventDefault();

    var $this = $(this),
      id = $this.attr('id'),
      url = $this.attr('action'),
      data = $this.serialize();

    $.post(url, data, function(resp) {

      if (resp === "1") {

        $this.find('fieldset').hide();

        $this.find('.form-success').fadeIn();

        track('Forms', 'Form Submit', id);

      } else {

        console.log('ajax form failure');

        track('Forms', 'Form Error', id);

      }

    });

  });

});