<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>PERISAI Sae Nalendra</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= url('images/perisai.png') ?>" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?= url('atlantis') ?>/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ url('atlantis/assets/css/fonts.min.css')}}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= url('atlantis') ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= url('atlantis') ?>/assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= url('atlantis') ?>/assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="green">

				<a class="logo">
					<img src="<?= url('images/perisai1.png') ?>" width="150px" height="50px" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="green2">

				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a href="/profil" >
								<div class="avatar-sm">
									<i class="fas fa-user"></i>
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div >
									<li>
										<div class="user-box">
											<div class="u-text">
											<a href="/profil" class="btn btn-xs btn-secondary btn-sm">Profil</a>
											</div>
										</div>
									</li>
									<li>
										<div class="user-box">
											<div class="u-text">
										<a class="btn btn-xs btn-secondary btn-sm" href="/logout">Keluar</a>
									</div>
								</div>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

        @yield('content')

	</div>
	<!--   Core JS Files   -->
	<script src="<?= url('atlantis') ?>/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?= url('atlantis') ?>/assets/js/core/popper.min.js"></script>
	<script src="<?= url('atlantis') ?>/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="<?= url('atlantis') ?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?= url('atlantis') ?>/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?= url('atlantis') ?>/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="<?= url('atlantis') ?>/assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="<?= url('atlantis') ?>/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="<?= url('atlantis') ?>/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="<?= url('atlantis') ?>/assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="<?= url('atlantis') ?>/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="<?= url('atlantis') ?>/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?= url('atlantis') ?>/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="<?= url('atlantis') ?>/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="<?= url('atlantis') ?>/assets/js/atlantis.min.js"></script>
</body>
</html>