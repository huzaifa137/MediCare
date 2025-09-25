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
                        <h4 class="fw-bold py-3 mb-4">Doctor Management Dashboard</h4>

                        <div class="row g-4 mb-4">
                            <!-- Total Doctors -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-user-circle bx-lg mb-2 text-primary"></i>
                                        <h5 class="card-title">{{ $metrics['totalDoctors'] }}</h5>
                                        <p class="card-text">Total Doctors</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Online Only -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-laptop bx-lg mb-2 text-success"></i>
                                        <h5 class="card-title">{{ $metrics['onlineDoctors'] }}</h5>
                                        <p class="card-text">Online Only</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Offline Only -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-clinic bx-lg mb-2 text-warning"></i>
                                        <h5 class="card-title">{{ $metrics['offlineDoctors'] }}</h5>
                                        <p class="card-text">Offline Only</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Both -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-transfer bx-lg mb-2 text-info"></i>
                                        <h5 class="card-title">{{ $metrics['bothConsultations'] }}</h5>
                                        <p class="card-text">Both Methods</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Most Experienced Doctor -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-bar-chart-alt bx-lg mb-2 text-danger"></i>
                                        <h5 class="card-title">{{ $metrics['mostExperiencedDoctor'] }}</h5>
                                        <p class="card-text">Most Experienced</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Unique Specializations -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-capsule bx-lg mb-2 text-secondary"></i>
                                        <h5 class="card-title">{{ $metrics['totalSpecializations'] }}</h5>
                                        <p class="card-text">Specializations</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Languages -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-globe bx-lg mb-2 text-dark"></i>
                                        <h5 class="card-title">{{ $metrics['uniqueLanguages'] }}</h5>
                                        <p class="card-text">Languages Spoken</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Average Fee -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="bx bx-money bx-lg mb-2 text-success"></i>
                                        <h5 class="card-title">{{ number_format($metrics['averageFee'], 2) }}
                                            {{ $metrics['currency'] }}</h5>
                                        <p class="card-text">Avg. Consultation Fee</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <style>
                    .doctor-section {
                        background-color: #fff;
                        padding: 2rem;
                        border-radius: 12px;
                        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
                        margin-bottom: 3rem;
                    }

                    .doctor-section h4 {
                        font-weight: 600;
                        margin-bottom: 1.5rem;
                        color: #2c3e50;
                    }

                    .doctor-card {
                        background-color: #fdfdfd;
                        border-radius: 10px;
                        padding: 1.5rem 1rem;
                        text-align: center;
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
                        transition: all 0.3s ease-in-out;
                        height: 100%;
                        position: relative;
                    }

                    .doctor-card:hover {
                        transform: translateY(-5px);
                        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
                    }

                    .doctor-photo {
                        width: 90px;
                        height: 90px;
                        object-fit: cover;
                        border-radius: 50%;
                        border: 3px solid #e0e0e0;
                        margin-bottom: 1rem;
                    }

                    .doctor-name {
                        font-weight: 600;
                        font-size: 1.1rem;
                        margin-bottom: 0.3rem;
                        color: #2f3542;
                    }

                    .doctor-specialty {
                        font-size: 0.9rem;
                        color: #3498db;
                        margin-bottom: 0.5rem;
                    }

                    .doctor-location {
                        font-size: 0.85rem;
                        color: #6c757d;
                        margin-bottom: 0.5rem;
                    }

                    .doctor-rating i {
                        color: #f1c40f;
                        font-size: 0.9rem;
                    }

                    .btn-book {
                        margin-top: 0.75rem;
                        font-size: 0.85rem;
                        padding: 0.4rem 1rem;
                        border-radius: 20px;
                    }

                    /* Responsive for custom column (1-5 layout) */
                    @media (min-width: 992px) {
                        .col-lg-1-5 {
                            flex: 0 0 auto;
                            width: 20%;
                        }
                    }
                </style>

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="doctor-section">
                        <h4>Our Professional Doctors</h4>

                        <div class="row mt-3 g-3">
                            <!-- Doctor 1 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="doctor-card">
                                    <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Jane" class="doctor-photo" />
                                    <div class="doctor-name">Dr. Jane Doe</div>
                                    <div class="doctor-specialty">Cardiologist</div>
                                    <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Kampala,
                                        Uganda</div>
                                    <div class="doctor-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button class="btn btn-outline-success btn-book mt-2">
                                        <i class="fa fa-calendar-check me-1"></i>Book Now
                                    </button>
                                </div>
                            </div>

                            <!-- Doctor 2 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="doctor-card">
                                    <img src="/assets-site/img/team/team-2.jpg" alt="Dr. John" class="doctor-photo" />
                                    <div class="doctor-name">Dr. John Smith</div>
                                    <div class="doctor-specialty">Dermatologist</div>
                                    <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Nairobi, Kenya
                                    </div>
                                    <div class="doctor-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                    </div>
                                    <button class="btn btn-outline-success btn-book mt-2">
                                        <i class="fa fa-calendar-check me-1"></i>Book Now
                                    </button>
                                </div>
                            </div>

                            <!-- Doctor 3 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="doctor-card">
                                    <img src="/assets-site/img/team/team-3.jpg" alt="Dr. Grace" class="doctor-photo" />
                                    <div class="doctor-name">Dr. Grace Lee</div>
                                    <div class="doctor-specialty">Pediatrician</div>
                                    <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Dar es Salaam
                                    </div>
                                    <div class="doctor-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button class="btn btn-outline-success btn-book mt-2">
                                        <i class="fa fa-calendar-check me-1"></i>Book Now
                                    </button>
                                </div>
                            </div>

                            <!-- Doctor 4 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="doctor-card">
                                    <img src="/assets-site/img/team/team-4.jpg" alt="Dr. Kelvin" class="doctor-photo" />
                                    <div class="doctor-name">Dr. Kelvin Otieno</div>
                                    <div class="doctor-specialty">Orthopedic Surgeon</div>
                                    <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Accra, Ghana
                                    </div>
                                    <div class="doctor-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <button class="btn btn-outline-success btn-book mt-2">
                                        <i class="fa fa-calendar-check me-1"></i>Book Now
                                    </button>
                                </div>
                            </div>

                            <!-- Doctor 5 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="doctor-card">
                                    <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Amina" class="doctor-photo" />
                                    <div class="doctor-name">Dr. Amina Yusuf</div>
                                    <div class="doctor-specialty">Gynecologist</div>
                                    <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Kigali, Rwanda
                                    </div>
                                    <div class="doctor-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button class="btn btn-outline-success btn-book mt-2">
                                        <i class="fa fa-calendar-check me-1"></i>Book Now
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3 g-3">
                            <!-- Doctor 1 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="doctor-card">
                                    <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Jane" class="doctor-photo" />
                                    <div class="doctor-name">Dr. Jane Doe</div>
                                    <div class="doctor-specialty">Cardiologist</div>
                                    <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Kampala,
                                        Uganda</div>
                                    <div class="doctor-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button class="btn btn-outline-success btn-book mt-2">
                                        <i class="fa fa-calendar-check me-1"></i>Book Now
                                    </button>
                                </div>
                            </div>

                            <!-- Doctor 2 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="doctor-card">
                                    <img src="/assets-site/img/team/team-2.jpg" alt="Dr. John" class="doctor-photo" />
                                    <div class="doctor-name">Dr. John Smith</div>
                                    <div class="doctor-specialty">Dermatologist</div>
                                    <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Nairobi, Kenya
                                    </div>
                                    <div class="doctor-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                    </div>
                                    <button class="btn btn-outline-success btn-book mt-2">
                                        <i class="fa fa-calendar-check me-1"></i>Book Now
                                    </button>
                                </div>
                            </div>

                            <!-- Doctor 3 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="doctor-card">
                                    <img src="/assets-site/img/team/team-3.jpg" alt="Dr. Grace" class="doctor-photo" />
                                    <div class="doctor-name">Dr. Grace Lee</div>
                                    <div class="doctor-specialty">Pediatrician</div>
                                    <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Dar es Salaam
                                    </div>
                                    <div class="doctor-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button class="btn btn-outline-success btn-book mt-2">
                                        <i class="fa fa-calendar-check me-1"></i>Book Now
                                    </button>
                                </div>
                            </div>

                            <!-- Doctor 4 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="doctor-card">
                                    <img src="/assets-site/img/team/team-4.jpg" alt="Dr. Kelvin" class="doctor-photo" />
                                    <div class="doctor-name">Dr. Kelvin Otieno</div>
                                    <div class="doctor-specialty">Orthopedic Surgeon</div>
                                    <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Accra, Ghana
                                    </div>
                                    <div class="doctor-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <button class="btn btn-outline-success btn-book mt-2">
                                        <i class="fa fa-calendar-check me-1"></i>Book Now
                                    </button>
                                </div>
                            </div>

                            <!-- Doctor 5 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="doctor-card">
                                    <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Amina" class="doctor-photo" />
                                    <div class="doctor-name">Dr. Amina Yusuf</div>
                                    <div class="doctor-specialty">Gynecologist</div>
                                    <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Kigali, Rwanda
                                    </div>
                                    <div class="doctor-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button class="btn btn-outline-success btn-book mt-2">
                                        <i class="fa fa-calendar-check me-1"></i>Book Now
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3 g-3">
                            <!-- Doctor 1 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="doctor-card">
                                    <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Jane" class="doctor-photo" />
                                    <div class="doctor-name">Dr. Jane Doe</div>
                                    <div class="doctor-specialty">Cardiologist</div>
                                    <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Kampala,
                                        Uganda</div>
                                    <div class="doctor-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button class="btn btn-outline-success btn-book mt-2">
                                        <i class="fa fa-calendar-check me-1"></i>Book Now
                                    </button>
                                </div>
                            </div>

                            <!-- Doctor 2 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="doctor-card">
                                    <img src="/assets-site/img/team/team-2.jpg" alt="Dr. John" class="doctor-photo" />
                                    <div class="doctor-name">Dr. John Smith</div>
                                    <div class="doctor-specialty">Dermatologist</div>
                                    <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Nairobi, Kenya
                                    </div>
                                    <div class="doctor-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                    </div>
                                    <button class="btn btn-outline-success btn-book mt-2">
                                        <i class="fa fa-calendar-check me-1"></i>Book Now
                                    </button>
                                </div>
                            </div>

                            <!-- Doctor 3 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="doctor-card">
                                    <img src="/assets-site/img/team/team-3.jpg" alt="Dr. Grace" class="doctor-photo" />
                                    <div class="doctor-name">Dr. Grace Lee</div>
                                    <div class="doctor-specialty">Pediatrician</div>
                                    <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Dar es Salaam
                                    </div>
                                    <div class="doctor-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button class="btn btn-outline-success btn-book mt-2">
                                        <i class="fa fa-calendar-check me-1"></i>Book Now
                                    </button>
                                </div>
                            </div>

                            <!-- Doctor 4 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="doctor-card">
                                    <img src="/assets-site/img/team/team-4.jpg" alt="Dr. Kelvin" class="doctor-photo" />
                                    <div class="doctor-name">Dr. Kelvin Otieno</div>
                                    <div class="doctor-specialty">Orthopedic Surgeon</div>
                                    <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Accra, Ghana
                                    </div>
                                    <div class="doctor-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <button class="btn btn-outline-success btn-book mt-2">
                                        <i class="fa fa-calendar-check me-1"></i>Book Now
                                    </button>
                                </div>
                            </div>

                            <!-- Doctor 5 -->
                            <div class="col-6 col-md-4 col-lg-1-5">
                                <div class="doctor-card">
                                    <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Amina" class="doctor-photo" />
                                    <div class="doctor-name">Dr. Amina Yusuf</div>
                                    <div class="doctor-specialty">Gynecologist</div>
                                    <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Kigali, Rwanda
                                    </div>
                                    <div class="doctor-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button class="btn btn-outline-success btn-book mt-2">
                                        <i class="fa fa-calendar-check me-1"></i>Book Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-12 mb-4">

                                <div class="card">
                                    <div class="card-body table-responsive">
                                        <h5 class="card-title mb-4">All Registered Doctors</h5>

                                        <table class="table table-bordered table-hover">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Specialization</th>
                                                    <th>Experience</th>
                                                    <th>Email / Phone</th>
                                                    <th>Consultation</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($doctors as $index => $doctor)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $doctor->fullName }}</td>
                                                        <td>{{ $doctor->specialization }}</td>
                                                        <td>{{ $doctor->experience }} yrs</td>
                                                        <td>
                                                            {{ $doctor->email }}<br>
                                                            <small>{{ $doctor->phoneNumber }}</small>
                                                        </td>
                                                        <td>{{ ucfirst($doctor->consultationMethod) }}</td>
                                                        <td>
                                                            <a href="#" class="btn btn-sm btn-icon btn-info" title="View">
                                                                <i class="bx bx-show"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-sm btn-icon btn-warning"
                                                                title="Edit">
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
                                                        <td colspan="7" class="text-center">No doctors registered yet.</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
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
                                            text: 'Doctor has been updated successfully.',
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