@extends('front.layouts.app')

@section('content')

<!--Page Title-->
      <section class="page-title" style="background-image:url({{asset('images/background/page-title-1.jpg')}});">
          <div class="auto-container">
              <div class="row clearfix">
                  <!--Title -->
                  <div class="title-column col-md-6 col-sm-12 col-xs-12">
                      <h1>Profile</h1>
                  </div>
                  <!--Bread Crumb -->
                  <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                      <ul class="bread-crumb clearfix">
                          <li><a href="#">Accueil</a>
                          </li>
                          <li class="active">profile</li>
                      </ul>
                  </div>
              </div>
          </div>
      </section>


      <!--Checkout Page-->
      <div class="checkout-page">
          <div class="auto-container">

              <!--Default Links-->
              <ul class="default-links">
                  <li>Bienvenu {{ Auth::user()->name }} {{ Auth::user()->surname }}</a>
                  </li>
              </ul>

              <div class="row clearfix">
                  <div class="col-md-12">
                      @if( Session::has('success') )
                          <div class="mt-5 alert alert-success" role="alert">
                              {{ Session::get('success') }}
                          </div>
                      @endif
                  </div>
                  <div class="col-sm-12 col-xs-12">
                      <!--Billing Details-->
                      <div class="billing-details">
                          <div class="shop-form">
                              <form method="post" action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                  <div class="default-title">
                                      <h2>modifier mon profile</h2>
                                  </div>

                                  <div class="row clearfix">

                                      <!--Form Group-->
                                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                          <div class="field-label">Image
                                          </div>
                                          <input type="file" name="avatar">
                                      </div>

                                      <!--Form Group-->
                                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                      @if (Auth::user()->avatar && File::exists(public_path("uploads/users/".Auth::user()->avatar)))
                                        <img data-src="" src="{{asset('/uploads/users')}}/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}"/>
                                      @endif
                                      </div>

                                      <!--Form Group-->
                                      <div class="form-group col-md-6 col-sm-6 col-xs-12 {{ $errors->has('name') ? ' has-error' : '' }}">
                                          <div class="field-label">Nom <sup>*</sup>
                                          </div>
                                          <input type="text" name="name" value="{{ Auth::user()->name }}" placeholder="Votre nom">
                                          @if ($errors->has('name'))
              		                            <span class="help-block">
              		                                <strong>{{ $errors->first('name') }}</strong>
              		                            </span>
              		                        @endif
                                      </div>

                                      <!--Form Group-->
                                      <div class="form-group col-md-6 col-sm-6 col-xs-12 {{ $errors->has('surname') ? ' has-error' : '' }}">
                                          <div class="field-label">prénom <sup>*</sup>
                                          </div>
                                          <input type="text" name="surname" value="{{ Auth::user()->surname }}" placeholder="Votre prénom">
                                          @if ($errors->has('surname'))
              		                            <span class="help-block">
              		                                <strong>{{ $errors->first('surname') }}</strong>
              		                            </span>
              		                        @endif
                                      </div>

                                      <!--Form Group-->
                                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                          <div class="field-label">Nom de l'entreprise </div>
                                          <input type="text" name="company" value="{{ Auth::user()->company }}" placeholder="Nom de l'entreprise">
                                      </div>

                                      <!--Form Group-->
                                      <div class="form-group col-md-6 col-sm-6 col-xs-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                                          <div class="field-label">Email Addresse </div>
                                          <input type="email" name="email" value="{{ Auth::user()->email }}" placeholder="Votre email">
                                          @if ($errors->has('email'))
              		                            <span class="help-block">
              		                                <strong>{{ $errors->first('email') }}</strong>
              		                            </span>
              		                        @endif
                                      </div>

                                      <!--Form Group-->
                                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                          <div class="field-label">Téléphone <sup>*</sup>
                                          </div>
                                          <input type="text" name="phone" value="{{ Auth::user()->phone }}" placeholder="Votre téléphone">
                                      </div>

                                      <!--Form Group-->
                                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                          <div class="field-label">Addresse <sup>*</sup> </div>
                                          <input type="text" name="adresse" value="{{ Auth::user()->adresse }}" placeholder="Addresse">
                                      </div>

                                      <!--Form Group-->
                                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                          <div class="field-label">Pays <sup>*</sup> </div>
                                          <input type="text" name="country" value="{{ Auth::user()->country }}" placeholder="Pays">
                                      </div>

                                      <!--Form Group-->
                                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                          <div class="field-label">Zip / Code Postale </div>
                                          <input type="text" name="cp" value="{{ Auth::user()->cp }}" placeholder="Zip / Code Postale">
                                      </div>

                                      <!--Form Group-->
                                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                          <div class="field-label">Ville <sup>*</sup> </div>
                                          <input type="text" name="city" value="{{ Auth::user()->city }}" placeholder="Ville">
                                      </div>

                                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                          <button type="submit" class="theme-btn btn-style-two">Enregistrer <span class="fa fa-long-arrow-right"></span></button>
                                      </div>

                                  </div>
                              </form>

                          </div>

                      </div>
                      <!--End Billing Details-->
                  </div>



              </div>

          </div>
      </div>

@endsection
