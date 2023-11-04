<div class="appBottomMenu">
	<a href="{{ route('dashboard') }}" class="item {{ request()->is('dashboard') ? 'active' : null }}">
		<div class="col">
			<i class="fas fa-home fa-3x"></i>
			<strong>Beranda</strong>
		</div>
	</a>
	<a href="#" class="item">
		<div class="col">
			<i class="fas fa-calendar-alt fa-3x"></i>
			<strong>Kalender</strong>
		</div>
	</a>
	<a href="{{ route('attendance.live') }}" class="item">
		<div class="col">
			<div class="action-button large">
				<i class="fas fa-camera-retro text-white fa-3x"></i>
			</div>
		</div>
	</a>
	<a href="#" class="item">
		<div class="col">
			<i class="fas fa-inbox fa-3x"></i>
			<strong>Pesan</strong>
		</div>
	</a>
	<a href="#" class="item">
		<div class="col">
			<i class="fas fa-user-lock fa-3x"></i>
			<strong>Akun</strong>
		</div>
	</a>
</div>