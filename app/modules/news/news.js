define(function(require) {

    var angular = require('angular');

    var news = angular.module('news', []);

    var newsService = require('app/modules/news/news-service.js');
    news.factory('newsService', newsService);

    news.controller('NewsController',['$scope','coverParams', 'metaTags', 'pageLoading', 'newsService',
        function ($scope, coverParams, metaTags, pageLoading, newsService) {

            pageLoading.setLoadingStatus(true);

            newsService.getInfo().then(function(inf) {
                $scope.newsData = inf;

                pageLoading.setLoadingStatus(false);

                coverParams.setCoverTitle($scope.newsData.coverTitle);
                coverParams.setCoverSubTitle($scope.newsData.coverDescription);
                coverParams.setCoverImage($scope.newsData.coverImage);

                metaTags.setPageTitle($scope.newsData.title);
                metaTags.setPageDescription($scope.newsData.descr);
                metaTags.setPageKeywords($scope.newsData.keywords);
                metaTags.setFbImage($scope.newsData.fbImage);
                metaTags.setTwImage($scope.newsData.twImage);


                $scope.newsCategories = ['All', 'Design', 'Development', 'Technologies', 'Resources', 'Photography', 'Hobbies'];
                $scope.news = $scope.newsData.news;

                $scope.selectedCategory = "All";
                $scope.applyFilterCategory = undefined;

                // DROP DOWNS

                $scope.openDropDown = function($event){
                    $scope.ddOpen = !($scope.ddOpen);
                    $event.stopPropagation();
                };

                window.onclick = function() {
                    if ($scope.ddOpen) {
                        $scope.ddOpen = false;
                        $scope.$apply();
                    }
                };

                $scope.selectCategory = function(item){
                    $scope.selectedCategory = item;
                    $scope.applyFilterCategory = item;
                    if($scope.selectedCategory == "All"){
                        $scope.applyFilterCategory = undefined;
                    }
                };

                // LOAD MORE BUTTON

                var pagesShown = 1;
                var pageSize = 10;

                $scope.paginationLimit = function() {
                    return pageSize * pagesShown;
                };

                $scope.showMoreItems = function() {
                    pagesShown = pagesShown + 1;
                };

                $scope.hasMoreItemsToShow = function() {
                    return pagesShown < ($scope.filtered.length / pageSize);
                };
            });

        }
    ]);

    return news;
});




