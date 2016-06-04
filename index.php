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
<html data-ng-controller="MainController">

    <head lang="en" >
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title data-ng-bind="metaTags.getPageTitle()"></title>
        <meta name="description" content="{{metaTags.getPageDescription()}}">
        <meta name="keywords" content="{{metaTags.getPageKeywords()}}">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="fb:app_id" content="889037857859816" />
        <meta property="og:title" content="{{metaTags.getPageTitle()}}" />
        <meta property="og:description" content="{{metaTags.getPageDescription()}}" />
        <meta property="og:site_name" content="AsenSokolov.com" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{metaTags.getPageURL()}}" />
        <meta property="og:image" content="{{metaTags.getPageHost()}}{{metaTags.getFbImage()}}" />

        <meta name="twitter:card" content="summary">
        <meta name="twitter:url" content="{{metaTags.getPageURL()}}">
        <meta name="twitter:title" content="{{metaTags.getPageTitle()}}">
        <meta name="twitter:description" content="{{metaTags.getPageDescription()}}">
        <meta name="twitter:image" content="{{metaTags.getPageHost()}}{{metaTags.getTwImage()}}">

        <meta name="fragment" content="!">

        <link rel="icon" href="assets/img/favicon.png" type="image/gif" sizes="16x16">

        <?php
            $protocol   = ($_SERVER['HTTPS'] != '' ? 'https://' : 'http://');
            $domain     = $_SERVER['SERVER_NAME'];
            $full_path  = $protocol.$domain."/";
        ?>

        <link rel="stylesheet" href="<?php echo $full_path; ?>assets/css/style.css">

        <base href="/">
    </head>

    <body>

        <div id="fb-root"></div>
        <script type="text/javascript">

            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '{:$api.appid}',
                    xfbml      : true,
                    version    : 'v2.1'
                });
            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/bg_BG/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

        </script>

        <div id="Loading" data-ng-show="pageLoading.getLoadingStatus()">
            <div class="loading-wrapper">
                <img src="assets/img/as-logo.png" alt="AsenSokolov.com"/>
                <div class="cssload-wrap">
                    <div class="cssload-container">
                        <span class="cssload-dots"></span>
                        <span class="cssload-dots"></span>
                        <span class="cssload-dots"></span>
                        <span class="cssload-dots"></span>
                        <span class="cssload-dots"></span>
                        <span class="cssload-dots"></span>
                        <span class="cssload-dots"></span>
                        <span class="cssload-dots"></span>
                        <span class="cssload-dots"></span>
                        <span class="cssload-dots"></span>
                    </div>
                </div>
            </div>
        </div>

        <app-header></app-header>

        <div id="Content" data-ng-view class="view-animate"></div>

        <app-footer></app-footer>

        <script src="<?php echo $full_path; ?>assets/js/lib/require.js" data-main="app/main"></script>
    </body>
</html>