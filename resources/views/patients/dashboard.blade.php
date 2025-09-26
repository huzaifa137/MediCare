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
                        $paymentStatus = 'Paid - Receipt #INV-20394';

                        $consultationMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'];
                        $consultationCounts = [2, 4, 3, 5, 6, 1, 3];

                        $userpatient = (object) [
                            'allergies' => ['Pollen', 'Dust'],
                            'medical_conditions' => ['Hypertension', 'Diabetes'],
                            'medications' => ['Aspirin', 'Metformin', 'Lipitor']
                        ];

                        $patient = (object) [
                            'medical_conditions' => 'Hypertension, Asthma',
                            'medications' => 'Lisinopril, Albuterol Inhaler',
                            'allergies' => 'Penicillin, Pollen',
                            'smoking_status' => 'Non-smoker',
                            'alcohol_consumption' => 'Occasional'
                        ];

                        $patient = (object) [
                            'emergency_name' => 'Jane Doe',
                            'emergency_relationship' => 'Sister',
                            'emergency_phone' => '+1 (555) 123-4567',
                            'emergency_email' => 'jane.doe@example.com',

                            'insurance_provider' => 'HealthFirst Insurance',
                            'insurance_id' => 'HF-98475-23',
                        ];

                        $recommendedDoctors = [
                            (object) [
                                'name' => 'Emily Carter',
                                'specialty' => 'Cardiology',
                                'language' => 'English, Spanish'
                            ],
                            (object) [
                                'name' => 'Raj Patel',
                                'specialty' => 'Dermatology',
                                'language' => 'English, Hindi'
                            ],
                            (object) [
                                'name' => 'Sophia Nguyen',
                                'specialty' => 'Pediatrics',
                                'language' => 'English, Vietnamese'
                            ],
                        ];
                    @endphp

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <nav aria-label="breadcrumb" class="mb-4">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">
                                    <i class="fas fa-tachometer-alt me-1"></i> Patient Dashboard
                                </li>
                            </ol>
                        </nav>

                        <h4 class="fw-bold text-dark mb-3">
                            Hello, Zaiphar!
                        </h4>
                        <div class="row g-4 mb-4">

                            <!-- Upcoming Consultation -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Upcoming Consultation</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h5 class="me-2 mb-0">
                                                        @if(true)
                                                            <!-- Replace true with your condition -->
                                                            Sep 30, 2025 10:00 AM
                                                        @else
                                                            No booking
                                                        @endif
                                                    </h5>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-primary rounded p-2">
                                                <i class="bx bx-calendar bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Doctors -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>My Doctors</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">45</h4>
                                                    <small class="text-success">Consulted</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-info rounded p-2">
                                                <i class="bx bx-user-voice bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Prescriptions -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Prescriptions</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">12</h4>
                                                    <small class="text-warning">Active</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-warning rounded p-2">
                                                <i class="bx bx-capsule bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Insurance -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Insurance</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">1</h4>
                                                    <small class="text-primary">RTF - Insurance</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-secondary rounded p-2">
                                                <i class="bx bx-id-card bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- Quick Links -->
                        <div class="row mt-4 mb-4">
                            <div class="col-lg-12">
                                <div class="card shadow-sm p-3">
                                    <h5 class="mb-3">Quick Actions</h5>
                                    <div class="row text-center">
                                        <div class="col-sm-6 col-md-3 mb-3">
                                            <a href="#" class="btn btn-primary w-100">
                                                <i class="bx bx-calendar-plus me-1"></i> Book Consultation
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-3 mb-3">
                                            <a href="#" class="btn btn-warning w-100">
                                                <i class="bx bx-capsule me-1"></i> View Prescriptions
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-3 mb-3">
                                            <a href="#" class="btn btn-info w-100">
                                                <i class="bx bx-user-circle me-1"></i> Update Profile
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-3 mb-3">
                                            <a href="#" class="btn btn-success w-100">
                                                <i class="bx bx-wallet me-1"></i> Payment History
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Graphs & Charts -->
                        <div class="row g-4">
                            <!-- Consultation History (Line Chart) -->
                            <div class="col-lg-8">
                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Consultation History</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="consultationsChart" height="150"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Health Stats (Pie Chart) -->
                            <div class="col-lg-4">
                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Health Overview</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="healthStatsChart" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Profile Summary -->
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="card border-0 shadow-lg p-4">
                                    <div
                                        class="d-flex flex-column flex-md-row align-items-md-center justify-content-between">

                                        <div class="d-flex align-items-center mb-3 mb-md-0">

                                            <div class="me-4">
                                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                                                    style="width: 80px; height: 80px; font-size: 2.5rem;">
                                                    <i class="fas fa-user-circle"></i>
                                                </div>
                                            </div>

                                            <div>
                                                <h2 class="mb-1 fw-bold text-dark">
                                                    Zaiphar
                                                </h2>
                                                <span class="text-muted d-block mb-2">Patient Profile Overview</span>

                                                <div class="d-flex flex-wrap gap-2">
                                                    <span class="badge bg-secondary text-white p-2">
                                                        <i class="fas fa-venus-mars me-1"></i> Female
                                                    </span>
                                                    <span class="badge bg-secondary text-white p-2">
                                                        <i class="fas fa-calendar-alt me-1"></i> Jul 15, 1995
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-start text-md-end">
                                            <p class="mb-2 text-dark">
                                                <i class="fas fa-phone-alt me-2 text-primary"></i>
                                                <strong class="h6">+1 (555) 123-4567</strong>
                                            </p>

                                            <a href="#" class="btn btn-primary shadow-sm px-4">
                                                <i class="fas fa-edit me-1"></i> Edit Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Extra Consultation Status Cards -->
                        <div class="row g-4 mt-2">
                            <!-- Past Consultations -->
                            <div class="col-sm-6 col-xl-4">
                                <div class="card shadow-sm border-0">
                                    <div class="card-body text-center">
                                        <i class="bx bx-history fs-1 text-primary"></i>
                                        <h6 class="mt-2">Past Consultations</h6>
                                        <h4 class="fw-bold text-dark">34</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- Active Consultations -->
                            <div class="col-sm-6 col-xl-4">
                                <div class="card shadow-sm border-0">
                                    <div class="card-body text-center">
                                        <i class="bx bx-pulse fs-1 text-success"></i>
                                        <h6 class="mt-2">Active Consultations</h6>
                                        <h4 class="fw-bold text-dark">12</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Status -->
                            <div class="col-sm-6 col-xl-4">
                                <div class="card shadow-sm border-0">
                                    <div class="card-body text-center">
                                        <i class="bx bx-wallet fs-1 text-warning"></i>
                                        <h6 class="mt-2">Payment Status</h6>
                                        <span class="badge bg-success mt-2">
                                            {{ $paymentStatus ?? 'No Pending Payments' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="card border-0 shadow-lg mb-4">
                                    <div class="card-header bg-primary text-white p-3">
                                        <h5 class="mb-0 text-white">
                                            <i class="fas fa-heartbeat me-2"></i> Patient Health Profile
                                        </h5>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush">

                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <div class="text-secondary fw-semibold">
                                                    <i class="fas fa-notes-medical me-2"></i> Medical Conditions
                                                </div>
                                                <span class="text-dark">
                                                    {{ $patient->medical_conditions ?? 'None Reported' }}
                                                </span>
                                            </li>

                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center bg-light">
                                                <div class="text-secondary fw-semibold">
                                                    <i class="fas fa-pills me-2"></i> Current Medications
                                                </div>
                                                <span class="text-dark">
                                                    {{ $patient->medications ?? 'None' }}
                                                </span>
                                            </li>

                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <div class="text-danger fw-semibold">
                                                    <i class="fas fa-allergies me-2"></i> Allergies
                                                </div>
                                                <span class="text-dark">
                                                    {{ $patient->allergies ?? 'None' }}
                                                </span>
                                            </li>

                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center bg-light">
                                                <div class="text-secondary fw-semibold">
                                                    <i class="fas fa-smoking me-2"></i> Smoking Status
                                                </div>
                                                <span class="text-dark">
                                                    {{ $patient->smoking_status ?? 'N/A' }}
                                                </span>
                                            </li>

                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <div class="text-secondary fw-semibold">
                                                    <i class="fas fa-wine-glass-alt me-2"></i> Alcohol Consumption
                                                </div>
                                                <span class="text-dark">
                                                    {{ $patient->alcohol_consumption ?? 'N/A' }}
                                                </span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="card border-0 shadow-lg border-start border-5 border-danger p-4">

                                    <div class="d-flex align-items-center mb-3">
                                        <i class="fas fa-exclamation-triangle fa-2x text-danger me-3"></i>
                                        <h5 class="mb-0 fw-bold text-danger">EMERGENCY CONTACT INFORMATION</h5>
                                    </div>

                                    <div class="row g-3">

                                        <div class="col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-user-friends text-secondary me-2"></i>
                                                <div>
                                                    <small class="text-primary d-block">Contact Name</small>
                                                    <span class="fw-semibold text-dark">
                                                        {{ $patient->emergency_name ?? 'Not Set' }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-hand-holding-heart text-secondary me-2"></i>
                                                <div>
                                                    <small class="text-primary d-block">Relationship</small>
                                                    <span class="fw-semibold text-dark">
                                                        {{ $patient->emergency_relationship ?? 'N/A' }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 mt-3">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-phone-square-alt text-success fa-lg me-2"></i>
                                                <div>
                                                    <small class="text-primary d-block">Phone Number</small>
                                                    <a href="tel:{{ $patient->emergency_phone }}"
                                                        class="fw-bolder text-success text-decoration-none h6">
                                                        {{ $patient->emergency_phone ?? 'No Phone Set' }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 mt-3">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-envelope text-info me-2"></i>
                                                <div>
                                                    <small class="text-primary d-block">Email Address</small>
                                                    <a href="mailto:{{ $patient->emergency_email }}"
                                                        class="text-dark text-decoration-none">
                                                        {{ $patient->emergency_email ?? 'No Email Set' }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Doctor Recommendations -->
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="card border-0 shadow-lg mb-4">
                                    <div class="card-header bg-primary text-white p-3">
                                        <h5 class="mb-0 text-white">
                                            <i class="fas fa-user-md me-2"></i> Recommended Health Specialists
                                        </h5>
                                    </div>

                                    <div class="card-body p-0">
                                        @if(count($recommendedDoctors) > 0)
                                            <ul class="list-group list-group-flush">
                                                @foreach($recommendedDoctors as $doc)
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center">

                                                        <div>
                                                            <h6 class="mb-0 fw-bold text-primary">
                                                                Dr. {{ $doc->name }}
                                                            </h6>
                                                            <span class="badge bg-info text-dark rounded-pill">
                                                                {{ $doc->specialty }}
                                                            </span>
                                                        </div>

                                                        <div class="text-end">
                                                            <small class="text-muted d-block mb-1">
                                                                <i class="fas fa-comment me-1"></i> Speaks {{ $doc->language }}
                                                            </small>

                                                            <a href="#" class="btn btn-sm btn-outline-success mt-1">
                                                                View Profile
                                                            </a>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <div class="p-4 text-center">
                                                <i class="fas fa-frown fa-2x text-muted mb-2"></i>
                                                <p class="text-muted mb-0">No recommendations are available at the moment.
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    // Line chart for consultation history
                    var ctx = document.getElementById('consultationsChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: @json($consultationMonths),
                            datasets: [{
                                label: 'Consultations',
                                data: @json($consultationCounts),
                                borderColor: '#4e73df',
                                fill: false,
                                tension: 0.3
                            }]
                        },
                    });

                    // Pie chart for health stats(allergies, conditions, etc.)
                    var ctx2 = document.getElementById('healthStatsChart').getContext('2d');
                    new Chart(ctx2, {
                        type: 'pie',
                        data: {
                            labels: ['Allergies', 'Conditions', 'Medications'],
                            datasets: [{
                                data: [{{ count($userpatient->allergies ?? []) }}, {{ count($userpatient->medical_conditions ?? []) }}, {{ count($userpatient->medications ?? []) }}],
                                backgroundColor: ['#f6c23e', '#e74a3b', '#1cc88a'],
                            }]
                        },
                    });
                </script>

                <!-- / Content -->

                @include('layouts.footer')