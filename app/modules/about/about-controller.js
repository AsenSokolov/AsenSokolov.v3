(function () {
    'use strict';

    var app = angular.module('app');

    app.controller('AboutController',['$scope', 'coverParams', 'aboutData',
        function ($scope, coverParams, aboutData) {

            var params = [];
            params.coverTitle = aboutData.coverTitle;
            params.coverDescription = aboutData.coverDescription;
            params.coverImage = aboutData.coverImage;

            coverParams.sendData(params);
        }
    ]);

})();


