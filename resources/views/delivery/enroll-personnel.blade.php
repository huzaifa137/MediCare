<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --success-color: #28a745;
            --info-color: #17a2b8;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --bg-light: #f4f7f9;
            --card-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            --border-radius: 0.75rem;
        }

        body {
            background-color: #e9f5ff;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        .form-container {
            max-width: 900px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #fff;
            border-radius: var(--border-radius);
            box-shadow: var(--card-shadow);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-header {
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }

        .form-title {
            color: var(--primary-color);
            font-weight: 600;
        }

        .form-subtitle {
            color: var(--secondary-color);
        }

        .card-header h5 {
            color: var(--dark-color);
            font-weight: 500;
        }

        .card {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--card-shadow);
        }

        .progress-bar {
            background-color: var(--success-color);
            transition: width 0.6s ease;
        }

        .form-section-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-top: 2rem;
            margin-bottom: 1rem;
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 0.5rem;
        }

        .input-group-text {
            background-color: var(--primary-color);
            color: #fff;
            border: 1px solid var(--primary-color);
            border-radius: 0.375rem 0 0 0.375rem;
        }

        .form-control,
        .form-select {
            border-radius: 0.375rem;
            transition: all 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        }

        .form-check-label {
            color: var(--dark-color);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            font-weight: 500;
            padding: 0.75rem 1.5rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.2);
        }

        .upload-card {
            border: 2px dashed #e9ecef;
            border-radius: var(--border-radius);
            text-align: center;
            padding: 2rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .upload-card:hover {
            background-color: #f8f9fa;
            border-color: var(--primary-color);
        }

        .file-input {
            display: none;
        }

        .companylogo {
            text-align: center;
        }

        .custom-file-upload {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 2px dashed #ccc;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: border-color 0.3s ease;
            height: 220px;
            overflow: hidden;
            background-color: #fafafa;
        }

        .custom-file-upload:hover {
            border-color: #007bff;
            background-color: #f1faff;
        }

        .custom-file-upload input[type="file"] {
            display: none;
        }

        .file-label {
            font-weight: 500;
            display: block;
            margin-bottom: 8px;
        }

        .file-placeholder {
            font-size: 0.9rem;
            color: #888;
            margin-top: 8px;
        }

        .file-preview-img {
            display: none;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            border-radius: 6px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            z-index: 1;
        }

        .upload-content {
            z-index: 2;
        }

        .custom-file-upload.previewing .upload-content {
            display: none;
        }

        .custom-file-upload.previewing .file-preview-img {
            display: block;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="form-container">
                    <div class="companylogo mb-4 text-center">
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
                                                        id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
                                                    <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0"
                                                        width="7.68181818" height="7.68181818"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="app-brand-text demo h3 fw-bold mb-0">{{Helper::app_name()}}</span>
                    </div>

                    <div class="form-header text-center">
                        <h2 class="form-title">🛵 Delivery Personnel Registration</h2>
                        <p class="form-subtitle">Register as a delivery person to join our network.</p>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <form id="deliveryRegistrationForm" method="POST" enctype="multipart/form-data"
                                action="{{ route('delivery.store') }}">

                                <!-- Basic Info -->
                                <div class="row g-3">
                                    <div class="col-12">
                                        <h5 class="form-section-title">👤 Personal Information</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="fullName" class="form-label">Full Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="fullName" name="fullName"
                                            placeholder="John Doe">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="email@example.com">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phoneNumber" class="form-label">Phone Number <span
                                                class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber"
                                            placeholder="(123) 456-7890">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select" id="gender" name="gender">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Identity Verification -->
                                <div class="row g-3 mt-4">
                                    <div class="col-12">
                                        <h5 class="form-section-title">🆔 Identity Verification</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="file-label" for="governmentId">Government-issued ID <span
                                                class="text-danger">*</span></label>
                                        <label class="custom-file-upload" id="uploadBox_governmentId">
                                            <div class="upload-content">
                                                <i class="bi bi-upload" style="font-size: 1.5rem;"></i><br>
                                                <span class="file-placeholder" id="placeholder_governmentId">No file
                                                    selected</span>
                                            </div>
                                            <img id="imgPreview_governmentId" class="file-preview-img" alt="Preview">
                                            <input class="file-input" type="file" id="governmentId" name="governmentId"
                                                accept="image/*,application/pdf">
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="file-label" for="backgroundCheck">Background Check Document <span
                                                class="text-danger">*</span></label>
                                        <label class="custom-file-upload" id="uploadBox_backgroundCheck">
                                            <div class="upload-content">
                                                <i class="bi bi-upload" style="font-size: 1.5rem;"></i><br>
                                                <span class="file-placeholder" id="placeholder_backgroundCheck">No file
                                                    selected</span>
                                            </div>
                                            <img id="imgPreview_backgroundCheck" class="file-preview-img" alt="Preview">
                                            <input class="file-input" type="file" id="backgroundCheck"
                                                name="backgroundCheck" accept="image/*,application/pdf">
                                        </label>
                                    </div>
                                </div>

                                <!-- Vehicle Details -->
                                <div class="row g-3 mt-4">
                                    <div class="col-12">
                                        <h5 class="form-section-title">🚗 Vehicle Details</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="vehicleType" class="form-label">Vehicle Type</label>
                                        <select class="form-select" id="vehicleType" name="vehicleType">
                                            <option value="">Select Vehicle</option>
                                            <option value="bike">Bike</option>
                                            <option value="car">Car</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="vehicleNumber" class="form-label">Vehicle Registration
                                            Number</label>
                                        <input type="text" class="form-control" id="vehicleNumber" name="vehicleNumber">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="vehicleInsurance" class="form-label">Vehicle Insurance
                                            (Optional)</label>
                                        <input type="text" class="form-control" id="vehicleInsurance"
                                            name="vehicleInsurance">
                                    </div>
                                </div>

                                <!-- Bank Details -->
                                <div class="row g-3 mt-4">
                                    <div class="col-12">
                                        <h5 class="form-section-title">🏦 Bank & Payment Details</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="bankName" class="form-label">Bank Name</label>
                                        <input type="text" class="form-control" id="bankName" name="bankName">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="accountNumber" class="form-label">Account Number</label>
                                        <input type="text" class="form-control" id="accountNumber" name="accountNumber">
                                    </div>
                                </div>

                                <!-- Availability & Schedule -->
                                <div class="row g-3 mt-4">
                                    <div class="col-12">
                                        <h5 class="form-section-title">⏰ Availability & Schedule</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="availableDays" class="form-label">Available Days</label>
                                        <input type="text" class="form-control" id="availableDays" name="availableDays"
                                            placeholder="e.g., Monday to Saturday">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="availableHours" class="form-label">Available Hours</label>
                                        <input type="text" class="form-control" id="availableHours"
                                            name="availableHours" placeholder="e.g., 8:00 AM – 8:00 PM">
                                    </div>
                                </div>

                                <!-- Training & Certification -->
                                <div class="row g-3 mt-4">
                                    <div class="col-12">
                                        <h5 class="form-section-title">📜 Training & Certification</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="file-label" for="trainingCert">Training Certificate
                                            (Optional)</label>
                                        <label class="custom-file-upload" id="uploadBox_trainingCert">
                                            <div class="upload-content">
                                                <i class="bi bi-upload" style="font-size: 1.5rem;"></i><br>
                                                <span class="file-placeholder" id="placeholder_trainingCert">No file
                                                    selected</span>
                                            </div>
                                            <img id="imgPreview_trainingCert" class="file-preview-img" alt="Preview">
                                            <input class="file-input" type="file" id="trainingCert" name="trainingCert"
                                                accept="image/*,application/pdf">
                                        </label>
                                    </div>
                                </div>

                                <!-- Login Credentials -->
                                <div class="row g-3 mt-4">
                                    <div class="col-12">
                                        <h5 class="form-section-title">🔒 Login Credentials</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="username" class="form-label">Username <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="username" name="username">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="loginEmail" class="form-label">Email Address <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="loginEmail" name="loginEmail">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" name="password">
                                            <button type="button" class="btn btn-outline-secondary toggle-password"
                                                data-target="password">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="confirmPassword" class="form-label">Confirm Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="confirmPassword"
                                                name="confirmPassword">
                                            <button type="button" class="btn btn-outline-secondary toggle-password"
                                                data-target="confirmPassword">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Buttons -->
                                <div class="row mt-4">
                                    <div class="col-md-6 col-12 d-grid mb-2 mb-md-0">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="fa fa-plus-circle me-2"></i> Register Delivery Person
                                        </button>
                                    </div>
                                    <div class="col-md-6 col-12 d-grid">
                                        <a href="{{ url('users/login') }}" class="btn btn-outline-secondary btn-lg">
                                            <i class="fas fa-arrow-left me-2"></i> Back to Login
                                        </a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JavaScript -->
    <script>
        document.querySelectorAll('.file-input').forEach(input => {
            input.addEventListener('change', function () {
                const file = this.files[0];
                const baseId = this.id;
                const placeholder = document.getElementById(`placeholder_${baseId}`);
                const imgPreview = document.getElementById(`imgPreview_${baseId}`);
                const uploadBox = document.getElementById(`uploadBox_${baseId}`);

                if (!file) {
                    placeholder.textContent = 'No file selected';
                    imgPreview.style.display = 'none';
                    uploadBox.classList.remove('previewing');
                    return;
                }

                placeholder.textContent = file.name;

                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        imgPreview.src = e.target.result;
                        uploadBox.classList.add('previewing');
                    };
                    reader.readAsDataURL(file);
                } else {
                    uploadBox.classList.remove('previewing');
                    imgPreview.style.display = 'none';
                }
            });
        });

    </script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).on('click', '.toggle-password', function () {
            let targetId = $(this).data('target');
            let input = $('#' + targetId);
            let icon = $(this).find('i');

            if (input.attr('type') === 'password') {
                input.attr('type', 'text');
                icon.removeClass('bi-eye').addClass('bi-eye-slash');
            } else {
                input.attr('type', 'password');
                icon.removeClass('bi-eye-slash').addClass('bi-eye');
            }
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#deliveryRegistrationForm').on('submit', function (e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Confirm Submission',
                    text: 'Are you sure you want to register this delivery person?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, Register',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Swal.fire({
                            title: 'Submitting...',
                            text: 'Please wait while we register the delivery person.',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            didOpen: () => {
                                Swal.showLoading();
                            }
                        });

                        var form = $('#deliveryRegistrationForm');
                        var formData = new FormData(form[0]);

                        // ✅ Clear old errors before submitting
                        form.find('.is-invalid').removeClass('is-invalid');
                        $('.text-danger').text('');

                        $.ajax({
                            url: "{{ route('delivery.store') }}",
                            type: "POST",
                            data: formData,
                            processData: false,
                            contentType: false,
                            headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
                            success: function (response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Delivery Person Registered!',
                                    text: response.message || 'The delivery person has been registered successfully.',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    if (response.redirect_url) {
                                        window.location.href = response.redirect_url;
                                    } else {
                                        form[0].reset();
                                    }
                                });
                            },
                            // error: function (data) {
                            //     $('body').html(data.responseText);
                            // }
                            error: function (xhr) {
                                if (xhr.status === 422) {
                                    var errors = xhr.responseJSON.errors;

                                    $.each(errors, function (field, messages) {
                                        let input = $('#' + field);
                                        input.addClass('is-invalid');

                                        // Display error messages dynamically (optional)
                                        if ($('#' + field + '-error').length === 0) {
                                            input.after('<div id="' + field + '-error" class="text-danger mt-1 small"></div>');
                                        }
                                        $('#' + field + '-error').text(messages.join(', '));
                                    });

                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Validation Failed',
                                        text: 'Please check the form for errors.',
                                        confirmButtonText: 'OK'
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Submission Failed',
                                        text: 'An error occurred while submitting the form.',
                                        confirmButtonText: 'OK'
                                    });
                                    console.error('Error:', xhr);
                                }
                            }
                        });
                    }
                });
            });
        });
    </script>

</body>

</html>