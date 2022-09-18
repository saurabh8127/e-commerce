<!DOCTYPE html>
<html lang="en" dir="ltr" data-scompiler-id="0">
<!-- Mirrored from stroyka-admin.html.themeforest.scompiler.ru/variants/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Sep 2022 15:04:25 GMT -->

<head>
	<meta charSet="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="format-detection" content="telephone=no" />
	<title>Stroyka Admin - eCommerce Dashboard Template</title><!-- icon -->
	<link rel="icon" type="image/png" href="images/favicon.png" /><!-- fonts -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" />
	<!-- css -->
	@vite(['resources/assets/vendor/bootstrap/css/bootstrap.ltr.css','resources/assets/vendor/highlight.js/styles/github.css','resources/assets/vendor/simplebar/simplebar.min.css','resources/assets/vendor/quill/quill.snow.css','resources/assets/vendor/air-datepicker/css/datepicker.min.css','resources/assets/vendor/select2/css/select2.min.css','resources/assets/vendor/datatables/css/dataTables.bootstrap5.min.css','resources/assets/vendor/nouislider/nouislider.min.css','resources/assets/vendor/fullcalendar/main.min.css','resources/assets/vendor/css/style.css'])
	<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-8"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-97489509-8');
	</script>
</head>

<body>
	<!-- sa-app -->
	<div class="sa-app sa-app--desktop-sidebar-shown sa-app--mobile-sidebar-hidden sa-app--toolbar-fixed">
		<!-- sa-app__sidebar -->
		@include('components.sidebar')
		<!-- sa-app__sidebar / end -->
		<!-- sa-app__content -->
		<div class="sa-app__content">
			<!-- sa-app__toolbar -->
			@include('components.toolbar')
			<!-- sa-app__toolbar / end -->
			<!-- sa-app__body -->
			@yield('app')
			<!-- sa-app__body / end -->
			<!-- sa-app__footer -->
			@include('components.footer')
			<!-- sa-app__footer / end -->
		</div><!-- sa-app__content / end -->
		<!-- sa-app__toasts -->
		<div class="sa-app__toasts toast-container bottom-0 end-0"></div><!-- sa-app__toasts / end -->
	</div><!-- sa-app / end -->
	<!-- scripts -->
	@vite(['resources/assets/js/vendor/jquery/jquery.min.js','resources/assets/js/vendor/simplebar/simplebar.min.js','resources/assets/js/vendor/bootstrap/js/bootstrap.bundle.min.js','resources/assets/js/vendor/highlight.js/highlight.pack.js','resources/assets/js/vendor/quill/quill.min.js','resources/assets/js/vendor/air-datepicker/js/datepicker.min.js','resources/assets/js/vendor/air-datepicker/js/i18n/datepicker.en.js','resources/assets/js/vendor/select2/js/select2.min.js','resources/assets/js/vendor/fontawesome/js/all.min.js','resources/assets/js/vendor/chart.js/chart.min.js','resources/assets/js/vendor/datatables/js/jquery.dataTables.min.js','resources/assets/js/vendor/datatables/js/dataTables.bootstrap5.min.js','resources/assets/js/vendor/nouislider/nouislider.min.js',
	'resources/assets/js/vendor/fullcalendar/main.min.js','resources/assets/js/vendor/js/stroyka.js',
	'resources/assets/js/vendor/js/custom.js','resources/assets/js/vendor/js/calendar.js','resources/assets/js/vendor/js/demo.js','resources/assets/js/vendor/js/demo-chart-js.js']);
		
</body>
<!-- Mirrored from stroyka-admin.html.themeforest.scompiler.ru/variants/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Sep 2022 15:04:55 GMT -->

</html>
