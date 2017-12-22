@extends('front.layouts.app')

@section('content')


<section class="contact-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Column-->
            <div class="column col-md-8 col-sm-6 col-xs-12 col-md-offset-2 col-sm-offset-3">
                <h2>Connexion</h2>
                <div class="contact-form default-form">
                    <form method="post" action="{{ route('login') }}" >
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Votre Email">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" name="password" placeholder="Votre mot de passe">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                                </label>
                            </div>
                        </div>


                        <button type="submit" class="theme-btn btn-style-two">Connexion <span class="fa fa-long-arrow-right"></span>
                        </button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                          Mot de passe oublié?
                        </a>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
