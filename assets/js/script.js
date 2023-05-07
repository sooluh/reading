(function ($) {
  'use strict';

  up.log.config.banner = false;
  up.log.disable();

  up.compiler('[data-masonry]', function (element) {
    new Masonry(element);
  });

  up.on('up:fragment:inserted', function () {
    new LazyLoad({
      callback_load: function (element) {
        element.classList.add('loaded');
      },
    });
  });
})(window.jQuery);