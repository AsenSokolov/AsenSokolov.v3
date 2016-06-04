define(function () {
    'use strict';

    return ['$http', '$q', '$window',
        function ($http, $q, $window) {

            var _getInfo = function () {
                var apiURL = 'app/api/showcases/getData/';

                var deferred = $q.defer();
                $http({
                    method  : 'GET',
                    url     : apiURL,
                    cache   : true,
                    headers : { 'Content-Type': 'application/x-www-form-urlencoded' },  // set the headers so angular passing info as form data (not request payload)
                    params    :   {
                        'name' : 'all'
                    }
                }).then(function (response) {
                        var apiData = response.data;
                        return deferred.resolve(apiData);
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