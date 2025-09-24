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
                        <h4 class="fw-bold py-3 mb-4">Admin Dashboard</h4>

                        <div class="row g-4 mb-4">

                            <!-- Overall User Stats -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Total Users</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['totalUsers'] }}</h4>
                                                    <small class="text-success">(All roles)</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-primary rounded p-2">
                                                <i class="bx bx-user bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Admins</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['adminsCount'] }}</h4>
                                                    <small class="text-info">System Admins</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-secondary rounded p-2">
                                                <i class="bx bx-shield-quarter bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Doctors</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['doctorsCount'] }}</h4>
                                                    <small class="text-success">Registered Doctors</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-success rounded p-2">
                                                <i class="bx bx-user-circle bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Patients</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['patientsCount'] }}</h4>
                                                    <small class="text-warning">Registered Patients</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-warning rounded p-2">
                                                <i class="bx bx-user bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- More role stats -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Pharmacies</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['pharmaciesCount'] }}</h4>
                                                    <small class="text-info">Registered Pharmacies</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-info rounded p-2">
                                                <i class="bx bx-building bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Account status -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Active Accounts</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['activeAccounts'] }}</h4>
                                                    <small class="text-success">Status: Active</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-success rounded p-2">
                                                <i class="bx bx-check-circle bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Pending Accounts</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['pendingAccounts'] }}</h4>
                                                    <small class="text-danger">Awaiting Approval</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-secondary rounded p-2">
                                                <i class="bx bx-timer bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Doctor activity stats -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Doctors (Online)</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['onlineDoctors'] }}</h4>
                                                    <small class="text-success">Consultation: Online</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-success rounded p-2">
                                                <i class="bx bx-laptop bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Charts Section -->
                            <div class="row mt-5">
                                <!-- Users Growth Chart -->
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">User Registration Growth</h5>
                                            <small class="text-muted">Monthly Registrations (All Roles)</small>
                                        </div>
                                        <div class="card-body">
                                            <div id="user-growth-chart" style="min-height: 300px;"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Role Comparison Chart -->
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Users by Role</h5>
                                            <small class="text-muted">Current Distribution</small>
                                        </div>
                                        <div class="card-body">
                                            <div id="role-distribution-chart" style="min-height: 300px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Doctors (Offline)</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['offlineDoctors'] }}</h4>
                                                    <small class="text-warning">Consultation: Offline</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-warning rounded p-2">
                                                <i class="bx bx-clinic bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Doctors (Both)</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['bothDoctors'] }}</h4>
                                                    <small class="text-info">Online & Offline</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-info rounded p-2">
                                                <i class="bx bx-transfer bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Doctor average fee -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Avg. Doctor Fee</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">
                                                        {{ number_format($metrics['avgDoctorFee'], 2) }}
                                                        {{ $metrics['docCurrency'] }}
                                                    </h4>
                                                    <small class="text-primary">Consultation Fee</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-primary rounded p-2">
                                                <i class="bx bx-money bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Patient stats -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Avg. Patient Age</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['avgPatientAge'] }} yrs</h4>
                                                    <small class="text-info">Across all patients</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-info rounded p-2">
                                                <i class="bx bx-cake bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Patients with Insurance</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['patientsWithInsurance'] }}</h4>
                                                    <small class="text-success">Insured</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-success rounded p-2">
                                                <i class="bx bx-shield plus bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pharmacy stats -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Pharmacies w/ Delivery</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['pharmaciesWithDelivery'] }}</h4>
                                                    <small class="text-info">Delivery Available</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-success rounded p-2">
                                                <i class="bx bx-package bx-sm"></i>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div content-left>
                                                <span>Pharmacies w/ Online Orders</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['pharmaciesWithOnlineOrders'] }}
                                                    </h4>
                                                    <small class="text-primary">Online Orders Enabled</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-primary rounded p-2">
                                                <i class="bx bx-shopping-bag bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Recent registrations -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Latest User</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['latestUser'] }}</h4>
                                                    <small class="text-success">Recently registered</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-info rounded p-2">
                                                <i class="bx bx-user-plus bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>New Doctor</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['latestDoctor'] }}</h4>
                                                    <small class="text-success">Recently onboarded</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-success rounded p-2">
                                                <i class="bx bx-first-aid bx-sm"></i>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>New Patient</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['latestPatient'] }}</h4>
                                                    <small class="text-warning">Recent registration</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-warning rounded p-2">
                                                <i class="bx bx-heart bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>New Pharmacy</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">{{ $metrics['latestPharmacy'] }}</h4>
                                                    <small class="text-danger">Recently added</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-danger rounded p-2">
                                                <i class="bx bx-capsule bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Include ApexCharts -->
                <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

                <script>
                    // Users Growth - Monthly Registration Example Data
                    const userGrowthOptions = {
                        chart: {
                            type: 'line',
                            height: 300,
                            toolbar: { show: false }
                        },
                        series: [{
                            name: 'Users',
                            data: [12, 25, 30, 45, 55, 70, 90, 110, 125, 140, 150, 165] // Replace with actual data
                        }],
                        xaxis: {
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                        },
                        colors: ['#696CFF'],
                        stroke: { curve: 'smooth' },
                        dataLabels: { enabled: false }
                    };
                    new ApexCharts(document.querySelector("#user-growth-chart"), userGrowthOptions).render();

                    // Role Distribution Chart
                    const roleDistributionOptions = {
                        chart: {
                            type: 'donut',
                            height: 300
                        },
                        labels: ['Admins', 'Doctors', 'Patients', 'Pharmacies'],
                        series: [
            {{ $metrics['adminsCount'] }},
            {{ $metrics['doctorsCount'] }},
            {{ $metrics['patientsCount'] }},
                            {{ $metrics['pharmaciesCount'] }}
                        ],
                        colors: ['#FF6384', '#36A2EB', '#FFCE56', '#2ECC71'],
                        legend: {
                            position: 'bottom'
                        }
                    };
                    new ApexCharts(document.querySelector("#role-distribution-chart"), roleDistributionOptions).render();
                </script>

                <!-- / Content -->

                @include('layouts.footer')