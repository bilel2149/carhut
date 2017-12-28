@extends('front.layouts.app')

@section('content')
<!--Page Title-->
      <section class="page-title" style="background-image:url({{asset('images/background/page-title-1.jpg')}});">
          <div class="auto-container">
              <div class="row clearfix">
                  <!--Title -->
                  <div class="title-column col-md-6 col-sm-12 col-xs-12">
                      <h1>404 Error</h1>
                  </div>
                  <!--Bread Crumb -->
                  <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                      <ul class="bread-crumb clearfix">
                          <li><a href="index.html">Home</a>
                          </li>
                          <li class="active">404 Error</li>
                      </ul>
                  </div>
              </div>
          </div>
      </section>


      <!--Error Section-->
      <section class="error-section">
          <div class="auto-container">

              <figure class="error-image"><img src="{{asset('images/icons/error-image.png')}}" alt="">
              </figure>
              <h3>Whoop! Ce que vous cherchez n'est pas ici.</h3>
              <div class="btn-box"><a href="{{ route('home') }}" class="theme-btn btn-style-two">Retour à l'accueil <span class="fa fa-long-arrow-right"></span></a>
              </div>

          </div>
      </section>
@endsection
