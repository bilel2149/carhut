@extends('front.layouts.app')

@section('title', '| Actualités')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Title -->
            <div class="title-column col-md-6 col-sm-12 col-xs-12">
                <h1>Actualités</h1>
            </div>
            <!--Bread Crumb -->
            <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="active">Actualités</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--List articles-->
<section class="blog-section sec-pdd-90">
    <div class="auto-container">
        <div class="outer-box">

          <!--Month Block-->
              <div class="row clearfix">
                @if( $posts->count() )
                    @foreach( $posts as $post )
                        <!--Default Blog Post-->
                        <div class="default-blog-post col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <figure class="image-box">
                                    <a href="blog-single.html"><img src="images/resource/blog-image-5.jpg" alt="">
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
                                      @if ( strlen( $post->post_content ) > 250 )
  																			{{ substr( $post->post_content, 0, 250 ) }} ...
  																		@else
  																			{{ $post->post_content }}
  																		@endif
                                    </div>
                                    <div class="btn-box"><a href="/article/{{ $post->post_slug }}" class="theme-btn btn-style-one">Voir plus <span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @else

                    <p>Aucun article trouvé</p>

                @endif


                {{-- Display pagination only if more than the required pagination --}}
                @if( $posts->total() > 6 )
                    <div class="clearfix"></div>
                    <div class="btn-box text-center padd-top-20">

                              @if( $posts->firstItem() > 1 )
                                  <a href="{{ $posts->previousPageUrl() }}" class="theme-btn btn-style-two"><span class="fa fa-long-arrow-left"></span> &nbsp; Précedent</a>
                              @endif

                              @if( $posts->lastItem() < $posts->total() )
                                  <a href="{{ $posts->nextPageUrl() }}" class="theme-btn btn-style-two">Suivant <span class="fa fa-long-arrow-right"></span></a>
                              @endif

                  </div>
                @endif

              </div>

        </div>
    </div>
</section>
@endsection
