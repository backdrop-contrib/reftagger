/**
 * @file
 * Load the external javascript with settings. 
 */

(function($, Backdrop, document, window) {
  // This variable must be set to global scope.
  window['refTagger'] = window['refTagger'] || {
    settings: {}
  };

  /**
   * Attaches RefTagger external JS, and attach settings.
   */
  Backdrop.behaviors.refTagger = {
    attach: function(context, settings) {
      // Load the settings.
      window['refTagger'].settings = Backdrop.settings.refTagger;

      // Define and add the script.
      var reftagger_script = document.createElement('script'),
      scripts = document.getElementsByTagName('script')[0];
      reftagger_script.src = "//api.reftagger.com/v2/RefTagger.js";
      scripts.parentNode.insertBefore(reftagger_script, scripts);
    }
  }
}) (jQuery, Backdrop, document, window);
