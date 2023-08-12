@extends('guest.layout')
@section('main-content')
    {{--    <!-- START PAGE TITILE SECTION -->--}}
    {{--    <div class="page-title-section contact-page-title">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-12">--}}
    {{--                    <div class="page-title">--}}
    {{--                        <h2>Contact Us</h2>--}}
    {{--                        <p>Need Help or Promotion?</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div> <!-- END OF /. PAGE TITLE SECTION -->--}}
    <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>Contact us</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->
    <!-- START CONTACT INFO SECTION -->
    <div class="contact" style="margin-top: 50px; margin-bottom: 100px">
        <div class="container">
            {{--            <div class="row">--}}
            {{--                <div class="col-md-4">--}}
            {{--                    <div class="info-items">--}}
            {{--                        <i class="fa fa-envelope"></i>--}}
            {{--                        <h4>Our Email</h4>--}}
            {{--                        <p>support@sportsox.com</p>--}}
            {{--                        <p>admin@sportsox.com</p>--}}
            {{--                    </div>--}}
            {{--                </div><!-- END OF /. COL -->--}}
            {{--                <div class="col-md-4">--}}
            {{--                    <div class="info-items">--}}
            {{--                        <i class="fa fa-phone"></i>--}}
            {{--                        <h4>Our Phones</h4>--}}
            {{--                        <p>+380 66 123 456 78</p>--}}
            {{--                        <p>8 800 123 456 78</p>--}}
            {{--                    </div>--}}
            {{--                </div><!-- END OF /. COL -->--}}
            {{--                <div class="col-md-4">--}}
            {{--                    <div class="info-items">--}}
            {{--                        <i class="fa fa-map-marker" aria-hidden="true"></i>--}}
            {{--                        <h4>Our Address <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>--}}
            {{--                        <p>7555 Sussex St.</p>--}}
            {{--                        <p>New Britain, CT 06051</p>--}}
            {{--                    </div>--}}
            {{--                </div><!-- END OF /. COL -->--}}
            {{--            </div>--}}
            <div class="row">
{{--                <div>abc</div>--}}
{{--                jjjjjjj--}}
                <div class="col-xs-7">
                    <form action="{{ url("/contact/create") }}" method="post" enctype="multipart/form-data"
                          class="row comment-reply contact-form">
                        @csrf
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" class="form-control" placeholder="Name*"
                                   value="{{old('name')}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email*"
                                   value="{{old('email')}}">
                        </div>
                        <div class="col-md-12 form-group">
                            <input name="website" type="text" class="form-control" placeholder="Website*"
                                   value="{{old('website')}}">
                        </div>
                        <div class="col-md-12 form-group">
                                <textarea name="feedback" class="form-control" cols="30" rows="6"
                                          placeholder="Your message">{{old('feedback')}}</textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="comment-submit" value="Submit Your Message">Submit Your
                                Message
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-xs-5">
                    <div>
                        <h2>Use Contact Form & We Help you!</h2>
                        <p>Reach out via our contact form and let us assist you every step of the way. Your success is
                            our priority!</p>
                    </div>
                    <div style="padding-top: 100px">
                        <p>Email: contact@gmail.com</p>
                        <p>Tel: 08989898</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. CONTACT INFO SECTION  -->
    <div>
        <div style="text-align: center">
            <h1>Visit our store</h1>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i>7555 Sussex St.New Britain, CT 06051</p>
        </div>
        <div id="googleMap" style="width:100%;height:400px;"></div>
    </div>
    {{--    <div class="map-section">--}}
    {{--        <div class="container-fluid">--}}
    {{--            <div class="row">--}}
    {{--                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">--}}
    {{--                    <div class="panel panel-default">--}}
    {{--                        <div class="panel-heading" role="tab" id="headingOne">--}}
    {{--                            <h4 class="panel-title">--}}
    {{--                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"--}}
    {{--                                   aria-expanded="true" aria-controls="collapseOne">--}}
    {{--                                    <i class="fa fa-map-marker" aria-hidden="true"></i>--}}
    {{--                                    <span>Hide Map</span>--}}
    {{--                                </a>--}}
    {{--                            </h4>--}}
    {{--                        </div>--}}
    {{--                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"--}}
    {{--                             aria-labelledby="headingOne">--}}

    {{--                            <div id="map"></div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <script>
        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(51.508742, -0.120850),
                zoom: 5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNI_ZWPqvdS6r6gPVO50I4TlYkfkZdXh8&callback=myMap"></script>
@endsection
