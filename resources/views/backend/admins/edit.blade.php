@extends('backend.layouts.app')

@section('styles')

    {!! Html::style('../assets/vendors/x-editable/css/bootstrap-editable.min.css') !!}
    {!! Html::style('../assets/vendors/select2/css/select2.min.css') !!}
    {!! Html::style('../assets/vendors/typeaheadjs/css/typeahead.js-bootstrap.min.css') !!}
    {!! Html::style('../assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') !!}
    {!! Html::style('../assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css') !!}
    {!! Html::style('../assets/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.min.css') !!}
    {!! Html::style('../assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css') !!}
    {!! Html::style('../assets/vendors/clockpicker/css/bootstrap-clockpicker.min.css') !!}
    {!! Html::style('../assets/vendors/wysihtml5/css/bootstrap-wysihtml5-0.0.2.min.css') !!}
    {!! Html::style('../assets/vendors/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') !!}

@endsection

@section('content')


			<!-- main content  -->
			<div id="main" class="main">
				<div class="row">
					<!-- breadcrumb section -->
					<div class="ribbon">
						<ul class="breadcrumb">
							<li>
								<i class="fa fa-home"></i>
								<a href="#">Accueil</a>
							</li>
							<li>
								<a href="#">Admins</a>
							</li>
						</ul>
					</div>

					<!-- main content -->
					<div id="content">
						<div id="sortable-panel" class="">

							<div id="titr-content" class="col-md-12">
								<h2>Modifier l'admin : {{ $admin->name }} {{ $admin->surname }}</h2>
								<h5></h5>
							</div>
							<div class="col-md-12">
                  @if( Session::has('success') )
                      <div class="mt-5 alert alert-success" role="alert">
                          {{ Session::get('success') }}
                      </div>
                  @endif
              </div>


							<div class="col-md-12 ">
								<div  class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<i class="fa fa-edit"></i>
											Modifier l'admin
											<div class="bars pull-right">
												<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
												<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
												<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

											</div>
										</div>
									</div>
									<div class="panel-body">

										<hr>
										<form action="{{ route('admins.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
											{{ csrf_field() }}
                      {{ method_field('PUT') }}
											<div class="row">
												<div class="col-md-6">
													<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
														<label for="name" class="control-label">
															Nom <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Nom" class="form-control" id="name" name="name" value="{{ $admin->name }}">
														@if ($errors->has('name'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('name') }}</strong>
		                            </span>
		                        @endif
													</div>
                          <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
														<label for="surname" class="control-label">
															Prénom <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Prénom" class="form-control" id="surname" name="surname" value="{{ $admin->surname }}">
														@if ($errors->has('surname'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('surname') }}</strong>
		                            </span>
		                        @endif
													</div>
                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
														<label for="email" class="control-label">
															Email <span class="symbol required"></span>
														</label>
														<input type="email" placeholder="Email" class="form-control" id="email" name="email" value="{{ $admin->email }}">
														@if ($errors->has('email'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('email') }}</strong>
		                            </span>
		                        @endif
													</div>
                          <div class="form-group">
														<label for="avatar" class="control-label">
															Avatar
														</label>
                            <div class="fileinput fileinput-new" data-provides="fileinput">
    												  	<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                  @if ($admin->avatar && File::exists(public_path("uploads/admins/".$admin->avatar)))
                                    <img data-src="" src="{{asset('/uploads/admins')}}/{{ $admin->avatar }}" alt="{{ $admin->name }}"/>
                                  @else
												    	      <img data-src="holder.js/100%x100%" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOTAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTkwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9Ijk1IiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE5MHgxNDA8L3RleHQ+PC9zdmc+" alt="...">
                                  @endif
                                </div>
    												  	<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
    												  	<div>
    												    	<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="avatar"></span>
    												    	<a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
    												  	</div>
    												</div>
													</div>

												</div>
												<div class="col-md-6">
                          <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
														<label for="phone" class="control-label">
															Téléphone <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Téléphone" class="form-control" id="phone" name="phone" value="{{ $admin->phone }}">
														@if ($errors->has('phone'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('phone') }}</strong>
		                            </span>
		                        @endif
													</div>
                          <div class="form-group">
														<label for="company" class="control-label">
                              Nom de l'entreprise <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Nom de l'entrepris" class="form-control" id="company" name="company" value="{{ $admin->company }}">
													</div>
                          <div class="form-group">
														<label for="adresse" class="control-label">
                              Adresse <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Adresse" class="form-control" id="adresse" name="adresse" value="{{ $admin->adresse }}">
													</div>
                          <div class="form-group">
														<label for="cp" class="control-label">
                              Code postale <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Code postal" class="form-control" id="cp" name="cp" value="{{ $admin->cp }}">
													</div>
                          <div class="form-group">
														<label for="city" class="control-label">
                              Ville <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Ville" class="form-control" id="city" name="city" value="{{ $admin->city }}">
													</div>
                          <div class="form-group">
														<label for="country" class="control-label">
                              Pays <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Pays" class="form-control" id="country" name="country" value="{{ $admin->country }}">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div>
														<span class="symbol required"></span>Required Fields *
														<hr>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">

												</div>
												<div class="col-md-4">
													<button class="btn btn-success btn-block" type="submit">
														Enregistrer <i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
											</div>
										</form>


									</div>
								</div><!-- end panel -->
							</div><!-- end .col-md-6 -->



						</div><!-- end col-md-12 -->
					</div><!-- end #content -->
				</div><!-- end .row -->
			</div>
			<!-- ./end #main  -->

@endsection

@section('scripts')
    {!! Html::script('../assets/vendors/x-editable/js/bootstrap-editable.min.js') !!}
    {!! Html::script('../assets/vendors/momentjs/js/moment.min.js') !!}
    {!! Html::script('../assets/vendors/typeaheadjs/js/typeahead.min.js') !!}
    {!! Html::script('../assets/vendors/typeaheadjs/js/typeaheadjs.min.js') !!}
    {!! Html::script('../assets/vendors/select2/js/select2.min.js') !!}
    {!! Html::script('../assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}
    {!! Html::script('../assets/vendors/jquery-mockjax/js/jquery.mockjax.min.js') !!}
    {!! Html::script('../assets/vendors/jasny-bootstrap/js/jasny-bootstrap.min.js') !!}
    {!! Html::script('../assets/vendors/jquery-knob/js/jquery.knob.min.js') !!}
    {!! Html::script('../assets/vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') !!}
    {!! Html::script('../assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js') !!}
    {!! Html::script('../assets/vendors/clockpicker/js/bootstrap-clockpicker.min.js') !!}
    {!! Html::script('../assets/vendors/wysihtml5/js/wysihtml5-0.3.0.min.js') !!}
    {!! Html::script('../assets/vendors/wysihtml5/js/bootstrap-wysihtml5.min.js') !!}
    {!! Html::script('../assets/vendors/wysihtml5/js/wysihtml5.min.js') !!}
    {!! Html::script('../assets/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') !!}
@endsection
