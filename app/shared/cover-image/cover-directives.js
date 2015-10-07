(function () {
    'use strict';

    var app = angular.module('coverImage', []);

    app.directive('coverImage', ['$timeout', function($timeout) {
        return {
            restrict: 'E',
            templateUrl: '/app/shared/cover-image/cover.html',
            replace: true
        };
    }]);

})();