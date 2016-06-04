define(function(require) {

    var angular = require('angular');
    var showcaseProject = angular.module('showcaseProject', []);

    var showcaseProjectService = require('app/modules/showcase-project/showcase-project-service.js');
    showcaseProject.factory('showcaseProjectService', showcaseProjectService);


    showcaseProject.controller('ShowcaseProjectController',['$scope','coverParams', 'metaTags', 'pageLoading', 'showcaseProjectService',
        function ($scope, coverParams, metaTags, pageLoading, showcaseProjectService) {
            pageLoading.setLoadingStatus(true);

            showcaseProjectService.getInfo().then(function(inf) {
                $scope.project = inf;

                pageLoading.setLoadingStatus(false);

                coverParams.setCoverTitle($scope.project.coverTitle);
                coverParams.setCoverSubTitle($scope.project.coverDescription);
                coverParams.setCoverImage($scope.project.coverImage);

                metaTags.setPageTitle($scope.project.title);
                metaTags.setPageDescription($scope.project.descr);
                metaTags.setPageKeywords($scope.project.keywords);
                metaTags.setFbImage($scope.project.fbImage);
                metaTags.setTwImage($scope.project.twImage);

            });
        }
    ]);

    return showcaseProject;
});




