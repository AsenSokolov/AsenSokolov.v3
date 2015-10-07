(function () {
    'use strict';

    var app = angular.module('appFooter', []);

    app.directive('appFooter', function() {
        return {
            restrict: 'E',
            templateUrl: '/app/shared/footer/footer-view.html',
            replace: true,
        };
    });

})();