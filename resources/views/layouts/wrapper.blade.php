<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dashboard - E-Presensi</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<meta name="theme-color" content="#000000" />
	<meta name="description" content="Laravel 10 Presensi Online">
	<meta name="keywords" content="laravel, laravel 10, presensi, presensi online, saepul bahri, bahry lanckerz" />
	@include('layouts.header')
</head>

<body style="background-color: #e9ecef">
  <!-- loader -->
  <div id="loader">
    <div class="spinner-border text-danger" role="status"></div>
  </div>
  <!-- * loader -->

	<!-- App Header -->
	@yield('topbar')
	<!-- * App Header -->

  <!-- App Capsule -->
  <div id="appCapsule">
		@yield('content')
  </div>
  <!-- * App Capsule -->

  <!-- App Bottom Menu -->
	@include('layouts.bootomMenu')
  <!-- * App Bottom Menu -->

  <!-- ///////////// Js Files ////////////////////  -->
	@include('layouts.footer')

	@yield('script')
</body>

</html>