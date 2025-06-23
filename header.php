<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<title>Smart Class</title>
	<meta charset="utf-8">
	<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free.">
	<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="article">
	<meta property="og:title" content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask & Laravel Admin Dashboard Theme">
	<meta property="og:url" content="https://keenthemes.com/metronic">
	<meta property="og:site_name" content="Keenthemes | Metronic">
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8">
	<link rel="shortcut icon" href="assets/school2.jpg" style="border-radius: 50px;">
	<!--begin::Fonts-->
	<link rel="stylesheet" href="../../css?family=Inter:300,400,500,600,700">
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used by this page)-->
	<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css">
	<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css">
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">
	<!-- Add this in your HTML <head> or before </body> -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="icon" type="image/png" href="https://cdn.jotfor.ms/images/exclamation-octagon.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Link to Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
	<!-- Include Select2 CSS and JS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

	<style>
		#headingText {
			font-family: 'Roboto Slab', serif;
			font-size: 1.5rem;
			font-weight: bold;
			position: relative;
			display: inline-block;
			text-transform: uppercase;
			color: #333;
			overflow: hidden;
			color: #333;
		}

		#headingText:before {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			height: 100%;
			width: 100%;
			background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0) 100%);
			animation: shimmer 2s infinite;
		}

		@keyframes shimmer {
			100% {
				left: 100%;
			}
		}


		.header-logo-container {
			display: flex;
			align-items: center;
			gap: 15px;
		}

		.marquee-container {
			flex-grow: 10;
			overflow: hidden;
		}

		.marquee-text {
			font-size: 20px;
			font-weight: bold;
			color: rgb(241, 243, 245);
			white-space: nowrap;
		}

		.marquee-img {
			height: 50px;
			vertical-align: auto;
			margin-left: 20px;
		}

		.form-control:focus {
			border-color: rgb(107, 156, 209) !important;
			box-shadow: 0 0 0 3px rgba(46, 105, 255, 0.25) !important;
		}

		.error-icon {
			width: 32px;
			height: 32px;
			background-image: url('https://cdn.jotfor.ms/images/exclamation-octagon.png');
			background-size: cover;
		}
	</style>
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
	</script>
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-theme-mode");
			} else {
				if (localStorage.getItem("data-theme") !== null) {
					themeMode = localStorage.getItem("data-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-theme", themeMode);
		}
	</script>
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<div class="d-flex flex-column flex-root">
		<div class="page d-flex flex-row flex-column-fluid">
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<div id="kt_header" class="header align-items-stretch" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
					<div class="container-xxl d-flex align-items-center">
						<div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
							<div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
								<span class="svg-icon svg-icon-1">
									<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor"></path>
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor"></path>
									</svg>
								</span>
							</div>
						</div>
						<div class="header-logo-container d-flex align-items-center">
							<div class="logo-container me-3">
								<a href="index.html">
									<img alt="Logo" src="assets/school2.jpg" class="logo-default h-60px" style="border-radius: 50px;">
								</a>
							</div>
							<div class="marquee-container">
								<marquee behavior="scroll" direction="left" class="marquee-text" id="headingText">
									Welcome to the Smart School Attendance Portal,transforming how we track, manage, and engage in education.
									<img src="assets/touchHand.png" class="marquee-img">
								</marquee>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>