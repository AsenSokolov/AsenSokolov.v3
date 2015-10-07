(function () {
    'use strict';

    var app = angular.module('app');

    var plans = [];

    app.controller('RatesController',['$scope','coverParams', 'ratesData',
        function ($scope, coverParams, ratesData) {
            $scope.title = "Rates Page";

            var params = [];
            params.coverTitle = ratesData.coverTitle;
            params.coverDescription = ratesData.coverDescription;
            params.coverImage = ratesData.coverImage;

            coverParams.sendData(params);

            plans = ratesData.plans;


            // SCROLL ANIMATIONS

            var scrController = new ScrollMagic.Controller();

            $scope.$on('$viewContentLoaded', function(){
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
            });
        }
    ]);

    app.controller('PlanController',
        function () {
            this.plan = 2;
            this.plans = plans;

            this.selectPlan = function(setPlan){
                this.plan = setPlan;
            }

            this.isSelected = function(checkPlan){
                return this.plan === checkPlan;
            }
        }
    );

})();



