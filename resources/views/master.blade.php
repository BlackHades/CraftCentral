<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>{{$title}} | Craft Central</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Craftcentral" />
    <meta name="keywords" content="Craftcentral" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <base href="{{asset('/')}}">
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/style_III.css" />
    <link rel="stylesheet" type="text/css" href="css/style_IIII.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive2.css" />


    <link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.0.8/web-fonts-with-css/css/fontawesome-all.css" />
    <link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.0.8/web-fonts-with-css/css/fontawesome-all.min.css" />
    <link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.0.8/web-fonts-with-css/css/fontawesome.min.css" />
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />

    <style>
        .error-box{color:#F05;
            font-size:12px;
        }


    </style>

    @yield('stylesheet')
</head>

<body>
@include('partials._navbar')

@yield('content')

@include('partials._footer')


<!-- jp footer Wrapper End -->
<!--main js file start-->
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/custom_II.js"></script>
<!--main js file end-->
@yield('script')


</body>



</html>