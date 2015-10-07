(function () {
    'use strict';

    var app = angular.module('loadingIndicator', []);

    app.directive('loadingIndicator', ['$rootScope', '$timeout', function($rootScope, $timeout) {
        return {
            restrict: 'E',
            templateUrl: '/app/shared/loading/loading.html',
            replace: true,
            link: function(scope, elem, attrs) {
                scope.$watch('isRouteLoading', function (isRouteLoading) {
                    if (isRouteLoading){
                        $(".line").removeClass("addAnimation");
                        $(".line").css("width","0%");
                        $(elem).show();
                    }else{
                        $(".line").addClass("addAnimation");
                        $(".line").css("width","100%");
                        $timeout(function(){
                            $(elem).hide();
                        },1000);
                    }
                });
            }
        };
    }]);
})();