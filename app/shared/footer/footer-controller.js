(function () {
    'use strict';

    var app = angular.module('app');

    var testimonials = [{
        avatar: "assets/img/testimonials/mohammed.png",
        name: 'Mohammed El Hijazi',
        qualification: "Managing Director",
        company: "BR&ND CREATIVE",
        description: "Since the initial meeting I understood that Asen have the ability to create the website I'v been dreaming of, his ability to translate my comments into technical language is impressive and some of the features he implemented I didn't even know existed! The result: a responsive website with different animation and tools working across all platforms."
    }, {
        avatar: "assets/img/testimonials/mohammed.png",
        name: 'Mohammed El Hijazi',
        qualification: "Managing Director",
        company: "BR&ND CREATIVE",
        description: "Since the initial meeting I understood that Asen have the ability to create the website I'v been dreaming of, his ability to translate my comments into technical language is impressive and some of the features he implemented I didn't even know existed! The result: a responsive website with different animation and tools working across all platforms."
    }, {
        avatar: "assets/img/testimonials/mohammed.png",
        name: 'Mohammed El Hijazi',
        qualification: "Managing Director",
        company: "BR&ND CREATIVE",
        description: "Since the initial meeting I understood that Asen have the ability to create the website I'v been dreaming of, his ability to translate my comments into technical language is impressive and some of the features he implemented I didn't even know existed! The result: a responsive website with different animation and tools working across all platforms.The result: a responsive website with different animation and tools working across all platforms.The result: a responsive website with different animation and tools working across all platforms."
    }];

    var news = [{
        title: "Latest projects: Part 1",
        link: 'link-1',
    }, {
        title: "Interactive and Fresh Websites",
        link: 'link-2',
    }, {
        title: "AsenSokolov.com – v2.0, a.k.a White Feeling",
        link: 'link-3',
    }, {
        title: "iCheck: Customize Checkboxes",
        link: 'link-4',
    }, {
        title: "Four steps to the perfect website",
        link: 'link-5',
    }, {
        title: "Swipebox: Awesome Lightbox",
        link: 'link-6',
    }];

    app.controller('footerController', ['$scope', function ($scope) {
        this.testimonials = testimonials;
        this.news = news;
        this.currentDate = new Date();
    }]);

})();



