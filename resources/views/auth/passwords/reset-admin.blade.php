<!DOCTYPE html>
<html>
	<head>
		<title>Carhut Admin - Réinitialiser le mot de passe</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('../assets/vendors/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('../assets/vendors/font-awesome/css/font-awesome.min.css') !!}
		<!-- <link rel="stylesheet" href="../assets/css/yep-rtl.css"> -->

		<!-- Related css to this page -->
    {!! Html::style('../assets/vendors/animate/css/animate.min.css') !!}

		<!-- Yeptemplate css --><!-- Please use *.min.css in production -->
    {!! Html::style('../assets/css/yep-style.css') !!}
    {!! Html::style('../assets/css/yep-vendors.css') !!}

		<!-- favicon -->
    <link rel="shortcut icon" href="{{asset('../assets/img/favicon/favicon.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{asset('../assets/img/favicon/favicon.ico')}}" type="image/x-icon">
	</head>

	<!-- You can use .rtl CSS in #login-page -->
	<body id="mainbody" class="login-page" >
		<canvas id="spiders" class="hidden-xs" ></canvas>
		<div class="">
			<div style="margin: 5% auto; position: relative; width: 400px;">
				<div id="sign-form" class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<div class="text-center">
									<h2>Golabi Admin Login</h2>
									<br>
								</div>

								<hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.password.request') }}">
                  {{ csrf_field() }}
									<fieldset>
										<div class="spacing hidden-md"></div>
                    <div  class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
										<div class="spacing"></div>
										<div  class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Mot de passe">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="spacing"></div>
										<div  class="input-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Confirmation Mot de passe">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
										<div class="spacing"></div>
										<button type="submit" id="singlebutton" name="singlebutton" class="btn btn-success btn-sm  pull-right">Réinitialiser le mot de passe</button>
									</fieldset>
								</form>
							</div>

						</div>

					</div>
				</div>


				<p>Copyright 2015 YEP Corporation. All right reserved.</p>
			</div>

		</div>


		<!-- General JS script library-->
    {!! Html::script('../assets/vendors/jquery/jquery.min.js') !!}
    {!! Html::script('../assets/vendors/jquery-ui/js/jquery-ui.min.js') !!}
    {!! Html::script('../assets/vendors/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('../assets/vendors/jquery-searchable/js/jquery.searchable.min.js') !!}
    {!! Html::script('../assets/vendors/jquery-fullscreen/js/jquery.fullscreen.min.js') !!}

		<!-- Yeptemplate JS Script --><!-- Please use *.min.js in production -->
    {!! Html::script('../assets/js/yep-script.js') !!}

		<!-- Related JavaScript Library to This Pagee -->



		<!-- Plugins Script -->
		<script type="text/javascript">
			$(function(){
				$('#forget').on('click', function(event) {
					$('#sign-form').hide();
					$('forget-form').show();

					$('#q-sign-in').show();
					$('#q-register').hide();

					$('#forget-form').show();
					$('#forget-form').addClass('animated bounce');
				});
			});

			$(function(){
				$('#sign-in').on('click', function(event) {
					$('#forget-form').hide();
					$('#register-form').hide();

					$('#q-sign-in').hide();
					$('#q-register').show();

					$('#sign-form').show();
					$('#sign-form').addClass('animated bounce');
				});
			});

			$(function(){
				$('#register').on('click', function(event) {
					$('#forget-form').hide();
					$('#sign-form').hide();

					$('#q-sign-in').show()
					$('#q-register').hide();

					$('#register-form').show();
					$('#register-form').addClass('animated bounce');
				});
			});
		</script>

	</body>
</html>
