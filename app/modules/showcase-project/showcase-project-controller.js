(function () {
    'use strict';

    var app = angular.module('app');


    app.controller('ShowcaseProjectController',['$scope','coverParams', 'showcaseInfo',
        function ($scope, coverParams, showcaseInfo) {
            $scope.project = showcaseInfo;

            var params = [];
            params.coverTitle = $scope.project.coverTitle;
            params.coverDescription = $scope.project.coverDescription;
            params.coverImage = $scope.project.coverImage;

            coverParams.sendData(params);
        }
    ]);

})();



