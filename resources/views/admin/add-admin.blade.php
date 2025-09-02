@include('layouts.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('layouts.side-bar-menu')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('layouts.nav-bar')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Add Admin</h5>
                                    </div>
                                    <div class="card-body">
                                        <formid="add_admin_form">
                                            <div class="row">
                                                <!-- Column 1 -->
                                                <div class="col-md-6">
                                                    <!-- First Name -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="firstname">First Name <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i
                                                                    class="bx bx-user"></i></span>
                                                            <input type="text" class="form-control" id="firstname"
                                                                name="firstname" placeholder="John" required>
                                                        </div>
                                                        <small class="text-danger" id="firstname-error"></small>
                                                    </div>

                                                    <!-- Last Name -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="lastname">Last Name <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i
                                                                    class="bx bx-user"></i></span>
                                                            <input type="text" class="form-control" id="lastname"
                                                                name="lastname" placeholder="Doe" required>
                                                        </div>
                                                        <small class="text-danger" id="lastname-error"></small>
                                                    </div>

                                                    <!-- Username -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="username">Username <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i
                                                                    class="bx bx-user-circle"></i></span>
                                                            <input type="text" class="form-control" id="username"
                                                                name="username" placeholder="johndoe" required>
                                                        </div>
                                                        <small class="text-danger" id="username-error"></small>
                                                    </div>

                                                    <!-- Email -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="email">Email <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i
                                                                    class="bx bx-envelope"></i></span>
                                                            <input type="email" class="form-control" id="email"
                                                                name="email" placeholder="john@example.com" required>
                                                        </div>
                                                        <small class="text-danger" id="email-error"></small>
                                                    </div>
                                                </div>

                                                <!-- Column 2 -->
                                                <div class="col-md-6">
                                                    <!-- Password -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="password">Password <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group input-group-merge position-relative">
                                                            <span class="input-group-text"><i
                                                                    class="bx bx-lock"></i></span>
                                                            <input type="password" class="form-control" id="password"
                                                                name="password" placeholder="••••••••" required>
                                                            <span class="input-group-text" style="cursor: pointer;"
                                                                onclick="togglePassword()">
                                                                <i class="fa fa-eye" id="eyeIcon"></i>
                                                            </span>
                                                        </div>
                                                        <small class="text-danger" id="password-error"></small>
                                                    </div>

                                                    <!-- Phone Number -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="phonenumber">Phone Number <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i
                                                                    class="bx bx-phone"></i></span>
                                                            <input type="tel" class="form-control" id="phonenumber"
                                                                name="phonenumber" placeholder="0712345678" required>
                                                        </div>
                                                        <small class="text-danger" id="phonenumber-error"></small>
                                                    </div>

                                                    <!-- Country -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="country">Country <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i
                                                                    class="bx bx-world"></i></span>
                                                            <select class="form-control" id="country" name="country"
                                                                required>
                                                                <option value="">-- Select Country --</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Tanzania">Tanzania</option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="Burundi">Burundi</option>
                                                            </select>
                                                        </div>
                                                        <small class="text-danger" id="country-error"></small>
                                                    </div>

                                                    <!-- Gender -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="gender">Gender (optional)</label>
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i
                                                                    class="bx bx-male-female"></i></span>
                                                            <select class="form-control" id="gender" name="gender">
                                                                <option value="">-- Select Gender --</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Submit Button -->
                                            <button type="submit" class="btn btn-primary mt-3" id="add_admin_button">
                                                <i class="fa fa-plus"></i> Add Admin
                                            </button>
                                            </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script>
                        $(document).ready(function () {
                            $('#add_admin_button').on('click', function (e) {
                                e.preventDefault();

                                let button = $(this);
                                button.prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Saving...');

                                // Collect input values
                                let data = {
                                    _token: '{{ csrf_token() }}',
                                    firstname: $('#firstname').val().trim(),
                                    lastname: $('#lastname').val().trim(),
                                    username: $('#username').val().trim(),
                                    email: $('#email').val().trim(),
                                    password: $('#password').val().trim(),
                                    phonenumber: $('#phonenumber').val().trim(),
                                    country: $('#country').val(),
                                    gender: $('#gender').val(),
                                };

                                // Clear previous validation states
                                $('input, select').removeClass('is-valid is-invalid');
                                $('small.text-danger').text('');

                                // Frontend validation
                                let hasErrors = false;
                                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                                if (!data.firstname) {
                                    $('#firstname').addClass('is-invalid');
                                    $('#firstname-error').text('First name is required.');
                                    hasErrors = true;
                                } else {
                                    $('#firstname').addClass('is-valid');
                                }

                                if (!data.lastname) {
                                    $('#lastname').addClass('is-invalid');
                                    $('#lastname-error').text('Last name is required.');
                                    hasErrors = true;
                                } else {
                                    $('#lastname').addClass('is-valid');
                                }

                                if (!data.username) {
                                    $('#username').addClass('is-invalid');
                                    $('#username-error').text('Username is required.');
                                    hasErrors = true;
                                } else {
                                    $('#username').addClass('is-valid');
                                }

                                if (!data.email) {
                                    $('#email').addClass('is-invalid');
                                    $('#email-error').text('Email is required.');
                                    hasErrors = true;
                                } else if (!emailRegex.test(data.email)) {
                                    $('#email').addClass('is-invalid');
                                    $('#email-error').text('Enter a valid email address.');
                                    hasErrors = true;
                                } else {
                                    $('#email').addClass('is-valid');
                                }

                                if (!data.password) {
                                    $('#password').addClass('is-invalid');
                                    $('#password-error').text('Password is required.');
                                    hasErrors = true;
                                } else {
                                    $('#password').addClass('is-valid');
                                }

                                if (!data.phonenumber) {
                                    $('#phonenumber').addClass('is-invalid');
                                    $('#phonenumber-error').text('Phone number is required.');
                                    hasErrors = true;
                                } else {
                                    $('#phonenumber').addClass('is-valid');
                                }

                                if (!data.country) {
                                    $('#country').addClass('is-invalid');
                                    $('#country-error').text('Please select a country.');
                                    hasErrors = true;
                                } else {
                                    $('#country').addClass('is-valid');
                                }

                                if (hasErrors) {
                                    button.prop('disabled', false).html('<i class="fa fa-plus"></i> Add Admin');
                                    return;
                                }

                                // AJAX Submit
                                $.ajax({
                                    url: "{{ route('admin.store') }}",
                                    type: "POST",
                                    data: data,
                                    success: function (response) {
                                        if (response.status) {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success!',
                                                text: 'Admin added successfully!',
                                                confirmButtonColor: '#3085d6',
                                                timer: 2000,
                                                showConfirmButton: false
                                            }).then(() => {
                                                location.reload();
                                            });
                                        } else {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Oops...',
                                                text: response.message || 'Something went wrong.',
                                                confirmButtonColor: '#d33'
                                            });
                                            button.prop('disabled', false).html('<i class="fa fa-plus"></i> Add Admin');
                                        }
                                    },
                                    // error: function (xhr) {
                                    //     if (xhr.status === 422) {
                                    //         let errors = xhr.responseJSON.errors;
                                    //         $.each(errors, function (field, messages) {
                                    //             $('#' + field).addClass('is-invalid');
                                    //             $('#' + field + '-error').text(messages[0]);
                                    //         });
                                    //     } else {
                                    //         alert('An unexpected error occurred.');
                                    //     }
                                    //     button.prop('disabled', false).html('<i class="fa fa-plus"></i> Add Admin');
                                    // }

                                    error: function (data) {
                                        $('body').html(data.responseText);
                                    }
                                });
                            });
                        });


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
                    </script>


                    <!-- / Content -->

                    @include('layouts.footer')