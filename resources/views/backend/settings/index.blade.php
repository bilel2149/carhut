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
								<a href="#">Parametre de théme</a>
							</li>
						</ul>
					</div>


          <!-- main content -->
					<div id="content">
						<div id="sortable-panel" class="">

							<div id="titr-content" class="col-md-12">
								<h2>Parametre de théme</h2>
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
											Modifier
											<div class="bars pull-right">
												<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
												<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
												<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

											</div>
										</div>
									</div>
									<div class="panel-body">

										<hr>
										<form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
											{{ csrf_field() }}
											{{ method_field('PUT') }}
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="title" class="control-label">
															Titre
														</label>
														<input type="text" placeholder="Titre" class="form-control" id="title" name="title" value="{{ $parametre->title }}">
													</div>
                          <div class="form-group">
														<label for="title" class="control-label">
															Logo
														</label>
														<input type="file" class="form-control" id="logo" name="logo">
                          </div>
                          @if ($parametre->logo && File::exists(public_path("uploads/logos/".$parametre->logo)))
                          <div class="form-group">
                            <img src="{{ asset('uploads/logos/' . $parametre->logo) }}" alt="{{ $parametre->title }}" />
                          </div>
                          @endif

                          <div class="form-group">
														<label for="small_logo" class="control-label">
															Petit Logo
														</label>
														<input type="file" class="form-control" id="small_logo" name="small_logo">
													</div>
                          @if ($parametre->small_logo && File::exists(public_path("uploads/logos/".$parametre->small_logo)))
                          <div class="form-group">
                            <img src="{{ asset('uploads/logos/' . $parametre->small_logo) }}" alt="{{ $parametre->title }}" />
                          </div>
                          @endif
                          <div class="form-group">
														<label for="footer_logo" class="control-label">
															Logo du footer
														</label>
														<input type="file" class="form-control" id="footer_logo" name="footer_logo">
													</div>
                          @if ($parametre->footer_logo && File::exists(public_path("uploads/logos/".$parametre->footer_logo)))
                          <div class="form-group">
                            <img src="{{ asset('uploads/logos/' . $parametre->footer_logo) }}" alt="{{ $parametre->title }}" />
                          </div>
                          @endif
                          <div class="form-group">
														<label for="adresse" class="control-label">
															Adresse
														</label>
														<input type="text" placeholder="Adresse" class="form-control" id="adresse" name="adresse" value="{{ $parametre->adresse }}">
													</div>
                          <div class="form-group">
														<label for="city" class="control-label">
															Ville
														</label>
														<input type="text" placeholder="Ville" class="form-control" id="city" name="city" value="{{ $parametre->city }}">
													</div>
                          <div class="form-group">
														<label for="country" class="control-label">
															Paye
														</label>
														<input type="text" placeholder="Paye" class="form-control" id="country" name="country" value="{{ $parametre->country }}">
													</div>
                          <div class="form-group">
														<label for="country" class="control-label">
															Email
														</label>
														<input type="email" placeholder="Email" class="form-control" id="email" name="email" value="{{ $parametre->email }}">
													</div>
                          <div class="form-group">
														<label for="phone" class="control-label">
															Téléphone
														</label>
														<input type="text" placeholder="Téléphone" class="form-control" id="phone" name="phone" value="{{ $parametre->phone }}">
													</div>
                          <div class="form-group">
														<label for="phone" class="control-label">
															Heure Ouvert
														</label>
														<input type="text" placeholder="Heure Ouvert" class="form-control" id="open_time" name="open_time" value="{{ $parametre->open_time }}">
													</div>
                          <div class="form-group">
														<label for="phone" class="control-label">
															Heure Fermé
														</label>
														<input type="text" placeholder="Heure Fermé" class="form-control" id="close_time" name="close_time" value="{{ $parametre->close_time }}">
													</div>

												</div>
												<div class="col-md-6">
                          <div class="form-group">
														<label for="category_slug" class="control-label">
															Meta description
														</label>
                            <textarea class="form-control" id="meta_description" name="meta_description" rows="5">{{ $parametre->meta_description }}</textarea>
													</div>
                          <div class="form-group">
														<label for="footer_description" class="control-label">
															Footer description
														</label>
                            <textarea class="form-control" id="footer_description" name="footer_description" rows="5">{{ $parametre->footer_description }}</textarea>
													</div>
                          <div class="form-group">
														<label for="copyright" class="control-label">
															Copyright
														</label>
                            <textarea class="form-control" id="copyright" name="copyright" rows="5">{{ $parametre->copyright }}</textarea>
													</div>
                          <div class="form-group">
														<label for="facebook" class="control-label">
															Facebook
														</label>
														<input type="url" placeholder="Facebook" class="form-control" id="facebook" name="facebook" value="{{ $parametre->facebook }}">
													</div>
                          <div class="form-group">
														<label for="twitter" class="control-label">
															Twitter
														</label>
														<input type="url" placeholder="Twitter" class="form-control" id="twitter" name="twitter" value="{{ $parametre->twitter }}">
													</div>
                          <div class="form-group">
														<label for="google_plus" class="control-label">
															Google Plus
														</label>
														<input type="url" placeholder="Google Plus" class="form-control" id="google_plus" name="google_plus" value="{{ $parametre->google_plus }}">
													</div>
                          <div class="form-group">
														<label for="linkedin" class="control-label">
															Linkedin
														</label>
														<input type="url" placeholder="Linkedin" class="form-control" id="linkedin" name="linkedin" value="{{ $parametre->linkedin }}">
													</div>
                          <div class="form-group">
														<label for="skype" class="control-label">
															Skype
														</label>
														<input type="text" placeholder="Skype" class="form-control" id="skype" name="skype" value="{{ $parametre->skype }}">
													</div>
                          <div class="form-group">
														<label for="whatsapp" class="control-label">
															Whatsapp
														</label>
														<input type="text" placeholder="Whatsapp" class="form-control" id="whatsapp" name="whatsapp" value="{{ $parametre->whatsapp }}">
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
