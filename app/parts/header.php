<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Pucunoa</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="../app/assets/images/favicon/favicon.png" />
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap" rel="stylesheet" />
	<!-- All CSS Flies   -->
	<!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
	<!-- <link rel="stylesheet" href="../app/assets/css/vendor/bootstrap.min.css" />
        <link rel="stylesheet" href="../app/assets/css/vendor/font-awesome.min.css" />
        <link rel="stylesheet" href="../app/assets/css/vendor/stroke-gap-icons.css" />
        <link rel="stylesheet" href="../app/assets/css/vendor/ionicons.min.css" /> -->
	<!--===== Plugins CSS (All Plugins Files) =====-->
	<!-- <link rel="stylesheet" href="../app/assets/css/plugins/jquery-ui.min.css" />
        <link rel="stylesheet" href="../app/assets/css/plugins/nice-select.css" />
        <link rel="stylesheet" href="../app/assets/css/plugins/venobox.css" />
        <link rel="stylesheet" href="../app/assets/css/plugins/owl-carousel.css" />
        <link rel="stylesheet" href="../app/assets/css/plugins/aos.css" />
        <link rel="stylesheet" href="../app/assets/css/plugins/slick.css" /> -->
	<!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
	<link rel="stylesheet" href="../app/assets/css/vendor/vendor.min.css">
	<link rel="stylesheet" href="../app/assets/css/plugins/plugins.min.css">
	<link rel="stylesheet" href="../app/assets/css/style.min.css">
	<link rel="stylesheet" href="../app/assets/css/responsive.min.css">
	<link rel="stylesheet" href="../app/assets/css/gradient.css">
	<!--===== Main Css Files =====-->
	<!-- <link rel="stylesheet" href="../app/assets/css/style.css" /> -->
	<!-- ===== Responsive Css Files ===== -->
	<!-- <link rel="stylesheet" href="../app/assets/css/responsive.css" /> -->
</head>

<body>

	<div id="preloader">
    <div class="preloader">
      <span></span>
      <span></span>
    </div>
  </div>

	<div id="main">
		<header class="main-header">
			<div class="header-top-nav">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-4 col-md-12">
							<div class="text-lg-start text-center">
								<p class="color-white">Bienvenid@ a Pucunoa</p>
							</div>
						</div>
						<div class="col-8 d-lg-block d-none">
							<div class="header-right-nav hover-style-default">
								<div class="header-top-set-lan-curr d-flex justify-content-end">
									<div class="header-bottom-set dropdown">
										<a href="perfil" class=" header-action-btn hover-style-default color-white"> Mi Cuenta </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php require('menu_web.php'); ?>
		</header>
		<?php require('menu_movil.php'); ?>