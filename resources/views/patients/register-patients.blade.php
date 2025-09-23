<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Register - {{Helper::app_name()}} </title>

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
    <link rel="stylesheet" href="../../assets/vendor/libs/bs-stepper/bs-stepper.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

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


    <style>
        body {
            background-color: #e9f5ff;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        .patient-form-container {
            padding: 2rem;
        }

        .patient-card {
            border-radius: 1.5rem;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            max-width: 800px;
            margin: auto;
        }

        .form-header {
            margin-bottom: 2.5rem;
        }

        .form-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #007bff;
            margin-bottom: 0.5rem;
        }

        .form-subtitle {
            color: #6c757d;
            font-size: 1.1rem;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #495057;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 500;
            color: #495057;
        }

        .form-control,
        .form-select {
            border-radius: 0.75rem;
            padding: 0.75rem 1rem;
            border: 1px solid #ced4da;
            transition: all 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.15);
        }

        .photo-upload-section img {
            border: 3px solid #007bff;
            padding: 3px;
            object-fit: cover;
        }

        .upload-btn {
            font-weight: 600;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            transition: transform 0.2s ease;
        }

        .upload-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .submit-btn {
            font-size: 1.35rem;
            font-weight: 600;
            border-radius: 50px;
            background-color: #28a745;
            border-color: #28a745;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .submit-btn:hover {
            background-color: #218838;
            border-color: #1e7e34;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .progress-bar {
            background-color: #28a745;
        }
    </style>
</head>

<body>
    <!-- Content -->

    <div class="row">
        <div class="col-lg-10 p-3 p-sm-5 mx-auto">

            <div class="app-brand border-bottom mx-3 mb-4">
                <a href="{{url('/')}}" class="app-brand-link gap-2 mb-3">
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
                </a>
            </div>

            <div class="card mb-4">

                <hr class="my-0" />
                <div class="card-body">
                    <form id="formPatientRegistration" method="POST" enctype="multipart/form-data">
                        <div class="patient-form-container">
                            <div class="form-header text-center mb-4">
                                <h2 class="form-title">📝 New Patient Intake Form</h2>
                                <p class="form-subtitle">Let's get you set up! This will only take a moment.</p>
                                <hr>
                            </div>

                            <div class="card patient-card">
                                <div class="card-body">
                                    <div class="progress mb-4" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 100%;"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="photo-upload-section text-center mb-4">
                                        <img src="https://placehold.co/128x128/94a3b8/e2e8f0?text=Profile"
                                            alt="patient-avatar" class="d-block rounded-circle mx-auto mb-3"
                                            height="100" width="100" id="uploadedAvatar" />
                                        <label for="upload" class="btn btn-outline-primary upload-btn" tabindex="0">
                                            <i class="fas fa-camera me-2"></i>
                                            <span>Upload Profile Photo</span>
                                            <input type="file" id="upload" class="account-file-input" hidden
                                                accept="image/png, image/jpeg" />
                                        </label>
                                        <p class="form-text mt-2 mb-0">Allowed formats: JPG, PNG. Max size: 2MB</p>
                                    </div>

                                    <hr class="my-4" />

                                    <div class="row g-3">
                                        <div class="col-12">
                                            <h5 class="section-title">👤 Personal Information</h5>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="fullName" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="fullName" name="fullName"
                                                placeholder="Jane Doe" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="patient@example.com" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="phoneNumber" class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber"
                                                placeholder="(123) 456-7890" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="gender" class="form-label">Gender</label>
                                            <select class="form-select" id="gender" name="gender" required>
                                                <option value="">Select Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                                <option value="prefer_not_to_say">Prefer not to say</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="dob" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" id="dob" name="dob" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="nationality" class="form-label">Nationality</label>
                                            <input type="text" class="form-control" id="nationality" name="nationality"
                                                placeholder="e.g., American">
                                        </div>

                                        <div class="col-12 mt-4">
                                            <h5 class="section-title">🩺 Health & Lifestyle Information (Optional)</h5>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="medicalConditions" class="form-label">Existing Medical
                                                Conditions</label>
                                            <input type="text" class="form-control" id="medicalConditions"
                                                name="medicalConditions" placeholder="e.g., Diabetes, Hypertension">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="allergies" class="form-label">Allergies</label>
                                            <input type="text" class="form-control" id="allergies" name="allergies"
                                                placeholder="e.g., Penicillin, Peanuts">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="medications" class="form-label">Medications Currently
                                                Taken</label>
                                            <input type="text" class="form-control" id="medications" name="medications"
                                                placeholder="e.g., Aspirin, Lisinopril">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="smokingStatus" class="form-label">Smoking Status</label>
                                            <select class="form-select" id="smokingStatus" name="smokingStatus">
                                                <option value="">Select Status</option>
                                                <option value="non-smoker">Non-smoker</option>
                                                <option value="current-smoker">Current Smoker</option>
                                                <option value="former-smoker">Former Smoker</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="alcoholConsumption" class="form-label">Alcohol
                                                Consumption</label>
                                            <input type="text" class="form-control" id="alcoholConsumption"
                                                name="alcoholConsumption" placeholder="e.g., Occasional, Daily">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="recentSurgeries" class="form-label">Recent
                                                Surgeries/Treatments</label>
                                            <input type="text" class="form-control" id="recentSurgeries"
                                                name="recentSurgeries" placeholder="e.g., Appendectomy (2023)">
                                        </div>

                                        <div class="col-12 mt-4">
                                            <h5 class="section-title">🏥 Consultation Preferences</h5>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="consultationType" class="form-label">Preferred Consultation
                                                Type</label>
                                            <select class="form-select" id="consultationType" name="consultationType">
                                                <option value="">Select Type</option>
                                                <option value="video">Video</option>
                                                <option value="audio">Audio</option>
                                                <option value="chat">Chat</option>
                                                <option value="in-person">In-person</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="doctorGender" class="form-label">Preferred Doctor Gender
                                                (Optional)</label>
                                            <select class="form-select" id="doctorGender" name="doctorGender">
                                                <option value="">No Preference</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="preferredLanguage" class="form-label">Preferred
                                                Language(s)</label>
                                            <input type="text" class="form-control" id="preferredLanguage"
                                                name="preferredLanguage" placeholder="e.g., English, Spanish">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="bestTime" class="form-label">Best Time for Consultation</label>
                                            <select class="form-select" id="bestTime" name="bestTime">
                                                <option value="">Select Time</option>
                                                <option value="morning">Morning</option>
                                                <option value="afternoon">Afternoon</option>
                                                <option value="evening">Evening</option>
                                            </select>
                                        </div>

                                        <div class="col-12 mt-4">
                                            <h5 class="section-title">🆘 Emergency Contact Details</h5>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="emergencyName" class="form-label">Contact Person's Name</label>
                                            <input type="text" class="form-control" id="emergencyName"
                                                name="emergencyName" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="emergencyRelationship" class="form-label">Relationship to
                                                Client</label>
                                            <input type="text" class="form-control" id="emergencyRelationship"
                                                name="emergencyRelationship" placeholder="e.g., Mother, Spouse"
                                                required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="emergencyPhone" class="form-label">Contact Person's
                                                Phone</label>
                                            <input type="tel" class="form-control" id="emergencyPhone"
                                                name="emergencyPhone" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="emergencyEmail" class="form-label">Contact Person's Email
                                                (Optional)</label>
                                            <input type="email" class="form-control" id="emergencyEmail"
                                                name="emergencyEmail">
                                        </div>

                                        <div class="col-12 mt-4">
                                            <h5 class="section-title">🔒 Account Security</h5>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" id="confirmPassword"
                                                name="confirmPassword" required>
                                        </div>

                                        <div class="col-12 mt-4">
                                            <h5 class="section-title">✨ Optional Information</h5>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="insuranceProvider" class="form-label">Insurance Provider</label>
                                            <input type="text" class="form-control" id="insuranceProvider"
                                                name="insuranceProvider" placeholder="e.g., Blue Cross Blue Shield">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="insuranceId" class="form-label">Insurance ID / Policy
                                                Number</label>
                                            <input type="text" class="form-control" id="insuranceId" name="insuranceId">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="referredBy" class="form-label">Referred By</label>
                                            <input type="text" class="form-control" id="referredBy" name="referredBy"
                                                placeholder="Name of person or clinic">
                                        </div>

                                        <div class="col-12 d-flex justify-content-between align-items-center mt-4">
                                            <!-- Submit Button -->
                                            <button type="submit" class="btn btn-success btn-md">
                                                <i class="fas fa-paper-plane me-2"></i> Submit
                                            </button>

                                            <a href="{{ url('/users/login') }}" class="btn btn-outline-primary btn-md">
                                                <i class="fas fa-arrow-left me-2"></i> Return to Login
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const uploadInput = document.getElementById('upload');
        const uploadedAvatar = document.getElementById('uploadedAvatar');

        uploadInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    uploadedAvatar.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>


    <script>
        $(document).ready(function () {
            $('#formPatientRegistration').on('submit', function (e) {
                e.preventDefault(); // Prevent default form submission

                // Clear previous errors
                $('.text-danger').text('');

                // Show confirmation dialog before submitting
                Swal.fire({
                    title: 'Confirm Submission',
                    text: 'Are you sure you want to submit this registration?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, submit',
                    cancelButtonText: 'Cancel',
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Show loading spinner
                        Swal.fire({
                            title: 'Submitting...',
                            html: 'Please wait while we process the registration.',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            didOpen: () => {
                                Swal.showLoading();
                            }
                        });

                        // Prepare form data
                        let formData = new FormData(this);

                        // Add CSRF token manually
                        formData.append('_token', '{{ csrf_token() }}');

                        $.ajax({
                            url: "{{ route('patients.store') }}", // Replace with your actual route
                            method: "POST",
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function (response) {
                                Swal.fire({
                                    title: 'Success!',
                                    text: 'Patient registered successfully.',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    // Optional: redirect or reset form
                                    window.location.href = response.redirect_url || "/dashboard";
                                });
                            },
                            // error: function (xhr) {
                            //     if (xhr.status === 422) {
                            //         Swal.close(); // Close the loading alert
                            //         const errors = xhr.responseJSON.errors;
                            //         // Loop through errors and show in span#fieldname-error
                            //         $.each(errors, function (field, messages) {
                            //             $(`#${field}-error`).text(messages[0]);
                            //         });
                            //     } else {
                            //         // Show full error for debugging if needed
                            //         $('body').html(xhr.responseText);
                            //     }
                            // }
                            error: function (data) {
                                $('body').html(data.responseText);
                            }
                        });
                    }
                });
            });
        });
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