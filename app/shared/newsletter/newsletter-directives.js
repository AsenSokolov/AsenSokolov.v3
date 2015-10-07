(function () {
    'use strict';

    var app = angular.module('newsletterForm', []);

    app.directive('newsletterForm', function() {
        return {
            restrict: 'E',
            templateUrl: '/app/shared/newsletter/newsletter-view.html'
        };
    });

})();