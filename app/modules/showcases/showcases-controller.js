(function () {
    'use strict';

    var app = angular.module('app');

    app.controller('ShowcasesController',['$scope','coverParams', 'showcasesData',
        function ($scope, coverParams, showcasesData) {

            var params = [];
            params.coverTitle = showcasesData.coverTitle;
            params.coverDescription = showcasesData.coverDescription;
            params.coverImage = showcasesData.coverImage;

            coverParams.sendData(params);

            $scope.projects = showcasesData.showcases;

            var scrController = new ScrollMagic.Controller();

            var pagesShown = 1;
            var pageSize = 5;

            $scope.paginationLimit = function() {
                return pageSize * pagesShown;
            };

            $scope.hasMoreItemsToShow = function() {
                return pagesShown < ($scope.projects.length / pageSize);
            };

            $scope.showMoreItems = function() {
                pagesShown = pagesShown + 1;
            };

            // SCROLL ANIMATIONS

            var scrController = new ScrollMagic.Controller();

            $scope.$on('$viewContentLoaded', function(){
                var tweenTitle = TweenMax.fromTo("#clients .section-title", 0.5, {marginTop:100, opacity: 0}, {marginTop:0, opacity: 1, ease: Sine.easeInOut}, 0.03);
                var sceneTitle= new ScrollMagic.Scene({triggerElement: "#clients", offset: -200, reverse: false});
                sceneTitle.setTween(tweenTitle);
                sceneTitle.addTo(scrController);

                var tweenClients = TweenMax.fromTo("#clients ul li img", 0.5, {marginTop:100, opacity: 0}, {marginTop:0, opacity: 1, ease: Sine.easeInOut}, 0.03);
                var sceneClients = new ScrollMagic.Scene({triggerElement: "#clients", offset: -100, reverse: false});
                sceneClients.setTween(tweenClients);
                sceneClients.addTo(scrController);
            });

            $scope.setShowcasesAnimations = function() {
                $(".project").each(function(index, element){
                    var projLogo = $( element ).find( "div.left img" );
                    var projTitle = $( element ).find( "div.left h6" );
                    var projBtn = $( element ).find( "div.right a" );
                    var projImage = $( element ).find( "div.right img" );
                    var tweenLineProject = new TimelineMax();
                    tweenLineProject.add([
                        TweenMax.fromTo(projLogo, 0.8, {opacity:0, marginTop: 400}, {opacity:1, marginTop:0, ease: Sine.easeInOut}),
                        TweenMax.fromTo(projTitle, 0.8, {opacity:0}, {opacity:1, ease: Sine.easeInOut}),
                        TweenMax.fromTo(projBtn, 0.8, {opacity:0}, {opacity:1, ease: Sine.easeInOut}),
                        TweenMax.fromTo(projImage, 0.8, {opacity:0, marginTop:350, scale:0.7}, {opacity:1, marginTop:0, scale:1, ease: Sine.easeInOut}),
                    ]);

                    var sceneProjects = new ScrollMagic.Scene({triggerElement: element, duration: 350, offset: -100, reverse: false});
                    sceneProjects.setTween(tweenLineProject);
                    sceneProjects.addTo(scrController);
                });
            };

        }
    ]);

})();



