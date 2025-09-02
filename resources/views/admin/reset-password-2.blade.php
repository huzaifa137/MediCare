<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login - {{Helper::app_name()}} </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="../../assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Icon CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    {{--
    <script src="../../assets/vendor/js/template-customizer.js"></script> --}}
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>

</head>

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="javascript:void();" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>icon</title>
                                        <defs>
                                            <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                                <stop stop-color="#5A8DEE" offset="0%"></stop>
                                                <stop stop-color="#699AF9" offset="100%"></stop>
                                            </linearGradient>
                                            <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
                                                <stop stop-color="#FDAC41" offset="0%"></stop>
                                                <stop stop-color="#E38100" offset="100%"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                                                <g id="Login" transform="translate(519.000000, 244.000000)">
                                                    <g id="Logo" transform="translate(148.000000, 42.000000)">
                                                        <g id="icon" transform="translate(0.000000, 4.000000)">
                                                            <path
                                                                d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                                                                id="Combined-Shape" fill="#4880EA"></path>
                                                            <path
                                                                d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                                                                id="Combined-Shape2" fill="url(#linearGradient-1)">
                                                            </path>
                                                            <rect id="Rectangle" fill="url(#linearGradient-2)" x="0"
                                                                y="0" width="7.68181818" height="7.68181818"></rect>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <span class="app-brand-text demo h3 fw-bold mb-0">{{Helper::app_name()}}</span>
                            </a>
                        </div>
                        <!-- /Logo -->

                        <h4 class="">Reset Password </h4>

                        <p class="">
                            Please enter your new password for your account </p>


                        <form action="{{ url('user-store-new-password') }}" method="POST">
                            @csrf

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session('fail'))
                                <div class="alert alert-danger">
                                    {{ session('fail') }}
                                </div>
                            @endif

                            <div class="input-group mb-1">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" name="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Enter Password">
                                <span class="input-group-text" onclick="togglePassword()">
                                    <i class="fas fa-eye" id="eyeIcon"></i>
                                </span>
                            </div>

                            @error('password')
                                <span class="text-danger d-block mt-1 mb-0">{{ $message }}</span>
                            @enderror
                            <span id="password-error-client" class="text-danger d-block mt-1 mb-0"
                                style="display:none;"></span>

                            <div class="input-group mb-1">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    placeholder="Confirm Password">
                                <span class="input-group-text" onclick="togglePasswordConfirm()">
                                    <i class="fas fa-eye" id="eyeIconConfirm"></i>
                                </span>
                            </div>

                            <input type="hidden" name="generated_id" id="generated_id" value="{{$generated_id}}">

                            @error('password_confirmation')
                                <span class="text-danger d-block mt-1 mb-0">{{ $message }}</span>
                            @enderror
                            <span id="password-confirmation-error-client" class="text-danger d-block mt-1 mb-0"
                                style="display:none;"></span>

                            <div class="row">
                                <div class="col-12">
                                    <button type="button" class="mt-3 btn btn-primary btn-block btn-md"
                                        onclick="confirmSubmission(this)">
                                        <i class="fas fa-paper-plane"></i> Reset
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Submit on Enter key
        document.addEventListener("keydown", function (event) {
            if (event.key === "Enter") {
                event.preventDefault();
                const button = document.querySelector("button[type='button']");
                confirmSubmission(button);
            }
        });

        function confirmSubmission(button) {
            const emailInput = document.getElementById('email-input');
            const emailErrorClient = document.getElementById('email-error-client');
            const email = emailInput.value.trim();

            // Clear previous client-side errors
            emailErrorClient.style.display = 'none';
            emailErrorClient.textContent = '';
            emailInput.classList.remove('is-invalid');

            if (!email) {
                // Show inline client-side error
                emailErrorClient.textContent = 'Please enter your email address.';
                emailErrorClient.style.display = 'block';
                emailInput.classList.add('is-invalid');
                return;
            }

            // If email is not empty, show confirmation popup
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to proceed with the submission?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, proceed',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    button.disabled = true;
                    button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
                    button.closest('form').submit();
                }
            });
        }
    </script>

    <script>
        function confirmSubmission(button) {
            const password = document.getElementById('password').value.trim();
            const confirmPassword = document.getElementById('password_confirmation').value.trim();

            let valid = true;

            const passwordError = document.getElementById('password-error-client');
            const passwordError = document.getElementById('password-error-client');
            const generated_id = document.getElementById('generated_id');

            // Reset errors
            passwordError.style.display = 'none';
            confirmError.style.display = 'none';
            passwordError.innerText = '';
            confirmError.innerText = '';

            const errors = [];

            // Password rules
            if (!password) {
                errors.push("Password is required.");
            } else {
                if (password.length < 6) {
                    errors.push("Password must be at least 6 characters.");
                }
                if (!/[A-Z]/.test(password)) {
                    errors.push("Password must include at least one uppercase letter.");
                }
                if (!/[a-z]/.test(password)) {
                    errors.push("Password must include at least one lowercase letter.");
                }
                if (!/[0-9]/.test(password)) {
                    errors.push("Password must include at least one digit.");
                }
                if (!/[@$!%*?&#]/.test(password)) {
                    errors.push("Password must include at least one special character.");
                }
            }

            if (errors.length > 0) {
                passwordError.innerText = errors.join(' ');
                passwordError.style.display = 'block';
                valid = false;
            }

            if (password !== confirmPassword) {
                confirmError.innerText = 'Passwords do not match.';
                confirmError.style.display = 'block';
                valid = false;
            }

            if (valid) {
                const proceed = confirm('Do you want to proceed with the submission?');
                if (proceed) {
                    button.closest('form').submit();
                }
            }
        }
    </script>



    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }

        function togglePasswordConfirm() {
            const confirmInput = document.getElementById('password_confirmation');
            const eyeIcon = document.getElementById('eyeIconConfirm');

            if (confirmInput.type === 'password') {
                confirmInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                confirmInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>





    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/pages-auth.js"></script>
</body>

</html>