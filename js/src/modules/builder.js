require_template('hb-controls');
require_template('hb-control');
require_template('hb-layers');

$(function() {

  window.App = {};

  App.Templates = {};
  App.Models = {};
  App.Collections = {};
  App.Views = {};

  App.Templates.Layer = $("#template-hb-layers").html(),
  App.Templates.Controls = $('#template-hb-controls').html(),
  App.Templates.Control = $('#template-hb-control').html(),

  App.Models.Option = Backbone.Model.extend({
    defaults: {
      "id": "body",
      "color": "red",
      "swatch": "red.png",
      "selected": false
    }
  });

  App.Models.Layer = Backbone.Model.extend({

    defaults: {

    }

  });

  App.Collections.LayerList = Backbone.Collection.extend({

    defaults: {

      model: App.Models.Layer

    },

    model: App.Models.Layer,

    url: '/json/hoodiebuilder.json'

  });

  App.Views.Controls = Backbone.View.extend({

    tagName: 'div',

    className: 'control-group-wrapper',

    template: _.template(App.Templates.Controls),

    events: {

      'click .control-group-header ': 'headerClick'

    },

    headerClick: function() {

      var thisGroup = this.$el.find('.control-group');

      if (thisGroup.is(':visible')) {

        thisGroup.hide();

      } else {

        var controlGroups = $('.control-group').not(thisGroup);

        controlGroups.hide();

        thisGroup.show();

      }

    },

    initialize: function() {

      return this;

    },

    render: function() {

      this.$el.html(this.template(this.model.attributes));

      var scope = this,
        options = this.model.attributes.options;
        controlGroup = this.$el.find('.control-group');

      _.each(options, function(option) {

        option.namespace = "hoodiebuilder";

        var className = scope.model.attributes.id + '-control',
          control = new App.Views.Control({
            model: option,
            className: className
          });

        controlGroup.append(control.render().el);

      });

      controlGroup.hide();

      return this;

    }

  });

  App.Views.Control = Backbone.View.extend({

    tagName: 'div',

    template: _.template(App.Templates.Control),

    events: {

      "click": "controlClick"

    },

    controlClick: function() {

      var data = this.$el.data();

      Hoodie.set(data.piece, data.value);

    },

    initialize: function() {

      return this;

      console.log('init');

    },

    render: function() {

      var id = this.className.replace('-control', '');

      var selector = id;

      var $controlGroup = $('#' + selector + '-controls');

      this.$el
        .html(this.template(this.model))
        .addClass('control')
        .data('piece', id)
        .data('value', this.model.color);

      $controlGroup.append(this.el);

      return this;

    }

  });

  App.Views.Layers = Backbone.View.extend({

    el: $('#builder-view'),

    template: _.template(App.Templates.Layer),

    initialize: function() {

      this.render();

      return this;

    },

    render: function() {

      this.$el.append(this.template(this.model.attributes));

      return this;

    }

  });

  App.Views.Builder = Backbone.View.extend({

    initialize: function() {

      var scope = this;

      this.collection = new App.Collections.LayerList;

      this.collection.fetch({

        success: function(layers) {

          scope.render();

        }

      });

      return this;

    },

    render: function() {

      this.collection.each(function(part) {

        var controls = new App.Views.Controls({ model: part });

        $('#builder-controls').append(controls.render().el);

        var layers = new App.Views.Layers({ model: part });

        var id = part.attributes.id;

        $('#' + id).flexslider({
          animation: "slide",
          slideshow: false,
          manualControls: '.' + id + '-control',
          controlsContainer: '#' + id + '-controls',
          touch: false,
          directionNav: false
        });

      });

      router = new Router;

      Backbone.history.start({ root: location.pathname });

    }

  });

  var hb = new App.Views.Builder();

  var Hoodie = (function() {

    var hoodie = {};

    return {

      set: function(piece, value) {

        $('#' + piece + '-input').val(value);

        Hoodie.updateDescription();

      },

      updateDescription: function() {

        var string = "",
          url = "/";

        $.each($('.builder-input'), function() {

          var $this = $(this),
            part = $this.attr('id').replace("-input", "");

          string += part + ': ' + $this.val() + ",<br>";

          url += $this.val() + "/";

        });

        string += 'length: ' + $('#product-length').val() + "\"";

        $('#customDetail').text(string);

        router.navigate(url);

      }

    }

  }());

  var Router = Backbone.Router.extend({

    routes: {

      '*param': function() {

        $(function() {

          var arr = location.hash.replace("#", "").split("/");

          _.each(arr, function(value, i) {

            if (value !== '') {

              targetRow = $('.control-group:eq(' + i + ') .control');

              target = targetRow.filterByData('value', value);

              target.click();

            }

          });

        });

      }

    }

  });

  $(window).load(function() {

    $('.builder-hider').fadeOut();

  });

});

function require_template(templateName) {

  var template = $('#template_' + templateName);
  if (template.length === 0) {
    var tmpl_dir = '/templates';
    var tmpl_url = tmpl_dir + '/' + templateName + '.html';
    var tmpl_string = '';

    $.ajax({
      url: tmpl_url,
      method: 'GET',
      async: false,
      contentType: 'text',
      success: function (data) {
        tmpl_string = data;
      }
    });

    $('head').append('<script id="template-' +
    templateName + '" type="text/template">' + tmpl_string + '<\/script>');

  }
}

$.fn.filterByData = function(prop, val) {
    return this.filter(
        function() { return $(this).data(prop)==val; }
    );
}
