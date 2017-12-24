<!DOCTYPE html>
<?php $parametre = Helper::get_settings(); ?>
<html>
	<head>
		<title>@if ($parametre->title) {{ $parametre->title }} @endif Admin ||</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{!! Html::style('../assets/vendors/bootstrap/css/bootstrap.min.css') !!}
		{!! Html::style('../assets/vendors/font-awesome/css/font-awesome.min.css') !!}

		<!-- Related css to this page -->

		<!-- Yeptemplate css --><!-- Please use *.min.css in production -->
		{!! Html::style('../assets/css/yep-style.css') !!}
		{!! Html::style('../assets/css/yep-vendors.css') !!}

		<!-- favicon -->
		<link rel="shortcut icon" href="{{asset('../assets/img/favicon/favicon.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{asset('../assets/img/favicon/favicon.ico')}}" type="image/x-icon">
	</head>

	<body id="mainbody">
		<div id="container" class="container-fluid skin-3">
			<!-- Add Task in sidebar list modal -->
			<div class="modal fade" id="modal-add-task" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<form class="form-horizontal">
							<div class="modal-header default">
								 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="myModalLabel1">
									Add Task
								</h4>
							</div>

							<div class="modal-body">
								<!-- Text input-->
								<div class="control-group">
								  	<label class="control-label" for="task-name">Task Name</label>
								  	<div class="controls">
								    	<input id="task-name" name="task-name" type="text" placeholder="" class="form-control">
								  	</div>
								</div>

								<!-- Textarea -->
								<div class="control-group">
								  	<label class="control-label" for="Description">Description</label>
								  	<div class="controls">
								    	<textarea id="Description" name="Description" class="form-control"></textarea>
								  	</div>
								</div>

								<!-- Text input-->
								<div class="control-group">
								  	<label class="control-label" for="owner">Owner</label>
								  	<div class="controls">
								    	<input id="owner" name="owner" type="text" placeholder="" class="form-control">

								  	</div>
								</div>
							</div>
							<div class="modal-footer">
								 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!--./ Add Task in sidebar list modal -->

				<div class="container">
            <div class="row">
                <div class="col-md-12">

                    @if( Session::has('success') )
                        <div class="mt-5 alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>

			<!-- Add Contact in sidebar list modal -->
			<div class="modal fade" id="modal-add-contact" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header default">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel2">
								Add Contact
							</h4>
						</div>
						<div class="modal-body">
							<!-- Text input-->
							<div class="control-group">
							  	<label class="control-label" for="name">Name</label>
							  	<div class="controls">
							    	<input id="name" name="name" type="text" placeholder="" class="form-control">
							  	</div>
							</div>

							<!-- Textarea -->
							<div class="control-group">
							  	<label class="control-label" for="Address">Address</label>
							  	<div class="controls">
							    	<textarea id="Address" name="Address" class="form-control"></textarea>
							  	</div>
							</div>

							<div class="control-group">
							  	<label class="control-label" for="Phone">Phone</label>
							  	<div class="controls">
							    	<input id="Phone" name="Phone" type="number" placeholder="" class="form-control">
							  	</div>
							</div>

							<!-- Text input-->
							<div class="control-group">
							  	<label class="control-label" for="owner">Email</label>
							  	<div class="controls">
							    	<input id="Email" name="Email" type="text" placeholder="" class="form-control">

							  	</div>
							</div>
						</div>
						<div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
			<!--./ Add Contact in sidebar list modal -->

			@include('backend.layouts.header')

			@include('backend.layouts.sidebar')

      @yield('content')


      @include('backend.layouts.footer')

      		</div>
      		<!-- end #container -->

      		<!-- General JS script library-->
					{!! Html::script('../assets/vendors/jquery/jquery.min.js') !!}
					{!! Html::script('../assets/vendors/jquery-ui/js/jquery-ui.min.js') !!}
					{!! Html::script('../assets/vendors/bootstrap/js/bootstrap.min.js') !!}
					{!! Html::script('../assets/vendors/jquery-searchable/js/jquery.searchable.min.js') !!}
					{!! Html::script('../assets/vendors/jquery-fullscreen/js/jquery.fullscreen.min.js') !!}


      		<!-- Yeptemplate JS Script --><!-- Please use *.min.js in production -->
					{!! Html::script('../assets/js/yep-script.js') !!}
					{!! Html::script('../assets/js/yep-vendors.js') !!}


      		<!-- Related JavaScript Library to This Pagee -->



      		<!-- Plugins Script -->
      		@yield('scripts')

      		<!-- Google Analytics Script -->
      		<script>
      			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      			ga('create', 'UA-67070957-1', 'auto');
      			ga('send', 'pageview');
      		</script>

      	</body>
      </html>
