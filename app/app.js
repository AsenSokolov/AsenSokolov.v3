/*
 Created by Asen Sokolov on 20.03.2015.
 Phone UAE: +971 56 912 0557;
 Phone Bulgaria:  +359 88 335 0672;
 Email: contact@asensokolov.com

 Hey there. Thanks for taking a peek at what goes on behind the scene in my website.
 That means you're probably
 a) someone we want to hire  OR
 b) someone we want to work with.
 In any case, please shoot us an email at: contact@asensokolov.com
 */

define([
    'angular',
    'require',
    'ngRoute',
    'ngAnimate',
    'ngResource',
    'ngSanitize',
    'ngAria',
    'ngMaterial',

    //3rd Part Plugins
    'jquery',
    'TweenMax',
    'TimelineMax',
    'ScrollMagic',
    'animationGSAP',
    'jquery.slick',

    'mailchimp',
    'angular.slick',
    '720kb.datepicker',
    '720kb.socialshare',

     // Reusable Templates
    './shared/header/header',
    './shared/footer/footer',
    './shared/newsletter/newsletter',

     // Custom Modules
    './modules/home/home',
    './modules/about/about',
    './modules/showcases/showcases',
    './modules/showcase-project/showcase-project',
    './modules/rates/rates',
    './modules/news/news',
    './modules/news-article/news-article',
    './modules/contact/contact',
    './modules/404/page-not-found',

], function(angular, require) {


    var app = angular.module('app', [
         // Angular modules
        'ngRoute',          // routing
        'ngAnimate',        // animation
        'ngResource',
        'ngSanitize',       // sanitizes html bindings
        'ngAria',
        'ngMaterial',

        // Reusable Templates
        'header',
        'footer',
        'newsletter',

        // Custom Modules
        'home',
        'about',
        'showcases',
        'showcaseProject',
        'rates',
        'news',
        'newsArticle',
        'contact',
        'pageNotFound',

        //3rd Part Plugins
        'mailchimp',
        'slick',
        '720kb.datepicker',
        '720kb.socialshare',
    ]);

    app.config(['$routeProvider', '$locationProvider',
        function($routeProvider, $locationProvider){
            $routeProvider.
                when('/', {
                    templateUrl: 'app/modules/home/home.html',
                    controller: 'HomeController'
                }).
                when('/about-me', {
                    templateUrl: 'app/modules/about/about.html',
                    controller: 'AboutController'
                }).
                when('/showcases', {
                    templateUrl: 'app/modules/showcases/showcases.html',
                    controller: 'ShowcasesController'
                }).
                when('/showcases/:project', {
                    templateUrl: 'app/modules/showcase-project/showcase-project.html',
                    controller: 'ShowcaseProjectController'
                }).
                when('/rates', {
                    templateUrl: 'app/modules/rates/rates.html',
                    controller: 'RatesController'
                }).
                when('/news', {
                    templateUrl: 'app/modules/news/news.html',
                    controller: 'NewsController'
                }).
                when('/news/:article', {
                    templateUrl: 'app/modules/news-article/news-article.html',
                    controller: 'NewsArticleController'
                }).
                when('/contacts', {
                    templateUrl: 'app/modules/contact/contact.html',
                    controller: 'ContactController'
                }).
                when('/404', {
                    templateUrl: 'app/modules/404/404.html',
                    controller: 'PageNotFoundController'
                }).
                otherwise({
                    redirectTo: '/404'
                });

            console.log($locationProvider);
            //_gaq.push(['_trackPageview', curUrl]);
            if (window.history && window.history.pushState) {
                $locationProvider.html5Mode(true);
            }
        }
    ]);

    app.controller('MainController', ['$scope', 'metaTags', 'pageLoading',
        function ($scope, metaTags, pageLoading) {
            $scope.metaTags = metaTags;
            $scope.pageLoading = pageLoading;
        }
    ]);

    app.factory('pageLoading',['$location', '$anchorScroll',
        function($location, $anchorScroll){
            var loading = true;

            return {
                getLoadingStatus: function() {
                    return loading;
                },
                setLoadingStatus: function(loadingStatus) {
                    loading = loadingStatus;

                    if(loading == true){
                        $anchorScroll('Nav-wrapper');
                    }
                },
            };
        }
    ]);

    app.factory('metaTags',['$location',
        function($location){
            var pageTitle = 'Asen Sokolov - Web Developer, Health Enthusiast and Traveler!';
            var pageDescription = 'Web developer based in Dubai, UAE. With more than 8 year experience and more than 100 project behind his back.';
            var pageKeywords = 'Freelance Developer DUBAI, Freelance Developer UAE, Designer UAE, Designer DUBAI, Design, Branding, Graphic Design, Storytelling, Interactive Design, Interaction Design, UI, UX, User Experience, Front-end Development, Development, CMS, Corporate Branding, Website & Application Development, Marketing, Digital Marketing, Web Design, Website Design, Website Design & Development, Website Production, Brand Architecture, Branded Solutions, Content, Development, Mobile, Interactive, Creative Services, Creative Direction, Graphical User Interface, Graphic Designers, Brand Development, Interactive Marketing, Digital Art, Brand Strategy, Social Media Content, Full-Blown Integrated Campaign, Award-Winning Creative Concepts, Web Development,Logo Design, Corporate Identity,  Logos, Mobile Websites, Responsive Websites, Creative Design, Landing Pages, Brand Development, UX Development, Campaign Development, Online Solutions, App Development, Banners, Websites, eCommerce, Online Stores, HTML5, CSS3, Javascript, jQuery, Ajax, Responsive Web Design, Mobile Development , Illustration, Typography, User Experience, Front and Back-end Development, User Interface Design, Project Management, Hand Drawing';

            var fbImage = 'assets/img/fb-image.png';
            var twImage = 'assets/img/twitter-image.png';

            var pageURL = 'http://asensokolov.com/';
            var pageHost = 'http://asensokolov.com/';


            return {
                getPageTitle: function() {
                    return pageTitle;
                },
                setPageTitle: function(newTitle) {
                    pageTitle = newTitle;
                    pageURL = $location.absUrl();
                },

                getPageDescription: function() {
                    return pageDescription;
                },
                setPageDescription: function(newDescription) {
                    pageDescription = newDescription;
                },

                getPageKeywords: function() {
                    return pageKeywords;
                },
                setPageKeywords: function(newKeywords) {
                    pageKeywords = newKeywords;
                },

                getFbImage: function() {
                    return fbImage;
                },
                setFbImage: function(newImage) {
                    if(newImage != "") {
                        fbImage = newImage;
                    }
                },

                getTwImage: function() {
                    return twImage;
                },
                setTwImage: function(newImage) {
                    if(newImage != "") {
                        twImage = newImage;
                    }
                },

                getPageURL: function() {
                    return pageURL;
                },
                getPageHost: function() {
                    pageHost = $location.protocol() + "://" + $location.host() + "/";
                    return pageHost;
                },

            };
        }
    ]);

    return app;
});