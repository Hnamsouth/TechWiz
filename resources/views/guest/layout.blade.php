<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<base href="/">
    <!-- ==== Document Title ==== -->
    <title>sccc</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    @include('guest.html.css')
    @yield("after_css")

</head>

{{--<!--[if lt IE 9]>--}}
{{--    <script src="/assets/js/html5shiv.min.js"></script>--}}
{{--    <script src="/assets/js/respond.min.js"></script>--}}
{{--    <![endif]--></head>--}}
<body>
{{--@include('guest.html.preloader')--}}
@include('guest.html.preloader')

<div class="wrapper">

    @include('guest.html.header')



    @yield('main-content')


    @include('guest.html.twitter-section')

    @include('guest.html.footer')

    <!-- THÔNG BÁO KHI THÊM HÀNG VÀO GIỎ -->
    <div id="notifications-container"></div>

    <div id="notification-template" class="toast d-none">
        <div class="toast-header">
            <strong class="mr-auto">Notification</strong>
            <small class="text-muted"></small>
            <button type="button" class="ml-2 mb-1 close text-white" style="font-weight: lighter" data-dismiss="toast">&times;</button>
        </div>
        <div class="toast-body"></div>
    </div>

</div>
@include('guest.html.js')
@yield("after_js")


{{--Handle AJAX request and update cart icon--}}
{{--CẬP NHẬT GIỎ HÀNG Ở HEADER KHI THÊM HÀNG--}}
<script>
    $(document).ready(function() {
        $('.add-to-cart-form').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                method: 'GET',
                data: $(this).serialize(),
                success: function(response) {
                    console.log('success');
                    // Update the cart icon with the new count
                    $('#cart-count').text(response.cartCount);
                    $('#total-price').text("$" + response.totalPrice.toFixed(2));
                }
            });
        });
    });
</script>

<!-- Wrapper End -->
{{--@include("guest.html.js")--}}
</body>
</html>
