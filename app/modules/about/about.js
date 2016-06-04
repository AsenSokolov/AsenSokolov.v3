define(function(require) {

    var angular = require('angular');

    var about = angular.module('about', []);

    var aboutService = require('app/modules/about/about-service.js');
    about.factory('aboutService', aboutService);

    about.controller('AboutController',['$scope', 'coverParams', 'metaTags', 'pageLoading', 'aboutService',
        function ($scope, coverParams, metaTags, pageLoading, aboutService) {
            pageLoading.setLoadingStatus(true);

            aboutService.getInfo().then(function(inf) {
                $scope.aboutData = inf;

                pageLoading.setLoadingStatus(false);

                coverParams.setCoverTitle($scope.aboutData.coverTitle);
                coverParams.setCoverSubTitle($scope.aboutData.coverDescription);
                coverParams.setCoverImage($scope.aboutData.coverImage);

                metaTags.setPageTitle($scope.aboutData.title);
                metaTags.setPageDescription($scope.aboutData.descr);
                metaTags.setPageKeywords($scope.aboutData.keywords);
                metaTags.setFbImage($scope.aboutData.fbImage);
                metaTags.setTwImage($scope.aboutData.twImage);
            });
        }
    ]);

    return about;
});


