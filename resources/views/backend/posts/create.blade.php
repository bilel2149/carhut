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
								<h2>Ajouter un article</h2>
								<h5></h5>
							</div>


							<div class="col-md-12 ">
								<div  class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<i class="fa fa-edit"></i>
											Nouvelle article
											<div class="bars pull-right">
												<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
												<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
												<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

											</div>
										</div>
									</div>
									<div class="panel-body">

										<hr>
										<form action="{{ route('posts.store') }}" method="POST">
											{{ csrf_field() }}
											<input type="hidden" name="post_type" value="post" />
											<div class="row">
												<div class="col-md-6">
													<div class="form-group{{ $errors->has('post_title') ? ' has-error' : '' }}">
														<label for="post_title" class="control-label">
															Titre <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Titre" class="form-control" id="post_title" name="post_title" value="{{ old('post_title') }}">
														@if ($errors->has('post_title'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('post_title') }}</strong>
		                            </span>
		                        @endif
													</div>
													<div class="form-group{{ $errors->has('post_slug') ? ' has-error' : '' }}">
														<label for="post_slug" class="control-label">
															Slug <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Slug" class="form-control" id="post_slug" name="post_slug" value="{{ old('post_slug') }}">
														@if ($errors->has('post_slug'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('post_slug') }}</strong>
		                            </span>
		                        @endif
													</div>
													<div class="form-group{{ $errors->has('category_ID') ? ' has-error' : '' }}">
														<label for="category_ID" class="control-label">
															Category <span class="symbol required"></span>
														</label>
														<select name="category_ID" id="category_ID" class="form-control">
															<option value="">Choisir une categorie</option>
															<option value="1">Categorie 1</option>
															<option value="2">Categorie 2</option>
														</select>
														@if ($errors->has('category_ID'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('category_ID') }}</strong>
		                            </span>
		                        @endif

													</div>

												</div>
												<div class="col-md-6">
													<div class="form-group{{ $errors->has('post_content') ? ' has-error' : '' }}">
														<label for="post_content" class="control-label">
															Contenu <span class="symbol required"></span>
														</label>
														<textarea name="post_content" placeholder="Contenu" class="form-control" id="post_content" cols="80" rows="8">{{ old('post_content') }}</textarea>
														@if ($errors->has('post_content'))
																<span class="help-block">
																		<strong>{{ $errors->first('post_content') }}</strong>
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
