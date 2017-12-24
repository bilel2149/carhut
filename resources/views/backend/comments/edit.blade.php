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
								<a href="#">Commentaires</a>
							</li>
						</ul>
					</div>

					<!-- main content -->
					<div id="content">
						<div id="sortable-panel" class="">

							<div id="titr-content" class="col-md-12">
								<h2>Modifier la commentaire</h2>
								<h5></h5>
							</div>
							<div class="col-md-12">
                  @if( Session::has('success') )
                      <div class="mt-5 alert alert-success" role="alert">
                          {{ Session::get('success') }}
                      </div>
                  @endif
              </div>
                @php
                  $post = Helper::get_post( $comment->post_id  );
                @endphp
							<div class="col-md-12 ">
								<div  class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<i class="fa fa-edit"></i>
											Modifier la commentaire
											<div class="bars pull-right">
												<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
												<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
												<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

											</div>
										</div>
									</div>
									<div class="panel-body">

										<hr>
										<form action="{{ route('comments.update', $comment->id) }}" method="POST">
											{{ csrf_field() }}
											{{ method_field('PUT') }}
											<input type="hidden" name="post_id" value="{{ $comment->post_id }}" />
											<div class="row">
												<div class="col-md-6">
													<div class="form-group{{ $errors->has('comment_author') ? ' has-error' : '' }}">
														<label for="comment_author" class="control-label">
															Autheur <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Autheur" class="form-control" id="comment_author" name="comment_author" value="{{ $comment->comment_author }}">
														@if ($errors->has('comment_author'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('comment_author') }}</strong>
		                            </span>
		                        @endif
													</div>
													<div class="form-group{{ $errors->has('comment_author_email') ? ' has-error' : '' }}">
														<label for="comment_author_email" class="control-label">
															Email <span class="symbol required"></span>
														</label>
														<input type="email" placeholder="Email" class="form-control" id="comment_author_email" name="comment_author_email" value="{{ $comment->comment_author_email }}">
														@if ($errors->has('comment_author_email'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('comment_author_email') }}</strong>
		                            </span>
		                        @endif
													</div>
                          <div class="form-group">
														<label for="comment_author" class="control-label">
															Site web
														</label>
														<input type="text" placeholder="Site web" class="form-control" id="comment_author_url" name="comment_author_url" value="{{ $comment->comment_author_url }}">
													</div>

												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="comment_content" class="control-label">
															Message
														</label>
														<textarea name="comment_content" placeholder="Message" class="form-control" id="post_content" cols="80" rows="8">{{ $comment->comment_content }}</textarea>
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
														Modifier <i class="fa fa-arrow-circle-right"></i>
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
