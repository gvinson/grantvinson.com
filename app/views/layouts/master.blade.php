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
            @font-face{font-family:Neutraface2Text-Demi;src:url(/fonts/Neutraface2Text-Demi.eot);src:url(/fonts/Neutraface2Text-Demi.eot?#iefix) format('embedded-opentype'),url(/fonts/Neutraface2Text-Demi.woff2) format('woff2'),url(/fonts/Neutraface2Text-Demi.woff) format('woff'),url(/fonts/Neutraface2Text-Demi.ttf) format('truetype'),url(/fonts/Neutraface2Text-Demi.svg#Neutraface2Text-Demi) format('svg');font-weight:400;font-style:normal}@font-face{font-family:Neutraface2Text-Book;src:url(/fonts/Neutraface2Text-Book.eot);src:url(/fonts/Neutraface2Text-Book.eot?#iefix) format('embedded-opentype'),url(/fonts/Neutraface2Text-Book.woff2) format('woff2'),url(/fonts/Neutraface2Text-Book.woff) format('woff'),url(/fonts/Neutraface2Text-Book.ttf) format('truetype'),url(/fonts/Neutraface2Text-Book.svg#Neutraface2Text-Book) format('svg');font-weight:400;font-style:normal}@font-face{font-family:Neutraface2Text-Bold;src:url(/fonts/Neutraface2Text-Bold.eot);src:url(/fonts/Neutraface2Text-Bold.eot?#iefix) format('embedded-opentype'),url(/fonts/Neutraface2Text-Bold.woff2) format('woff2'),url(/fonts/Neutraface2Text-Bold.woff) format('woff'),url(/fonts/Neutraface2Text-Bold.ttf) format('truetype'),url(/fonts/Neutraface2Text-Bold.svg#Neutraface2Text-Bold) format('svg');font-weight:400;font-style:normal}@font-face{font-family:rbno2_lightregular;src:url(/fonts/rbno2light-webfont.eot);src:url(/fonts/rbno2light-webfont.eot?#iefix) format('embedded-opentype'),url(/fonts/rbno2light-webfont.woff2) format('woff2'),url(/fonts/rbno2light-webfont.woff) format('woff'),url(/fonts/rbno2light-webfont.ttf) format('truetype'),url(/fonts/rbno2light-webfont.svg#rbno2_lightregular) format('svg');font-weight:400;font-style:normal}@font-face{font-family:icomoon;src:url(/fonts/icomoon.eot?-21oews);src:url(/fonts/icomoon.eot?#iefix-21oews) format('embedded-opentype'),url(/fonts/icomoon.woff?-21oews) format('woff'),url(/fonts/icomoon.ttf?-21oews) format('truetype'),url(/fonts/icomoon.svg?-21oews#icomoon) format('svg');font-weight:400;font-style:normal;}
        </style>
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
             <a href="/" id="logo"><span class="icon-logo"></span></a>
             <div id="hamburger" class="mobile-only block">
                <div class="bar-left"></div>
                <div class="bar-right"></div>
             </div>
             <nav class="top-nav">
                 <ul>
                     <li><a href="/">HOME</a></li>
                     <li><a href="/work">WORK</a></li>
                     <li><a href="/about">ABOUT</a></li>
                     <li><a href="/contact">CONTACT</a></li>
                 </ul>
             </nav>
             <div class="clearfix"></div>
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