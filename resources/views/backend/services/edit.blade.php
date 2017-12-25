@extends('backend.layouts.app')

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
								<a href="#">Services</a>
							</li>
						</ul>
					</div>

					<!-- main content -->
					<div id="content">
						<div id="sortable-panel" class="">

							<div id="titr-content" class="col-md-12">
								<h2>Modifier le service : {{ $service->service_title }}</h2>
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
											Modifier service
											<div class="bars pull-right">
												<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
												<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
												<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

											</div>
										</div>
									</div>
									<div class="panel-body">

										<hr>
										<form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
											{{ csrf_field() }}
                      {{ method_field('PUT') }}
											<div class="row">
												<div class="col-md-6">
													<div class="form-group{{ $errors->has('service_title') ? ' has-error' : '' }}">
														<label for="service_title" class="control-label">
															Titre <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Titre" class="form-control" id="service_title" name="service_title" value="{{ $service->service_title }}">
														@if ($errors->has('service_title'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('service_title') }}</strong>
		                            </span>
		                        @endif
													</div>
                          <div class="form-group{{ $errors->has('service_slug') ? ' has-error' : '' }}">
														<label for="service_slug" class="control-label">
															Slug <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Slug" class="form-control" id="service_slug" name="service_slug" value="{{ $service->service_slug }}">
														@if ($errors->has('service_slug'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('service_slug') }}</strong>
		                            </span>
		                        @endif
													</div>
                          <div class="form-group">
														<label for="service_thumbnail" class="control-label">
															Image
														</label>
														<input type="file" class="form-control" id="service_thumbnail" name="service_thumbnail">
													</div>
                          @if ($service->service_thumbnail && File::exists(public_path("uploads/services/".$service->service_thumbnail)))
                          <div class="form-group">
                            <img src="{{asset('/uploads/services')}}/{{ $service->service_thumbnail }}" alt="{{ $service->service_title }}" style="max-width: 100%;"/>
                          </div>
                          @endif

												</div>
												<div class="col-md-6">
                          <div class="form-group{{ $errors->has('service_content') ? ' has-error' : '' }}">
														<label for="service_content" class="control-label">
															Contenu <span class="symbol required"></span>
														</label>
														<textarea name="service_content" placeholder="Contenu" class="form-control" id="service_content" cols="80" rows="10">{{ $service->service_content }}</textarea>
														@if ($errors->has('service_content'))
																<span class="help-block">
																		<strong>{{ $errors->first('service_content') }}</strong>
																</span>
														@endif
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
