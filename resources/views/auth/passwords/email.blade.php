@extends('front.layouts.app')

@section('content')
<section class="contact-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Column-->
            <div class="column col-md-8 col-sm-6 col-xs-12 col-md-offset-2 col-sm-offset-3">
                <h2>Réinitialiser le mot de passe</h2>
                <div class="contact-form default-form">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif
                    <form method="post" action="{{ route('password.email') }}" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Votre Email">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>


                        <button type="submit" class="theme-btn btn-style-two">Envoyer le mot de passe <span class="fa fa-long-arrow-right"></span>
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
