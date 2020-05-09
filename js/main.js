/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./scss/bootstrap.scss":
/*!*****************************!*\
  !*** ./scss/bootstrap.scss ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./scss/main.scss":
/*!************************!*\
  !*** ./scss/main.scss ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./src/main.js":
/*!*********************!*\
  !*** ./src/main.js ***!
  \*********************/
/*! no static exports found */
/***/ (function(module, exports) {

jQuery(document).ready(function () {
  "use strict";

  var window_width = jQuery(window).width(),
      window_height = window.innerHeight,
      header_height = jQuery(".default-header").height(),
      header_height_static = jQuery(".site-header.static").outerHeight(),
      fitscreen = window_height - header_height;
  jQuery(".fullscreen").css("height", window_height);
  jQuery(".fitscreen").css("height", fitscreen); //------- Niceselect  js --------//  

  if (document.getElementById("default-select")) {
    jQuery('select').niceSelect();
  }

  ;

  if (document.getElementById("default-select2")) {
    jQuery('select').niceSelect();
  }

  ; //------- Lightbox  js --------//  

  jQuery('.img-gal').magnificPopup({
    type: 'image',
    gallery: {
      enabled: true
    }
  });
  jQuery('.play-btn').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  }); //------- Datepicker  js --------//  

  jQuery(function () {
    jQuery("#datepicker").datepicker();
    jQuery("#datepicker2").datepicker();
  }); //------- Superfist nav menu  js --------//  

  jQuery('.nav-menu').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 400
  }); //------- Accordion  js --------//  

  jQuery(document).ready(function (jQuery) {
    if (document.getElementById("accordion")) {
      var accordion_1 = new Accordion(document.getElementById("accordion"), {
        collapsible: false,
        slideDuration: 500
      });
    }
  }); //------- Owl Carusel  js --------//  

  jQuery('.active-gallery-carusel').owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    navText: ["<span class='lnr lnr-arrow-left'></span>", "<span class='lnr lnr-arrow-right'></span>"],
    smartSpeed: 650
  });
  jQuery('.active-testimonial').owlCarousel({
    items: 2,
    loop: true,
    margin: 30,
    autoplayHoverPause: true,
    dots: true,
    autoplay: true,
    nav: true,
    navText: ["<span class='lnr lnr-arrow-up'></span>", "<span class='lnr lnr-arrow-down'></span>"],
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 1
      },
      768: {
        items: 2
      }
    }
  });
  jQuery('.active-brand-carusel').owlCarousel({
    items: 4,
    loop: true,
    margin: 30,
    autoplayHoverPause: true,
    smartSpeed: 650,
    autoplay: true,
    responsive: {
      0: {
        items: 2
      },
      480: {
        items: 2
      },
      768: {
        items: 4
      }
    }
  }); //------- Search Form  js --------//  

  jQuery(document).ready(function () {
    jQuery('#search').on("click", function (e) {
      jQuery(".form-group").addClass("sb-search-open");
      e.stopPropagation();
    });
    jQuery(document).on("click", function (e) {
      if (jQuery(e.target).is("#search") === false && jQuery(".form-control").val().length == 0) {
        jQuery(".form-group").removeClass("sb-search-open");
      }
    });
    jQuery(".form-control-submit").click(function (e) {
      jQuery(".form-control").each(function () {
        if (jQuery(".form-control").val().length == 0) {
          e.preventDefault();
          jQuery(this).css('border', '2px solid red');
        }
      });
    });
  }); //------- Mobile Nav  js --------//  

  if (jQuery('#nav-menu-container').length) {
    var $mobile_nav = jQuery('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': '',
      'id': ''
    });
    jQuery('body .main-menu').append($mobile_nav);
    jQuery('body .main-menu').prepend('<button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i><span class="menu-title">Menu</span> </button>');
    jQuery('body .main-menu').append('<div id="mobile-body-overly"></div>');
    jQuery('#mobile-nav').find('.menu-has-children').prepend('<i class="lnr lnr-chevron-down"></i>');
    jQuery(document).on('click', '.menu-has-children i', function (e) {
      jQuery(this).next().toggleClass('menu-item-active');
      jQuery(this).nextAll('ul').eq(0).slideToggle();
      jQuery(this).toggleClass("lnr-chevron-up lnr-chevron-down");
    });
    jQuery(document).on('click', '#mobile-nav-toggle', function (e) {
      jQuery('body').toggleClass('mobile-nav-active');
      jQuery('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
      jQuery('#mobile-body-overly').toggle();
    });
    jQuery(document).on('click', function (e) {
      var container = jQuery("#mobile-nav, #mobile-nav-toggle");

      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if (jQuery('body').hasClass('mobile-nav-active')) {
          jQuery('body').removeClass('mobile-nav-active');
          jQuery('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
          jQuery('#mobile-body-overly').fadeOut();
        }
      }
    });
  } else if (jQuery("#mobile-nav, #mobile-nav-toggle").length) {
    jQuery("#mobile-nav, #mobile-nav-toggle").hide();
  } //------- Sticky Main Menu js --------//  


  window.onscroll = function () {
    stickFunction();
  };

  var navbar = document.getElementById("main-menu");
  var sticky = navbar.offsetTop;

  function stickFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky");
    } else {
      navbar.classList.remove("sticky");
    }
  } //------- Smooth Scroll  js --------//  


  jQuery('.nav-menu a, #mobile-nav a, .scrollto').on('click', function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);

      if (target.length) {
        var top_space = 0;

        if (jQuery('#header').length) {
          top_space = jQuery('#header').outerHeight();

          if (!jQuery('#header').hasClass('header-fixed')) {
            top_space = top_space;
          }
        }

        jQuery('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if (jQuery(this).parents('.nav-menu').length) {
          jQuery('.nav-menu .menu-active').removeClass('menu-active');
          jQuery(this).closest('li').addClass('menu-active');
        }

        if (jQuery('body').hasClass('mobile-nav-active')) {
          jQuery('body').removeClass('mobile-nav-active');
          jQuery('#mobile-nav-toggle i').toggleClass('lnr-times lnr-bars');
          jQuery('#mobile-body-overly').fadeOut();
        }

        return false;
      }
    }
  });
  jQuery(document).ready(function () {
    jQuery('html, body').hide();

    if (window.location.hash) {
      setTimeout(function () {
        jQuery('html, body').scrollTop(0).show();
        jQuery('html, body').animate({
          scrollTop: jQuery(window.location.hash).offset().top - 108
        }, 1000);
      }, 0);
    } else {
      jQuery('html, body').show();
    }
  }); //------- Google Map  js --------//  

  if (document.getElementById("map")) {
    var init = function init() {
      var mapOptions = {
        zoom: 11,
        center: new google.maps.LatLng(40.6700, -73.9400),
        // New York
        styles: [{
          "featureType": "water",
          "elementType": "geometry",
          "stylers": [{
            "color": "#e9e9e9"
          }, {
            "lightness": 17
          }]
        }, {
          "featureType": "landscape",
          "elementType": "geometry",
          "stylers": [{
            "color": "#f5f5f5"
          }, {
            "lightness": 20
          }]
        }, {
          "featureType": "road.highway",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#ffffff"
          }, {
            "lightness": 17
          }]
        }, {
          "featureType": "road.highway",
          "elementType": "geometry.stroke",
          "stylers": [{
            "color": "#ffffff"
          }, {
            "lightness": 29
          }, {
            "weight": 0.2
          }]
        }, {
          "featureType": "road.arterial",
          "elementType": "geometry",
          "stylers": [{
            "color": "#ffffff"
          }, {
            "lightness": 18
          }]
        }, {
          "featureType": "road.local",
          "elementType": "geometry",
          "stylers": [{
            "color": "#ffffff"
          }, {
            "lightness": 16
          }]
        }, {
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [{
            "color": "#f5f5f5"
          }, {
            "lightness": 21
          }]
        }, {
          "featureType": "poi.park",
          "elementType": "geometry",
          "stylers": [{
            "color": "#dedede"
          }, {
            "lightness": 21
          }]
        }, {
          "elementType": "labels.text.stroke",
          "stylers": [{
            "visibility": "on"
          }, {
            "color": "#ffffff"
          }, {
            "lightness": 16
          }]
        }, {
          "elementType": "labels.text.fill",
          "stylers": [{
            "saturation": 36
          }, {
            "color": "#333333"
          }, {
            "lightness": 40
          }]
        }, {
          "elementType": "labels.icon",
          "stylers": [{
            "visibility": "off"
          }]
        }, {
          "featureType": "transit",
          "elementType": "geometry",
          "stylers": [{
            "color": "#f2f2f2"
          }, {
            "lightness": 19
          }]
        }, {
          "featureType": "administrative",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#fefefe"
          }, {
            "lightness": 20
          }]
        }, {
          "featureType": "administrative",
          "elementType": "geometry.stroke",
          "stylers": [{
            "color": "#fefefe"
          }, {
            "lightness": 17
          }, {
            "weight": 1.2
          }]
        }]
      };
      var mapElement = document.getElementById('map');
      var map = new google.maps.Map(mapElement, mapOptions);
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.6700, -73.9400),
        map: map,
        title: 'Snazzy!'
      });
    };

    google.maps.event.addDomListener(window, 'load', init);
  } //------- Mailchimp js --------//  


  jQuery(document).ready(function () {
    jQuery('#mc_embed_signup').find('form').ajaxChimp();
  });
}); // youtube custom play button and thumbail script

var tag = document.createElement('script');
tag.src = "//www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var player;

var onYouTubeIframeAPIReady = function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    height: '244',
    width: '434',
    videoId: 'VZ9MBYfu_0A',
    // youtube video id
    playerVars: {
      'autoplay': 0,
      'rel': 0,
      'showinfo': 0
    },
    events: {
      'onStateChange': onPlayerStateChange
    }
  });
};

var p = document.getElementById("player");
jQuery(p).hide();
var t = document.getElementById("thumbnail"); //t.src = "img/video/play-btn.png";

var onPlayerStateChange = function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.ENDED) {
    jQuery('.start-video').fadeIn('normal');
  }
};

jQuery(document).on('click', '.start-video', function () {
  jQuery(this).hide();
  jQuery("#player").show();
  jQuery("#thumbnail_container").hide();
  player.playVideo();
});

/***/ }),

/***/ 0:
/*!******************************************************************!*\
  !*** multi ./src/main.js ./scss/main.scss ./scss/bootstrap.scss ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp1\htdocs\wordpressnew\wp-content\themes\victorry\src\main.js */"./src/main.js");
__webpack_require__(/*! C:\xampp1\htdocs\wordpressnew\wp-content\themes\victorry\scss\main.scss */"./scss/main.scss");
module.exports = __webpack_require__(/*! C:\xampp1\htdocs\wordpressnew\wp-content\themes\victorry\scss\bootstrap.scss */"./scss/bootstrap.scss");


/***/ })

/******/ });