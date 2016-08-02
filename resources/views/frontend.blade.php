<!DOCTYPE html>
<html lang="vi">
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <link type="image/x-icon" href="{{url('frontend/favicon.ico')}}" rel="shortcut icon"/>
    <link href="https://plus.google.com/107515763736347546999" rel="publisher"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700italic,800italic,700,800&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/cagaileo.css')}}" type="text/css"/>
    <meta content='GCL' name='generator'/>
    <title>{{$meta_title}}</title>

    <meta property="og:title" content="{{$meta_title}}">
    <meta property="og:description" content="{{$meta_desc}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{$meta_url}}">
    <meta property="og:image" content="{{$meta_image}}">
    <meta property="og:site_name" content="Cà gai leo Tuệ Linh">

    <meta name="twitter:card" content="Card">
    <meta name="twitter:url" content="{{$meta_url}}">
    <meta name="twitter:title" content="{{$meta_title}}">
    <meta name="twitter:description" content="{{$meta_desc}}">
    <meta name="twitter:image" content="{{$meta_image}}">

    <meta itemprop="name" content="{{$meta_title}}">
    <meta itemprop="description" content="{{$meta_desc}}">
    <meta itemprop="image" content="{{$meta_image}}">

    <meta name="ABSTRACT" content="{{$meta_desc}}"/>
    <meta http-equiv="REFRESH" content="1200"/>
    <meta name="REVISIT-AFTER" content="1 DAYS"/>
    <meta name="DESCRIPTION" content="{{$meta_desc}}"/>
    <meta name="KEYWORDS" content="{{$meta_keywords}}"/>
    <meta name="ROBOTS" content="index,follow"/>
    <meta name="AUTHOR" content="Thông huyết"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name="COPYRIGHT" content="Copyright 2013 by Goethe"/>
    <meta name="Googlebot" content="index,follow,archive" />
    <meta name="RATING" content="GENERAL"/>
    <!--[if lte IE 8]>
    <script src="{{url('frontend/js/html5.js')}}" type="text/javascript"></script>
    <![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="{{url('frontend/css/ie.css')}}" type="text/css"/>
    <![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-570f69bb385fe2f2"></script>
</head>
<body class="home">
<div class="wrapper" id="wrapper">
    @include('frontend.header')

    @yield('content')

    @include('frontend.footer')
    <div class="overlay" id="overlay"></div>
    @include('frontend.mobile_menu')
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript" src="{{url('frontend/js/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/jquery.matchHeight-min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/common.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/fixedsidebar.js')}}"></script>

</body>
</html>