@extends('guest.layout')
@section('main-content')
    <!--************************************
				Banner Start
		*************************************-->
    <div class="tg-banner tg-haslayout">
        <div class="tg-imglayer">
            <img src="assets/images/bg-pattran.png" alt="image desctription">
        </div>
        <div class="container">
            <div class="row">
                <div class="tg-banner-content tg-haslayout">
                    <div class="tg-pagetitle">
                        <h1>Check out</h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Check out</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <!--    Checkout here-->
    <main id="tg-main" class="tg-main tg-haslayout check-out">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-6 ps-0 checkout-left">
                    <!--billing address-->
                    <div class="bill-address mb-4">
                        <div class="col-md-12 form-group">
                            <h2>Billing Address</h2>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" placeholder="Last name">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" placeholder="Email address">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" placeholder="Address line">
                        </div>
                        <div class="col-md-1 form-group">
                            <input type="radio" class="check-box" id="dedau" name="address-check" checked>
                        </div>
                        <div class="col-md-11 form-group">
                            <label class="" for="dedau">Default (Same as billing address)</label>
                        </div>
                        <div class="col-md-1 form-group">
                            <input type="radio" class="check-box" id="alter" name="address-check">
                        </div>
                        <div class="col-md-11 form-group">
                            <label class="" for="alter">Add an alternative delivery address</label>
                        </div>
                    </div>
                    <!--shipping method-->
                    <div class="shipping-method mb-4">
                        <div class="col-md-12 form-group">
                            <h2>Shipping Method</h2>
                        </div>
                        <div class="col-md-1 form-group">
                            <input type="radio" class="check-box" id="dedau" name="address-check" checked>
                        </div>
                        <div class="col-md-5 form-group">
                            <label class="" for="dedau">Standard</label>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="" for="dedau">Free ship</label>
                        </div>
                        <div class="col-md-1 form-group">
                            <input type="radio" class="check-box" id="dedau" name="address-check" checked>
                        </div>
                        <div class="col-md-5 form-group">
                            <label class="" for="dedau">Express</label>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="" for="dedau">Flat rate (domestic: $30/ oversea: $100)</label>
                        </div>
                    </div>
                    <!--payment method-->
                    <div class="payment-method mb-4">
                        <div class="col-md-12 form-group pm-title">
                            <h2>Payment Method</h2>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" placeholder="Card number">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="date" class="form-control" placeholder="Expire date">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="date" class="form-control" placeholder="CVV">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-6 pe-0 checkout-right">
                    <!--billing summary here-->
                    <div class="sticky">
                        <div class="billing-summary">
                            <h2 class="text-center mb-3">BILLING SUMMARY</h2>
                            <div class="row">
                                <div class="col-sm-10 ps-0">
                                    <h6>Product name 1</h6>
                                </div>
                                <div class="col-sm-2 pe-0">
                                    <p>$6,700</p>
                                </div>
                            </div>
                            <p>x1</p>
                            <div class="row">
                                <div class="col-sm-10 ps-0">
                                    <h6>Product name 2</h6>
                                </div>
                                <div class="col-sm-2 pe-0">
                                    <p>$5,000</p>
                                </div>
                            </div>
                            <p>x1</p>
                            <div class="line my-3"></div>
                            <div class="row total-itm">
                                <div class="col-sm-10 ps-0">
                                    <p>Items Total</p>
                                </div>
                                <div class="col-sm-2 pe-0">
                                    <p>$11,700</p>
                                </div>
                            </div>
                            <div class="row ship-fee">
                                <div class="col-sm-10 ps-0">
                                    <p>Shipping Fee</p>
                                </div>
                                <div class="col-sm-2 pe-0">
                                    <p>$0</p>
                                </div>
                            </div>
                            <div class="line mb-3"></div>
                            <div class="total-itm row">
                                <div class="col-sm-10 ps-0">
                                    <p class="mdt">Order Total</p>
                                </div>
                                <div class="col-sm-2 p2-0">
                                    <p class="mdt">$11,700</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Place-order-->
            <div class="row place-order">
                <div class="col"></div>
                <div class="col-10">
                    <p class="text-center mb-4">By clicking Pay and Place Order, you agree to purchase your item(s) from
                        Global-e as merchant of record for this transaction, on Global-e’s Terms and Conditions and
                        Pivacy Policy
                        Global-e is an international fulfilment service provider to AGURI.</p>
                </div>
                <div class="col"></div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 btn btn-pri btnlg">
                        Place order
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </main>
@endsection
