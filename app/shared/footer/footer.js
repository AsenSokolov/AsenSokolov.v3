define(function(require) {
    var angular = require('angular');

    var footer = angular.module('footer', ['slick']);
    var footerService = require('app/shared/footer/footer-service.js');
    footer.factory('footerService', footerService);

    footer.controller('FooterController', ['$scope', 'footerService', function ($scope, footerService) {
        footerService.getFooterInfo().then(function(inf) {
            $scope.footerData = inf;
            $scope.footerData.currentDate = new Date();
        });
    }]);

    footer.directive('appFooter', function() {
        return {
            restrict: 'E',
            templateUrl: '/app/shared/footer/footer.html',
            replace: true,
            link: function() {

            }
        };
    });

    return footer;
});