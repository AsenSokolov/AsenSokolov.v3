<!DOCTYPE html>
<!--
    Created by Asen Sokolov on 20.03.2015.
    Phone UAE: +971 56 912 0557;
    Phone Bulgaria:  +359 88 335 0672;
    Email: contact@asensokolov.com
    
    Hey there. Thanks for taking a peek at what goes on behind the scene in my website.  
    That means you're probably 
        a) someone I want to hire  OR
        b) someone I want to work with.
    In any case, please shoot us an email at: contact@asensokolov.com 
-->
<html ng-app="app">

    <head lang="en">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Asen Sokolov</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300,600,700' rel='stylesheet' type='text/css'>

        <!--<link rel="stylesheet" href="assets/css/themify-icons.css">-->
        <!--<link rel="stylesheet" href="assets/css/carousel/slick.css">-->
        <!--<link rel="stylesheet" href="assets/css/carousel/slick-theme.css">-->
        <!--<link rel="stylesheet" href="assets/css/animate.css">-->
        <!--<link rel="stylesheet" href="assets/css/hover-min.css">-->
        <!--<link rel="stylesheet" href="assets/css/angular-material.min.css">-->
        <!--<link rel="stylesheet" href="assets/css/angular-datepicker.min.css">-->

        <?php
            $protocol   = ($_SERVER['HTTPS'] != '' ? 'https://' : 'http://');
            $domain     = $_SERVER['SERVER_NAME'];
            $full_path  = $protocol.$domain."/";
        ?>

        <link rel="stylesheet" href="<?php echo $full_path; ?>assets/css/style.css">

        <base href="/">
    </head>

    <body>


        <loading-indicator></loading-indicator>

        <app-header></app-header>

        <div id="Content" ng-view class="view-animate"></div>

        <app-footer></app-footer>

<!--        <script src="--><?php //echo $full_path; ?><!--app/app.min.js"></script>-->
        <!-- JS INCLUDES -->
        <!-- Libraries -->

        <script src="assets/js/lib/jquery/jquery-1.11.2.min.js"></script>

        <script src="assets/js/lib/greensock/TweenMax.min.js"></script>
        <script src="assets/js/lib/greensock/TimelineMax.min.js"></script>
        <script src="assets/js/lib/scrollmagic/ScrollMagic.min.js"></script>
        <script src="assets/js/lib/scrollmagic/plugins/animation.gsap.min.js"></script>
        <script src="assets/js/lib/scrollmagic/plugins/debug.addIndicators.min.js"></script>

        <script src="assets/js/lib/angular/angular.min.js"></script>
        <script src="assets/js/lib/angular/angular-route.min.js"></script>
        <script src="assets/js/lib/angular/angular-animate.min.js"></script>
        <script src="assets/js/lib/angular/angular-resource.min.js"></script>
        <script src="assets/js/lib/angular/angular-sanitize.min.js"></script>
        <script src="assets/js/lib/angular/angular-aria.min.js"></script>
        <script src="assets/js/lib/angular/angular-material.min.js"></script>
        <script src="assets/js/lib/angular/angular-datepicker.min.js"></script>
        <script src="assets/js/lib/angular/angular-mailchimp.js"></script>

            <!-- SLICK CAROUSEL -->

        <script src="assets/js/lib/carousel/jquery.slick.min.js"></script>
        <script src="assets/js/lib/carousel/angular.slick.min.js"></script>

            <!-- SLICK CAROUSEL END -->

        <!-- Libraries END -->
        <!-- Bootstrapping -->

        <script src="app/app.js"></script>
        <script src="app/config.js"></script>
        <script src="app/config.routes.js"></script>

        <!-- Bootstrapping END -->
        <!-- App Controllers, Directives and Services -->

        <script src="app/shared/loading/loading-controller.js"></script>
        <script src="app/shared/loading/loading-directives.js"></script>

        <script src="app/shared/header/header-controller.js"></script>
        <script src="app/shared/header/header-directives.js"></script>

        <script src="app/shared/cover-image/cover-controller.js"></script>
        <script src="app/shared/cover-image/cover-directives.js"></script>

        <script src="app/shared/footer/footer-controller.js"></script>
        <script src="app/shared/footer/footer-directives.js"></script>

        <script src="app/shared/newsletter/newsletter-controller.js"></script>
        <script src="app/shared/newsletter/newsletter-directives.js"></script>

        <script src="app/modules/404/404-controller.js"></script>
        <script src="app/modules/home/home-controller.js"></script>
        <script src="app/modules/about/about-controller.js"></script>
        <script src="app/modules/showcases/showcases-controller.js"></script>
        <script src="app/modules/showcase-project/showcase-project-controller.js"></script>
        <script src="app/modules/rates/rates-controller.js"></script>
        <script src="app/modules/contact/contact-controller.js"></script>

        <!-- App Controllers, Directives and Services END -->
        <!-- JS INCLUDES END -->
    </body>
</html>