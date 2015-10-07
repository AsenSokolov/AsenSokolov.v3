(function () {
    'use strict';

    var app = angular.module('app');

    var projects = [];

    app.controller('HomeController',['$scope','coverParams', 'homeData',
        function ($scope, coverParams, homeData) {

            var params = [];
            params.coverTitle = homeData.coverTitle;
            params.coverDescription = homeData.coverDescription;
            params.coverImage = homeData.coverImage;

            coverParams.sendData(params);

            projects = homeData.projects;

            // SCROLL ANIMATIONS

            var scrController = new ScrollMagic.Controller();

            $scope.$on('$viewContentLoaded', function(){
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

                var tweenLineWorkflowRow1 = new TimelineMax();
                tweenLineWorkflowRow1.add([
                    TweenMax.fromTo("#workflow .section-title", 0.5, {marginTop:100, opacity:0}, {marginTop:0, opacity:1, ease: Sine.easeInOut}),
                    TweenMax.fromTo("#workflow .step-1", 0.5, {marginLeft:-1000, opacity:0}, {marginLeft:0, opacity:1, ease: Sine.easeInOut}),
                    TweenMax.fromTo("#workflow .step-2", 0.5, {marginRight:-1000, opacity:0}, {marginRight:0, opacity:1, ease: Sine.easeInOut}),
                ]);
                var sceneWorkflowRow1 = new ScrollMagic.Scene({triggerElement: "#workflow", offset: -50, reverse: false});
                sceneWorkflowRow1.setTween(tweenLineWorkflowRow1);
                sceneWorkflowRow1.addTo(scrController);

                var tweenLineWorkflowRow2 = new TimelineMax();
                tweenLineWorkflowRow2.add([
                    TweenMax.fromTo("#workflow .step-3", 0.5, {marginLeft:-1000}, {marginLeft:0, ease: Sine.easeInOut}),
                    TweenMax.fromTo("#workflow .step-4", 0.5, {marginRight:-1000}, {marginRight:0, ease: Sine.easeInOut}),
                ]);
                var sceneWorkflowRow2 = new ScrollMagic.Scene({triggerElement: ".step-3", offset: -350, reverse: false});
                sceneWorkflowRow2.setTween(tweenLineWorkflowRow2);
                sceneWorkflowRow2.addTo(scrController);

                var tweenLineWorkflowRow3 = new TimelineMax();
                tweenLineWorkflowRow3.add([
                    TweenMax.fromTo("#workflow .step-5", 0.5, {marginLeft:-1000}, {marginLeft:0, ease: Sine.easeInOut}),
                    TweenMax.fromTo("#workflow .step-6", 0.5, {marginRight:-1000}, {marginRight:0, ease: Sine.easeInOut}),
                ]);
                var sceneWorkflowRow3 = new ScrollMagic.Scene({triggerElement: ".step-5", offset: -350, reverse: false});
                sceneWorkflowRow3.setTween(tweenLineWorkflowRow3);
                sceneWorkflowRow3.addTo(scrController);

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

    app.controller('ProjectsController',
        function () {
            this.projects = projects;

            this.tab = 1;

            this.selectTab = function(setTab){
                this.tab = setTab;
            }

            this.isSelected = function(checkTab){
                return this.tab === checkTab;
            }
        }
    );

})();



