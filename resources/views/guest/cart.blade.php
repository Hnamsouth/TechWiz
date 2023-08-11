@extends('guest.layout')
@section('after_css')
    <style>
        .cart-section .othre-content .coupon-box input[type='text']{
            max-width: 100%;
            margin-bottom: 15px;
        }

        .cart-section .othre-content .coupon-box{
            float: none;
            width: 100%;
        }

        .cart-section .othre-content .update-btn{
            float: none;
            margin-top: 15px;
        }

        .cart-section{
            padding: 70px 0px;
        }

        /***

====================================================================
                        Cart-Page
====================================================================

***/

        .cart-section{
            position: relative;
            display: block;
            padding: 120px 0px;
        }

        .cart-section .table-outer {
            overflow-x: auto;
            position: relative;
            width: 100%;
        }

        .cart-section .cart-table {
            width: 100%;
        }

        .cart-section .cart-table thead tr th {
            line-height: 24px;
            min-width: 110px;
            padding: 29px 15px 27px 0px;
            color: #222;
            font-size: 20px;
            font-weight: 600;
            position: relative;
            text-align: center;
        }

        .cart-section .cart-table tbody tr{
            border-bottom: 1px solid #e6e6e6;
        }

        .cart-section .cart-table .cart-header{
            background: #f2f3f5;
        }

        .cart-section .cart-table tbody tr td.prod-column{
            padding: 30px 0px;
        }

        .cart-section .cart-table tbody tr .prod-column .column-box {
            min-height: 100px;
            position: relative;
            padding: 50px 0px 47px 250px;
        }

        .cart-section .cart-table tbody tr .prod-column .column-box .prod-thumb img {
            display: block;
            max-width: 100%;
        }

        .cart-section .cart-table tbody tr .prod-column .column-box .prod-thumb{
            position: absolute;
            left: 120px;
            top: 0px;
            width: 100px;
            height: 125px;
            overflow: hidden;
            background: #fff;
            transition: all 500ms ease;
        }

        .cart-section .cart-table tbody tr .prod-column .column-box .title{
            padding-left: 20px;
        }

        .cart-section .cart-table tbody tr .prod-column .column-box .remove-btn{
            position: absolute;
            left: 0px;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 14px;
            color: #222;
            font-weight: 700;
            border: 1px solid #e7e7e7;
            text-align: center;
            border-radius: 50%;
            cursor: pointer;
            transition: all 500ms ease;
        }

        .cart-section .cart-table tbody tr .prod-column .column-box .remove-btn:hover{
            color: #fff;
            background: #222;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .cart-section .cart-table tbody tr td.price {
            font-size: 15px;
            text-align: center;
            color: #222;
            position: relative;
            padding: 30px 25px 30px 30px;
        }

        .cart-section .cart-table tbody tr .sub-total {
            font-size: 15px;
            padding: 27px 50px 27px 48px;
            text-align: center;
            color: #222;
        }

        .cart-section .cart-table tbody tr td.qty{
            position: relative;
        }

        .cart-section .cart-table tbody tr td.qty .item-quantity{
            position: relative;
            display: inline-block;
            max-width: 130px;
            width: 100%;
            float: left;
            text-align: center;
            z-index: 1;
        }

        .cart-section .cart-table tbody tr td.qty .item-quantity .bootstrap-touchspin .input-group-btn-vertical i{
            left: 12px;
        }

        .cart-section .cart-table .prod-title{
            position: relative;
            display: inline-block;
            font-size: 16px;
            line-height: 28px;
            color: #222;
        }

        .cart-section .othre-content{
            position: relative;
            display: block;
            padding: 30px 0px;
            margin-bottom: 40px;
        }

        .cart-section .othre-content .update-btn button{
            opacity: 0.5;
            padding: 14px 26px;
            transition: all 500ms ease;
        }

        .cart-section .othre-content .update-btn button:hover{
            opacity: 1;
        }

        .cart-section .othre-content .coupon-box{
            position: relative;
            width: 70%;
        }

        .cart-section .othre-content .coupon-box input{
            position: relative;
            display: inline-block;
            max-width: 260px;
            width: 100%;
            font-size: 15px;
            height: 60px;
            color: #848484;
            border: 1px solid #e6e6e6;
            padding: 10px 30px;
            float: left;
        }

        .cart-section .othre-content .coupon-box button{
            float: left;
            padding: 16px 35px;
        }

        .cart-section .cart-total .total-cart-box{
            position: relative;
        }

        .cart-section .cart-total .total-cart-box h4{
            position: relative;
            display: block;
            font-size: 20px;
            line-height: 25px;
            color: #222;
            font-weight: 600;
            background: #f2f3f5;
            padding: 19px 30px 11px 30px;
        }

        .cart-section .cart-total .total-cart-box .list li{
            position: relative;
            display: block;
            font-size: 16px;
            font-weight: 500;
            color: #222;
            padding: 18px 30px;
            border-bottom: 1px solid #e6e6e6;
        }

        .cart-section .cart-total .total-cart-box .list li:last-child{
            border-bottom: none;
        }

        .cart-section .cart-total .total-cart-box .list li span{
            float: right;
            color: #848484;
            font-weight: 400;
        }

        .cart-section .cart-total .total-cart-box .list li:last-child span{
            font-size: 18px;
            font-weight: 500;
            color: #222;
        }

        .cart-section .cart-total .total-cart-box .theme-btn-two{
            display: block;
            padding: 16px 35px;
        }

    </style>
@endsection

@section('main-content')
    <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>Cart</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->

    <!-- START PRODUCTS SECTION -->
    <div class="all-products-area cart-section">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 table-column">
                    <div class="table-outer">
                        <table class="cart-table">
                            <thead class="cart-header">
                            <tr>
                                <th>&nbsp;</th>
                                <th class="prod-column">Product Name</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th class="price">Price</th>
                                <th class="quantity">Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($cart as $item)
                                <tr>
                                    <td colspan="4" class="prod-column">
                                        <div class="column-box">
                                            <a href="#" id="delete-{{ $item->id }}" data-product="{{ $item->slug }}">
                                                <div class="remove-btn">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </a>
                                            <div class="prod-thumb">
                                                <a href="#"><img src="{{ add_w_auto_to_cloudinary_url($item->thumbnail) }}" alt="" style="height: 100%; object-fit: cover"></a>
                                            </div>
                                            <div class="prod-title">
                                                {{$item->name}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price">${{number_format($item->price, 2)}}</td>
                                    <td class="qty">
                                        <div class="item-quantity">
                                            <input
                                                class="quantity-spinner"
                                                type="number"
                                                min=1
                                                max={{$item->quantity}}
                                                value="{{$item->buy_quantity}}"
                                                name="quantity"
                                                id="quantity-{{$item->id}}"
                                                style="text-align: center; scale: 1.2"
                                            >
                                            @if($item->quantity < $item->buy_quantity)
                                                <br>
                                                <span class="text-danger">Not enough quantity</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="sub-total" id="sub-total-{{$item->id}}">${{number_format($item->price * $item->buy_quantity, 2)}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="prod-column text-center">(No products in cart)</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="othre-content clearfix">
            </div>
            <div class="cart-total">
                <div class="row" style="display: flex; justify-content: end">
                    <div class="col-xl-5 col-lg-5 col-md-12 offset-xl-7 cart-column">
                        <div class="total-cart-box clearfix">
                            <h4>Cart Totals</h4>
                            <ul class="list clearfix">
                                <li>Subtotal:<span id="total">{{number_format($total,2)}}</span></li>
                                <li>Shipping:<span id="shipping">{{number_format($shipping,2)}}</span></li>
                                <li>Order Total:<span id="grand-total">{{number_format($total+$shipping,2)}}</span></li>
                            </ul>
                            @if($can_checkout && count($cart) > 0)
                                <div class="carry-olpdman-btn" style="position: relative; margin-top: 30px">
                                    <a href="{{url("checkout")}}">Proceed to Checkout<i class="flaticon-right-1"></i></a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END OF PRODUCTS SECTION -->
    @include('guest.html.twitter-section')
@endsection


@section("after_js")
    {{--AJAX call when changing quantity input--}}
    <script>
        $(document).ready(function() {
            $('input.quantity-spinner').on('change', function() {
                var productId = $(this).attr('id').split('-')[1];
                var newQuantity = $(this).val();

                $.ajax({
                    type: 'POST',
                    url: '{{ url('update-cart') }}',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'product_id': productId,
                        'quantity': newQuantity
                    },
                    success: function(response) {
                        // Update the subtotal, total, shipping and grandTotal
                        $('#sub-total-' + productId).text("$"+response.subTotal);
                        $('#total').text("$"+response.total);
                        $('#shipping').text("$"+response.shipping);
                        $('#grand-total').text("$"+response.grandTotal);
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('a[id^="delete-"]').on('click', function(event) {
                event.preventDefault();
                var productId = $(this).data('product');

                $.ajax({
                    type: 'POST',
                    url: '{{ url('delete-from-cart') }}/' + productId,
                    data: {
                        '_token': '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        // Remove the product row from the table
                        $(event.target).closest('tr').remove();

                        // // Display a success message
                        // alert(response.message);

                        // Update the grand total
                        $('#total').text("$"+response.total);
                        $('#shipping').text("$"+response.shipping);
                        $('#grand-total').text("$"+response.grandTotal);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log('Error:', errorThrown);
                    }
                });
            });
        });
    </script>
@endsection
