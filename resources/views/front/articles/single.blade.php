@extends('front.layouts.app')

@section('title')
    | {{ $post->post_title }}
@endsection

@section('content')
<!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('images/background/page-title-1.jpg')}});">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title -->
                <div class="title-column col-md-6 col-sm-12 col-xs-12">
                    <h1>{{ $post->post_title }}</h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li><a href="{{ route('articles.index') }}">Actualités</a>
                        </li>
                        <li class="active">{{ $post->post_title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!--Sidebar Page-->
    <div class="sidebar-page-container sec-pdd-90-80">
        <div class="auto-container">
            <div class="row clearfix">


                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    <!--Blog Section / Details-->
                    <section class="blog-section details no-padd-bottom no-padd-top">

                        <!--Default Blog Post-->
                        <div class="default-blog-post">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="blog-single.html"><img src="{{asset('images/resource/blog-image-11.jpg')}}" alt="">
                                    </a>
                                    <div class="date"><span class="day">{{ date('d', strtotime( $post->created_at )) }}</span>{{ date('M-Y', strtotime( $post->created_at )) }}</div>
                                </figure>
                                <div class="post-info clearfix">
                                    <div class="clearfix">
                                        <h3><a href="blog-single.html">{{ $post->post_title }}</a></h3>
                                        <div class="post-meta">
                                            <ul class="clearfix">
                                                <li><a href="#"><span class="icon fa fa-heart-o"></span> 40 Likes</a>
                                                </li>
                                                <li><a href="#"><span class="icon fa fa-comment-o"></span> 22 Comments</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="text">
                                        {{ $post->post_content }}
                                    </div>
                                </div>
                                <div class="share-option">
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>Share This Post</strong>
                                        </div>
                                        <div class="pull-right">
                                            <div class="social-links">
                                                <a href="#"><span class="fa fa-facebook-f"></span></a>
                                                <a href="#"><span class="fa fa-twitter"></span></a>
                                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                                <a href="#"><span class="fa fa-linkedin"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                    <!-- Comment Form -->
                    <div class="comment-form wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">

                        <div class="group-title">
                            <h2>Liste des commentaires</h2>
                        </div>
                        {{--display approved comments--}}
                        <?php
                            echo Helper::get_comments( $post->id );
                        ?>
                    </div>

                    @includeIf('front.comments.form', ['post_id' => $post->id])
                    <!--End Comment Form -->


                </div>
                <!--Content Side-->

                @include('front.articles.sidebar')


            </div>
        </div>
    </div>
@endsection
