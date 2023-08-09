@extends('guest.layout')
@section('main-content')
    <!--************************************
				Banner Start
		*************************************-->
    <div class="tg-banner tg-haslayout">
        <div class="tg-imglayer">
            <img src="images/bg-pattran.png" alt="image desctription">
        </div>
        <div class="container">
            <div class="row">
                <div class="tg-banner-content tg-haslayout">
                    <div class="tg-pagetitle">
                        <h1>contact</h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">contact</li>
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
    <main id="tg-main" class="tg-main tg-paddingbottom-zero tg-haslayout">
        <section class="tg-main-section tg-paddingbottom-zero tg-haslayout">
            <div class="container">
                <div class="tg-section-name">
                    <h2>contact</h2>
                </div>
                <div class="col-sm-11 col-xs-11 pull-right">
                    <div class="row">
                        <div class="tg-contactus tg-haslayout">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <div class="tg-contactinfobox">
                                        <div class="tg-section-heading"><h2>feel free to send us your queries, Suggestion &amp; Remarks</h2></div>
                                        <div class="tg-description">
                                            <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip ex ea commodo consequat.</p>
                                        </div>
                                        <ul class="tg-contactinfo">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <address>123 Eccles Old Road, New Salford Road London, Uk, M6 7AF</address>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone"></i>
                                                <span>+44 123 456 788 - 9</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope-o"></i>
                                                <a href="info%40domain.html">info@domain.com</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-skype"></i>
                                                <a href="info%40domain.html">Prosoccer772</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-facebook-f"></i>
                                                <a href="info%40domain.html">facebook.com/prosoccer772</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-twitter"></i>
                                                <a href="info%40domain.html">twitter.com/prosoccer772</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-laptop"></i>
                                                <a href="info%40domain.html">www.domain.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <form action="#" method="post" class="tg-commentform help-form" id="tg-commentform">
                                        <fieldset>
                                            <div class="form-group">
                                                <input type="text" required="" placeholder="Name*" class="form-control" name="contact[name]">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" required="" placeholder="Email*" class="form-control" name="contact[email]">
                                            </div>
                                            <div class="form-group">
                                                <div class="tg-select">
                                                    <select name="contact[type]">
                                                        <option value="">Message Type*</option>
                                                        <option value="Help">Discussion</option>
                                                        <option value="Help">Help</option>
                                                        <option value="Consutation">Consutation</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea required placeholder="Message*" name="contact[message]"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="tg-btn submit-now">send</button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div id="tg-officeaddressslider" class="tg-officeaddressslider tg-officeaddressnav owl-carousel">
                                    <div class="item">
                                        <span class="tg-theme-tag">SWEEPER</span>
                                        <div class="tg-section-heading"><h2>Manchester, UK</h2></div>
                                        <ul class="tg-contactinfo">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <address>123 Eccles Old Road, New Salford Road London, Uk, M6 7AF</address>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone"></i>
                                                <span>+44 123 456 788 - 9</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope-o"></i>
                                                <span>info@domain.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <span class="tg-theme-tag">Media Enquiry</span>
                                        <div class="tg-section-heading"><h2>Bolton, UK</h2></div>
                                        <ul class="tg-contactinfo">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <address>123 Eccles Old Road, New Salford Road London, Uk, M6 7AF</address>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone"></i>
                                                <span>+44 123 456 788 - 9</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope-o"></i>
                                                <span>info@domain.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <span class="tg-theme-tag">Club Registration</span>
                                        <div class="tg-section-heading"><h2>Warrington, UK</h2></div>
                                        <ul class="tg-contactinfo">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <address>123 Eccles Old Road, New Salford Road London, Uk, M6 7AF</address>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone"></i>
                                                <span>+44 123 456 788 - 9</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope-o"></i>
                                                <span>info@domain.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <span class="tg-theme-tag">SWEEPER</span>
                                        <div class="tg-section-heading"><h2>Manchester, UK</h2></div>
                                        <ul class="tg-contactinfo">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <address>123 Eccles Old Road, New Salford Road London, Uk, M6 7AF</address>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone"></i>
                                                <span>+44 123 456 788 - 9</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope-o"></i>
                                                <span>info@domain.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tg-mapcontent" class="tg-mapcontent owl-carousel">
                <div class="item">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.8070273775697!2d-0.13298118405677026!3d51.516756217839884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b2d06098567%3A0x657781e4c62dccae!2s14+Tottenham+Court+Rd%2C+Fitzrovia%2C+London+W1T+1JY%2C+UK!5e0!3m2!1sen!2s!4v1468332667385"></iframe>
                </div>
                <div class="item">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2490.0010946428147!2d-2.3645922841588!3d51.384657927491055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487181149eed3bff%3A0x3aaf87fd82220875!2s3+Edgar+Buildings+George+St%2C+Bath%2C+Bath+and+North+East+Somerset+BA1+2FJ%2C+UK!5e0!3m2!1sen!2s!4v1468332753250"></iframe>
                </div>
                <div class="item">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2234.9551750898822!2d-3.212455184020526!3d55.93281498556128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c70c0bdf6d55%3A0x4129ca60bdbbdb2d!2s46+Morningside+Rd%2C+Edinburgh+EH10+4BF%2C+UK!5e0!3m2!1sen!2s!4v1468332796662"></iframe>
                </div>
                <div class="item">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.8450413820606!2d-1.9012604841263068!3d52.48194134680125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bc8e7d47e945%3A0x936a2fd5f8da0a2b!2s27+Colmore+Row%2C+Birmingham%2C+West+Midlands+B3+2EW%2C+UK!5e0!3m2!1sen!2s!4v1468332833565"></iframe>
                </div>
            </div>
        </section>
    </main>
@endsection
