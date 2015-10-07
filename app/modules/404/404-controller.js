(function () {
    'use strict';

    var app = angular.module('app');

    app.controller('404Controller',['$scope', 'coverParams',
        function ($scope, coverParams) {

            var params = [];
            params.coverTitle = "Whoops!";
            params.coverDescription = "404 PAGE NOT FOUND!<br/> Choose your evacuation plan!";
            params.coverImage = "assets/img/covers/404-cover.jpg";

            coverParams.sendData(params);
        }
    ]);

})();


