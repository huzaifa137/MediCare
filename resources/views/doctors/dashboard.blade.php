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

                    @php
                        // Dummy Doctor Data
                        $doctor = (object) [
                            'fullName' => 'Dr. John Smith',
                            'gender' => 'Male',
                            'dob' => '1982-03-12',
                            'phoneNumber' => '+256 700 123456',
                            'licenseNumber' => 'LIC-UG-2384',
                            'issuingBody' => 'Uganda Medical Council',
                            'experience' => 12,
                            'specialization' => 'Cardiology',
                            'qualifications' => 'MBChB, MMed (Cardiology)',
                            'university' => 'Makerere University',
                            'languages' => 'English, Swahili',
                            'consultationMethod' => 'Online & In-Person',
                            'consultationFee' => '150,000',
                            'currency' => 'UGX',
                            'availableDays' => 'Mon - Fri',
                            'timeSlots' => '09:00 - 17:00',
                            'maxPatients' => 20,
                        ];

                        $consultationStats = (object) [
                            'totalPatients' => 128,
                            'activeConsultations' => 8,
                            'upcomingConsultations' => 5,
                            'earnings' => '12,500,000 UGX',
                        ];

                        $documents = [
                            ['name' => 'Government ID', 'status' => 'Verified'],
                            ['name' => 'License Document', 'status' => 'Pending Review'],
                            ['name' => 'Degree Certificates', 'status' => 'Verified'],
                            ['name' => 'CV / Resume', 'status' => 'Uploaded'],
                        ];

                        $weekDays = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                        $patientsPerDay = [5, 7, 6, 8, 10, 4, 3];

                        $consultationMethodCounts = [60, 25, 15];

                        $specializations = ['Cardiology', 'Dermatology', 'Pediatrics', 'Orthopedics'];
                        $experienceYears = [10, 5, 7, 4];
                        $consultationsPerSpecialization = [120, 80, 90, 60];

                        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May'];
                        $monthlyRevenue = [500, 700, 650, 800, 950];
                    @endphp

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <nav aria-label="breadcrumb" class="mb-4">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">
                                    <i class="fas fa-tachometer-alt me-1"></i> Doctor Dashboard
                                </li>
                            </ol>
                        </nav>

                        <h4 class="fw-bold text-dark mb-3">
                            Hello, Zaiphar!
                        </h4>

                        <!-- Professional Information -->
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="card shadow-sm text-center p-3">
                                    <span class="badge bg-label-info rounded p-2 mb-2"><i
                                            class="bx bx-user-voice bx-sm"></i></span>
                                    <h6>Specialization</h6>
                                    <h5>{{ $doctor->specialization }}</h5>
                                    <small class="text-muted">{{ $doctor->experience }} Years Experience</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card shadow-sm text-center p-3">
                                    <span class="badge bg-label-success rounded p-2 mb-2"><i
                                            class="bx bx-book bx-sm"></i></span>
                                    <h6>Qualifications</h6>
                                    <h5>{{ $doctor->qualifications }}</h5>
                                    <small class="text-muted">{{ $doctor->university }}</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card shadow-sm text-center p-3">
                                    <span class="badge bg-label-warning rounded p-2 mb-2"><i
                                            class="bx bx-globe bx-sm"></i></span>
                                    <h6>Languages</h6>
                                    <h5>{{ $doctor->languages }}</h5>
                                    <small class="text-muted">Fluent in Spoken</small>
                                </div>
                            </div>
                        </div>


                        <!-- Patients & Consultations Stats -->
                        <div class="row g-4 mt-2">
                            <div class="col-md-3">
                                <div class="card shadow-sm text-center p-3">
                                    <span class="badge bg-label-primary rounded p-2 mb-2"><i
                                            class="bx bx-user-circle bx-sm"></i></span>
                                    <h6>Total Patients</h6>
                                    <h4>{{ $consultationStats->totalPatients }}</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow-sm text-center p-3">
                                    <span class="badge bg-label-info rounded p-2 mb-2"><i
                                            class="bx bx-chat bx-sm"></i></span>
                                    <h6>Active Consultations</h6>
                                    <h4>{{ $consultationStats->activeConsultations }}</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow-sm text-center p-3">
                                    <span class="badge bg-label-warning rounded p-2 mb-2"><i
                                            class="bx bx-calendar-event bx-sm"></i></span>
                                    <h6>Upcoming Consultations</h6>
                                    <h4>{{ $consultationStats->upcomingConsultations }}</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow-sm text-center p-3">
                                    <span class="badge bg-label-success rounded p-2 mb-2"><i
                                            class="bx bx-wallet bx-sm"></i></span>
                                    <h6>Earnings</h6>
                                    <h4>{{ $consultationStats->earnings }}</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4 my-4">
                            <!-- Patients Per Day (Bar Chart) -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header py-2">
                                        <h6 class="card-title mb-0">Patients Seen Per Day</h6>
                                    </div>
                                    <div class="card-body p-2 d-flex justify-content-center align-items-center"
                                        style="height: 250px;">
                                        <canvas id="patientsPerDayChart"
                                            style="max-width: 100%; max-height: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Consultation Method Distribution (Doughnut Chart) -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header py-2">
                                        <h6 class="card-title mb-0">Consultation Method Distribution</h6>
                                    </div>
                                    <div class="card-body p-2 d-flex justify-content-center align-items-center"
                                        style="height: 250px;">
                                        <canvas id="consultationMethodChart"
                                            style="max-width: 100%; max-height: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4 mb-4">
                            <!-- Experience vs Consultations (Radar Chart) -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header py-2">
                                        <h6 class="card-title mb-0">Experience vs Consultations</h6>
                                    </div>
                                    <div class="card-body p-2 d-flex justify-content-center align-items-center"
                                        style="height: 250px;">
                                        <canvas id="experienceRadarChart"
                                            style="max-width: 100%; max-height: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Monthly Revenue (Horizontal Bar) -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header py-2">
                                        <h6 class="card-title mb-0">Monthly Revenue</h6>
                                    </div>
                                    <div class="card-body p-2 d-flex justify-content-center align-items-center"
                                        style="height: 250px;">
                                        <canvas id="revenueChart" style="max-width: 100%; max-height: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Consultation Setup -->
                        <div class="row g-4 mt-2">
                            <div class="col-md-3">
                                <div class="card shadow-sm text-center p-3">
                                    <span class="badge bg-label-primary rounded p-2 mb-2"><i
                                            class="bx bx-video bx-sm"></i></span>
                                    <h6>Consultation Method</h6>
                                    <h5>{{ $doctor->consultationMethod }}</h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow-sm text-center p-3">
                                    <span class="badge bg-label-success rounded p-2 mb-2"><i
                                            class="bx bx-money bx-sm"></i></span>
                                    <h6>Consultation Fee</h6>
                                    <h5>{{ $doctor->consultationFee }} {{ $doctor->currency }}</h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow-sm text-center p-3">
                                    <span class="badge bg-label-danger rounded p-2 mb-2"><i
                                            class="bx bx-calendar bx-sm"></i></span>
                                    <h6>Available Days</h6>
                                    <h5>{{ $doctor->availableDays }}</h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow-sm text-center p-3">
                                    <span class="badge bg-label-dark rounded p-2 mb-2"><i
                                            class="bx bx-group bx-sm"></i></span>
                                    <h6>Max Patients</h6>
                                    <h5>{{ $doctor->maxPatients }} / Day</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="card shadow-sm p-3">
                                    <h5><i class="bx bx-bolt-circle text-danger"></i> Quick Actions</h5>
                                    <div class="row mt-2">
                                        <div class="col-6 col-md-3 mb-2">
                                            <a href="#" class="btn btn-primary w-100"><i class="bx bx-video"></i> Start
                                                Consultation</a>
                                        </div>
                                        <div class="col-6 col-md-3 mb-2">
                                            <a href="#" class="btn btn-info w-100"><i class="bx bx-user"></i> View
                                                Patients</a>
                                        </div>
                                        <div class="col-6 col-md-3 mb-2">
                                            <a href="#" class="btn btn-warning w-100"><i class="bx bx-calendar"></i>
                                                Manage Schedule</a>
                                        </div>
                                        <div class="col-6 col-md-3 mb-2">
                                            <a href="#" class="btn btn-dark w-100"><i class="bx bx-upload"></i> Upload
                                                Documents</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4 mt-4">
                            <!-- Profile Summary -->
                            <div class="col-lg-12">
                                <div class="card shadow-sm p-3 border-start border-3 border-primary">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5>{{ $doctor->fullName }}</h5>
                                            <p class="mb-1"><i class="bx bx-male-female text-primary"></i> Gender:
                                                {{ $doctor->gender }}
                                            </p>
                                            <p class="mb-1"><i class="bx bx-cake text-danger"></i> DOB:
                                                {{ \Carbon\Carbon::parse($doctor->dob)->format('M d, Y') }}
                                            </p>
                                            <p class="mb-1"><i class="bx bx-phone-call text-success"></i> Phone:
                                                {{ $doctor->phoneNumber }}
                                            </p>
                                            <p class="mb-1"><i class="bx bx-id-card text-info"></i> License:
                                                {{ $doctor->licenseNumber }} ({{ $doctor->issuingBody }})
                                            </p>
                                        </div>
                                        <a href="#" class="btn btn-outline-primary">
                                            <i class="bx bx-edit-alt"></i> Edit Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Documents -->
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="card border-0 shadow-lg mb-4">

                                    <div
                                        class="card-header bg-white p-3 border-bottom d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 text-dark">
                                            <i class="fas fa-folder-open me-2 text-primary"></i> Patient Documents
                                        </h5>
                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-upload me-1"></i> Upload New
                                        </a>
                                    </div>

                                    <div class="card-body p-0">
                                        @if(count($documents) > 0)
                                            <ul class="list-group list-group-flush">
                                                @foreach($documents as $doc)
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center py-3">

                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-file-pdf fa-lg text-danger me-3"></i> <strong
                                                                class="text-dark">{{ $doc['name'] }}</strong>
                                                        </div>

                                                        <div class="text-end">
                                                            <span
                                                                class="badge {{ $doc['status'] == 'Verified' ? 'bg-success' : 'bg-warning text-dark' }} me-3">
                                                                <i
                                                                    class="fas {{ $doc['status'] == 'Verified' ? 'fa-check-circle' : 'fa-clock' }} me-1"></i>
                                                                {{ $doc['status'] }}
                                                            </span>

                                                            <a href="#" class="btn btn-sm btn-outline-secondary me-2"
                                                                title="Download">
                                                                <i class="fas fa-download"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-sm btn-outline-info" title="View">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <div class="p-4 text-center bg-light">
                                                <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-2"></i>
                                                <p class="text-muted mb-0">No documents have been uploaded yet.</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        // Patients per Day (Bar Chart)
                        var ctx1 = document.getElementById('patientsPerDayChart').getContext('2d');
                        new Chart(ctx1, {
                            type: 'bar',
                            data: {
                                labels: @json($weekDays),
                                datasets: [{
                                    label: 'Patients Seen',
                                    data: @json($patientsPerDay),
                                    backgroundColor: '#36a2eb'
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: { y: { beginAtZero: true } }
                            }
                        });

                        // Consultation Method Distribution (Doughnut Chart)
                        var ctx2 = document.getElementById('consultationMethodChart').getContext('2d');
                        new Chart(ctx2, {
                            type: 'doughnut',
                            data: {
                                labels: ['Online', 'Offline', 'Both'],
                                datasets: [{
                                    data: @json($consultationMethodCounts),
                                    backgroundColor: ['#1cc88a', '#f6c23e', '#e74a3b']
                                }]
                            },
                            options: {
                                responsive: true,
                                plugins: { legend: { position: 'bottom' } }
                            }
                        });

                        // Experience vs Consultations (Radar Chart)
                        var ctx3 = document.getElementById('experienceRadarChart').getContext('2d');
                        new Chart(ctx3, {
                            type: 'radar',
                            data: {
                                labels: @json($specializations),
                                datasets: [{
                                    label: 'Years of Experience',
                                    data: @json($experienceYears),
                                    borderColor: '#4e73df',
                                    backgroundColor: 'rgba(78, 115, 223, 0.2)'
                                }, {
                                    label: 'Consultations',
                                    data: @json($consultationsPerSpecialization),
                                    borderColor: '#36b9cc',
                                    backgroundColor: 'rgba(54, 185, 204, 0.2)'
                                }]
                            },
                            options: {
                                responsive: true,
                                elements: { line: { tension: 0.3 } }
                            }
                        });

                        // Monthly Revenue (Horizontal Bar Chart)
                        var ctx4 = document.getElementById('revenueChart').getContext('2d');
                        new Chart(ctx4, {
                            type: 'bar',
                            data: {
                                labels: @json($months),
                                datasets: [{
                                    label: 'Revenue (USD)',
                                    data: @json($monthlyRevenue),
                                    backgroundColor: '#ff6384'
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                responsive: true,
                                scales: { x: { beginAtZero: true } }
                            }
                        });
                    </script>

                    <!-- / Content -->

                    @include('layouts.footer')