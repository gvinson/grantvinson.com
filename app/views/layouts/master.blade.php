<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9 lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        @section('title')
            GrantVinson.com | 
        @show
    </title>
    <meta name="description" content="Grant Vinson is a front end developer and user experience designer who is passionate about moving the web in a new direction.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('stylesheets')
        <link rel="icon" href="/favicon.ico?v=2" type="image/x-icon"> 
        <link rel="shortcut icon" href="/favicon.ico?v=2" type="image/x-icon">
        <style>
            @font-face{font-family:Neutraface2Text-Demi;src:url(/fonts/Neutraface2Text-Demi.eot);src:url(/fonts/Neutraface2Text-Demi.eot?#iefix) format('embedded-opentype'),url(/fonts/Neutraface2Text-Demi.woff2) format('woff2'),url(/fonts/Neutraface2Text-Demi.woff) format('woff'),url(/fonts/Neutraface2Text-Demi.ttf) format('truetype'),url(/fonts/Neutraface2Text-Demi.svg#Neutraface2Text-Demi) format('svg');font-weight:400;font-style:normal;}@font-face{font-family:Neutraface2Text-Book;src:url(/fonts/Neutraface2Text-Book.eot);src:url(/fonts/Neutraface2Text-Book.eot?#iefix) format('embedded-opentype'),url(/fonts/Neutraface2Text-Book.woff2) format('woff2'),url(/fonts/Neutraface2Text-Book.woff) format('woff'),url(/fonts/Neutraface2Text-Book.ttf) format('truetype'),url(/fonts/Neutraface2Text-Book.svg#Neutraface2Text-Book) format('svg');font-weight:400;font-style:normal;}@font-face{font-family:Neutraface2Text-Bold;src:url(/fonts/Neutraface2Text-Bold.eot);src:url(/fonts/Neutraface2Text-Bold.eot?#iefix) format('embedded-opentype'),url(/fonts/Neutraface2Text-Bold.woff2) format('woff2'),url(/fonts/Neutraface2Text-Bold.woff) format('woff'),url(/fonts/Neutraface2Text-Bold.ttf) format('truetype'),url(/fonts/Neutraface2Text-Bold.svg#Neutraface2Text-Bold) format('svg');font-weight:400;font-style:normal;}@font-face{font-family:rbno2_lightregular;src:url(/fonts/rbno2light-webfont.eot);src:url(/fonts/rbno2light-webfont.eot?#iefix) format('embedded-opentype'),url(/fonts/rbno2light-webfont.woff2) format('woff2'),url(/fonts/rbno2light-webfont.woff) format('woff'),url(/fonts/rbno2light-webfont.ttf) format('truetype'),url(/fonts/rbno2light-webfont.svg#rbno2_lightregular) format('svg');font-weight:400;font-style:normal;}
        </style>
        <script>
            !function(e){function t(t,n,r,o){"use strict";function a(){for(var e,n=0;u.length>n;n++)u[n].href&&u[n].href.indexOf(t)>-1&&(e=!0);e?c.media=r||"all":setTimeout(a)}var c=e.document.createElement("link"),i=n||e.document.getElementsByTagName("script")[0],u=e.document.styleSheets;return c.rel="stylesheet",c.href=t,c.media="only x",c.onload=o||null,i.parentNode.insertBefore(c,i),a(),c}var n=function(r,o){"use strict";if(r&&3===r.length){var a=e.navigator,c=e.Image,i=!(!document.createElementNS||!document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect||!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")||e.opera&&-1===a.userAgent.indexOf("Chrome")||-1!==a.userAgent.indexOf("Series40")),u=new c;u.onerror=function(){n.method="png",n.href=r[2],t(r[2])},u.onload=function(){var e=1===u.width&&1===u.height,a=r[e&&i?0:e?1:2];n.method=e&&i?"svg":e?"datapng":"png",n.href=a,t(a,null,null,o)},u.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",document.documentElement.className+=" grunticon"}};n.loadCSS=t,e.grunticon=n}(this),function(e,t){"use strict";var n=t.document,r="grunticon:",o=function(e){if(n.attachEvent?"complete"===n.readyState:"loading"!==n.readyState)e();else{var t=!1;n.addEventListener("readystatechange",function(){t||(t=!0,e())},!1)}},a=function(e){return t.document.querySelector('link[href$="'+e+'"]')},c=function(e){var t,n,o,a,c,i,u={};if(t=e.sheet,!t)return u;n=t.cssRules?t.cssRules:t.rules;for(var l=0;n.length>l;l++)o=n[l].cssText,a=r+n[l].selectorText,c=o.split(");")[0].match(/US\-ASCII\,([^"']+)/),c&&c[1]&&(i=decodeURIComponent(c[1]),u[a]=i);return u},i=function(e){var t,o,a;o="data-grunticon-embed";for(var c in e)if(a=c.slice(r.length),t=n.querySelectorAll(a+"["+o+"]"),t.length)for(var i=0;t.length>i;i++)t[i].innerHTML=e[c],t[i].style.backgroundImage="none",t[i].removeAttribute(o);return t},u=function(t){"svg"===e.method&&o(function(){i(c(a(e.href))),"function"==typeof t&&t()})};e.embedIcons=i,e.getCSS=a,e.getIcons=c,e.ready=o,e.svgLoadedCallback=u,e.embedSVG=u}(grunticon,this);
                        
                grunticon(["/css/icons.data.svg.css", "/css/icons.data.png.css", "/css/icons.fallback.css"]);
            </script>
            <noscript><link href="/css/icons.fallback.css" rel="stylesheet"></noscript>
    @show
    <!--[if lt IE 9]>
        <script src="/js/vendor/html5shiv.min.js"></script>
    <![endif]-->
</head>

@if (isset($body_classes))
    <body class="{{{ $body_classes }}}">
@else
    <body>
@endif

    <div id="padding-wrapper">

    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <div id="content-wrapper">
        <header>
             <a href="/" id="logo"><i class="icon-logo"></i></a>
             <nav class="top-nav">
                 <ul>
                     <li><a href="/">HOME</a></li>
                     <li><a href="/work">WORK</a></li>
                     <li><a href="/about">ABOUT</a></li>
                     <li><a href="/contact">CONTACT</a></li>
                 </ul>
             </nav>
             <div class="clearfix"></div>

             <div id="hamburger">
                <div class="bar-left"></div>
                <div class="bar-right"></div>
             </div>
        </header>
            
        <div id="mobile-menu">
           <div id="mobile-menu-wrapper">

           </div>
        </div>
        
        <div id="content-padding">
            @section('content')
            @show
        </div>
    </div>

</div>

</body>
@section('scripts')
    <!--[if IE 9]>
        <script src="/js/vendor/html5-3.6-respond-1.1.0.min.js"></script> 
    <![endif]-->
    <link rel="stylesheet" href="/css/layout.css">
    <script>
    (function() {
        var link = document.createElement('link');
        link.rel = "stylesheet";
        link.href = "//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic";
        document.querySelector("head").appendChild(link);
    })();
    </script>
    <script src="/js/vendor/jquery-1.11.0.min.js"></script>
    <script src="/js/vendor/picturefill.min.js"></script>
    <script>
    // Cache the Window object
    var windowObj = $(window);
    var documentObj = $(document);
    </script>
    <script src="/js/build.min.js"></script>
@show
</html>