<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	@include('branch.inc.head')
	
	<body>
		<!--wrapper-->
	<div class="wrapper">
		@include('branch.inc.message')
		<!--sidebar wrapper -->
		@include('branch.inc.left_sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('branch.inc.navbar')
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
			<p class="mb-0">Copyright ©{{date('Y')}}
				<a class="text-dark" href="https://www.cstechnology.org/" style="color:#FFFFFF;">CS-Technology.org</a> All Rights Reserved <a href="https://mail.hostinger.com/" class="text-white" style="cursor: pointer;">Webmail Login</a>
			</p>
		</footer>
	</div>
	<!--end wrapper-->
	
	@include('branch.inc.js_script')
	@yield('script')
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.1/js/bootstrapValidator.min.js"></script>
</body>
</html>