define(function () {
    'use strict';

    return ['$http', '$q', '$window',
        function ($http, $q, $window) {

            var _getFooterInfo = function () {
                var footerUrl = 'app/api/footer/getData/';

                var deferred = $q.defer();
                $http({
                    method  : 'GET',
                    url     : footerUrl,
                    cache   : true,
                    headers : { 'Content-Type': 'application/x-www-form-urlencoded' },  // set the headers so angular passing info as form data (not request payload)
                }).then(function (response) {
                    var footer = response.data;
                    return deferred.resolve(footer);
                }, function () {
                    deferred.reject();
                });
                return deferred.promise;
            };

            return {
                getFooterInfo: _getFooterInfo
            }

        }
    ];
});