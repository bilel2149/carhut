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
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Articles</a>
							</li>
						</ul>
					</div>

					<!-- main content -->
					<div id="content">
						<div id="sortable-panel" class="">

							<div id="titr-content" class="col-md-12">
								<h2>Ajouter une catégorie</h2>
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
											Nouvelle catégorie
											<div class="bars pull-right">
												<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
												<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
												<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

											</div>
										</div>
									</div>
									<div class="panel-body">

										<hr>
										<form action="{{ route('categories.store') }}" method="POST">
											{{ csrf_field() }}
											<div class="row">
												<div class="col-md-6">
													<div class="form-group{{ $errors->has('category_name') ? ' has-error' : '' }}">
														<label for="category_name" class="control-label">
															Titre <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Titre" class="form-control" id="category_name" name="category_name" value="{{ old('category_name') }}">
														@if ($errors->has('category_name'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('category_name') }}</strong>
		                            </span>
		                        @endif
													</div>

												</div>
												<div class="col-md-6">
                          <div class="form-group{{ $errors->has('category_slug') ? ' has-error' : '' }}">
														<label for="category_slug" class="control-label">
															Slug <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Slug" class="form-control" id="category_slug" name="category_slug" value="{{ old('category_slug') }}">
														@if ($errors->has('category_slug'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('category_slug') }}</strong>
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
