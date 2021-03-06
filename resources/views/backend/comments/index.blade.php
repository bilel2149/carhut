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
								<h2>Tous les Commentaires</h2>
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
											<i class="fa fa-table"></i>
											Default Data Tables
											<div class="bars pull-right">
												<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
												<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
												<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

											</div>
										</div>
									</div>
									<div class="panel-body">

										<table id="posts" class="table table-striped table-bordered width-100 cellspace-0" >
										    <thead>
										        <tr>
										            <th>Auteur</th>
																<th>Email</th>
																<th>Adresse ip</th>
																<th>Site web</th>
																<th>Comment</th>
																<th>Date</th>
										            <th>Actions</th>
										        </tr>
										    </thead>

										    <tbody>


                              @foreach( $comments as $comment )
																<tr>
																	<td>
                                      <a href="{{ route('comments.edit', $comment->id) }}">
                                          {{ $comment->comment_author }}
                                      </a>
                                  </td>
																	<td>
																		<a href="mailto:{{ $comment->comment_author_email }}">
																		{{ $comment->comment_author_email }}
																		</a>
																	</td>
																	<td>{{ $comment->comment_author_IP }}</td>
																	<td>
																		<a href="{{ $comment->comment_author_url }}" target="_blank">
																			{{ $comment->comment_author_url }}
																		</a>
																	</td>
											            <td>{{ $comment->comment_content }}</td>
																	<td>{{ date('F j, Y', strtotime( $comment->created_at )) }} @ {{ date('h:i', strtotime( $comment->created_at )) }}</td>
																	<td class="center">
                                      <div class="">
                                        <ul class="list-inline">
																					<li>
																						<?php if( $comment->comment_approved ) : ?>
																								{!! Form::open([
		      															            'method' => 'POST',
		      															            'route' => ['comment.unapprove', $comment->id]
		      															        ]) !!}
		                                                {{ Form::button('<i class="fa fa-times fa fa-thumbs-o-down"></i> unapprove', ['type' => 'submit', 'class' => 'btn btn-xs btn-blue tooltips'] )  }}
		      															        {!! Form::close() !!}
				                                    <?php else : ?>
																								{!! Form::open([
		      															            'method' => 'POST',
		      															            'route' => ['comment.approve', $comment->id]
		      															        ]) !!}
		                                                {{ Form::button('<i class="fa fa-times fa fa-thumbs-o-up"></i> approve', ['type' => 'submit', 'class' => 'btn btn-xs btn-green tooltips'] )  }}
		      															        {!! Form::close() !!}
				                                    <?php endif; ?>
																					</li>
                                          <li>
                                            <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                          </li>
                                          <li>
                                            {!! Form::open([
      															            'method' => 'DELETE',
      															            'route' => ['comments.destroy', $comment->id]
      															        ]) !!}
                                                {{ Form::button('<i class="fa fa-times fa fa-white"></i>', ['type' => 'submit', 'class' => 'btn btn-xs btn-bricky tooltips'] )  }}
      															        {!! Form::close() !!}
                                          </li>
                                        </ul>
                                      </div>
											            </td>
																</tr>
															@endforeach


										    </tbody>
										</table>

									</div>
								</div><!-- end panel -->
							</div><!-- end .col-md-12 -->




						</div><!-- end col-md-12 -->
					</div><!-- end #content -->
				</div><!-- end .row -->
			</div>
			<!-- ./end #main  -->

@endsection

@section('scripts')
	{!! Html::script('../assets/vendors/jquery-datatables/js/jquery.dataTables.min.js') !!}
	{!! Html::script('../assets/vendors/jquery-datatables/js/dataTables.bootstrap.min.js') !!}
	{!! Html::script('../assets/vendors/jquery-datatables/js/dataTables.responsive.min.js') !!}
	{!! Html::script('../assets/vendors/jquery-datatables/js/dataTables.tableTools.min.js') !!}
	{!! Html::script('../assets/vendors/jquery-datatables/js/dataTables.colVis.min.js') !!}

	<script type="text/javascript">
			$('#posts').dataTable({
				responsive: true
			});
	</script>
@endsection
