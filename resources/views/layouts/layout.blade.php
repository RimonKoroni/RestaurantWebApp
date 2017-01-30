<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/matrix-style.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/matrix-media.css') }}" />
	<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/jquery.gritter.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800'/>

	@yield('style')
	
	<script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body>
	<!--Header-part-->
	<div id="header">
	  <h1><a href="dashboard.html">Restaurant</a></h1>
	</div>
	<!--close-Header-part--> 

	<!--sidebar-menu-->
	@include('layouts.sidebarMenu')
	<!--sidebar-menu-->

	<div id="content">
		@yield('content')
	</div>

	<script src="{{ asset('js/excanvas.min.js') }}"></script>  
	<script src="{{ asset('js/jquery.ui.custom.js') }}"></script> 
	<script src="{{ asset('js/bootstrap.min.js') }}"></script> 
	
	{{-- <script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script>  --}}
	<script src="{{ asset('js/jquery.peity.min.js') }}"></script> 
	<script src="{{ asset('js/fullcalendar.min.js') }}"></script> 
	<script src="{{ asset('js/matrix.js') }}"></script> 
	
	{{-- <script src="{{ asset('js/jquery.gritter.min.js') }}"></script>  --}}
	{{-- <script src="{{ asset('js/matrix.interface.js') }}"></script>  --}}
	<script src="{{ asset('js/matrix.chat.js') }}"></script> 
	<script src="{{ asset('js/jquery.validate.js') }}"></script> 
	<script src="{{ asset('js/matrix.form_validation.js') }}"></script> 
	<script src="{{ asset('js/jquery.wizard.js') }}"></script> 
	<script src="{{ asset('js/jquery.uniform.js') }}"></script> 
	<script src="{{ asset('js/select2.min.js') }}"></script> 
	<script src="{{ asset('js/matrix.popover.js') }}"></script> 
	<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script> 
	<script src="{{ asset('js/matrix.tables.js') }}"></script> 
	<script src="{{ asset('js/sidebarMenu.js') }}"></script> 

	@yield('script')
	
</body>
</html>