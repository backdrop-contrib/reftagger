(function($, Backdrop, document, window) {
  // This variable must be set to global scope.
  window['refTagger'] = window['refTagger'] || {
    settings: {}
  };

  /**
   * Attaches RefTagger extenral JS, and attach settings.
   */
  Backdrop.behaviors.refTagger = {
    attach: function(context, settings) {
      window['refTagger'].settings = Backdrop.settings.refTagger;

      var g = document.createElement('script'),
        s = document.getElementsByTagName('script')[0];
      g.src = "//api.reftagger.com/v2/RefTagger.js";
      s.parentNode.insertBefore(g, s);
    }
  }
}) (jQuery, Backdrop, document, window);
