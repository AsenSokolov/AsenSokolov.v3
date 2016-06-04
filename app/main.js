require.config({

  paths: {
    // jQuery Libs
    'jquery'              : '../assets/js/lib/jquery/jquery-1.11.2.min',
    'TweenMax'            : '../assets/js/lib/greensock/TweenMax.min',
    'TimelineMax'         : '../assets/js/lib/greensock/TimelineMax.min',
    'ScrollMagic'         : '../assets/js/lib/scrollmagic/ScrollMagic.min',
    'animationGSAP'       : '../assets/js/lib/scrollmagic/plugins/animation.gsap.min',
    'jquery.slick'        : '../assets/js/lib/carousel/jquery.slick.min',

    // Angular Libs
    'angular'             : '../assets/js/lib/angular/angular.min',
    'ngRoute'             : '../assets/js/lib/angular/angular-route.min',
    'ngAnimate'           : '../assets/js/lib/angular/angular-animate.min',
    'ngResource'          : '../assets/js/lib/angular/angular-resource.min',
    'ngSanitize'          : '../assets/js/lib/angular/angular-sanitize.min',
    'ngAria'              : '../assets/js/lib/angular/angular-aria.min',
    'ngMaterial'          : '../assets/js/lib/angular/angular-material.min',


    // 3d Part Plugins
    'mailchimp'           : '../assets/js/lib/angular/angular-mailchimp',
    'angular.slick'       : '../assets/js/lib/carousel/angular.slick.min',
    '720kb.datepicker'    : '../assets/js/lib/angular/angular-datepicker.min',
    '720kb.socialshare'    : '../assets/js/lib/angular/angular-socialshare',
  },

  shim: {
    'angular': {
      exports: 'angular',
      deps: ['jquery']
    },
    'TweenMax': {
      deps: ['jquery']
    },
    'TimelineMax': {
      deps: ['TweenMax']
    },
    'ScrollMagic': {
      deps: ['TimelineMax']
    },
    'animationGSAP': {
      deps: ['ScrollMagic']
    },
    'jquery.slick': {
      deps: ['jquery']
    },
    'angular.slick': {
      deps: ['angular', 'jquery.slick']
    },
    'ngRoute': {
      deps: ['angular']
    },
    'ngAnimate': {
      deps: ['angular']
    },
    'ngResource': {
      deps: ['angular']
    },
    'ngSanitize': {
      deps: ['angular']
    },
    'ngAria': {
      deps: ['angular']
    },
    'ngMaterial': {
      deps: ['angular']
    },
    'mailchimp': {
      deps: ['angular']
    },
    '720kb.socialshare': {
      deps: ['angular']
    },
    '720kb.datepicker': {
      deps: ['angular']
    }
  }

});
require(['app'], function() {
  angular.bootstrap(document, ['app']);
});