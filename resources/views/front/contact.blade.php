@extends('front.layouts.app')

@section('content')
<!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title -->
                    <div class="title-column col-md-6 col-sm-12 col-xs-12">
                        <h1>Contact </h1>
                    </div>
                    <!--Bread Crumb -->
                    <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="#">Accueil</a>
                            </li>
                            <li class="active">Contactez nous</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <!--Contact Section-->
        <section class="contact-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-md-8 col-sm-6 col-xs-12">
                        <h2>Get in Touch</h2>
                        @if(session('message'))
                      	<div class='alert alert-success'>
                      		{{ session('message') }}
                      	</div>
                      	@endif
                        <div class="contact-form default-form">
                            <form method="POST" action="/contact">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" name="name" value="" placeholder="Votre nom *">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Votre Email *">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="subject" value="" placeholder="Sujet *">
                                </div>

                                <div class="form-group">
                                    <textarea name="message" placeholder="Message *"></textarea>
                                </div>

                                <button type="submit" class="theme-btn btn-style-two">Envoyer <span class="fa fa-long-arrow-right"></span>
                                </button>

                            </form>

                        </div>
                    </div>

                    <!--Column-->
                    <div class="column col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <h2>Contact Information</h2>
                            <div class="contact-info">
                                <ul>
                                    <li><span class="icon flaticon-location"></span> 452 marshal street, Newyork, USA</li>
                                    <li><span class="icon flaticon-mail"></span> info@beirutfinance.com</li>
                                    <li><span class="icon flaticon-smartphone-call"></span> +01 2345 6789</li>
                                    <li><span class="icon flaticon-clock-3"></span> Mon - Sat: 9:00am - 5:00pm</li>
                                </ul>
                            </div>
                            <h3>Social Media</h3>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fa fa-facebook-f"></span></a>
                                </li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a>
                                </li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a>
                                </li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a>
                                </li>
                                <li><a href="#"><span class="fa fa-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--Map Section-->
        <section class="map-section">
            <div class="map-outer">

                <!--Map Canvas-->
                <div class="map-canvas" data-zoom="14" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>" style="height:520px;">
                </div>

            </div>
        </section>
@endsection
