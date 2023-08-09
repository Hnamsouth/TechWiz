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
                        <div class="t-head row align-middle py-3 mb-4">
                            <h4>Billing Address</h4>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 ps-0 firstname user-input">
                                <label for="first">First name</label>
                                <input class="inpu" type="text" name="firstname" id="first" required><br>
                            </div>
                            <div class="col-sm-6 pe-0 lastname user-input">
                                <label>Last name</label>
                                <input class="inpu" type="text" required><br>
                            </div>
                        </div>
                        <div class="px-0 email-user user-input">
                            <label>Email address (*)</label>
                            <input class="inpu" type="text" name="mail" required><br>
                        </div>
                        <div class="px-0 phone-user user-input">
                            <label>Phone (*)</label>
                            <input class="inpu" type="tel" name="phone" required><br>
                        </div>
                        <div class="px-0 address-user user-input">
                            <label>Address line1 (*)</label>
                            <input class="inpu" type="text" required><br>
                        </div>
                        <div class="form-check my-4 ps-0">
                            <input type="radio" class="check-box" id="dedau" name="address-check" checked>
                            <label class="" for="dedau">Default (Same as billing address)</label>
                        </div>
                        <div class="form-check my-4 ps-0">
                            <input type="radio" class="check-box" id="alter" name="address-check">
                            <label class="" for="alter">Add an alternative delivery address</label>
                        </div>
                    </div>
                    <!--shipping method-->
                    <div class="shipping-method mb-4">
                        <div class="t-head row align-middle py-3 mb-4">
                            <h4>Shipping Method</h4>
                        </div>
                        <div class="">
                            <div class="row">
                                <div class="ps-0 col-sm-4">
                                    <input type="radio" class="check-box" name="shipfee" checked>
                                    <label class="">Standard</label>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0">Free ship</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="ps-0 mt-4 col-sm-4">
                                    <input type="radio" class="check-box" name="shipfee">
                                    <label class="">Express</label>
                                </div>
                                <div class="mt-4 col-sm-8">
                                    <p class="mb-0">Flat rate (domestic: $30/ oversea: $100)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--payment method-->
                    <div class="payment-method mb-4">
                        <div class="t-head row align-middle py-3 mb-4">
                            <h4>Payment Method</h4>
                        </div>
                        <p class="mdt">Please choose the payment method</p>
                        <ul class="pay d-flex mb-4">
                            <li class="col-2 px-0" tabindex="0"><img src="./assets/img/check-out/Mastercard.webp"/></li>
                            <li class="col-2 px-0" tabindex="0"><img src="./assets/img/check-out/PayPal.webp"/></li>
                            <li class="col-2 px-0" tabindex="0"><img src="./assets/img/check-out/Visa.webp"/></li>
                        </ul>
                        <div class="px-0 user-input mb-4">
                            <label>Card number (*)</label>
                            <input class="inpu" type="text" required>
                        </div>

                        <div class="row">
                            <div class="col-6 ps-0">
                                <label>Expire date</label>
                                <input class="inpu" type="date" name="expiredate" required>
                            </div>
                            <div class="col-6 pe-0">
                                <label>CVV</label>
                                <input class="inpu" type="text" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-6 pe-0 checkout-right">
                    <!--billing summary here-->
                    <div class="sticky">
                        <div class="billing-summary">
                            <h3 class="text-center mb-3">BILLING SUMMARY</h3>
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
                        Global-e as merchant of record for this transaction, on Global-e’s Terms and Conditions and Pivacy Policy
                        Global-e is an international fulfilment service provider to AGURI.</p>
                </div>
                <div class="col"></div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <input type="submit" class="btn btn-pri btnlg w-100" value="Place order">
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </main>
@endsection
