@extends('layouts.dashboard_app')
@section('content')

<!-- Preloader Start -->
<div class="se-pre-con"></div>
<!-- Preloader Ends -->

<!-- Start Header Top 
    ============================================= -->
<div class="top-bar-area bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 address-info text-left">
                <div class="info box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info">
                                <span>Email</span> connect@technorio.com
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-call-center"></i>
                            </div>
                            <div class="info">
                                <span>Phone</span> +977-9860484858
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-countdown"></i>
                            </div>
                            <div class="info">
                                <span>Office Hours</span> Sun - fri : 10:00 - 6:00
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 social text-right">
                <ul>
                    <li> {{ Auth::user()->name }}<a class="dropdown-item" href="{{ url('sign-out') }}" >
                            {{ __('Logout') }}
                            
                        </a></li>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->

<!-- Header 
    ============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-border active-border small-pad navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                    <li class="side-menu"><a href="#"><i class="fas fa-bars"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li class="dropdown">
                        <a href="#" class="active">Home</a>

                    </li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Favorite Movies </a>
                       
                    </li>

                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->

<!-- Start Banner 
    ============================================= -->
<div class="banner-area text-center">
    <div id="bootcarousel" class="carousel text-medium slide carousel-fade animate_text" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner text-light carousel-zoom">
          
            <div class="item active">
                <div class="slider-thumb bg-cover" style="background-image: url({{url('banners/2.jpg')}})"></div>
                <div class="box-table shadow dark">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="content">
                                    <h2 data-animation="animated slideInRight">We work for Find your
                                            Favorite <strong>Action Movies</strong></h2>
                                        <p data-animation="animated slideInLeft">
                                        A film – also called a movie, motion picture, moving picture, picture or
                                            photoplay – is a work of visual art that simulates experiences and otherwise
                                            communicates ideas, stories, perceptions, feelings, beauty, or atmosphere
                                            through the use of moving
                                        </p>
                                        <a data-animation="animated slideInUp"
                                            class="btn circle btn-light border btn-md" href="#">Our Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-thumb bg-cover" style="background-image: url({{url('banners/1.jpg')}});"></div>
                <div class="box-table shadow dark">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="content">
                                        <h2 data-animation="animated slideInRight">We work for Find your
                                            Favorite <strong>Horror Movies</strong></h2>
                                        <p data-animation="animated slideInLeft">
                                        A film – also called a movie, motion picture, moving picture, picture or
                                            photoplay – is a work of visual art that simulates experiences and otherwise
                                            communicates ideas, stories, perceptions, feelings, beauty, or atmosphere
                                            through the use of moving
                                        </p>
                                        <a data-animation="animated slideInUp"
                                            class="btn circle btn-light border btn-md" href="#">Our Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bootcarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- End Banner -->

<!-- Star Team Area
    ============================================= -->
<div class="team-area default-padding bg-gray bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                   
                    <h2>Movies list</h2>
                </div>
            </div>
        </div>
        <div class="team-items text-center">
            <div class="row">
                <!-- Single Item -->
                @foreach($movies as $key=>$data)
                <div class="single-item col-md-3 col-sm-6">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('uploads/' . $data->poster) }}" alt="Thumb">
                            <ul class="social">
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="behance">
                                    <a href="#">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="info">
                            <div class="inner">
                                <h4>{{$data->title}}</h4>
                                <span>{{$data->description}}</span>
                            </div>
                        </div>
                    </div>
                </div>
             @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End Team Area -->

@endsection