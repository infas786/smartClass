<?php include('header.php') ?>

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
                <img alt="Logo" src="assets/school2.jpg" class="rounded-3 w-md-450px" style="box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
            </a>
        </div>
    </div>
    <div class="d-flex flex-center w-lg-50 p-10">
        <div class="card rounded-3 w-md-550px">
            <div class="card-body p-10 p-lg-20">
                <form class="form w-100" novalidate="novalidate" id="signInForm" data-kt-redirect-url="/metronic8/demo2/../demo2/authentication/layouts/creative/sign-in.html" action="#">
                    <div class="text-center mb-11">
                        <h1 class="text-dark fw-bolder mb-3">Sign Up Form</h1>
                    </div>
                    <!-- User Role Dropdown -->
                    <div class="fv-row mb-8">
                        <select name="user_role" id="user_role" class="form-control bg-transparent">
                            <option value="" disabled selected>Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="teacher">Teacher</option>
                            <option value="parent">Parent</option>
                        </select>
                    </div>

                    <!-- Username -->
                    <div class="fv-row mb-8">
                        <input type="text" placeholder="Username" name="username" autocomplete="off" class="form-control bg-transparent" id="username">
                    </div>

                    <!-- Email -->
                    <div class="fv-row mb-8">
                        <input type="email" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" id="email">
                    </div>

                    <!-- Password -->
                    <div class="fv-row mb-8" data-kt-password-meter="true">
                        <div class="mb-1">
                            <div class="position-relative mb-3">
                                <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" id="password" autocomplete="off">
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2 toggle-password" style="cursor: pointer;">
                                    <i class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="fv-row mb-8" data-kt-password-meter="true">
                        <div class="mb-1">
                            <div class="position-relative mb-3">
                                <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" id="password" autocomplete="off">
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2 toggle-password" style="cursor: pointer;">
                                    <i class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Signup Button -->
                    <div class="fv-row mb-8">
                        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                    </div>

                    <!-- Social Signup (Optional) -->
                    <div class="fv-row mb-8 text-center">
                        <span class="text-muted">Or sign up with</span>
                        <div class="d-flex justify-content-center mt-3">
                            <a href="https://www.google.com" class="btn btn-light btn-icon me-3">
                                <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google" style="height: 24px;">
                            </a>
                            <a href="https://www.facebook.com" class="btn btn-light btn-icon">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png" alt="Facebook" style="height: 24px;">
                            </a>

                        </div>
                    </div>
                    <!-- Login Link -->
                    <div class="text-center">
                        <span class="text-muted">Already have an account?</span>
                        <a href="signIn.php" class="link-primary fw-semibold">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
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
</script>
<?php include('footer.php') ?>