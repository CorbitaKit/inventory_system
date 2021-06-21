<!DOCTYPE html>
<html>
<head>
	<title>Inventory System</title>
	@include('assets.styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		@include('importants.navbar')

		@include('importants.aside')

		<div class="content-wrapper">
			@yield('content')
		</div>


	</div>

	@include('assets.scripts')
</body>
</html>