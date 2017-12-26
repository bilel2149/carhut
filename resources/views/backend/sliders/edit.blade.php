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
								<a href="#">Sliders</a>
							</li>
						</ul>
					</div>

					<!-- main content -->
					<div id="content">
						<div id="sortable-panel" class="">

							<div id="titr-content" class="col-md-12">
								<h2>modifier le slider : {{ $slider->slider_title }}</h2>
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
											Modifier slider
											<div class="bars pull-right">
												<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
												<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
												<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

											</div>
										</div>
									</div>
									<div class="panel-body">

										<hr>
										<form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
											{{ csrf_field() }}
                      {{ method_field('PUT') }}
											<div class="row">
												<div class="col-md-6">
													<div class="form-group{{ $errors->has('slider_title') ? ' has-error' : '' }}">
														<label for="slider_title" class="control-label">
															Titre <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Titre" class="form-control" id="slider_title" name="slider_title" value="{{ $slider->slider_title }}">
														@if ($errors->has('slider_title'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('slider_title') }}</strong>
		                            </span>
		                        @endif
													</div>
                          <div class="form-group">
														<label for="slider_image" class="control-label">
															Image
														</label>
														<input type="file" class="form-control" id="slider_image" name="slider_image">
													</div>
                          @if ($slider->slider_image && File::exists(public_path("uploads/sliders/".$slider->slider_image)))
                          <div class="form-group">
                            <img src="{{asset('/uploads/sliders')}}/{{ $slider->slider_image }}" alt="{{ $slider->slider_image }}" style="max-width: 100%;"/>
                          </div>
                          @endif

													<div class="form-group{{ $errors->has('slider_status') ? ' has-error' : '' }}">
														<label for="slider_status" class="control-label">
															Status <span class="symbol required"></span>
														</label>
														<select class="form-control" id="slider_status" name="slider_status">
																<option value="">Selectionner une status</option>
																<option value="0" {{ $slider->slider_status == 0 ? 'selected="selected"' : '' }}>Non Publier</option>
																<option value="1" {{ $slider->slider_status == 1 ? 'selected="selected"' : '' }}>Publier</option>
														</select>
														@if ($errors->has('slider_status'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('slider_status') }}</strong>
		                            </span>
		                        @endif
													</div>

												</div>
												<div class="col-md-6">
													<div class="form-group{{ $errors->has('slider_content') ? ' has-error' : '' }}">
														<div  class="panel panel-default">
															<div class="panel-heading">
																<div class="panel-title">
																	<i class="fa fa-pencil"></i>
																	Contenu
																	<div class="bars pull-right">
																		<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
																		<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
																		<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>
																	</div>
																</div>
															</div>
															<div class="panel-body no-padding">
																<textarea cols="80" id="slider_content" name="slider_content" rows="10">{{ $slider->slider_content }}</textarea>
																@if ($errors->has('slider_content'))
																		<span class="help-block">
																				<strong>{{ $errors->first('slider_content') }}</strong>
																		</span>
																@endif
															</div>
														</div>
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
<!-- Related JavaScript Library to This Pagee -->
		{!! Html::script('../assets/vendors/summernote/js/summernote.min.js') !!}
		{!! Html::script('../assets/vendors/bootstrap-markdown/js/markdown.min.js') !!}
		{!! Html::script('../assets/vendors/bootstrap-markdown/js/to-markdown.min.js') !!}
		{!! Html::script('../assets/vendors/bootstrap-markdown/js/bootstrap-markdown.min.js') !!}
		{!! Html::script('../assets/vendors/ckeditor/js/ckeditor.js') !!}
		{!! Html::script('../assets/vendors/tinymce/tinymce.min.js') !!}

		<script type="text/javascript">
					$(document).ready(function() {
						// TinyMCE editor Script
						tinymce.init({
						    selector: "#slider_content",
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
