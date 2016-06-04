define(function(require) {

    var angular = require('angular');
    var ScrollMagic = require('ScrollMagic');
    var TweenMax = require('TweenMax');
    var TimelineMax = require('TimelineMax');

    var rates = angular.module('rates', []);

    var ratesService = require('app/modules/rates/rates-service.js');
    rates.factory('ratesService', ratesService);

    rates.controller('RatesController',['$scope','coverParams', 'metaTags', 'pageLoading', 'ratesService', 'plansFac',
        function ($scope, coverParams, metaTags, pageLoading, ratesService, plansFac) {
            pageLoading.setLoadingStatus(true);
            $scope.plansFac = plansFac;

            ratesService.getInfo().then(function(inf) {
                $scope.ratesData = inf;

                pageLoading.setLoadingStatus(false);

                coverParams.setCoverTitle($scope.ratesData.coverTitle);
                coverParams.setCoverSubTitle($scope.ratesData.coverDescription);
                coverParams.setCoverImage($scope.ratesData.coverImage);

                metaTags.setPageTitle($scope.ratesData.title);
                metaTags.setPageDescription($scope.ratesData.descr);
                metaTags.setPageKeywords($scope.ratesData.keywords);
                metaTags.setFbImage($scope.ratesData.fbImage);
                metaTags.setTwImage($scope.ratesData.twImage);
            });

            // SCROLL ANIMATIONS

            var scrController = new ScrollMagic.Controller();

            var tweenTitle = TweenMax.fromTo("#rates #rates-packages", 0.5, {marginTop:100, opacity: 0}, {marginTop:0, opacity: 1, ease: Sine.easeInOut}, 0.03);
            var sceneTitle= new ScrollMagic.Scene({triggerElement: "#rates", offset: -200, reverse: false});
            sceneTitle.setTween(tweenTitle);
            sceneTitle.addTo(scrController);

            var tweenPlans = TweenMax.fromTo("#plans .plan", 0.5, {marginTop:100, opacity: 0}, {marginTop:0, opacity: 1, ease: Sine.easeInOut}, 0.3);
            var scenePlans = new ScrollMagic.Scene({triggerElement: "#rates", offset: -100, reverse: false});
            scenePlans.setTween(tweenPlans);
            scenePlans.addTo(scrController);

            var tweenTitle = TweenMax.fromTo("#plans-examples", 0.5, {marginTop:100, opacity: 0}, {marginTop:40, opacity: 1, ease: Sine.easeInOut}, 0.03);
            var sceneTitle= new ScrollMagic.Scene({triggerElement: "#plans-examples", offset: -300, reverse: false});
            sceneTitle.setTween(tweenTitle);
            sceneTitle.addTo(scrController);

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

    rates.factory('plansFac',['$location', function($location){
        var plan = 2;

        return {
            selectPlan: function(newPlan) {
                plan = newPlan;
            },
            isSelected: function(thePlan) {
                return plan === thePlan;
            }
        };
    }]);

    return rates;
});



