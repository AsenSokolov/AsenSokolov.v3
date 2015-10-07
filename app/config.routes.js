(function() {
    'use strict';

    var app = angular.module('app');

    app.constant('routes', getRoutes());
    app.config(['$routeProvider', '$locationProvider', 'routes', routeConfigurator]);

    function routeConfigurator($routeProvider, $locationProvider, routes) {

        routes.forEach(function (r) {
            $routeProvider.when(r.url, r.config);
        });
        $routeProvider.otherwise({ redirectTo: '/404' });

        if (window.history && window.history.pushState) {
            $locationProvider.html5Mode(true);
        }
    }

    // Define the routes
    function getRoutes() {
        return [
            {
                url: '/',
                config: {
                    templateUrl: 'app/modules/home/home.html',
                    controller: 'HomeController',
                    title: 'Home',
                    settings: {
                        nav: 1,
                        content: 'Home'
                    },
                    resolve: {
                        homeData: homeGetInfo
                    }
                }
            }, {
                url: '/about-me',
                config: {
                    title: 'About Me',
                    controller: 'AboutController',
                    templateUrl: 'app/modules/about/about.html',
                    settings: {
                        nav: 2,
                        content: 'About Me'
                    },
                    resolve: {
                        aboutData: aboutGetInfo
                    }
                }
            }, {
                url: '/showcases',
                config: {
                    title: 'Showcases',
                    controller: 'ShowcasesController',
                    templateUrl: 'app/modules/showcases/showcases.html',
                    settings: {
                        nav: 3,
                        content: 'Showcases'
                    },
                    resolve: {
                        showcasesData: showcasesGetInfo
                    }
                }
            }, {
                url: '/showcases/:project',
                config: {
                    title: 'Showcase',
                    controller: 'ShowcaseProjectController',
                    templateUrl: 'app/modules/showcase-project/showcase-project.html',
                    resolve: {
                        showcaseInfo: showcasesGetInfo
                    }
                }
            }, {
                url: '/rates',
                config: {
                    title: 'Rates',
                    controller: 'RatesController',
                    templateUrl: 'app/modules/rates/rates.html',
                    settings: {
                        nav: 4,
                        content: 'Rates'
                    },
                    resolve: {
                        ratesData: ratesGetInfo
                    }
                }
            }, {
                url: '/contacts',
                config: {
                    title: 'Contacts',
                    controller: 'ContactController',
                    templateUrl: 'app/modules/contact/contact.html',
                    settings: {
                        nav: 5,
                        content: 'Contacts'
                    },
                    resolve: {
                        contactData: contactGetInfo
                    }
                }
            }, {
                url: '/404',
                config: {
                    templateUrl: 'app/modules/404/404.html',
                    controller: '404Controller',
                    title: '404 PAGE ERROR'
                }
            }
        ];
    }



    // GET HOME DATA

    function homeGetInfo($q, $route, $http){
        var deferred = $q.defer();

        $http({
            method  : 'GET',
            url     : 'app/api/home/getData/',
            cache   : true,
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' },  // set the headers so angular passing info as form data (not request payload)
        })
            .success(function(data) {

                if(data != "null"){
                    deferred.resolve(data);
                }else{
                    deferred.reject("Their is no project with this name");
                }

            });

        return deferred.promise;
    }

    // GET ABOUT DATA

    function aboutGetInfo($q, $route, $http){
        var deferred = $q.defer();

        $http({
            method  : 'GET',
            url     : 'app/api/about/getData/',
            cache   : true,
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' },  // set the headers so angular passing info as form data (not request payload)
        })
            .success(function(data) {

                if(data != "null"){
                    deferred.resolve(data);
                }else{
                    deferred.reject("Their is no project with this name");
                }

            });

        return deferred.promise;
    }

    // GET RATES DATA

    function ratesGetInfo($q, $route, $http){
        var deferred = $q.defer();

        $http({
            method  : 'GET',
            url     : 'app/api/rates/getData/',
            cache   : true,
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' },  // set the headers so angular passing info as form data (not request payload)
        })
            .success(function(data) {

                if(data != "null"){
                    deferred.resolve(data);
                }else{
                    deferred.reject("Their is no project with this name");
                }

            });

        return deferred.promise;
    }

    // GET CONTACT DATA

    function contactGetInfo($q, $route, $http){
        var deferred = $q.defer();

        $http({
            method  : 'GET',
            url     : 'app/api/contact/getData/',
            cache   : true,
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' },  // set the headers so angular passing info as form data (not request payload)
        })
            .success(function(data) {

                if(data != "null"){
                    deferred.resolve(data);
                }else{
                    deferred.reject("Their is no project with this name");
                }

            });

        return deferred.promise;
    }

    // GET SHOWCASES DATA

    function showcasesGetInfo($q, $route, $http, $location){
        var deferred = $q.defer();
        var currProject = $route.current.params.project;


        if(currProject == undefined){
            currProject = "all";
        }

        $http({
            method  : 'GET',
            url     : 'app/api/showcases/getData/',
            cache   : true,
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' },  // set the headers so angular passing info as form data (not request payload)
            params    :   {
                'name' : currProject
            }
        })
            .success(function(data) {

                if(data != "null"){
                    deferred.resolve(data);
                }else{
                    deferred.reject("Their is no project with this name");
                    $location.url('/404');
                }

            });

        return deferred.promise;
    }

})();