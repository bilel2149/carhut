@extends('front.layouts.app')

@section('title', '| Page')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('images/background/page-title-1.jpg')}});">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Title -->
            <div class="title-column col-md-6 col-sm-12 col-xs-12">
                <h1>{{ $page->post_title }}</h1>
            </div>
            <!--Bread Crumb -->
            <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="active">{{ $page->post_title }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<div class="sidebar-page-container sec-pdd-90">
    <div class="auto-container">
        <div class="row clearfix">

          <!--Content Side-->
                    <div class="content-side col-sm-12 col-xs-12">
                        <section class="content-section about-content">

                            <!--Default Video Box-->
                            <div class="default-video-box">
                                <div class="image">
                                <img src="{{asset('/uploads/pages')}}/{{ $page->post_thumbnail }}" alt="{{ $page->post_title }}"/>
                                </div><a href="https://www.youtube.com/watch?v=i5GqSsl-uQw" class="overlay-link lightbox-image"><span class="icon fa fa-play"></span></a>
                            </div>
                            <div class="normal-title">
                                <h3>{{ $page->post_title }}</h3>
                            </div>
                            {!! $page->post_content !!}
                        </section>
                    </div>
                    <!--Content Side-->

        </div>
    </div>
</div>
@endsection
