@extends("admin.layout")

@section("title", "Order Detail")

@section("after_css")
    <style>
        .payment-invoice-table .table td, .payment-invoice-table tbody tr th {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        /* Style return status */
        .text-gray-500 {
            color: rgb(107 114 128/1);
        }
        .font-medium {
            font-weight: 500;
        }
        .font-bold {
            font-weight: 700;
        }
        .text-sm {
            font-size: .875rem;
            line-height: 1.25rem;
        }
        .z-10 {
            z-index: 10;
        }
        .bg-white {
            background-color: rgb(255 255 255/1);
        }
        .bg-gray-100 {
            background-color: rgb(243 244 246/1);
        }
        .bg-blue-600 {
            background-color: #5f63f2;
        }
        .gap-2 {
            gap: 0.5rem;
        }
        .h-6 {
            height: 1.5rem;
        }
        .w-6 {
            width: 1.5rem;
        }
        .text-\[10px\] {
            font-size: 10px;
        }
        .leading-6 {
            line-height: 1.5rem;
        }
        @media (min-width: 640px) {
            .sm\:block {
                display: block;
            }
        }
        .after\:bg-gray-100:after {
            content: "";
            background-color: #dee2e6;
        }
        .after\:rounded-lg:after {
            border-radius: 0.5rem;
        }
        .after\:-translate-y-1\/2:after {
            --tw-translate-y: -50%;
            transform: translate(0,0) rotate(0) skewX(0) skewY(0) scaleX(1) scaleY(1);
        }
        .after\:h-0\.5:after {
            height: 0.125rem;
        }
        .after\:block:after {
            display: block;
        }
        .after\:absolute:after {
            position: absolute;
        }
        .after\:top-1\/2:after {
            content: "";
            top: 50%;
        }
        .after\:inset-x-0:after {
            content: "";
            left: 0;
            right: 0;
        }
        .rounded-full {
            border-radius: 9999px;
        }
    </style>
@endsection

@section("main-content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Order detail</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="payment-invoice global-shadow border bg-white radius-xl w-100 mb-30">
                    <div class="payment-invoice__body">
                        <div class="payment-invoice-address d-flex justify-content-sm-between">
                            <div class="payment-invoice-logo">
                                <a href="{{url('admin/dashboard')}}"><img class="svg dark" src="/assets/images/logo.png" width="200" alt=""></a>
                            </div>
                            <div class="payment-invoice-address__area">
                                <address>Arts. Stationery Store<br> 9 Ton That Thuyet, My Dinh 2<br> Cau Giay, Ha Noi, Vietnam<br>
                                    Reg.
                                    number : 245000003513</address>
                            </div>
                        </div><!-- End: .payment-invoice-address -->
                        <div class="payment-invoice-qr d-flex justify-content-between mb-40 px-xl-50 px-30 py-sm-30 py-20 ">
                            <div class="d-flex justify-content-center mb-lg-0 mb-25">
                                <div class="payment-invoice-qr__number">
                                    <div class="display-3">
                                        Order
                                    </div>
                                    <p>No : #<span>{{$order->id}}</span></p>
                                    <p>Date : <span>{{$order->created_at->format('F j, Y')}}</span></p>
                                </div>
                            </div><!-- End: .d-flex -->
                            <div class="d-flex justify-content-center">
                                <div class="payment-invoice-qr__address">
                                    <p>Customer Info:</p>
                                    <span>{{$order->fullname}}</span><br>
                                    <span>{{$order->telephone}}</span><br>
                                    <span>{{$order->email}}</span>
                                </div>
                            </div><!-- End: .d-flex -->
                            <div class="d-flex justify-content-center">
                                <div class="payment-invoice-qr__address">
                                    <p>Delivered To:</p>
                                    <span>{{$order->address}}</span><br>
                                    <span>{{$order->city}}, {{$order->state}}, {{$order->country}}</span><br>
                                    <span>Postal code. {{$order->postcode}}</span>
                                </div>
                            </div><!-- End: .d-flex -->
                        </div><!-- End: .payment-invoice-qr -->
                        <div class="payment-invoice-table">
                            <div class="table-responsive">
                                <table id="cart" class="table table-borderless">
                                    <thead>
                                    <tr class="product-cart__header">
                                        <th scope="col">#</th>
                                        <th scope="col">Product</th>
                                        <th scope="col" class="text-right">Price Per Unit</th>
                                        <th scope="col" class="text-right">Quantity</th>
                                        <th scope="col" class="text-right">Order Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order->products as $key => $product)
                                        <tr>
                                            <th>{{$key+1}}</th>
                                            <td class="Product-cart-title">
                                                <div class="media align-items-center">
                                                    <img src="{{ add_w_auto_to_cloudinary_url($product->thumbnail) }}" width="60" alt="" class="rounded-lg mr-2">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">{{$product->name}}</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="unit text-right">{{number_format($product->pivot->price)}} USD</td>
                                            <td class="invoice-quantity text-right">x{{$product->pivot->quantity}}</td>
                                            <td class="text-right order">{{ number_format($product->pivot->price * $product->pivot->quantity) }} USD</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="order-summery float-right">
                                            <div class="total">
                                                <div class="subtotalTotal mb-0 text-right">
                                                    Subtotal :
                                                </div>
{{--                                                <div class="taxes mb-0 text-right">--}}
{{--                                                    discount :--}}
{{--                                                </div>--}}
                                                <div class="shipping mb-0 text-right">
                                                    Shipping charge :
                                                </div>
                                            </div>
                                            <div class="total-money d-flex justify-content-between align-items-center mt-2 text-right float-right">
                                                <h6>Total :</h6>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="total-order float-right text-right fs-14 fw-500">
                                                <p>{{number_format($order->subtotal)}} USD</p>
{{--                                                <p>-$126.30</p>--}}
                                                <p>{{number_format($order->delivery_fee)}} USD</p>
                                                <h5 class="text-primary">{{number_format($order->grand_total)}} USD</h5>
                                            </div>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-invoice-qr d-flex justify-content-between mb-3 px-xl-50 px-30 py-sm-20 py-10 ">
                                <div class="d-flex justify-content-center justify-content-lg-start" style="flex-basis: 20%">
                                    <div class="payment-invoice-qr__address">
                                        <p>Status:</p>
                                        @switch($order->status)
                                            @case(0)
                                                <span class="order-bg-opacity-warning text-warning rounded-lg active rounded-lg px-2 py-1 text-uppercase">pending</span>
                                                @break
                                            @case(1)
                                                <span class="order-bg-opacity-primary text-primary rounded-lg active rounded-lg px-2 py-1 text-uppercase">confirmed</span>
                                                @break
                                            @case(2)
                                                <span class="order-bg-opacity-secondary text-secondary rounded-lg active rounded-lg px-2 py-1 text-uppercase">processing</span>
                                                @break
                                            @case(3)
                                                <span class="order-bg-opacity-info text-info rounded-lg active rounded-lg px-2 py-1 text-uppercase">shipping</span>
                                                @break
                                            @case(4)
                                                <span class="order-bg-opacity-success text-success rounded-lg active rounded-lg px-2 py-1 text-uppercase">completed</span>
                                                @break
                                            @case(5)
                                                <span class="order-bg-opacity-gray text-gray rounded-lg active rounded-lg px-2 py-1 text-uppercase">canceled</span>
                                                @break
                                            @default
                                                <span>Unidentified</span>
                                        @endswitch
                                    </div>
                                </div><!-- End: .d-flex -->
                                <div class="d-flex justify-content-center justify-content-lg-start" style="flex-basis: 20%">
                                    <div class="payment-invoice-qr__address">
                                        <p>Payment Method:</p>
                                        <span>{{$order->payment_method}}</span>
                                    </div>
                                </div><!-- End: .d-flex -->
                                <div class="d-flex justify-content-center justify-content-lg-end" style="flex-basis: 20%">
                                    <div class="payment-invoice-qr__address">
                                        <p>Customer Note:</p>
                                        <span>{{$order->note ?? '(No note)'}}</span>
                                    </div>
                                </div><!-- End: .d-flex -->
                                <div class="d-flex justify-content-center justify-content-lg-end" style="flex-basis: 20%">
                                    <div class="payment-invoice-qr__address">
                                        <p class="float-right">Total Payment:</p>
                                        <h3 class="text-primary">{{number_format($order->grand_total)}} USD</h3>
                                    </div>
                                </div><!-- End: .d-flex -->
                            </div><!-- End: .payment-invoice-qr -->
                            @if($order->status === \App\Models\Order::CANCELED)
                            <div class="d-flex justify-content-end px-xl-50 px-30">
                                <i>- Cancel reason: {{$order->cancel_reason}}</i>
                            </div>
                            @endif
                            <div class="payment-invoice__btn mt-1 mt-lg-1 pt-lg-30 pt-20">
                                <button type="button" class="btn border rounded-pill bg-normal text-gray px-25 print-btn">
                                    <span data-feather="printer"></span>print</button>
                                <button type="button" class="btn border rounded-pill bg-normal text-gray px-25">
                                    <span data-feather="send"></span>invoice</button>
                                <form action="{{url('admin/order/detail',['order'=>$order->code])}}" method="post">
                                    @method('PUT')
                                    @csrf
                                    @if(($order->status >= \App\Models\Order::CONFIRMED && $order->status <= \App\Models\Order::SHIPPING && $order->status))
                                            <input type="hidden" name="status" value="{{$order->status+1}}">
                                            <button type="submit" class="btn-primary btn rounded-pill px-2 px-sm-25 text-white download">
                                                <span data-feather="arrow-up"></span>
                                                Change status to :
                                                @switch($order->status)
                                                    @case(1) PROCESSING @break
                                                    @case(2) SHIPPING @break
                                                    @case(3) COMPLETED @break
                                                    @default UNIDENTIFIED
                                                @endswitch
                                            </button>
                                    @endif
                                </form>
                                @if($order->status <= 2)
                                    <button type="button" class="btn-secondary btn rounded-pill px-25 text-white download ml-2" data-toggle="modal" data-target="#modal-info-confirmed">
                                        <span data-feather="x-circle"></span>
                                        Cancel
                                    </button>
                                @endif
                            </div>
                        </div><!-- End: .payment-invoice-table -->

                    </div><!-- End: .payment-invoice__body -->
                </div><!-- End: .payment-invoice -->
            </div><!-- End: .col -->
        </div>
    </div>


    <!-- Cancel modal warning -->
    @if($order->status <= 2)
    <div class="modal-info-confirmed modal fade show" id="modal-info-confirmed" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-info modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="{{url('admin/order/detail',['order'=>$order->code])}}" method="post">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="status" value="5">
                    <div class="modal-body">
                        <div class="modal-info-body d-flex">
                            <div class="modal-info-icon warning">
                                <span data-feather="info"></span>
                            </div>

                            <div class="modal-info-text">
                                <h6>Do you want to cancel Order #{{$order->id}}?</h6>
                                <p class="mt-2">Reason to cancel:</p>
                                <div class="radio-vertical-list">
                                    <div class="radio-theme-default custom-radio ">
                                        <input class="radio" type="radio" name="cancel-reason" value="Product(s) no longer have in stock" id="radio-vl5" required checked>
                                        <label for="radio-vl5">
                                            <span class="radio-text">Product(s) no longer have in stock</span>
                                        </label>
                                    </div>
                                    <div class="radio-theme-default custom-radio ">
                                        <input class="radio" type="radio" name="cancel-reason" value="Incorrect address" id="radio-vl6">
                                        <label for="radio-vl6">
                                            <span class="radio-text">Incorrect address</span>
                                        </label>
                                    </div>
                                    <div class="radio-theme-default custom-radio ">
                                        <input class="radio" type="radio" name="cancel-reason" value="Unable to deliver to a customer location" id="radio-vl7">
                                        <label for="radio-vl7">
                                            <span class="radio-text">Unable to deliver to a customer location</span>
                                        </label>
                                    </div>
                                    <div class="radio-theme-default custom-radio ">
                                        <input class="radio" type="radio" name="cancel-reason" value="Invalid or expired credit card" id="radio-vl8">
                                        <label for="radio-vl8">
                                            <span class="radio-text">Invalid or expired credit card</span>
                                        </label>
                                    </div>
                                    <div class="radio-theme-default custom-radio ">
                                        <input class="radio" type="radio" name="cancel-reason" value="Pricing error on a product" id="radio-vl9">
                                        <label for="radio-vl9">
                                            <span class="radio-text">Pricing error on a product</span>
                                        </label>
                                    </div>
                                    <div class="radio-theme-default custom-radio ">
                                        <input class="radio" type="radio" name="cancel-reason" value="Request from the buyer" id="radio-v20">
                                        <label for="radio-v20">
                                            <span class="radio-text">Request from the buyer</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light btn-outlined btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info btn-sm">Ok</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif

@endsection

