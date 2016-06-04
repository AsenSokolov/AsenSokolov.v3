define(function(require) {

    var angular = require('angular');
    var ScrollMagic = require('ScrollMagic');
    var TweenMax = require('TweenMax');
    var TimelineMax = require('TimelineMax');

    var home = angular.module('home', []);

    var homeService = require('app/modules/home/home-service.js');
    home.factory('homeService', homeService);

    home.controller('HomeController',['$scope', 'coverParams', 'metaTags', 'pageLoading', 'homeService',
        function ($scope, coverParams, metaTags, pageLoading, homeService) {

            pageLoading.setLoadingStatus(true);

            homeService.getInfo().then(function(inf) {
                $scope.homeData = inf;

                pageLoading.setLoadingStatus(false);

                coverParams.setCoverTitle($scope.homeData.coverTitle);
                coverParams.setCoverSubTitle($scope.homeData.coverDescription);
                coverParams.setCoverImage($scope.homeData.coverImage);

                metaTags.setPageTitle($scope.homeData.title);
                metaTags.setPageDescription($scope.homeData.descr);
                metaTags.setPageKeywords($scope.homeData.keywords);
                metaTags.setFbImage($scope.homeData.fbImage);
                metaTags.setTwImage($scope.homeData.twImage);
            });

            var scrController = new ScrollMagic.Controller();

            var tweenLineWhoIAm = new TimelineMax();
            tweenLineWhoIAm.add([
                TweenMax.fromTo("#who-i-am .profile-photo", 0.5, {css:{scale:0, opacity:0}}, {css:{scale:1, opacity:1}, ease: Sine.easeInOut}),
                TweenMax.fromTo("#who-i-am h3", 0.8, {opacity:0, marginTop:100}, {opacity:1, marginTop:20, ease: Sine.easeInOut, delay:0.1}),
                TweenMax.fromTo("#who-i-am h4", 0.8, {opacity:0}, {opacity:1, ease: Sine.easeInOut, delay:0.2}),
                TweenMax.fromTo("#who-i-am p", 0.8, {opacity:0}, {opacity:1, ease: Sine.easeInOut, delay:0.3}),
                TweenMax.fromTo("#who-i-am a", 0.5, {opacity:0}, {opacity:1, ease: Sine.easeInOut}),
                TweenMax.fromTo("#who-i-am .scroll-down-arrow", 0.8, {opacity:0}, {opacity:1, ease: Sine.easeInOut, delay:0.6})
            ]);

            var sceneWhoIAm = new ScrollMagic.Scene({triggerElement: "#who-i-am", offset: -50, reverse: false});
            sceneWhoIAm.setTween(tweenLineWhoIAm);
            sceneWhoIAm.addTo(scrController);

            var tweenLineServices = new TimelineMax();
            tweenLineServices.add([
                TweenMax.fromTo("#services .section-title", 0.5, {marginTop:100, opacity:0}, {marginTop:0, opacity:1, ease: Sine.easeInOut}),
                TweenMax.fromTo("#services .list #item-1", 0.8, {opacity:0, marginTop:100}, {opacity:1, marginTop:0, ease: Sine.easeInOut}),
                TweenMax.fromTo("#services .list #item-1 .item-icon", 0.8, {css:{scale:0}}, {css:{scale:1}, ease: Sine.easeInOut}),
                TweenMax.fromTo("#services .list #item-2", 0.8, {opacity:0, marginTop:100}, {opacity:1, marginTop:0, ease: Sine.easeInOut, delay:0.1}),
                TweenMax.fromTo("#services .list #item-2 .item-icon", 0.8, {css:{scale:0}}, {css:{scale:1}, ease: Sine.easeInOut, delay:0.1}),
                TweenMax.fromTo("#services .list #item-3", 0.8, {opacity:0, marginTop:100}, {opacity:1, marginTop:0, ease: Sine.easeInOut, delay:0.2}),
                TweenMax.fromTo("#services .list #item-3 .item-icon", 0.8, {css:{scale:0}}, {css:{scale:1}, ease: Sine.easeInOut, delay:0.2}),
                TweenMax.fromTo("#services .list #item-4", 0.8, {opacity:0, marginTop:100}, {opacity:1, marginTop:0, ease: Sine.easeInOut}),
                TweenMax.fromTo("#services .list #item-4 .item-icon", 0.8, {css:{scale:0}}, {css:{scale:1}, ease: Sine.easeInOut}),
                TweenMax.fromTo("#services .list #item-5", 0.8, {opacity:0, marginTop:100}, {opacity:1, marginTop:0, ease: Sine.easeInOut, delay:0.1}),
                TweenMax.fromTo("#services .list #item-5 .item-icon", 0.8, {css:{scale:0}}, {css:{scale:1}, ease: Sine.easeInOut, delay:0.1}),
                TweenMax.fromTo("#services .list #item-6", 0.8, {opacity:0, marginTop:100}, {opacity:1, marginTop:0, ease: Sine.easeInOut, delay:0.2}),
                TweenMax.fromTo("#services .list #item-6 .item-icon", 0.8, {css:{scale:0}}, {css:{scale:1}, ease: Sine.easeInOut, delay:0.2})
            ]);

            var sceneServices = new ScrollMagic.Scene({triggerElement: "#services", offset: -50, reverse: false});
            sceneServices.setTween(tweenLineServices);
            sceneServices.addTo(scrController);

            var tweenProjects = new TimelineMax();
            tweenProjects.add([
                TweenMax.fromTo("#latest-projects .tabs", 0.5, {opacity:0, marginTop:100}, {opacity:1, marginTop:0, ease: Sine.easeInOut}),
                TweenMax.fromTo("#latest-projects #projects", 0.5, {opacity:0}, {opacity:1, ease: Sine.easeInOut}),
            ]);

            var sceneProjects = new ScrollMagic.Scene({triggerElement: "#latest-projects", offset: -50, reverse: false});
            sceneProjects.setTween(tweenProjects);
            sceneProjects.addTo(scrController);

            var tweenLineWorkflow= new TimelineMax();
            tweenLineWorkflow.add([
                TweenMax.fromTo("#workflow .section-title", 0.5, {marginTop:100, opacity:0}, {marginTop:0, opacity:1, ease: Sine.easeInOut}),
                TweenMax.fromTo("#workflow .line-h", 2.5, {css:{width:"0"}}, {css:{width:"84%"}}),

                TweenMax.fromTo("#workflow .step-1 .text", 0.3, {opacity:0}, {opacity:1, ease: Sine.easeInOut}),
                TweenMax.fromTo("#workflow .step-1 .small-circle", 0.3, {scale:0}, {scale:1, ease: Sine.easeInOut, delay: 0.1}),
                TweenMax.fromTo("#workflow .step-1 .line-v", 0.3, {css:{height:"0"}}, {css:{height:"120px"}, delay: 0.3}),
                TweenMax.fromTo("#workflow .step-1 .big-circle", 0.3, {scale:0}, {scale:1, ease: Sine.easeInOut, delay: 0.5}),

                TweenMax.fromTo("#workflow .step-2 .big-circle", 0.3, {scale:0}, {scale:1, ease: Sine.easeInOut, delay: 0.4}),
                TweenMax.fromTo("#workflow .step-2 .line-v", 0.3, {css:{height:"0"}}, {css:{height:"120px"}, delay: 0.5}),
                TweenMax.fromTo("#workflow .step-2 .small-circle", 0.3, {scale:0}, {scale:1, ease: Sine.easeInOut, delay: 0.7}),
                TweenMax.fromTo("#workflow .step-2 .text", 0.3, {opacity:0}, {opacity:1, ease: Sine.easeInOut, delay: 0.9}),

                TweenMax.fromTo("#workflow .step-3 .text", 0.3, {opacity:0}, {opacity:1, ease: Sine.easeInOut, delay: 0.8}),
                TweenMax.fromTo("#workflow .step-3 .small-circle", 0.3, {scale:0}, {scale:1, ease: Sine.easeInOut, delay: 0.9}),
                TweenMax.fromTo("#workflow .step-3 .line-v", 0.3, {css:{height:"0"}}, {css:{height:"120px"}, delay: 1.1}),
                TweenMax.fromTo("#workflow .step-3 .big-circle", 0.3, {scale:0}, {scale:1, ease: Sine.easeInOut, delay: 1.3}),

                TweenMax.fromTo("#workflow .step-4 .big-circle", 0.3, {scale:0}, {scale:1, ease: Sine.easeInOut, delay: 1.2}),
                TweenMax.fromTo("#workflow .step-4 .line-v", 0.3, {css:{height:"0"}}, {css:{height:"120px"}, delay: 1.3}),
                TweenMax.fromTo("#workflow .step-4 .small-circle", 0.3, {scale:0}, {scale:1, ease: Sine.easeInOut, delay: 1.5}),
                TweenMax.fromTo("#workflow .step-4 .text", 0.3, {opacity:0}, {opacity:1, ease: Sine.easeInOut, delay: 1.7}),

                TweenMax.fromTo("#workflow .step-5 .text", 0.3, {opacity:0}, {opacity:1, ease: Sine.easeInOut, delay: 1.8}),
                TweenMax.fromTo("#workflow .step-5 .small-circle", 0.3, {scale:0}, {scale:1, ease: Sine.easeInOut, delay: 1.9}),
                TweenMax.fromTo("#workflow .step-5 .line-v", 0.3, {css:{height:"0"}}, {css:{height:"120px"}, delay: 2.1}),
                TweenMax.fromTo("#workflow .step-5 .big-circle", 0.3, {scale:0}, {scale:1, ease: Sine.easeInOut, delay: 2.3}),

                TweenMax.fromTo("#workflow .step-6 .big-circle", 0.3, {scale:0}, {scale:1, ease: Sine.easeInOut, delay: 2.2}),
                TweenMax.fromTo("#workflow .step-6 .line-v", 0.3, {css:{height:"0"}}, {css:{height:"120px"}, delay: 2.3}),
                TweenMax.fromTo("#workflow .step-6 .small-circle", 0.3, {scale:0}, {scale:1, ease: Sine.easeInOut, delay: 2.5}),
                TweenMax.fromTo("#workflow .step-6 .text", 0.3, {opacity:0}, {opacity:1, ease: Sine.easeInOut, delay: 2.7}),
            ]);

            var sceneWorkflow = new ScrollMagic.Scene({triggerElement: "#workflow", offset: -50, reverse: false});
            sceneWorkflow.setTween(tweenLineWorkflow);
            sceneWorkflow.addTo(scrController);

            var tweenLineMakeItHappen = new TimelineMax();
            tweenLineMakeItHappen.add([
                TweenMax.fromTo("#make-it-happen .section-title", 0.5, {opacity:0, marginTop: 100}, {opacity:1, marginTop:0, ease: Sine.easeInOut}),
                TweenMax.fromTo("#make-it-happen p", 0.8, {opacity:0}, {opacity:1, ease: Sine.easeInOut}),
                TweenMax.fromTo("#make-it-happen a", 0.8, {opacity:0}, {opacity:1, ease: Sine.easeInOut})
            ]);

            var sceneMakeItHappen = new ScrollMagic.Scene({triggerElement: "#make-it-happen", offset: -300, reverse: false});
            sceneMakeItHappen.setTween(tweenLineMakeItHappen);
            sceneMakeItHappen.addTo(scrController);
        }
    ]);

    return home;
});