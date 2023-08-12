@extends('guest.layout')
@section('main-content')
    <!-- START PAGE TITILE SECTION -->
    <div class="page-title-section contact-page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                        <h2>Contact Us</h2>
                        <p>Need Help or Promotion?</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- END OF /. PAGE TITLE SECTION -->

    <!-- START CONTACT INFO SECTION -->
    <div class="contact-info-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="info-items">
                        <i class="fa fa-envelope"></i>
                        <h4>Our Email</h4>
                        <p>support@sportsox.com</p>
                        <p>admin@sportsox.com</p>
                    </div>
                </div><!-- END OF /. COL -->
                <div class="col-md-4">
                    <div class="info-items">
                        <i class="fa fa-phone"></i>
                        <h4>Our Phones</h4>
                        <p>+380 66 123 456 78</p>
                        <p>8 800 123 456 78</p>
                    </div>
                </div><!-- END OF /. COL -->
                <div class="col-md-4">
                    <div class="info-items">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h4>Our Address <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>
                        <p>7555 Sussex St.</p>
                        <p>New Britain, CT 06051</p>
                    </div>
                </div><!-- END OF /. COL -->
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact-title">
                        <h3>Use Contact Form <Span>& We Help you!</Span></h3>
                    </div>
                </div>
{{--                <form action="#"  id="my-form">--}}

                    <div class="col-md-8 col-md-offset-2">
                        <form action="{{ url("/contact/create") }}" method="post" enctype="multipart/form-data" class="row comment-reply contact-form">
                            @csrf
                            <div class="col-md-6 form-group">
                                <input name="name" type="text" class="form-control" placeholder="Name*" value="{{old('name')}}">
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email*" value="{{old('email')}}">
                            </div>
                            <div class="col-md-12 form-group">
                                <input name="website" type="text" class="form-control" placeholder="Website*" value="{{old('website')}}">
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="feedback" class="form-control" cols="30" rows="6"
                                          placeholder="Your message">{{old('feedback')}}</textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="comment-submit" value="Submit Your Message">Submit Your Message</button>
                            </div>
                        </form>
                    </div>
{{--                </form>--}}
            </div>
        </div>
    </div><!-- END OF /. CONTACT INFO SECTION  -->
    <div>

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

    @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
    @endif
@endsection
