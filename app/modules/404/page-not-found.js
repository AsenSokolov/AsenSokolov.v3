define(function(require) {

    var angular = require('angular');

    var pageNotFound = angular.module('pageNotFound', []);

    pageNotFound.controller('PageNotFoundController', ['$scope', '$timeout', 'coverParams', 'metaTags', 'pageLoading',
        function ($scope, $timeout, coverParams, metaTags, pageLoading) {

            pageLoading.setLoadingStatus(true);

            $timeout(function() {
                pageLoading.setLoadingStatus(false);
            }, 1000);

            coverParams.setCoverTitle('Whoops!');
            coverParams.setCoverSubTitle('404 PAGE NOT FOUND!<br/> Choose your evacuation plan!');
            coverParams.setCoverImage('assets/img/covers/404-cover.jpg');

            metaTags.setPageTitle('404 PAGE NOT FOUND!');
            metaTags.setPageDescription('Choose your evacuation plan!');
            metaTags.setFbImage('assets/img/covers/404-cover.jpg');
            metaTags.setTwImage('');

        }
    ]);

    return pageNotFound;
});


