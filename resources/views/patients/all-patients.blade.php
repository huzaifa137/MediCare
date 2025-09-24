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

                    {{-- <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="card">
                                    <h5 class="card-header">Manage Doctors</h5>
                                    <div class="table-responsive text-nowrap">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Country</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                @forelse ($admins as $key => $admin)
                                                <tr>
                                                    <td style="width:1px;">{{ $key + 1}}</td>
                                                    <td>{{ $admin->username }}</td>
                                                    <td>{{ $admin->email }}</td>
                                                    <td>{{ $admin->country }}</td>

                                                    @php
                                                    $statusMap = [
                                                    0 => ['label' => 'Banned', 'class' => 'bg-label-danger'],
                                                    8 => ['label' => 'Locked', 'class' => 'bg-label-dark'],
                                                    9 => ['label' => 'Suspended', 'class' => 'bg-label-warning'],
                                                    10 => ['label' => 'Active', 'class' => 'bg-label-success'],
                                                    ];

                                                    $status = $statusMap[$admin->account_status] ?? ['label' =>
                                                    'Unknown', 'class' => 'bg-label-secondary'];
                                                    @endphp

                                                    <td>
                                                        <span class="badge {{ $status['class'] }}">{{ $status['label']
                                                            }}</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button type="button"
                                                                class="btn dropdown-toggle hide-arrow p-0"
                                                                data-bs-toggle="dropdown">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </button>
                                                            <div class="dropdown-menu">

                                                                <button type="button"
                                                                    class="dropdown-item change-status-btn"
                                                                    data-id="{{ $admin->id }}"
                                                                    data-status="{{ $admin->account_status }}">
                                                                    <i class="bx bx-transfer me-1"></i> Change Status
                                                                </button>

                                                                <button type="button"
                                                                    class="dropdown-item edit-admin-btn"
                                                                    data-id="{{ $admin->id }}">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button>

                                                                <button type="button"
                                                                    class="dropdown-item delete-admin-btn"
                                                                    data-id="{{ $admin->id }}">
                                                                    <i class="bx bx-trash me-1"></i> Delete
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="7" class="text-center">No admins found.</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>


                                        <div class="modal fade" id="editAdminModal" tabindex="-1"
                                            aria-labelledby="editAdminModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <form id="editAdminForm">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editAdminModalLabel">Edit Admin
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Two-column layout replicated -->
                                                            <div class="row">
                                                                <!-- Column 1 -->
                                                                <div class="col-md-6">
                                                                    <input type="hidden" id="edit_admin_id">
                                                                    <div class="mb-3">
                                                                        <label>First Name *</label>
                                                                        <input type="text" name="firstname"
                                                                            id="edit_firstname" class="form-control"
                                                                            required>
                                                                        <small class="text-danger"
                                                                            id="edit_firstname_error"></small>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label>Last Name *</label>
                                                                        <input type="text" name="lastname"
                                                                            id="edit_lastname" class="form-control"
                                                                            required>
                                                                        <small class="text-danger"
                                                                            id="edit_lastname_error"></small>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label>Username *</label>
                                                                        <input type="text" name="username"
                                                                            id="edit_username" class="form-control"
                                                                            required>
                                                                        <small class="text-danger"
                                                                            id="edit_username_error"></small>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label>Email *</label>
                                                                        <input type="email" name="email" id="edit_email"
                                                                            class="form-control" required>
                                                                        <small class="text-danger"
                                                                            id="edit_email_error"></small>
                                                                    </div>
                                                                </div>
                                                                <!-- Column 2 -->
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label>Phone Number *</label>
                                                                        <input type="tel" name="phonenumber"
                                                                            id="edit_phonenumber" class="form-control"
                                                                            required>
                                                                        <small class="text-danger"
                                                                            id="edit_phonenumber_error"></small>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label>Country *</label>
                                                                        <select name="country" id="edit_country"
                                                                            class="form-control" required>
                                                                            <option value="">-- Select Country --
                                                                            </option>
                                                                            <option>Kenya</option>
                                                                            <option>Uganda</option>
                                                                            <option>Tanzania</option>
                                                                            <option>Rwanda</option>
                                                                            <option>Burundi</option>
                                                                        </select>
                                                                        <small class="text-danger"
                                                                            id="edit_country_error"></small>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label>Gender</label>
                                                                        <select name="gender" id="edit_gender"
                                                                            class="form-control">
                                                                            <option value="">-- Select Gender --
                                                                            </option>
                                                                            <option value="male">Male</option>
                                                                            <option value="female">Female</option>
                                                                            <option value="other">Other</option>
                                                                        </select>
                                                                        <small class="text-danger"
                                                                            id="edit_gender_error"></small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">
                                                                <i class="bi bi-x-circle me-1"></i> Cancel
                                                            </button>

                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="bi bi-save me-1"></i> Save Changes
                                                            </button>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Change Status Modal -->
                                        <div class="modal fade" id="changeStatusModal" tabindex="-1"
                                            aria-labelledby="changeStatusModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form id="change_status_form">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Change Admin Status</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" id="status_admin_id">
                                                            <div class="mb-3">
                                                                <label for="new_status" class="form-label">Select New
                                                                    Status</label>
                                                                <select id="new_status" class="form-select" required>
                                                                    <option value="10">Active</option>
                                                                    <option value="0">Banned</option>
                                                                    <option value="8">Locked</option>
                                                                    <option value="9">Suspended</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">
                                                                <i class="bi bi-x-circle me-1"></i> Cancel
                                                            </button>

                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="bi bi-check2-circle me-1"></i> Update Status
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4">Patient Management Dashboard</h4>

                        <!-- Dashboard Metrics Cards -->
                        <div class="row g-4 mb-4">

                            <!-- Total Patients -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-user bx-lg mb-2 text-primary"></i>
                                        <h5 class="card-title">{{ $metrics['totalPatients'] }}</h5>
                                        <p class="card-text">Total Patients</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Male Patients -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-male bx-lg mb-2 text-info"></i>
                                        <h5 class="card-title">{{ $metrics['maleCount'] }}</h5>
                                        <p class="card-text">Male Patients</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Female Patients -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-female bx-lg mb-2 text-danger"></i>
                                        <h5 class="card-title">{{ $metrics['femaleCount'] }}</h5>
                                        <p class="card-text">Female Patients</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Other/Unspecified Gender -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-question-mark bx-lg mb-2 text-secondary"></i>
                                        <h5 class="card-title">{{ $metrics['otherCount'] }}</h5>
                                        <p class="card-text">Other / Unspecified</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Average Age -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-cake bx-lg mb-2 text-warning"></i>
                                        <h5 class="card-title">{{ $metrics['averageAge'] }} yrs</h5>
                                        <p class="card-text">Average Age</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Most Common Condition -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-heart bx-lg mb-2 text-dark"></i>
                                        <h5 class="card-title">{{ $metrics['commonCondition'] }}</h5>
                                        <p class="card-text">Top Condition</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Patients with Insurance -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-shield-alt-2 bx-lg mb-2 text-success"></i>
                                        <h5 class="card-title">{{ $metrics['withInsurance'] }}</h5>
                                        <p class="card-text">With Insurance</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Online Consultations -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-laptop bx-lg mb-2 text-success"></i>
                                        <h5 class="card-title">{{ $metrics['consultationPrefs']['online'] }}</h5>
                                        <p class="card-text">Online Consultations</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Offline Consultations -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-clinic bx-lg mb-2 text-warning"></i>
                                        <h5 class="card-title">{{ $metrics['consultationPrefs']['offline'] }}</h5>
                                        <p class="card-text">Offline Consultations</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Both Consultations -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-transfer bx-lg mb-2 text-info"></i>
                                        <h5 class="card-title">{{ $metrics['consultationPrefs']['both'] }}</h5>
                                        <p class="card-text">Both Methods</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Patient Table -->
                        <div class="card">
                            <div class="card-body table-responsive">
                                <h5 class="card-title mb-4">All Registered Patients</h5>

                                <table class="table table-bordered table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email / Phone</th>
                                            <th>Gender</th>
                                            <th>DOB</th>
                                            <th>Consultation</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($patients as $index => $patient)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $patient->full_name }}</td>
                                                <td>
                                                    {{ $patient->email }}<br>
                                                    <small>{{ $patient->phone_number }}</small>
                                                </td>
                                                <td>{{ ucfirst($patient->gender) }}</td>
                                                <td>{{ \Carbon\Carbon::parse($patient->dob)->format('d M Y') }}</td>
                                                <td>{{ ucfirst($patient->consultation_type) }}</td>
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
                                                <td colspan="8" class="text-center">No patients registered yet.</td>
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
                                            text: 'Admin has been updated successfully.',
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
                                                text: 'Patient has been removed.',
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