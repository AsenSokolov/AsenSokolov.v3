define(function () {
    'use strict';

    return ['$route', '$http', '$q', '$window', '$location',
        function ($route, $http, $q, $window, $location) {

            var _getInfo = function () {
                var apiURL = 'app/api/news/getData/';
                var currArticle = $route.current.params.article;

                var deferred = $q.defer();
                $http({
                    method  : 'GET',
                    url     : apiURL,
                    cache   : true,
                    headers : { 'Content-Type': 'application/x-www-form-urlencoded' },  // set the headers so angular passing info as form data (not request payload)
                    params    :   {
                        'name' : currArticle
                    }
                }).then(function (response) {
                        var apiData = response.data;
                        if(apiData != "null"){
                            return deferred.resolve(apiData);
                        }else{
                            deferred.reject("Their is no project with this name");
                            $location.url('/404');
                        }

                    }, function () {
                        deferred.reject();
                    });
                return deferred.promise;
            };

            return {
                getInfo: _getInfo
            }

        }
    ];
});