<!DOCTYPE html>
<html lang="en">

<head>
    <title>Smart School </title>
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
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico">
    <link rel="stylesheet" href="../../css?family=Inter:300,400,500,600,700">
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css">
    <!-- Add this in <head> or before closing </body> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

    <style>
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            src: url(s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuOKfAZ9hjQ.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            src: url(s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyfAZ9hjQ.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            src: url(s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuI6fAZ9hjQ.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            src: url(s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuGKYAZ9hjQ.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            src: url(s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuFuYAZ9hjQ.ttf) format('truetype');
        }

        .bg-active-success {
            background-color: #198754 !important;
        }
    </style>

    <div class="d-flex flex-column flex-column-fluid flex-lg-row">
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
            <div class="d-flex flex-center flex-lg-start flex-column">
                <a href="../../../index.html" class="mb-7">
                    <img alt="Logo" src="assets/school2.jpg" class="rounded-3 w-md-450px">
                </a>
            </div>
        </div>
        <div class="d-flex flex-center w-lg-50 p-10">
            <div class="card rounded-3 w-md-550px">
                <div class="card-body p-10 p-lg-20">
                    <form class="form w-100" novalidate="novalidate" id="signInForm" data-kt-redirect-url="/metronic8/demo2/../demo2/authentication/layouts/creative/sign-in.html" action="#">
                        <div class="text-center mb-11">
                            <h1 class="text-dark fw-bolder mb-3">Admin Login</h1>
                        </div>
                        <div class="fv-row mb-8">
                            <input type="text" placeholder="Username" name="username" autocomplete="off" class="form-control bg-transparent" id="username">
                        </div>
                        <div class="fv-row mb-8" data-kt-password-meter="true">
                            <div class="mb-1">
                                <div class="position-relative mb-3">
                                    <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" id="password" autocomplete="off">
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2 toggle-password" style="cursor: pointer;">
                                        <i class="bi bi-eye-slash fs-2"></i>
                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>

                                </div>
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary rounded h-5px"></div>
                                </div>
                            </div>
                            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
                        </div>
                        <!-- <div class="fv-row mb-8">
                            <input placeholder="Repeat Password" name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent">
                        </div> -->
                        <div class="fv-row mb-8">
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="toc" value="1">
                                <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the
                                    <a href="#" class="ms-1 link-primary">Terms</a></span>
                            </label>
                        </div>
                        <div class="d-grid mb-10">
                            <button type="button" id="btnSignIn" class="btn btn-primary">
                                <span class="indicator-label">Sign In</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <div class="text-gray-500 text-center fw-semibold fs-6">You dont have an Account?
                            <a href="signUp.php" class="link-primary fw-semibold">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).on('click', '#btnSignIn', function() {
            handleLogin();
        });

        $(document).on('keydown', '#signInForm input', function(e) {
            if (e.which === 13) {
                e.preventDefault();
                if (passwordStrength < 4) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Weak Password',
                        text: 'Please enter a stronger password (use uppercase, numbers, symbols, and at least 8 characters).',
                        confirmButtonColor: '#d33'
                    });
                    return;
                }
                handleLogin(); 
            }
        });

        //verify the fileds

        function handleLogin() {

            var loginUsername = $('#username').val().trim();
            var loginPassword = $('#password').val().trim();

            if (loginUsername === '' || loginPassword === '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Missing Fields',
                    text: 'Username and Password fields are required!',
                    confirmButtonColor: '#427bc4',
                });
                return;
            }

            var formData = new FormData($('#signInForm')[0]);
            formData.append('btn', 'signinBtn');

            $.ajax({
                type: "POST",
                url: "ajax/signInAjax.php",
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status == 'success') {
                        $('#signInForm')[0].reset();
                        if (response.type == '' || response.type == null) {
                            window.location.href = 'adminDashboard.php';
                        } else {
                            window.location.href = 'parentsDashboard.php';
                        }
                    } else {
                        swal.fire({
                            icon: 'error',
                            title: 'Mismath Credentials',
                            text: 'The Username or Password you entered incorrect!',
                            confirmButtonColor: '#009ef7',
                        });
                    }
                }
            });
        }

        $(document).on('click', '.toggle-password', function() {
            var passwordInput = $(this).closest('.position-relative').find('input[type="password"], input[type="text"]');
            var eyeSlashIcon = $(this).find('.bi-eye-slash');
            var eyeIcon = $(this).find('.bi-eye');

            if (passwordInput.attr('type') === 'password') {
                passwordInput.attr('type', 'text');
                eyeSlashIcon.addClass('d-none');
                eyeIcon.removeClass('d-none');
            } else {
                passwordInput.attr('type', 'password');
                eyeIcon.addClass('d-none');
                eyeSlashIcon.removeClass('d-none');
            }
        });

        let passwordStrength = 0;

        $('#password').on('input', function() {
            var password = $(this).val();
            passwordStrength = 0;

            if (password.length >= 8) passwordStrength++;
            if (/[A-Z]/.test(password)) passwordStrength++;
            if (/[0-9]/.test(password)) passwordStrength++;
            if (/[^A-Za-z0-9]/.test(password)) passwordStrength++;

            var bars = $('[data-kt-password-meter-control="highlight"] > div');
            bars.removeClass('bg-active-success');

            for (var i = 0; i < passwordStrength; i++) {
                bars.eq(i).addClass('bg-active-success');
            }
        });

        // Check strength before allowing sign-in
        $(document).on('click', '#btnSignIn', function(e) {
            if (passwordStrength < 4) {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Weak Password',
                    text: 'Please enter a stronger password (use uppercase, numbers, symbols, and minimum 8 characters).',
                    confirmButtonColor: '#d33'
                });
                return;
            }
            handleLogin(); 
        });
    </script>