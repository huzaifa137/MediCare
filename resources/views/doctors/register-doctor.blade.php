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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #eef2f9 0%, #dce3f1 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem 1rem;
    }

    .form-card {
      max-width: 1000px;
      width: 100%;
      background: #ffffff;
      border-radius: 20px;
      box-shadow: 0 0 50px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transform: translateY(0);
      transition: transform 0.3s ease-in-out;
    }

    .form-card:hover {
      transform: translateY(-5px);
    }

    .header-section {
      background-color: #4c68d2;
      background-image: linear-gradient(to right, #4c68d2 0%, #6e88e2 100%);
      padding: 3rem 2rem;
      color: white;
      text-align: center;
      position: relative;
    }

    .header-section h1 {
      font-size: 2.5rem;
      font-weight: 700;
      letter-spacing: -0.05em;
    }

    .header-section p {
      opacity: 0.9;
      margin-top: 0.5rem;
    }

    .form-body {
      padding: 2.5rem;
    }

    .form-section-title {
      font-weight: 600;
      color: #334155;
      position: relative;
      margin-top: 1.5rem;
      margin-bottom: 0.75rem;
      font-size: 1.25rem;
    }

    .form-section-title::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 50px;
      height: 3px;
      background: #4c68d2;
      border-radius: 2px;
    }

    .form-control,
    .form-select {
      border: 1px solid #d1d5db;
      border-radius: 10px;
      padding: 0.75rem 1rem;
      transition: all 0.2s ease-in-out;
    }

    .form-control:focus,
    .form-select:focus {
      outline: none;
      border-color: #4c68d2;
      box-shadow: 0 0 0 3px rgba(76, 104, 210, 0.2);
    }

    .btn-primary-custom {
      background-color: #4c68d2;
      color: white;
      border-radius: 10px;
      padding: 0.75rem 1.5rem;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(76, 104, 210, 0.4);
      border: none;
    }

    .btn-primary-custom:hover {
      background-color: #6e88e2;
      box-shadow: 0 6px 20px rgba(76, 104, 210, 0.6);
    }

    .btn-secondary-custom {
      background-color: #e2e8f0;
      color: #4b5563;
      border-radius: 10px;
      padding: 0.75rem 1.5rem;
      font-weight: 600;
      transition: all 0.3s ease;
      border: none;
    }

    .btn-secondary-custom:hover {
      background-color: #cbd5e1;
    }

    .btn-outline-primary-custom {
      border: 2px solid #4c68d2;
      color: #4c68d2;
      background-color: transparent;
      border-radius: 10px;
      padding: 0.75rem 1.5rem;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-outline-primary-custom:hover {
      background-color: #4c68d2;
      color: white;
    }
  </style>
</head>

<!-- Content -->

{{-- <div class="row">
  <div class="col-lg-10 p-3 p-sm-5 mx-auto">

    <div class="app-brand border-bottom mx-3 mb-4">
      <a href="{{url('/')}}" class="app-brand-link gap-2 mb-3">
        <span class="app-brand-logo demo">
          <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
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
                      <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818"
                        height="7.68181818"></rect>
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
      <h5 class="card-header">Physician Registration Details</h5>

      <div class="card-body">
        <div class="gap-4 d-flex align-items-start align-items-sm-center">
          <img src="../../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100" width="100"
            id="uploadedAvatar" />
          <div class="button-wrapper">
            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
              <span class="d-none d-sm-block">Upload new photo</span>
              <i class="bx bx-upload d-sm-none d-block"></i>
              <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
            </label>
            <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
              <i class="bx bx-reset d-sm-none d-block"></i>
              <span class="d-none d-sm-block">Reset</span>
            </button>

            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
          </div>
        </div>
      </div>
      <hr class="my-0" />
      <div class="card-body">
        <form id="formDoctorRegistration" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12 mb-3">
              <h5>Personal Information</h5>
              <hr>
            </div>

            <div class="col-md-6 mb-3">
              <label for="fullName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Dr. John Doe" required>
              <span class="text-danger d-block" id="fullName-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="doctor@example.com"
                required>
              <span class="text-danger d-block" id="email-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="phoneNumber" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="+1 202 555 0111"
                required>
              <span class="text-danger d-block" id="phoneNumber-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="gender" class="form-label">Gender</label>
              <select class="form-select" id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
              <span class="text-danger d-block" id="gender-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="dob" class="form-label">Date of Birth</label>
              <input type="date" class="form-control" id="dob" name="dob" required>
              <span class="text-danger d-block" id="dob-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="profilePicture" class="form-label">Profile Picture</label>
              <input type="file" class="form-control" id="profilePicture" name="profilePicture" accept="image/*">
              <span class="text-danger d-block" id="profilePicture-error"></span>
            </div>

            <div class="col-12 mb-3 mt-4">
              <h5>Professional Information</h5>
              <hr>
            </div>
            <div class="col-md-6 mb-3">
              <label for="licenseNumber" class="form-label">Medical License Number</label>
              <input type="text" class="form-control" id="licenseNumber" name="licenseNumber" required>
              <span class="text-danger d-block" id="licenseNumber-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="issuingBody" class="form-label">Issuing Medical Body</label>
              <input type="text" class="form-control" id="issuingBody" name="issuingBody" required>
              <span class="text-danger d-block" id="issuingBody-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="experience" class="form-label">Years of Experience</label>
              <input type="number" class="form-control" id="experience" name="experience" placeholder="e.g. 5" required>
              <span class="text-danger d-block" id="experience-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="specialization" class="form-label">Specialization</label>
              <input type="text" class="form-control" id="specialization" name="specialization" required>
              <span class="text-danger d-block" id="specialization-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="subSpecialization" class="form-label">Sub-specialization (Optional)</label>
              <input type="text" class="form-control" id="subSpecialization" name="subSpecialization">
              <span class="text-danger d-block" id="subSpecialization-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="qualifications" class="form-label">Qualifications</label>
              <input type="text" class="form-control" id="qualifications" name="qualifications" required>
              <span class="text-danger d-block" id="qualifications-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="university" class="form-label">University / Medical School</label>
              <input type="text" class="form-control" id="university" name="university" required>
              <span class="text-danger d-block" id="university-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="languages" class="form-label">Languages Spoken</label>
              <input type="text" class="form-control" id="languages" name="languages" placeholder="English, French"
                required>
              <span class="text-danger d-block" id="languages-error"></span>
            </div>

            <div class="col-12 mb-3 mt-4">
              <h5>Availability & Consultation</h5>
              <hr>
            </div>
            <div class="col-md-6 mb-3">
              <label for="availableDays" class="form-label">Available Days</label>
              <input type="text" class="form-control" id="availableDays" name="availableDays" placeholder="Mon-Fri"
                required>
              <span class="text-danger d-block" id="availableDays-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="timeSlots" class="form-label">Available Time Slots</label>
              <input type="text" class="form-control" id="timeSlots" name="timeSlots" placeholder="09:00 - 17:00"
                required>
              <span class="text-danger d-block" id="timeSlots-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="consultationMethod" class="form-label">Consultation Method</label>
              <select class="form-select" id="consultationMethod" name="consultationMethod" required>
                <option value="">Select Method</option>
                <option value="online">Online</option>
                <option value="offline">Offline</option>
                <option value="both">Both</option>
              </select>
              <span class="text-danger d-block" id="consultationMethod-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="consultationFee" class="form-label">Consultation Fee</label>
              <input type="number" class="form-control" id="consultationFee" name="consultationFee"
                placeholder="e.g. 50" required>
              <span class="text-danger d-block" id="consultationFee-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="currency" class="form-label">Currency</label>
              <select class="form-select" id="currency" name="currency" required>
                <option value="">Select Currency</option>
                <option value="usd">USD</option>
                <option value="euro">Euro</option>
                <option value="pound">Pound</option>
                <option value="bitcoin">Bitcoin</option>
              </select>
              <span class="text-danger d-block" id="currency-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="maxPatients" class="form-label">Max Patients per Day</label>
              <input type="number" class="form-control" id="maxPatients" name="maxPatients" placeholder="e.g. 20"
                required>
              <span class="text-danger d-block" id="maxPatients-error"></span>
            </div>

            <div class="col-12 mb-3 mt-4">
              <h5>Online Presence (Optional)</h5>
              <hr>
            </div>
            <div class="col-md-6 mb-3">
              <label for="linkedin" class="form-label">LinkedIn Profile</label>
              <input type="url" class="form-control" id="linkedin" name="linkedin"
                placeholder="https://linkedin.com/in/username">
              <span class="text-danger d-block" id="linkedin-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="website" class="form-label">Website / Portfolio</label>
              <input type="url" class="form-control" id="website" name="website" placeholder="https://example.com">
              <span class="text-danger d-block" id="website-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="articles" class="form-label">Published Articles / Research</label>
              <input type="text" class="form-control" id="articles" name="articles" placeholder="Optional">
              <span class="text-danger d-block" id="articles-error"></span>
            </div>

            <div class="col-12 mb-3 mt-4">
              <h5>Document Uploads (for verification)</h5>
              <hr>
            </div>
            <div class="col-md-6 mb-3">
              <label for="govID" class="form-label">Government-issued ID</label>
              <input type="file" class="form-control" id="govID" name="govID" accept=".pdf,.jpg,.png">
              <span class="text-danger d-block" id="govID-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="licenseDoc" class="form-label">Medical License Document</label>
              <input type="file" class="form-control" id="licenseDoc" name="licenseDoc" accept=".pdf,.jpg,.png">
              <span class="text-danger d-block" id="licenseDoc-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="degreeCerts" class="form-label">Degree Certificates</label>
              <input type="file" class="form-control" id="degreeCerts" name="degreeCerts" accept=".pdf,.jpg,.png">
              <span class="text-danger d-block" id="degreeCerts-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cvResume" class="form-label">CV / Resume</label>
              <input type="file" class="form-control" id="cvResume" name="cvResume" accept=".pdf,.doc,.docx">
              <span class="text-danger d-block" id="cvResume-error"></span>
            </div>

            <div class="col-12 mb-3 mt-4">
              <h5>Login Credentials</h5>
              <hr>
            </div>
            <div class="col-md-6 mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
              <span class="text-danger d-block" id="password-error"></span>
            </div>
            <div class="col-md-6 mb-3">
              <label for="confirmPassword" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
              <span class="text-danger d-block" id="confirmPassword-error"></span>
            </div>

          </div>

          <div
            class="mt-4 d-flex flex-column flex-md-row justify-content-center justify-content-md-between align-items-center gap-2 flex-wrap">

            <!-- Left-aligned group: Register & Clear -->
            <div class="d-flex flex-column flex-sm-row align-items-center gap-2">
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-user-plus me-1"></i> Register Doctor
              </button>

              <button type="reset" class="btn btn-secondary">
                <i class="fas fa-times-circle me-1"></i> Clear Form
              </button>
            </div>

            <!-- Right-aligned: Back to Login -->
            <div>
              <a href="{{ url('users/login') }}" class="btn btn-outline-primary">
                <i class="fas fa-arrow-left me-1"></i> Back to Login
              </a>
            </div>
          </div>

        </form>
      </div>
    </div>

  </div>
</div> --}}

<body>
  <div class="form-card">
    <!-- Header Section -->
    <div class="header-section">
      <div class="app-brand border-bottom mx-3 mb-4">
        <a href="{{url('/')}}" class="app-brand-link gap-2 mb-3">
          <span class="app-brand-logo demo">
            <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
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
                        <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818"
                          height="7.68181818"></rect>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </span>
          <a href="#" style="text-decoration: none;">
            <span class="app-brand-text demo h3 fw-bold mb-0 text-white">
              {{ Helper::app_name() }}
            </span>
          </a>
        </a>
      </div>
      <h1 class="text-4xl">Physician Registration</h1>
      <p class="text-lg">Join our network of trusted medical professionals.</p>
    </div>

    <!-- Main Content Body -->
    <div class="form-body">
      <form id="formDoctorRegistration" method="POST" enctype="multipart/form-data">

        <!-- Photo Upload Section -->
        <div class="d-flex flex-column flex-sm-row align-items-center gap-4 p-4 bg-light rounded-3 border border-light">
          <div class="position-relative" style="width: 128px; height: 128px;">
            <img src="https://placehold.co/128x128/94a3b8/e2e8f0?text=Profile" alt="profile-avatar"
              class="rounded-circle w-100 h-100" id="uploadedAvatar"
              style="object-fit: cover; border: 2px solid #e2e8f0;" />
          </div>
          <div class="flex-grow-1">
            <div class="d-flex flex-column flex-sm-row gap-2 mb-2">
              <label for="upload"
                class="btn btn-primary-custom d-flex align-items-center justify-content-center gap-2 cursor-pointer">
                <i class="fas fa-upload"></i>
                <span class="d-block">Upload new photo</span>
                <input type="file" id="upload" class="d-none" accept="image/png, image/jpeg" />
              </label>
              <button type="button"
                class="btn btn-secondary-custom d-flex align-items-center justify-content-center gap-2">
                <i class="fas fa-sync-alt"></i>
                <span class="d-block">Reset</span>
              </button>
            </div>
            <p class="text-muted small mb-0">Allowed JPG, GIF or PNG. Max size of 800K.</p>
          </div>
        </div>

        <!-- Personal Information Section -->
        <div class="row g-4 mt-4">
          <div class="col-12">
            <h5 class="form-section-title">Personal Information</h5>
          </div>
          <!-- Full Name -->
          <div class="col-md-6">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Dr. John Doe" required>
            <span class="text-danger d-block mt-1" id="fullName-error"></span>
          </div>
          <!-- Email -->
          <div class="col-md-6">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="doctor@example.com" required>
            <span class="text-danger d-block mt-1" id="email-error"></span>
          </div>
          <!-- Phone Number -->
          <div class="col-md-6">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="+1 202 555 0111"
              required>
            <span class="text-danger d-block mt-1" id="phoneNumber-error"></span>
          </div>
          <!-- Gender -->
          <div class="col-md-6">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender" name="gender" required>
              <option value="">Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
            <span class="text-danger d-block mt-1" id="gender-error"></span>
          </div>
          <!-- Date of Birth -->
          <div class="col-md-6">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
            <span class="text-danger d-block mt-1" id="dob-error"></span>
          </div>
        </div>

        <!-- Professional Information Section -->
        <div class="row g-4 mt-4">
          <div class="col-12">
            <h5 class="form-section-title">Professional Information</h5>
          </div>
          <!-- Medical License Number -->
          <div class="col-md-6">
            <label for="licenseNumber" class="form-label">Medical License Number</label>
            <input type="text" class="form-control" id="licenseNumber" name="licenseNumber" required>
            <span class="text-danger d-block mt-1" id="licenseNumber-error"></span>
          </div>
          <!-- Issuing Medical Body -->
          <div class="col-md-6">
            <label for="issuingBody" class="form-label">Issuing Medical Body</label>
            <input type="text" class="form-control" id="issuingBody" name="issuingBody" required>
            <span class="text-danger d-block mt-1" id="issuingBody-error"></span>
          </div>
          <!-- Years of Experience -->
          <div class="col-md-6">
            <label for="experience" class="form-label">Years of Experience</label>
            <input type="number" class="form-control" id="experience" name="experience" placeholder="e.g. 5" required>
            <span class="text-danger d-block mt-1" id="experience-error"></span>
          </div>
          <!-- Specialization -->
          <div class="col-md-6">
            <label for="specialization" class="form-label">Specialization</label>
            <input type="text" class="form-control" id="specialization" name="specialization" required>
            <span class="text-danger d-block mt-1" id="specialization-error"></span>
          </div>
          <!-- Sub-specialization -->
          <div class="col-md-6">
            <label for="subSpecialization" class="form-label">Sub-specialization (Optional)</label>
            <input type="text" class="form-control" id="subSpecialization" name="subSpecialization">
            <span class="text-danger d-block mt-1" id="subSpecialization-error"></span>
          </div>
          <!-- Qualifications -->
          <div class="col-md-6">
            <label for="qualifications" class="form-label">Qualifications</label>
            <input type="text" class="form-control" id="qualifications" name="qualifications" required>
            <span class="text-danger d-block mt-1" id="qualifications-error"></span>
          </div>
          <!-- University / Medical School -->
          <div class="col-md-6">
            <label for="university" class="form-label">University / Medical School</label>
            <input type="text" class="form-control" id="university" name="university" required>
            <span class="text-danger d-block mt-1" id="university-error"></span>
          </div>
          <!-- Languages Spoken -->
          <div class="col-md-6">
            <label for="languages" class="form-label">Languages Spoken</label>
            <input type="text" class="form-control" id="languages" name="languages" placeholder="English, French"
              required>
            <span class="text-danger d-block mt-1" id="languages-error"></span>
          </div>
        </div>

        <!-- Availability & Consultation Section -->
        <div class="row g-4 mt-4">
          <div class="col-12">
            <h5 class="form-section-title">Availability & Consultation</h5>
          </div>
          <!-- Available Days -->
          <div class="col-md-6">
            <label for="availableDays" class="form-label">Available Days</label>
            <input type="text" class="form-control" id="availableDays" name="availableDays" placeholder="Mon-Fri"
              required>
            <span class="text-danger d-block mt-1" id="availableDays-error"></span>
          </div>
          <!-- Time Slots -->
          <div class="col-md-6">
            <label for="timeSlots" class="form-label">Available Time Slots</label>
            <input type="text" class="form-control" id="timeSlots" name="timeSlots" placeholder="09:00 - 17:00"
              required>
            <span class="text-danger d-block mt-1" id="timeSlots-error"></span>
          </div>
          <!-- Consultation Method -->
          <div class="col-md-6">
            <label for="consultationMethod" class="form-label">Consultation Method</label>
            <select class="form-select" id="consultationMethod" name="consultationMethod" required>
              <option value="">Select Method</option>
              <option value="online">Online</option>
              <option value="offline">Offline</option>
              <option value="both">Both</option>
            </select>
            <span class="text-danger d-block mt-1" id="consultationMethod-error"></span>
          </div>
          <!-- Consultation Fee -->
          <div class="col-md-6">
            <label for="consultationFee" class="form-label">Consultation Fee</label>
            <input type="number" class="form-control" id="consultationFee" name="consultationFee" placeholder="e.g. 50"
              required>
            <span class="text-danger d-block mt-1" id="consultationFee-error"></span>
          </div>
          <!-- Currency -->
          <div class="col-md-6">
            <label for="currency" class="form-label">Currency</label>
            <select class="form-select" id="currency" name="currency" required>
              <option value="">Select Currency</option>
              <option value="usd">USD</option>
              <option value="euro">Euro</option>
              <option value="pound">Pound</option>
            </select>
            <span class="text-danger d-block mt-1" id="currency-error"></span>
          </div>
          <!-- Max Patients -->
          <div class="col-md-6">
            <label for="maxPatients" class="form-label">Max Patients per Day</label>
            <input type="number" class="form-control" id="maxPatients" name="maxPatients" placeholder="e.g. 20"
              required>
            <span class="text-danger d-block mt-1" id="maxPatients-error"></span>
          </div>
        </div>

        <div class="row g-4 mt-4">
          <div class="col-12">
            <h5 class="form-section-title">Document Uploads (for verification)</h5>
          </div>

          <!-- Government-issued ID -->
          <div class="col-md-6">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-grow-1">
                <label for="govID" class="form-label">Government-issued ID</label>
                <input type="file" class="form-control" id="govID" name="govID" accept=".pdf,.jpg,.png" required>
                <span class="text-danger d-block mt-1" id="govID-error"></span>
              </div>
              <div id="govID-preview" class="mt-4" style="min-width: 150px;"></div>
            </div>
          </div>

          <!-- Medical License Document -->
          <div class="col-md-6">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-grow-1">
                <label for="licenseDoc" class="form-label">Medical License Document</label>
                <input type="file" class="form-control" id="licenseDoc" name="licenseDoc" accept=".pdf,.jpg,.png"
                  required>
                <span class="text-danger d-block mt-1" id="licenseDoc-error"></span>
              </div>
              <div id="licenseDoc-preview" class="mt-4" style="min-width: 150px;"></div>
            </div>
          </div>

          <!-- Degree Certificates -->
          <div class="col-md-6">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-grow-1">
                <label for="degreeCerts" class="form-label">Degree Certificates</label>
                <input type="file" class="form-control" id="degreeCerts" name="degreeCerts" accept=".pdf,.jpg,.png"
                  required>
                <span class="text-danger d-block mt-1" id="degreeCerts-error"></span>
              </div>
              <div id="degreeCerts-preview" class="mt-4" style="min-width: 150px;"></div>
            </div>
          </div>

          <!-- CV / Resume -->
          <div class="col-md-6">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-grow-1">
                <label for="cvResume" class="form-label">CV / Resume</label>
                <input type="file" class="form-control" id="cvResume" name="cvResume" accept=".pdf,.doc,.docx" required>
                <span class="text-danger d-block mt-1" id="cvResume-error"></span>
              </div>
              <div id="cvResume-preview" class="mt-4" style="min-width: 150px;"></div>
            </div>
          </div>
        </div>

        <!-- Document Uploads Section -->
        {{-- <div class="row g-4 mt-4">
          <div class="col-12">
            <h5 class="form-section-title">Document Uploads (for verification)</h5>
          </div>
          <!-- Government-issued ID -->
          <div class="col-md-6">
            <label for="govID" class="form-label">Government-issued ID</label>
            <input type="file" class="form-control" id="govID" name="govID" accept=".pdf,.jpg,.png" required>
            <span class="text-danger d-block mt-1" id="govID-error"></span>
          </div>
          <!-- Medical License Document -->
          <div class="col-md-6">
            <label for="licenseDoc" class="form-label">Medical License Document</label>
            <input type="file" class="form-control" id="licenseDoc" name="licenseDoc" accept=".pdf,.jpg,.png" required>
            <span class="text-danger d-block mt-1" id="licenseDoc-error"></span>
          </div>
          <!-- Degree Certificates -->
          <div class="col-md-6">
            <label for="degreeCerts" class="form-label">Degree Certificates</label>
            <input type="file" class="form-control" id="degreeCerts" name="degreeCerts" accept=".pdf,.jpg,.png"
              required>
            <span class="text-danger d-block mt-1" id="degreeCerts-error"></span>
          </div>
          <!-- CV / Resume -->
          <div class="col-md-6">
            <label for="cvResume" class="form-label">CV / Resume</label>
            <input type="file" class="form-control" id="cvResume" name="cvResume" accept=".pdf,.doc,.docx" required>
            <span class="text-danger d-block mt-1" id="cvResume-error"></span>
          </div>
        </div> --}}

        <!-- Login Credentials Section -->
        <div class="row g-4 mt-4">
          <div class="col-12">
            <h5 class="form-section-title">Login Credentials</h5>
          </div>
          <!-- Password -->
          <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <span class="text-danger d-block mt-1" id="password-error"></span>
          </div>
          <!-- Confirm Password -->
          <div class="col-md-6">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
            <span class="text-danger d-block mt-1" id="confirmPassword-error"></span>
          </div>
        </div>

        <!-- Buttons Section -->
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3 mt-5">
          <div class="d-flex gap-3">
            <button type="submit" class="btn btn-primary-custom d-flex align-items-center justify-content-center gap-2">
              <i class="fas fa-user-plus"></i> Register Doctor
            </button>
            <button type="reset"
              class="btn btn-secondary-custom d-flex align-items-center justify-content-center gap-2">
              <i class="fas fa-times-circle"></i> Clear Form
            </button>
          </div>
          <a href="{{ url('users/login') }}"
            class="btn btn-outline-primary-custom d-flex align-items-center justify-content-center gap-2">
            <i class="fas fa-arrow-left"></i> Back to Login
          </a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap 5 JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    const fileInputs = [
      { id: 'govID', previewId: 'govID-preview' },
      { id: 'licenseDoc', previewId: 'licenseDoc-preview' },
      { id: 'degreeCerts', previewId: 'degreeCerts-preview' },
      { id: 'cvResume', previewId: 'cvResume-preview' },
    ];

    fileInputs.forEach(({ id, previewId }) => {
      const input = document.getElementById(id);
      const preview = document.getElementById(previewId);

      input.addEventListener('change', function () {
        const file = this.files[0];
        preview.innerHTML = ''; // Clear previous preview

        if (!file) return;

        const fileType = file.type;

        // If it's an image
        if (fileType.startsWith('image/')) {
          const reader = new FileReader();
          reader.onload = function (e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.alt = "Preview";
            img.className = 'img-thumbnail';
            img.style.maxWidth = '150px';
            img.style.height = 'auto';
            preview.appendChild(img);
          };
          reader.readAsDataURL(file);
        }
        // If it's a PDF or DOC/DOCX
        else {
          const icon = document.createElement('i');
          icon.className = 'fas fa-file-alt text-secondary me-2';
          const text = document.createElement('span');
          text.textContent = file.name;

          preview.appendChild(icon);
          preview.appendChild(text);
        }
      });
    });
  </script>


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

    $(document).ready(function () {
      $('#formDoctorRegistration').on('submit', function (e) {
        e.preventDefault();

        // Clear previous validation highlights
        $('#formDoctorRegistration .form-control, #formDoctorRegistration .form-select').removeClass('is-invalid is-valid');
        $('span.text-danger').text('');

        const errors = [];

        // Personal Information Validation
        const fullName = $('#fullName');
        if (!fullName.val().trim()) {
          fullName.addClass('is-invalid');
          errors.push('Full Name is required.');
        }

        const email = $('#email');
        const emailRegex = /^\S+@\S+\.\S+$/;
        if (!email.val().trim()) {
          email.addClass('is-invalid');
          errors.push('Email Address is required.');
        } else if (!emailRegex.test(email.val())) {
          email.addClass('is-invalid');
          errors.push('Invalid email address format.');
        }

        const phoneNumber = $('#phoneNumber');
        if (!phoneNumber.val().trim()) {
          phoneNumber.addClass('is-invalid');
          errors.push('Phone Number is required.');
        }

        const gender = $('#gender');
        if (!gender.val()) {
          gender.addClass('is-invalid');
          errors.push('Please select a Gender.');
        }

        const dob = $('#dob');
        if (!dob.val()) {
          dob.addClass('is-invalid');
          errors.push('Date of Birth is required.');
        }

        // Professional Information Validation
        const licenseNumber = $('#licenseNumber');
        if (!licenseNumber.val().trim()) {
          licenseNumber.addClass('is-invalid');
          errors.push('Medical License Number is required.');
        }
        const issuingBody = $('#issuingBody');
        if (!issuingBody.val().trim()) {
          issuingBody.addClass('is-invalid');
          errors.push('Issuing Medical Body is required.');
        }
        const experience = $('#experience');
        if (!experience.val() || experience.val() < 0) {
          experience.addClass('is-invalid');
          errors.push('Years of Experience must be a positive number.');
        }
        const specialization = $('#specialization');
        if (!specialization.val().trim()) {
          specialization.addClass('is-invalid');
          errors.push('Specialization is required.');
        }
        const qualifications = $('#qualifications');
        if (!qualifications.val().trim()) {
          qualifications.addClass('is-invalid');
          errors.push('Qualifications are required.');
        }
        const university = $('#university');
        if (!university.val().trim()) {
          university.addClass('is-invalid');
          errors.push('University / Medical School is required.');
        }
        const languages = $('#languages');
        if (!languages.val().trim()) {
          languages.addClass('is-invalid');
          errors.push('Languages Spoken are required.');
        }

        // Availability & Consultation Validation
        const availableDays = $('#availableDays');
        if (!availableDays.val().trim()) {
          availableDays.addClass('is-invalid');
          errors.push('Available Days are required.');
        }
        const timeSlots = $('#timeSlots');
        if (!timeSlots.val().trim()) {
          timeSlots.addClass('is-invalid');
          errors.push('Available Time Slots are required.');
        }
        const consultationMethod = $('#consultationMethod');
        if (!consultationMethod.val()) {
          consultationMethod.addClass('is-invalid');
          errors.push('Consultation Method is required.');
        }
        const consultationFee = $('#consultationFee');
        if (!consultationFee.val() || consultationFee.val() < 0) {
          consultationFee.addClass('is-invalid');
          errors.push('Consultation Fee must be a positive number.');
        }
        const currency = $('#currency');
        if (!currency.val()) {
          currency.addClass('is-invalid');
          errors.push('Currency is required.');
        }
        const maxPatients = $('#maxPatients');
        if (!maxPatients.val() || maxPatients.val() < 1) {
          maxPatients.addClass('is-invalid');
          errors.push('Max Patients per Day must be at least 1.');
        }

        // Login Credentials Validation
        const password = $('#password');
        const confirmPassword = $('#confirmPassword');
        if (!password.val()) {
          password.addClass('is-invalid');
          errors.push('Password is required.');
        } else if (password.val().length < 8) {
          password.addClass('is-invalid');
          errors.push('Password must be at least 8 characters long.');
        }
        if (!confirmPassword.val()) {
          confirmPassword.addClass('is-invalid');
          errors.push('Confirm Password is required.');
        } else if (password.val() !== confirmPassword.val()) {
          confirmPassword.addClass('is-invalid');
          errors.push('Passwords do not match.');
        }

        // If there are errors, show SweetAlert and stop submission
        if (errors.length > 0) {
          const errorHtml = `<ul>${errors.map(err => `<li>${err}</li>`).join('')}</ul>`;
          Swal.fire({
            icon: 'error',
            title: 'Validation Errors',
            html: errorHtml,
            confirmButtonText: 'OK'
          });
          return;
        }

        // ✅ Show confirmation dialog before AJAX submission
        Swal.fire({
          title: 'Confirm Submission',
          text: 'Are you sure you want to register this doctor?',
          icon: 'question',
          showCancelButton: true,
          confirmButtonText: 'Yes, Register',
          cancelButtonText: 'Cancel'
        }).then((result) => {
          if (result.isConfirmed) {

            // Show loading SweetAlert
            Swal.fire({
              title: 'Submitting...',
              text: 'Please wait while we register the doctor.',
              allowOutsideClick: false,
              allowEscapeKey: false,
              didOpen: () => {
                Swal.showLoading();
              }
            });

            // Proceed with AJAX submission
            var formData = new FormData($('#formDoctorRegistration')[0]);
            $.ajax({
              url: "{{ route('doctors.store') }}",
              type: "POST",
              data: formData,
              processData: false,
              contentType: false,
              headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
              success: function (response) {
                Swal.fire({
                  icon: 'success',
                  title: 'Doctor Registered!',
                  text: response.message || 'The doctor has been registered successfully.',
                  confirmButtonText: 'OK'
                }).then(() => {
                  // Redirect if URL provided
                  if (response.redirect_url) {
                    window.location.href = response.redirect_url;
                  } else {
                    $('#formDoctorRegistration')[0].reset(); // fallback: just reset
                  }
                });
              },
              error: function (data) {
                Swal.fire({
                  icon: 'error',
                  title: 'Submission Failed',
                  text: 'An error occurred while submitting the form.',
                  confirmButtonText: 'OK'
                });
                console.error('Error:', data);
              }
              // error: function (data) {
              //   $('body').html(data.responseText);
              // }
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