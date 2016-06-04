define(function(require) {
    var angular = require('angular');

    var loading = angular.module('loading', []);

    loading.directive('loadingIndicator', function() {
        return {
            restrict: 'E',
            templateUrl: '/app/shared/loading/loading.html',
            replace: true,
            link: function() {

            }
        };
    });

    return loading;
});



