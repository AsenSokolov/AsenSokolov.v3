/*
 Created by Asen Sokolov on 20.03.2015.
 Phone UAE: +971 56 912 0557;
 Phone Bulgaria:  +359 88 335 0672;
 Email: contact@asensokolov.com

 Hey there. Thanks for taking a peek at what goes on behind the scene in my website.
 That means you're probably
 a) someone we want to hire  OR
 b) someone we want to work with.
 In any case, please shoot us an email at: contact@asensokolov.com
 */

(function () {
    'use strict';

    var app = angular.module('app', [
        // Angular modules
        'ngRoute',          // routing
        'ngAnimate',        // animation
        'ngResource',
        'ngSanitize',       // sanitizes html bindings (ex: sidebar.js)
        'ngAria',
        'ngMaterial',

        // Custom modules
        'loadingIndicator',
        'appHeader',
        'coverImage',
        'appFooter',
        'appFooter',
        'newsletterForm',

        // 3rd Party Modules

        'slick',
        'mailchimp',
        '720kb.datepicker'

    ]);

    // Handle routing errors and success events
    app.run(['$rootScope', '$location', '$anchorScroll',  function ($rootScope, $location, $anchorScroll) {
        $rootScope.isRouteLoading = false;

        // Include $route to kick start the router.
        $rootScope.$on('$routeChangeStart', function() {
            $rootScope.isRouteLoading = true;
            $anchorScroll('Nav-wrapper');
        });

        $rootScope.$on('$routeChangeSuccess', function() {
            $rootScope.isRouteLoading = false;
        });
    }]);
})();