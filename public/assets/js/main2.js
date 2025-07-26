(function (_0xcc556) {
  'use strict';

  _0xcc556(document).ready(function () {
    _0xcc556("[data-toggle=\"tooltip\"]").tooltip();
    _0xcc556(".player").mb_YTPlayer();
    new WOW().init();
    _0xcc556("#gallery-masonary,.blog-masonry").imagesLoaded(function () {
      _0xcc556(".mix-item-menu").on("click", "button", function () {
        var _0x385865 = _0xcc556(this).attr("data-filter");
        _0x47dc2f.isotope({
          'filter': _0x385865
        });
      });
      _0xcc556(".mix-item-menu button").on("click", function (_0x333bc9) {
        _0xcc556(this).siblings(".active").removeClass("active");
        _0xcc556(this).addClass("active");
        _0x333bc9.preventDefault();
      });
      var _0x47dc2f = _0xcc556("#gallery-masonary").isotope({
        'itemSelector': ".gallery-item",
        'percentPosition': true,
        'masonry': {
          'columnWidth': ".gallery-item"
        }
      });
      _0xcc556(".blog-masonry").isotope({
        'itemSelector': ".blog-item",
        'percentPosition': true,
        'masonry': {
          'columnWidth': ".blog-item"
        }
      });
    });
    _0xcc556(".timer").countTo();
    _0xcc556(".fun-fact").appear(function () {
      _0xcc556(".timer").countTo();
    }, {
      'accY': -100
    });
    _0xcc556(".admission-form-style-one select").niceSelect();
    _0xcc556(".category-search select").niceSelect();
    _0xcc556(".form-style-two select").niceSelect();
    _0xcc556(".popup-link").magnificPopup({
      'type': "image"
    });
    _0xcc556(".popup-gallery").magnificPopup({
      'type': "image",
      'gallery': {
        'enabled': true
      }
    });
    _0xcc556(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
      'type': "iframe",
      'mainClass': "mfp-fade",
      'removalDelay': 0xa0,
      'preloader': false,
      'fixedContentPos': false
    });
    _0xcc556(".magnific-mix-gallery").each(function () {
      var _0x378727 = _0xcc556(this);
      var _0x4efa9f = _0x378727.find(".item");
      var _0x1c085e = [];
      _0x4efa9f.each(function () {
        var _0x2ebb97 = _0xcc556(this);
        var _0x134821 = "image";
        if (_0x2ebb97.hasClass("magnific-iframe")) {
          _0x134821 = "iframe";
        }
        var _0x5f0c9c = {
          'src': _0x2ebb97.attr("href"),
          'type': _0x134821
        };
        _0x5f0c9c.title = _0x2ebb97.data("title");
        _0x1c085e.push(_0x5f0c9c);
      });
      _0x4efa9f.magnificPopup({
        'mainClass': "mfp-fade",
        'items': _0x1c085e,
        'gallery': {
          'enabled': true,
          'tPrev': _0xcc556(this).data("prev-text"),
          'tNext': _0xcc556(this).data("next-text")
        },
        'type': "image",
        'callbacks': {
          'beforeOpen': function () {
            var _0x3ab157 = _0x4efa9f.index(this.st.el);
            if (-1 !== _0x3ab157) {
              this.goTo(_0x3ab157);
            }
          }
        }
      });
    });
    var _0x5a3b77 = new Swiper(".testimonial-style-one-carousel", {
      'spaceBetween': 0xa,
      'navigation': {
        'nextEl': ".swiper-button-next",
        'prevEl': ".swiper-button-prev"
      },
      'loop': false,
      'loopedSlides': 0x3
    });
    var _0x51345d = new Swiper(".testimonial-bullet", {
      'spaceBetween': 0x0,
      'touchRatio': 0.2,
      'slideToClickedSlide': true,
      'loop': false,
      'loopedSlides': 0x3,
      'effect': "cards"
    });
    _0x5a3b77.controller.control = _0x51345d;
    _0x51345d.controller.control = _0x5a3b77;
    var _0x17543d = new Swiper(".course-style-one-carousel", {
      'spaceBetween': 0xa,
      'navigation': {
        'nextEl': ".swiper-button-next",
        'prevEl': ".swiper-button-prev"
      },
      'loop': true,
      'loopedSlides': 0x5
    });
    var _0x56bbf5 = new Swiper(".course-style-one-bullet", {
      'spaceBetween': 0x0,
      'slidesPerView': "auto",
      'touchRatio': 0.2,
      'slideToClickedSlide': true,
      'loop': true,
      'loopedSlides': 0x5,
      'spaceBetween': 0xf,
      'breakpoints': {
        0x300: {
          'slidesPerView': 0x2
        },
        0x3e0: {
          'slidesPerView': 0x2
        },
        0x4b0: {
          'slidesPerView': 0x3
        },
        0x578: {
          'slidesPerView': 0x4
        }
      }
    });
    _0x56bbf5.controller.control = _0x17543d;
    let _0x2757e1 = document.querySelector(".split-text");
    if (_0x2757e1) {
      const _0x3482c6 = document.querySelectorAll(".split-text");
      _0x3482c6.forEach(_0x442c68 => {
        var _0xdc8693 = new SplitText(_0x442c68, {
          'type': "lines, words",
          'linesClass': "line"
        });
        var _0x2e7788 = gsap.timeline({
          'duration': 0x0,
          'ease': "power4",
          'scrollTrigger': {
            'trigger': _0x442c68,
            'start': "top 90%"
          }
        });
        _0x2e7788.from(_0xdc8693.words, {
          'yPercent': "100",
          'stagger': 0.025
        });
      });
    }
    _0xcc556(".contact-form").each(function () {
      var _0x92c649 = _0xcc556(this);
      _0x92c649.submit(function () {
        var _0x186532 = _0xcc556(this).attr("action");
        _0xcc556("#message").slideUp(750, function () {
          _0xcc556("#message").hide();
          _0xcc556("#submit").after("<img src=\"assets/img/ajax-loader.gif\" class=\"loader\" />").attr("disabled", "disabled");
          _0xcc556.post(_0x186532, {
            'name': _0xcc556("#name").val(),
            'email': _0xcc556("#email").val(),
            'phone': _0xcc556("#phone").val(),
            'comments': _0xcc556("#comments").val()
          }, function (_0x4c5d35) {
            document.getElementById("message").innerHTML = _0x4c5d35;
            _0xcc556("#message").slideDown("slow");
            _0xcc556(".contact-form img.loader").fadeOut("slow", function () {
              _0xcc556(this).remove();
            });
            _0xcc556("#submit").removeAttr("disabled");
          });
        });
        return false;
      });
    });
  });
  function _0x5b7f8f() {
    _0xcc556(window).on("load", function () {
      _0xcc556("#edufix-preloader").addClass("loaded");
      _0xcc556("#loading").fadeOut(500);
      if (_0xcc556("#edufix-preloader").hasClass("loaded")) {
        _0xcc556("#preloader").delay(900).queue(function () {
          _0xcc556(this).remove();
        });
      }
    });
  }
  _0x5b7f8f();
})(jQuery);
