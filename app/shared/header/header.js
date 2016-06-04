define(function(require) {
    var angular = require('angular');

    var header = angular.module('header', []);

    header.controller('HeaderController',['$scope', 'coverParams',
        function ($scope, coverParams) {
            $scope.coverParams = coverParams;
        }
    ]);

    header.directive('appHeader', function() {
        return {
            restrict: 'E',
            templateUrl: '/app/shared/header/header.html',
            replace: true,
            link: function() {

            }
        };
    });

    header.factory('coverParams',['$location', function($location){
        var coverImage = "";
        var coverTitle = "";
        var coverSubTitle = "";

        return {
            getCoverImage: function() {
                return coverImage;
            },
            setCoverImage: function(newImage) {
                coverImage = newImage;
            },

            getCoverTitle: function() {
                return coverTitle;
            },
            setCoverTitle: function(newTitle) {
                coverTitle = newTitle;
            },

            getCoverSubTitle: function() {
                return coverSubTitle;
            },
            setCoverSubTitle: function(newSubTitle) {
                coverSubTitle = newSubTitle;
            }
        };
    }]);

    return header;
});