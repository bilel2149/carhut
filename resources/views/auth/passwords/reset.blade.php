@extends('front.layouts.app')

@section('content')
<section class="contact-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Column-->
            <div class="column col-md-8 col-sm-6 col-xs-12 col-md-offset-2 col-sm-offset-3">
                <h2>Réinitialiser le mot de passe</h2>
                <div class="contact-form default-form">
                    <form method="post" action="{{ route('password.request') }}" >
                        <input type="hidden" name="token" value="{{ $token }}">

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
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmer votre mot de passe">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>


                        <button type="submit" class="theme-btn btn-style-two">Réinitialiser le mot de passe <span class="fa fa-long-arrow-right"></span>
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
