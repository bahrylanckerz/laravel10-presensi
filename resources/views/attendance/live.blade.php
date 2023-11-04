@extends('layouts.wrapper')

@section('topbar')
	<div class="appHeader bg-danger text-light">
		<div class="left">
			<a href="javascript:;" class="headerButton goBack">
				<i class="fas fa-arrow-left fa-2x"></i>
			</a>
		</div>
		<div class="pageTitle">Absensi</div>
		<div class="right"></div>
	</div>
@endsection

@section('content')
	<div class="row my-4">
		<div class="col text-center mt-5">
			<center>
				<style>
					#my_camera, #my_camera video {
						display: inline-block;
						width: 100% !important;
						height: auto !important;
						margin: auto !important;
						border-radius: 8px !important;
					}
				</style>
				<div id="my_camera"></div>
			</center>
			<div style="width:100%; margin:auto; text-align:center;">
				<button type="button" id="btn-clock" class="btn btn-block btn-danger">Absensi Masuk</button>
			</div>
			<div class="form-group">
				<input type="hidden" name="location" id="location" class="form-control text-center" readonly>
			</div>
			<div class="form-group mb-5">
				<div id="map" style="width:100%; height:300px;"></div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script language="JavaScript">
		Webcam.set({
			width: 420,
			height: 340,
			image_format: 'jpeg',
			jpeg_quality: 100,
		});
		Webcam.attach('#my_camera');

		// $('#btn-clock').click(function(e){
		// 	$('#btn-clock').attr('disabled', true);
		// 	$('#btn-clock').text('Processing...');
		// 	Webcam.snap(function(uri){
		// 	var image_base64 = uri;
		// 	var location = $('#location').val();
		// 	var clock_type = 'in';
		// 	if(clock_type == 'in'){
		// 		var text = 'Clock In';
		// 	}else{
		// 		var text = 'Clock Out';
		// 	}
		// 	$.ajax({
		// 		type: 'POST',
		// 		url: "{{ route('attendance.live') }}"",
		// 		data: {
		// 		clock_type: clock_type,
		// 		image: image_base64,
		// 		location: location
		// 		},
		// 		dataType: 'JSON',
		// 		cache: false,
		// 		success: function(response){
		// 		$('#btn-clock').attr('disabled', false);
		// 		$('#btn-clock').text(text);

		// 		if(response.success){
		// 			Swal.fire({
		// 			icon: 'success',
		// 			title: 'Thank You',
		// 			text: response.message,
		// 			confirmButtonText: 'OKE',
		// 			}).then((result) => {
		// 			if(result.isConfirmed){
		// 				window.location.href="{{ route('dashboard') }}";
		// 			}
		// 			});
		// 		}else{
		// 			Swal.fire({
		// 			icon: 'error',
		// 			title: 'Sorry...',
		// 			text: response.message,
		// 			confirmButtonText: 'OKE',
		// 			});
		// 		}
		// 		}
		// 	});
		// 	});
		// });

		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition);
		} else {
			alert("Geolocation is not supported by this browser.");
		}

		function showPosition(position) {
			var latitude  = position.coords.latitude;
			var longitude = position.coords.longitude;
			var latlong   = latitude + ', ' + longitude;
			$('#location').val(latlong);

			const map = L.map('map').setView([latitude, longitude], 18);

			L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: ''
			}).addTo(map);

			L.marker([latitude, longitude]).addTo(map)
			.bindPopup('My Location')
			.openPopup();

			L.marker([-6.3032500592550536, 106.09618380999378]).addTo(map)
			.bindPopup('PT Square Gate One');

			L.circle([-6.3032500592550536, 106.09618380999378], {
				color: 'red',
				fillColor: 'red',
				fillOpacity: 0.5,
				radius: 50
			}).addTo(map);
		}
	</script>
@endsection