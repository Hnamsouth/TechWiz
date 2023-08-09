<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @yield("before_css")
    @include("admin.html.css")
    @yield("after_css")

    <link rel="icon" type="image/png" sizes="16x16" href="/admin/img/favicon.png">
</head>

<body class="layout-light side-menu overlayScroll">

@include("admin.html.header")

<main class="main-content">

    @include("admin.html.sidebar")


    <div class="contents">
        @yield("main-content")
    </div>

    @include("admin.html.footer")

</main>

<div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
</div>
<div class="overlay-dark-sidebar"></div>

@yield("before_js")
@include("admin.html.js")
@yield("after_js")

{{--Pusher notification--}}
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('cf06b640611118d12a12', {
        cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        //alert(JSON.stringify(data));
        if(data.confirm) {
            var cf = confirm(data.message)
            if(cf) {
                if (window.location.pathname === '/admin2/order') {
                    window.location.reload();
                } else {
                    window.location.href = '/admin2/order';
                }
            }
        }
    });
    channel.bind('my-event-1', function(data) {
        //alert(JSON.stringify(data));
        if(data.confirm) {
            var cf = confirm(data.message)
            if(cf) {
                if (window.location.pathname === '/admin2/order/return-request') {
                    window.location.reload();
                } else {
                    window.location.href = '/admin2/order/return-request';
                }
            }
        }
    });
</script>
</body>

</html>
