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
                        <h4 class="fw-bold py-3 mb-4">Pharmacy Management Dashboard</h4>

                        <div class="row g-4 mb-4">

                            <!-- Total Pharmacies -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Total Pharmacies</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['totalPharmacies'] }}</h4>
                                                    <small class="text-success">Registered</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-primary rounded p-2">
                                                <i class="bx bx-capsule bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- With Delivery -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Delivery Available</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['withDelivery'] }}</h4>
                                                    <small class="text-info">Can deliver</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-success rounded p-2">
                                                <i class="bx bx-car bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Online Orders -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Online Orders</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['onlineOrders'] }}</h4>
                                                    <small class="text-primary">Enabled</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-primary rounded p-2">
                                                <i class="bx bx-shopping-bag bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Emergency Hours -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Emergency Services</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['emergencyHours'] }}</h4>
                                                    <small class="text-danger">24/7 Available</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-danger rounded p-2">
                                                <i class="bx bx-first-aid bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cities -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Locations (Cities)</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['uniqueCities'] }}</h4>
                                                    <small class="text-secondary">City spread</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-warning rounded p-2">
                                                <i class="bx bx-map bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Countries -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Countries</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['uniqueCountries'] }}</h4>
                                                    <small class="text-info">Country spread</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-secondary rounded p-2">
                                                <i class="bx bx-flag bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Avg Years in Operation -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Avg. Years in Operation</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['avgYearsInOperation'] }}</h4>
                                                    <small class="text-success">Experience</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-info rounded p-2">
                                                <i class="bx bx-time bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Most Recent Pharmacy -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Newest Pharmacy</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['avgYearsInOperation'] }}</h4>
                                                    <small class="text-primary">Just Joined</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-dark rounded p-2">
                                                <i class="bx bx-plus bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        @media (min-width: 1200px) {
                            .col-lg-1-5 {
                                flex: 0 0 20%;
                                max-width: 20%;
                            }
                        }

                        .shop-card {
                            border-radius: 10px;
                            box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
                            padding: 1rem;
                            background-color: #fff;
                            transition: transform 0.2s ease-in-out;
                            height: 100%;
                            display: flex;
                            flex-direction: column;
                            justify-content: space-between;
                        }

                        .shop-card:hover {
                            transform: translateY(-5px);
                            box-shadow: 0 8px 20px rgb(0 0 0 / 0.15);
                        }

                        .shop-logo {
                            width: 100%;
                            height: 150px;
                            object-fit: cover;
                            border-radius: 8px;
                            margin-bottom: 1rem;
                        }

                        .shop-name {
                            font-weight: 600;
                            font-size: 1.1rem;
                            margin-bottom: 0.3rem;
                            color: #2c3e50;
                            text-align: center;
                        }

                        .shop-location {
                            font-size: 0.9rem;
                            color: #7f8c8d;
                            margin-bottom: 0.6rem;
                            text-align: center;
                        }

                        .rating-stars {
                            color: #f39c12;
                            font-size: 1rem;
                            text-align: center;
                            margin-bottom: 1rem;
                        }

                        .btn-visit {
                            align-self: center;
                            width: 100%;
                        }
                    </style>

                    <div class="container-xxl flex-grow-1">
                        <h5 class="card-titl">All Registered Pharmacies</h5>
                        <div class="row mt-4 g-3">

                            <!-- Pharmacy 1 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="shop-card">
                                    <img src="/assets-site/img/team/pharmacy1.jpg" alt="Pharmacy 1" class="shop-logo" />
                                    <div class="shop-name">HealthPlus Pharmacy</div>
                                    <div class="shop-location">123 Main St, Kampala</div>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <a href="{{ url('/pharmacy/products-list') }}" class="btn btn-outline-primary btn-visit">Visit Shop</a>
                                </div>
                            </div>

                            <!-- Pharmacy 2 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="shop-card">
                                    <img src="/assets-site/img/team/pharmacy2.jpg" alt="Pharmacy 2" class="shop-logo" />
                                    <div class="shop-name">MediCare Pharmacy</div>
                                    <div class="shop-location">456 Health Ave, Nairobi</div>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a href="{{ url('/pharmacy/products-list') }}" class="btn btn-outline-primary btn-visit">Visit Shop</a>
                                </div>
                            </div>

                            <!-- Pharmacy 3 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="shop-card">
                                    <img src="/assets-site/img/team/pharmacy3.jpg" alt="Pharmacy 3" class="shop-logo" />
                                    <div class="shop-name">Wellness Pharmacy</div>
                                    <div class="shop-location">789 Wellness Rd, Kigali</div>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <a href="{{ url('/pharmacy/products-list') }}" class="btn btn-outline-primary btn-visit">Visit Shop</a>
                                </div>
                            </div>

                            <!-- Pharmacy 4 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="shop-card">
                                    <img src="/assets-site/img/team/pharmacy4.jpg" alt="Pharmacy 4" class="shop-logo" />
                                    <div class="shop-name">CareWell Pharmacy</div>
                                    <div class="shop-location">321 Cure Blvd, Dar es Salaam</div>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                    </div>
                                    <a href="{{ url('/pharmacy/products-list') }}" class="btn btn-outline-primary btn-visit">Visit Shop</a>
                                </div>
                            </div>

                            <!-- Pharmacy 5 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="shop-card">
                                    <img src="/assets-site/img/team/pharmacy9.jpg" alt="Pharmacy 5" class="shop-logo" />
                                    <div class="shop-name">PharmaPlus</div>
                                    <div class="shop-location">654 Wellness St, Accra</div>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <a href="{{ url('/pharmacy/products-list') }}" class="btn btn-outline-primary btn-visit">Visit Shop</a>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-4 g-3">

                            <!-- Pharmacy 1 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="shop-card">
                                    <img src="/assets-site/img/team/pharmacy6.jpg" alt="Pharmacy 1" class="shop-logo" />
                                    <div class="shop-name">HealthPlus Pharmacy</div>
                                    <div class="shop-location">123 Main St, Kampala</div>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <a href="{{ url('/pharmacy/products-list') }}" class="btn btn-outline-primary btn-visit">Visit Shop</a>
                                </div>
                            </div>

                            <!-- Pharmacy 2 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="shop-card">
                                    <img src="/assets-site/img/team/pharmacy7.jpg" alt="Pharmacy 2" class="shop-logo" />
                                    <div class="shop-name">MediCare Pharmacy</div>
                                    <div class="shop-location">456 Health Ave, Nairobi</div>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a href="{{ url('/pharmacy/products-list') }}" class="btn btn-outline-primary btn-visit">Visit Shop</a>
                                </div>
                            </div>

                            <!-- Pharmacy 3 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="shop-card">
                                    <img src="/assets-site/img/team/pharmacy8.jpg" alt="Pharmacy 3" class="shop-logo" />
                                    <div class="shop-name">Wellness Pharmacy</div>
                                    <div class="shop-location">789 Wellness Rd, Kigali</div>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <a href="{{ url('/pharmacy/products-list') }}" class="btn btn-outline-primary btn-visit">Visit Shop</a>
                                </div>
                            </div>

                            <!-- Pharmacy 4 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="shop-card">
                                    <img src="/assets-site/img/team/pharmacy1.jpg" alt="Pharmacy 4" class="shop-logo" />
                                    <div class="shop-name">CareWell Pharmacy</div>
                                    <div class="shop-location">321 Cure Blvd, Dar es Salaam</div>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                    </div>
                                    <a href="{{ url('/pharmacy/products-list') }}" class="btn btn-outline-primary btn-visit">Visit Shop</a>
                                </div>
                            </div>

                            <!-- Pharmacy 5 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="shop-card">
                                    <img src="/assets-site/img/team/pharmacy4.jpg" alt="Pharmacy 5" class="shop-logo" />
                                    <div class="shop-name">PharmaPlus</div>
                                    <div class="shop-location">654 Wellness St, Accra</div>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <a href="{{ url('/pharmacy/products-list') }}" class="btn btn-outline-primary btn-visit">Visit Shop</a>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Pharmacy Table -->
                        <div class="card">
                            <div class="card-body table-responsive">
                                <h5 class="card-title mb-4">All Registered Pharmacies</h5>

                                <table class="table table-bordered table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Pharmacy Name</th>
                                            <th>Owner</th>
                                            <th>Contact</th>
                                            <th>City</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($pharmacies as $index => $pharmacy)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $pharmacy->pharmacy_name }}</td>
                                                <td>{{ $pharmacy->owner_name }} ({{ ucfirst($pharmacy->owner_gender) }})
                                                </td>
                                                <td>
                                                    {{ $pharmacy->email }}<br>
                                                    <small>{{ $pharmacy->phone_number }}</small>
                                                </td>
                                                <td>{{ $pharmacy->city }}, {{ $pharmacy->country }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-icon btn-info" title="View">
                                                        <i class="bx bx-show"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm btn-icon btn-warning" title="Edit">
                                                        <i class="bx bx-edit"></i>
                                                    </a>
                                                    <form action="#" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-icon btn-danger"
                                                            title="Delete">
                                                            <i class="bx bx-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">No pharmacies registered yet.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
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

                        $(document).ready(function () {
                            $.ajaxSetup({
                                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                            });

                            $('body').on('click', '.edit-admin-btn', function (e) {
                                e.preventDefault();
                                let id = $(this).data('id');
                                $.get(`/admin/${id}/edit`, function (data) {
                                    $('#edit_admin_id').val(id);
                                    $('#edit_firstname').val(data.firstname);
                                    $('#edit_lastname').val(data.lastname);
                                    $('#edit_username').val(data.username);
                                    $('#edit_email').val(data.email);
                                    $('#edit_phonenumber').val(data.phonenumber);
                                    $('#edit_country').val(data.country);
                                    $('#edit_gender').val(data.gender);
                                    $('#editAdminModal').modal('show');
                                });
                            });

                            $('#editAdminForm').submit(function (e) {
                                e.preventDefault();

                                let id = $('#edit_admin_id').val();
                                let formData = $(this).serialize();

                                // Show loading SweetAlert
                                Swal.fire({
                                    title: 'Updating...',
                                    text: 'Please wait while the admin is being updated.',
                                    allowOutsideClick: false,
                                    didOpen: () => {
                                        Swal.showLoading();
                                    }
                                });

                                $.ajax({
                                    url: '/admin/' + id,
                                    type: 'PUT',
                                    data: formData,
                                    success: function (response) {
                                        Swal.close(); // Close the loading alert

                                        // Show success SweetAlert
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Updated!',
                                            text: 'Pharmacy has been updated successfully.',
                                            timer: 2000,
                                            showConfirmButton: false
                                        });

                                        $('#editAdminModal').modal('hide');

                                        // Optional: Refresh the table or page
                                        setTimeout(() => location.reload(), 2000);
                                    },
                                    error: function (xhr) {
                                        Swal.close(); // Close the loading alert on error

                                        // Handle validation errors
                                        $('.text-danger').text('');
                                        $('.form-control').removeClass('is-invalid');

                                        if (xhr.status === 422) {
                                            $.each(xhr.responseJSON.errors, function (field, messages) {
                                                $('#edit_' + field).addClass('is-invalid');
                                                $('#edit_' + field + '_error').text(messages[0]);
                                            });

                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Validation Error',
                                                text: 'Please fix the errors and try again.',
                                            });
                                        } else {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Something went wrong',
                                                text: 'Please try again later.',
                                            });
                                        }
                                    }
                                    // error: function (data) {
                                    //     $('body').html(data.responseText);
                                    // }
                                });
                            });
                        });

                        $(document).on('click', '.delete-admin-btn', function () {
                            const adminId = $(this).data('id');

                            Swal.fire({
                                title: 'Are you sure?',
                                text: "This action cannot be undone!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Yes, delete!',
                                cancelButtonText: 'Cancel',
                                customClass: {
                                    popup: 'swal-zindex-fix'
                                }
                            }).then((result) => {
                                if (result.isConfirmed) {

                                    Swal.fire({
                                        title: 'Deleting...',
                                        allowOutsideClick: false,
                                        didOpen: () => {
                                            Swal.showLoading();
                                        },
                                        customClass: {
                                            popup: 'swal-zindex-fix'
                                        }
                                    });

                                    $.ajax({
                                        url: `/admin/${adminId}`,
                                        type: 'DELETE',
                                        data: {
                                            _token: '{{ csrf_token() }}'
                                        },
                                        success: function (response) {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Deleted!',
                                                text: 'Admin has been removed.',
                                                customClass: {
                                                    popup: 'swal-zindex-fix'
                                                }
                                            });

                                            // Remove the row from the table
                                            $(`.delete-admin-btn[data-id="${adminId}"]`).closest('tr').remove();
                                        },
                                        error: function (xhr) {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Error!',
                                                text: 'Something went wrong.',
                                                customClass: {
                                                    popup: 'swal-zindex-fix'
                                                }
                                            });
                                        }
                                    });
                                }
                            });
                        });


                        $(document).on('click', '.change-status-btn', function () {
                            const adminId = $(this).data('id');
                            const currentStatus = $(this).data('status');

                            $('#status_admin_id').val(adminId);
                            $('#new_status').val(currentStatus);

                            $('#changeStatusModal').modal('show');
                        });

                        $('#change_status_form').on('submit', function (e) {
                            e.preventDefault();

                            const adminId = $('#status_admin_id').val();
                            const newStatus = $('#new_status').val();

                            Swal.fire({
                                title: 'Updating status...',
                                allowOutsideClick: false,
                                didOpen: () => Swal.showLoading(),
                                customClass: {
                                    popup: 'swal-zindex-fix'
                                }
                            });

                            $.ajax({
                                url: `/admin/${adminId}/change-status`,
                                method: 'POST',
                                data: {
                                    _token: '{{ csrf_token() }}',
                                    status: newStatus
                                },
                                success: function (res) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Status updated!',
                                        text: res.message,
                                        customClass: {
                                            popup: 'swal-zindex-fix'
                                        }
                                    });

                                    $('#changeStatusModal').modal('hide');

                                    // Optionally reload the page or update the badge directly
                                    setTimeout(() => location.reload(), 1000);
                                },
                                // error: function () {
                                //     Swal.fire({
                                //         icon: 'error',
                                //         title: 'Error',
                                //         text: 'Could not update status',
                                //         customClass: {
                                //             popup: 'swal-zindex-fix'
                                //         }
                                //     });
                                // }
                                error: function (data) {
                                    $('body').html(data.responseText);
                                }
                            });
                        });

                    </script>


                    <!-- / Content -->

                    @include('layouts.footer')