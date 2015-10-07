(function () {
    'use strict';

    var app = angular.module('appHeader', []);

    app.directive('appHeader', function() {
        return {
            restrict: 'E',
            templateUrl: '/app/shared/header/header-view.html',
            replace: true,
        };
    });

})();