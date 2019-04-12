<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SchemeCode</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link id="css-preset" href="{{ asset('css/presets/preset1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

    {{--favicon--}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon//favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head><!--/head-->

<body>

<!--.preloader-->
<div class="preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
<!--/.preloader-->

<header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliders as $index => $slider)
            <div class="item {{$index == 0 ? 'active' : ''}}" style="background-image: url({{$slider->image_path}})">
                <div class="caption">
                    <h1 class="animated fadeInLeftBig">{{ $slider->title_without_last_word }} <span>{{ $slider->last_word }}</span></h1>
                    <p class="animated fadeInRightBig">{!! $slider->description !!}</p>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
                </div>
            </div>
            @endforeach
        </div>
        <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

        <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('welcome') }}" style="padding: 0;">
                    <img class="img-responsive" id="logo" src="images/wide.png" style="";" alt="logo">
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="scroll active"><a href="#home">Home</a></li>
                    <li class="scroll"><a href="#services">Service</a></li>
                    <li class="scroll"><a href="#about-us">About Us</a></li>
                    <li class="scroll"><a href="#portfolio">Portfolio</a></li>
                    <li class="scroll"><a href="#team">Team</a></li>
                    <li class="scroll"><a href="#blog">Blog</a></li>
                    <li class="scroll"><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div><!--/#main-nav-->
</header><!--/#home-->
<section id="services">
    <div class="container">
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="row">
                <div class="text-center col-sm-8 col-sm-offset-2">
                    <h2>Our Services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
                </div>
            </div>
        </div>
        <div class="text-center our-services">
            <div class="row">
                <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="service-icon">
                        <i class="fa fa-flask"></i>
                    </div>
                    <div class="service-info">
                        <h3>Brand Identity</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                    <div class="service-icon">
                        <i class="fa fa-umbrella"></i>
                    </div>
                    <div class="service-info">
                        <h3>Creative Idea</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                    <div class="service-icon">
                        <i class="fa fa-cloud"></i>
                    </div>
                    <div class="service-info">
                        <h3>Awesome Support</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
                    <div class="service-icon">
                        <i class="fa fa-coffee"></i>
                    </div>
                    <div class="service-info">
                        <h3>Professional Design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
                    <div class="service-icon">
                        <i class="fa fa-bitbucket"></i>
                    </div>
                    <div class="service-info">
                        <h3>App Development</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
                    <div class="service-icon">
                        <i class="fa fa-gift"></i>
                    </div>
                    <div class="service-info">
                        <h3>Clean Code</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#services-->
<section id="about-us" class="parallax">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2>About us</h2>
                    {!! setting('about_us') !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <p class="lead">User Experiances</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="95">95%</div>
                        </div>
                    </div>
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                        <p class="lead">Web Design</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="75">75%</div>
                        </div>
                    </div>
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <p class="lead">Programming</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="60">60%</div>
                        </div>
                    </div>
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <p class="lead">Fun</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="85">85%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#about-us-->

<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h2>Our Portfolio</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach($projects as $project)
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="{{$project->image_path}}" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>{{$project->title}}</h3>
                                    <p>{{$project->description}}</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html"><i class="fa fa-link"></i></a></span>
                                    <span class="folio-expand"><a href="{{$project->image_path}}" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div id="portfolio-single-wrap">
        <div id="portfolio-single">
        </div>
    </div><!-- /#portfolio-single-wrap -->
</section><!--/#portfolio-->

<section id="team">
    <div class="container">
        <div class="row">
            <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                <h2>The Team</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
            </div>
        </div>
        <div class="team-members">
            <div class="row">
                @foreach ($team_members as $team_member)

                    <div class="col-sm-3">
                        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="member-image">
                                <img class="img-responsive" src="{{ $team_member->image_path }}" alt="">
                            </div>
                            <div class="member-info">
                                <h3>{{ $team_member->name }}</h3>
                                <h4>{{ $team_member->title }}</h4>
                                <p>{{ $team_member->description }}</p>
                            </div>
                            <div class="social-icons">
                                <ul>
                                    <li><a class="facebook" target="_blank" href="{{ $team_member->facebook_link }}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" target="_blank" href="{{ $team_member->twitter_link }}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="linkedin" target="_blank" href="{{ $team_member->linkedin_link }}"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
</section><!--/#team-->

<section id="features" class="parallax">
    <div class="container">
        <div class="row count">
            <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                <i class="fa fa-user"></i>
                <h3 class="timer">4000</h3>
                <p>Happy Clients</p>
            </div>
            <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                <i class="fa fa-desktop"></i>
                <h3 class="timer">200</h3>
                <p>Modern Websites</p>
            </div>
            <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
                <i class="fa fa-trophy"></i>
                <h3 class="timer">10</h3>
                <p>WINNING AWARDS</p>
            </div>
            <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
                <i class="fa fa-comment-o"></i>
                <h3>24/7</h3>
                <p>Fast Support</p>
            </div>
        </div>
    </div>
</section><!--/#features-->

{{--<section id="pricing">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">--}}
                {{--<h2>Pricing Table</h2>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="pricing-table">--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-3">--}}
                    {{--<div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">--}}
                        {{--<h3>Basic</h3>--}}
                        {{--<div class="price">--}}
                            {{--$9<span>/Month</span>--}}
                        {{--</div>--}}
                        {{--<ul>--}}
                            {{--<li>Free Setup</li>--}}
                            {{--<li>10GB Storage</li>--}}
                            {{--<li>100GB Bandwith</li>--}}
                            {{--<li>5 Products</li>--}}
                        {{--</ul>--}}
                        {{--<a href="#" class="btn btn-lg btn-primary">Sign up</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-3">--}}
                    {{--<div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">--}}
                        {{--<h3>Standard</h3>--}}
                        {{--<div class="price">--}}
                            {{--$19<span>/Month</span>--}}
                        {{--</div>--}}
                        {{--<ul>--}}
                            {{--<li>Free Setup</li>--}}
                            {{--<li>10GB Storage</li>--}}
                            {{--<li>100GB Bandwith</li>--}}
                            {{--<li>5 Products</li>--}}
                        {{--</ul>--}}
                        {{--<a href="#" class="btn btn-lg btn-primary">Sign up</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-3">--}}
                    {{--<div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">--}}
                        {{--<h3>Featured</h3>--}}
                        {{--<div class="price">--}}
                            {{--$29<span>/Month</span>--}}
                        {{--</div>--}}
                        {{--<ul>--}}
                            {{--<li>Free Setup</li>--}}
                            {{--<li>10GB Storage</li>--}}
                            {{--<li>100GB Bandwith</li>--}}
                            {{--<li>5 Products</li>--}}
                        {{--</ul>--}}
                        {{--<a href="#" class="btn btn-lg btn-primary">Sign up</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-3">--}}
                    {{--<div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">--}}
                        {{--<h3>Professional</h3>--}}
                        {{--<div class="price">--}}
                            {{--$49<span>/Month</span>--}}
                        {{--</div>--}}
                        {{--<ul>--}}
                            {{--<li>Free Setup</li>--}}
                            {{--<li>10GB Storage</li>--}}
                            {{--<li>100GB Bandwith</li>--}}
                            {{--<li>5 Products</li>--}}
                        {{--</ul>--}}
                        {{--<a href="#" class="btn btn-lg btn-primary">Sign up</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section><!--/#pricing-->--}}

{{--<section id="twitter" class="parallax">--}}
    {{--<div>--}}
        {{--<a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>--}}
        {{--<a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-8 col-sm-offset-2">--}}
                    {{--<div class="twitter-icon text-center">--}}
                        {{--<i class="fa fa-twitter"></i>--}}
                        {{--<h4>Themeum</h4>--}}
                    {{--</div>--}}
                    {{--<div id="twitter-carousel" class="carousel slide" data-ride="carousel">--}}
                        {{--<div class="carousel-inner">--}}
                            {{--<div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">--}}
                                {{--<p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>--}}
                            {{--</div>--}}
                            {{--<div class="item">--}}
                                {{--<p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>--}}
                            {{--</div>--}}
                            {{--<div class="item">--}}
                                {{--<p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section><!--/#twitter-->--}}

<section id="blog">
    <div class="container">
        <div class="row">
            <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                <h2>Blog Posts</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
            </div>
        </div>
        <div class="blog-posts">
            <div class="row">
                <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                    <div class="post-thumb">
                        <a href="#"><img class="img-responsive" src="images/blog/1.jpg" alt=""></a>
                        <div class="post-meta">
                            <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                            <span><i class="fa fa-heart"></i> 0 Likes</span>
                        </div>
                        <div class="post-icon">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="entry-header">
                        <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                        <span class="date">June 26, 2014</span>
                        <span class="cetagory">in <strong>Photography</strong></span>
                    </div>
                    <div class="entry-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="post-thumb">
                        <div id="post-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#post-carousel" data-slide-to="1"></li>
                                <li data-target="#post-carousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img class="img-responsive" src="images/blog/2.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img class="img-responsive" src="images/blog/1.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img class="img-responsive" src="images/blog/3.jpg" alt=""></a>
                                </div>
                            </div>
                            <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="post-meta">
                            <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                            <span><i class="fa fa-heart"></i> 0 Likes</span>
                        </div>
                        <div class="post-icon">
                            <i class="fa fa-picture-o"></i>
                        </div>
                    </div>
                    <div class="entry-header">
                        <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                        <span class="date">June 26, 2014</span>
                        <span class="cetagory">in <strong>Photography</strong></span>
                    </div>
                    <div class="entry-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
                    <div class="post-thumb">
                        <a href="#"><img class="img-responsive" src="images/blog/3.jpg" alt=""></a>
                        <div class="post-meta">
                            <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                            <span><i class="fa fa-heart"></i> 0 Likes</span>
                        </div>
                        <div class="post-icon">
                            <i class="fa fa-video-camera"></i>
                        </div>
                    </div>
                    <div class="entry-header">
                        <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                        <span class="date">June 26, 2014</span>
                        <span class="cetagory">in <strong>Photography</strong></span>
                    </div>
                    <div class="entry-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
            <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                <a href="#" class="btn-loadmore"><i class="fa fa-repeat"></i> Load More</a>
            </div>
        </div>
    </div>
</section><!--/#blog-->

<section id="contact">
    <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    <div id="contact-us" class="parallax">
        <div class="container">
            <div class="row">
                <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2>Contact Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
                </div>
            </div>
            <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="row">
                    <div class="col-sm-6">
                        <form name="contact-form" method="post" action="{{ route('contact_us_requests.store') }}">
                            {{ csrf_field() }}
                            {{ method_field('post') }}
                            <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-submit">Send Now</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            {!!  setting('contact_us_description')  !!}
                            <ul class="address">
                                <li><i class="fa fa-map-marker"></i> <span> Address:</span> {{ setting('address') }}</li>
                                <li><i class="fa fa-phone"></i> <span> Phone:</span> {{ setting('phone') }}</li>
                                <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:{{ setting('email') }}"> {{ setting('email') }}</a></li>
                                <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">{{ setting('website') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#contact-->

<footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container text-center">
            <div class="footer-logo">
                <a href="index.html"><img class="img-responsive" src="images/wide.png"  style="width: 200px" alt=""></a>
            </div>
            <div class="social-icons">
                <ul>
                    <li><a class="envelope" href="mailto:{{ setting('email') }}"><i class="fa fa-envelope"></i></a></li>
                    <li><a class="facebook" target="_blank" href="{{ setting('facebook_link') }}"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" target="_blank" href="{{ setting('twitter_link') }}"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="linkedin" target="_blank" href="{{ setting('linkedin_link') }}"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>&copy; 2019 {{ setting('name') }}.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&key=AIzaSyCWRYj1ED6A3wCSk8DYTEIFqwizTvjjBdg"></script>
<script type="text/javascript" src="{{ asset('js/jquery.inview.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mousescroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smoothscroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.countTo.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lightbox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</body>
</html>