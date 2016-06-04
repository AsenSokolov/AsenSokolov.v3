define(function(require) {

    var angular = require('angular');

    var newsArticle = angular.module('newsArticle', []);

    var newsArticleService = require('app/modules/news-article/news-article-service.js');
    newsArticle.factory('newsArticleService', newsArticleService);


    newsArticle.controller('NewsArticleController',['$scope','coverParams', 'metaTags', 'pageLoading', 'newsArticleService',
        function ($scope, coverParams, metaTags, pageLoading, newsArticleService) {
            $scope.article = newsArticleService;

            pageLoading.setLoadingStatus(true);

            newsArticleService.getInfo().then(function(inf) {
                $scope.article = inf;

                pageLoading.setLoadingStatus(false);

                coverParams.setCoverTitle($scope.article.coverTitle);
                coverParams.setCoverSubTitle($scope.article.coverDescription);
                coverParams.setCoverImage($scope.article.coverImage);

                metaTags.setPageTitle($scope.article.title);
                metaTags.setPageDescription($scope.article.descr);
                metaTags.setPageKeywords($scope.article.keywords);
                metaTags.setFbImage($scope.article.fbImage);
                metaTags.setTwImage($scope.article.twImage);
            });

        }
    ]);

    return newsArticle;
});



