@extends('layout.app')
@section('content')


    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel"
        data-pause="hover" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div id="home" class="first-section"
                    style="background-image:url('{{ asset('site/uploads/slider-01.jpg') }}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="big-tagline">
                                    <img src="{{ asset('site/images/logos/logo-hosting.png') }}" alt="image">
                                    <h2 data-animation="animated zoomInRight">Multi <strong>Information</strong> Systems
                                    </h2>
                                    <p class="lead" data-animation="animated fadeInLeft">Multi-Information Systems is a
                                        technology partner leveraging the
                                        latest technologies and premier vendors in the design and support of IT
                                        infrastructure to produce better business outcomes for our clients.. </p>
                                    <a data-scroll href="#pricing"
                                        class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInLeft">Network Solutions</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a data-scroll href="#overviews"
                                        class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInRight">Software Solutions</a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end section -->
            </div>
            <div class="item">
                <div id="home" class="first-section"
                    style="background-image:url('{{ asset('site/uploads/slider-02.jpg') }}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="big-tagline">
                                    <img src="{{ asset('site/images/logos/logo-hosting.png') }}" alt="image">
                                    <h2 data-animation="animated zoomInRight">Find the right <strong>Solutions</strong></h2>
                                    <p class="lead" data-animation="animated fadeInLeft">We provide software solutions by
                                        creating web and mobile applications as well as solutions for computer networks and
                                        surveillance cameras. </p>
                                    <a data-scroll href="#pricing"
                                        class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInLeft">Network Solutions</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a data-scroll href="#overviews"
                                        class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInRight">Software Solutions</a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end section -->
            </div>
            <div class="item">
                <div id="home" class="first-section"
                    style="background-image:url('{{ asset('site/uploads/slider-03.jpg') }}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="big-tagline">
                                    <img src="{{ asset('site/images/logos/logo-hosting.png') }}" alt="image">
                                    <h2 data-animation="animated zoomInRight">Best <strong>Software & Networking</strong>
                                        Company</h2>
                                    <p class="lead" data-animation="animated fadeInLeft">1 IP included with each server
                                        (more on request to justification)
                                        Your Choice of any OS (CentOS, Windows, Debian, Fedora)
                                        FREE Reboots</p>
                                    <a data-scroll href="#pricing"
                                        class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInLeft">Network Solutions</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a data-scroll href="#overviews"
                                        class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInRight">Software Solutions</a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end section -->
            </div>
            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>About</h3>
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                        quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                </div>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>2017 BEST WEB HOSTING COMPANY</h4>
                        <h2>Awards Winner Support Center</h2>
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non
                            aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus
                            bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis
                            montes, nascetur ridiculus mus. Sed vitae rutrum neque. </p>

                        <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn
                            More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="uploads/about_02.jpg" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]"
                            class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis">

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-server global-radius effect-1 alignleft"></i>
                        <h3>Unlimited Bandwidth</h3>
                        <p>Our Landigoo responsive site template elements 100% compatible with all mobile devices and modern
                            browsers! <small class="readmore"><a href="#">Read more</a></small></p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="flaticon-cloud-computing-1 global-radius effect-1 alignleft"></i>
                        <h3>Unlimited Traffic</h3>
                        <p>When you need anything about for Landigoo template, just drop an email or leave a feedback from
                            TF!<small class="readmore"><a href="#">Read more</a></small></p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-world-wide-web global-radius effect-1 alignleft"></i>
                        <h3>1 Domain Free</h3>
                        <p>We offer pixel perfect icons, graphic sources for high-resolution devices! Landigoo compatible
                            retina display! <small class="readmore"><a href="#">Read more</a></small></p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr3">

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-cup global-radius effect-1 alignleft"></i>
                        <h3>Awards Winner Support</h3>
                        <p>Our Landigoo responsive site template elements 100% compatible with all mobile devices and modern
                            browsers! <small class="readmore"><a href="#">Read more</a></small></p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-cer-file-format global-radius effect-1 alignleft"></i>
                        <h3>Free SSL Certifica</h3>
                        <p>We offer pixel perfect icons, graphic sources for high-resolution devices! Landigoo compatible
                            retina display! <small class="readmore"><a href="#">Read more</a></small></p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="flaticon-locked global-radius effect-1 alignleft"></i>
                        <h3>High Security</h3>
                        <p>When you need anything about for Landigoo template, just drop an email or leave a feedback from
                            TF!<small class="readmore"><a href="#">Read more</a></small></p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-hosting"></i></span>
					<p class="stat_count">400</p>
					<h3>Customers</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-domain-registration"></i></span>
					<p class="stat_count">600</p>
					<h3>Projects</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-mail"></i></span>
					<p class="stat_count">500</p>
					<h3>Partners</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

@endsection
