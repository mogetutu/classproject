<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
@include('includes.header')
<div class="container">

	<div id="main" class="row">

			@yield('content')

	</div>
	<div class="sidebar">
		@include('includes.sidebar')
	</div>

	 <!-- <footer class="footer">
		@include('includes.footer')
	</footer> -->
	@include('layouts.alert')

</div>
</body>
</html>
