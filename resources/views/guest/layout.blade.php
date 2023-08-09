<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>USNews - Multipurpose News, Magazine and Blog HTML5 Template</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    @include('guest.html.css')
</head>

{{--<!--[if lt IE 9]>--}}
{{--    <script src="/assets/js/html5shiv.min.js"></script>--}}
{{--    <script src="/assets/js/respond.min.js"></script>--}}
{{--    <![endif]--></head>--}}
<body>
{{--@include('guest.html.preloader')--}}

<div class="wrapper">
    @include('guest.html.header')


    @yield('main-content')


    @include('guest.html.footer')

</div>
<!-- Wrapper End -->

</body>
</html>
