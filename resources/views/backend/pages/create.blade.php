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
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Pages</a>
							</li>
						</ul>
					</div>

					<!-- main content -->
					<div id="content">
						<div id="sortable-panel" class="">

							<div id="titr-content" class="col-md-12">
								<h2>Ajouter une page</h2>
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
										<form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
											{{ csrf_field() }}
											<input type="hidden" name="post_type" value="page" />
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
													<div class="form-group">
														<label for="post_thumbnail" class="control-label">
															Image
														</label>
														<input type="file" class="form-control" id="post_thumbnail" name="post_thumbnail">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{ $errors->has('post_content') ? ' has-error' : '' }}">
														<label for="post_content" class="control-label">
															Contenu <span class="symbol required"></span>
														</label>
														<textarea name="post_content" placeholder="Contenu" class="form-control" id="post_content" cols="80" rows="10">{{ old('post_content') }}</textarea>
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
    {!! Html::script('../assets/vendors/summernote/js/summernote.min.js') !!}
		{!! Html::script('../assets/vendors/bootstrap-markdown/js/markdown.min.js') !!}
		{!! Html::script('../assets/vendors/bootstrap-markdown/js/to-markdown.min.js') !!}
		{!! Html::script('../assets/vendors/bootstrap-markdown/js/bootstrap-markdown.min.js') !!}
		{!! Html::script('../assets/vendors/ckeditor/js/ckeditor.js') !!}
		{!! Html::script('../assets/vendors/tinymce/tinymce.min.js') !!}
		<script>
				$(document).ready(function(){
						$('.select2').select2({
								allowClear : true,
								width : '100%'
						});

            // TinyMCE editor Script
						tinymce.init({
						    selector: "#post_content",
						    menubar:false,
							skin: 'light',
							plugins: [
							"advlist autolink link image lists charmap print preview hr anchor pagebreak code  ",
							"searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker",
							"fullscreen table contextmenu directionality emoticons paste textcolor  "
							],
							image_advtab: true,
							toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | insertdatetime nonbreaking spellchecker contextmenu directionality emoticons paste textcolor codemirror | image | media | link unlink anchor | print preview |  forecolor backcolor | hr anchor pagebreak searchreplace wordcount visualblocks visualchars | code | fullscreen |  styleselect | fontselect fontsizeselect | table | cut copy paste",
							image_advtab: true ,
						});
				});
		</script>
@endsection
