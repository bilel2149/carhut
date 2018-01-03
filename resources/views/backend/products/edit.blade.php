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
								<a href="#">Boutique</a>
							</li>
						</ul>
					</div>

					<!-- main content -->
					<div id="content">
						<div id="sortable-panel" class="">

							<div id="titr-content" class="col-md-12">
								<h2>Modifier le produit : {{ $product->name }}</h2>
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
											Modifier le produit
											<div class="bars pull-right">
												<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
												<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
												<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

											</div>
										</div>
									</div>
									<div class="panel-body">

										<hr>
										<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
											{{ csrf_field() }}
                      {{ method_field('PUT') }}
											<div class="row">
												<div class="col-md-6">
													<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
														<label for="name" class="control-label">
															Nom produit <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Nom" class="form-control" id="name" name="name" value="{{ $product->name }}">
														@if ($errors->has('name'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('name') }}</strong>
		                            </span>
		                        @endif
													</div>
													<div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
														<label for="slug" class="control-label">
															Slug <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Slug" class="form-control" id="slug" name="slug" value="{{ $product->slug }}">
														@if ($errors->has('slug'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('slug') }}</strong>
		                            </span>
		                        @endif
													</div>
													<div class="form-group{{ $errors->has('category_ID') ? ' has-error' : '' }}">
														<label for="category_ID" class="control-label">
															Category <span class="symbol required"></span>
														</label>
														<?php $categories = Helper::get_categoriesshop(); ?>
														<select name="category_ID" id="category_ID" class="form-control">
															<option value="">Choisir une catégorie</option>
															<?php
																if( $categories ) {
																	foreach( $categories as $category ) {
																		?>
																			<option value="{{ $category->id }}" {{ $category->id == $product->category_ID ? 'selected="selected"' : '' }}>{{ $category->category_name }}</option>
																		<?php
																	}
																}
															?>
														</select>
														@if ($errors->has('category_ID'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('category_ID') }}</strong>
		                            </span>
		                        @endif

													</div>
                          <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
														<label for="price" class="control-label">
															Prix <span class="symbol required"></span>
														</label>
														<input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
														@if ($errors->has('price'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('price') }}</strong>
		                            </span>
		                        @endif
													</div>
                          <div class="form-group{{ $errors->has('promo') ? ' has-error' : '' }}">
														<label for="promo" class="control-label">
															Promo ( % ) <span class="symbol required"></span>
														</label>
														<input type="number" class="form-control" id="promo" name="promo" value="{{ $product->promo }}">
														@if ($errors->has('promo'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('promo') }}</strong>
		                            </span>
		                        @endif
													</div>
													<div class="form-group">
														<label for="product_thumbnail" class="control-label">
															Image
														</label>
														<input type="file" class="form-control" id="product_thumbnail" name="product_thumbnail">
													</div>
                          @if ($product->product_thumbnail && File::exists(public_path("uploads/products/".$product->product_thumbnail)))
                          <div class="form-group">
                            <img src="{{asset('/uploads/products')}}/{{ $product->product_thumbnail }}" alt="{{ $product->name }}"/>
                          </div>
                          @endif
												</div>
												<div class="col-md-6">
													<div class="form-group{{ $errors->has('details') ? ' has-error' : '' }}">
														<label for="details" class="control-label">
															Détail <span class="symbol required"></span>
														</label>
														<textarea name="details" placeholder="Détail" class="form-control" id="details" cols="80" rows="10">{{ $product->details }}</textarea>
														@if ($errors->has('details'))
																<span class="help-block">
																		<strong>{{ $errors->first('details') }}</strong>
																</span>
														@endif
													</div>

                          <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
														<label for="description" class="control-label">
															Description <span class="symbol required"></span>
														</label>
														<textarea name="description" placeholder="Description" class="form-control" id="description" cols="80" rows="10">{{ $product->description }}</textarea>
														@if ($errors->has('description'))
																<span class="help-block">
																		<strong>{{ $errors->first('description') }}</strong>
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
		<script>
				$(document).ready(function(){
						$('.select2').select2({
								allowClear : true,
								width : '100%'
						});
				});
		</script>
@endsection
