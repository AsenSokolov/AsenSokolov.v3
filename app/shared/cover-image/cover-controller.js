(function () {
    'use strict';

    var app = angular.module('app');

    app.controller('coverImageController', ['$scope', 'coverParams',
        function ($scope, coverParams) {

            //For initial loading of the page
            $scope.$watch('cover_params', function() {
                var params =  coverParams.getData();
                $scope.coverTitle = params.coverTitle;
                $scope.coverDescription = params.coverDescription;
                $scope.coverImage = params.coverImage;
            });

            //After selection of a new page
            $scope.$on('cover_params', function() {
                var params =  coverParams.getData();
                $scope.coverTitle = params.coverTitle;
                $scope.coverDescription = params.coverDescription;
                $scope.coverImage = params.coverImage;
            });

        }
    ]);

    app.factory('coverParams',['$rootScope', function($rootScope){
        var service = {};
        service.data = false;

        //Set Data: coverTitle, coverDescription, coverImage
        service.sendData = function(data){
            this.data = data;
            $rootScope.$broadcast('cover_params');
        };

        //Get Data: coverTitle, coverDescription, coverImage
        service.getData = function(){
            return this.data;
        };

        return service;
    }]);

})();