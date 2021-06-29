<!DOCTYPE html>
<html>
<head>
	<title>Demo App</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">	
	@include('assets.styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper" id="app">

		@include('importants.navbar')

		@include('importants.aside')

		<div class="content-wrapper" >
			@yield('content')
		</div>


	</div>

	@include('assets.scripts')
	<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>