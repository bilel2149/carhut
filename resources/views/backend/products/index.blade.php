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
								<a href="#">Boutique</a>
							</li>
						</ul>
					</div>

					<!-- main content -->
					<div id="content">
						<div id="sortable-panel" class="">

							<div id="titr-content" class="col-md-12">
								<h2>Tous les produits</h2>
								<h5>common form elements and layouts ...</h5>
								<div class="actions">
									<a href="{{ route('products.create') }}" class="btn btn-success ">Ajouter un nouveau</a>
								</div>
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
										            <th>ID</th>
																<th>Image</th>
																<th>Slug</th>
										            <th>Titre</th>
										            <th>Detail</th>
										            <th>Prix</th>
																<th>Categorie</th>
																<th>Date création</th>
																<th>Date mise à jour</th>
										            <th>Actions</th>
										        </tr>
										    </thead>

										    <tbody>


															@foreach( $products as $product )
																<tr>
																	<td>{{ $product->id }}</td>
											            <td><img src="{{asset('/uploads/products/')}}/{{ $product->product_thumbnail }}" alt="{{ $product->name }}" style="width:100px;"/></td>
											            <td>{{ $product->slug }}</td>
											            <td>{{ $product->name }}</td>
											            <td>
																		@if ( strlen( $product->details ) > 60 )
																			{{ substr( $product->details, 0, 60 ) }} ...
																		@else
																			{{ $product->details }}
																		@endif
																	</td>
											            <td>{{ $product->price }}</td>
																	<td>
																		<?php $category = Helper::get_category($product->category_ID); ?>
																		{{ $category->category_name }}
																	</td>
																	<td>{{ date( 'j/m/Y', strtotime( $product->created_at ) ) }}</td>
																	<td>{{ date( 'j/m/Y', strtotime( $product->updated_at ) ) }}</td>
																	<td class="center">
                                      <div class="">
                                        <ul class="list-inline">
                                          <li>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                          </li>
                                          <li>
                                            {!! Form::open([
      															            'method' => 'DELETE',
      															            'route' => ['products.destroy', $product->id]
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
