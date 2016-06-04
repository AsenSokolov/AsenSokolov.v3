define(function(require) {
    var angular = require('angular');

    var newsletter = angular.module('newsletter', []);

    newsletter.directive('newsletterForm', function() {
        return {
            restrict: 'E',
            templateUrl: '/app/shared/newsletter/newsletter.html',
            replace: true,
            link: function() {

            }
        };
    });

    return newsletter;
});



