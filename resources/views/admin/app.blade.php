<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	@include('admin.inc.head')
	
	<body>
		<!--wrapper-->
	<div class="wrapper">
		@include('admin.inc.message')
		<!--sidebar wrapper -->
		@include('admin.inc.left_sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('admin.inc.navbar')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			@yield('main')
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	@include('admin.inc.js_script')
</body>
</html>