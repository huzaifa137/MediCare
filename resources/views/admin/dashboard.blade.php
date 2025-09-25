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

                            <div class="col-sm-6 col-xl-4">
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

                            <div class="col-sm-6 col-xl-4">
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

                            <div class="col-sm-6 col-xl-4">
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
                                    <a href="{{ url('/pharmacy/products-list') }}"
                                        class="btn btn-outline-primary btn-visit">Visit Shop</a>
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
                                    <a href="{{ url('/pharmacy/products-list') }}"
                                        class="btn btn-outline-primary btn-visit">Visit Shop</a>
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
                                    <a href="{{ url('/pharmacy/products-list') }}"
                                        class="btn btn-outline-primary btn-visit">Visit Shop</a>
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
                                    <a href="{{ url('/pharmacy/products-list') }}"
                                        class="btn btn-outline-primary btn-visit">Visit Shop</a>
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
                                    <a href="{{ url('/pharmacy/products-list') }}"
                                        class="btn btn-outline-primary btn-visit">Visit Shop</a>
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
                                    <a href="{{ url('/pharmacy/products-list') }}"
                                        class="btn btn-outline-primary btn-visit">Visit Shop</a>
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
                                    <a href="{{ url('/pharmacy/products-list') }}"
                                        class="btn btn-outline-primary btn-visit">Visit Shop</a>
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
                                    <a href="{{ url('/pharmacy/products-list') }}"
                                        class="btn btn-outline-primary btn-visit">Visit Shop</a>
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
                                    <a href="{{ url('/pharmacy/products-list') }}"
                                        class="btn btn-outline-primary btn-visit">Visit Shop</a>
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
                                    <a href="{{ url('/pharmacy/products-list') }}"
                                        class="btn btn-outline-primary btn-visit">Visit Shop</a>
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
                                        <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Jane"
                                            class="doctor-photo" />
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
                                        <img src="/assets-site/img/team/team-2.jpg" alt="Dr. John"
                                            class="doctor-photo" />
                                        <div class="doctor-name">Dr. John Smith</div>
                                        <div class="doctor-specialty">Dermatologist</div>
                                        <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Nairobi,
                                            Kenya
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
                                        <img src="/assets-site/img/team/team-3.jpg" alt="Dr. Grace"
                                            class="doctor-photo" />
                                        <div class="doctor-name">Dr. Grace Lee</div>
                                        <div class="doctor-specialty">Pediatrician</div>
                                        <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Dar es
                                            Salaam
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
                                        <img src="/assets-site/img/team/team-4.jpg" alt="Dr. Kelvin"
                                            class="doctor-photo" />
                                        <div class="doctor-name">Dr. Kelvin Otieno</div>
                                        <div class="doctor-specialty">Orthopedic Surgeon</div>
                                        <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Accra,
                                            Ghana
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
                                        <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Amina"
                                            class="doctor-photo" />
                                        <div class="doctor-name">Dr. Amina Yusuf</div>
                                        <div class="doctor-specialty">Gynecologist</div>
                                        <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Kigali,
                                            Rwanda
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
                                        <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Jane"
                                            class="doctor-photo" />
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
                                        <img src="/assets-site/img/team/team-2.jpg" alt="Dr. John"
                                            class="doctor-photo" />
                                        <div class="doctor-name">Dr. John Smith</div>
                                        <div class="doctor-specialty">Dermatologist</div>
                                        <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Nairobi,
                                            Kenya
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
                                        <img src="/assets-site/img/team/team-3.jpg" alt="Dr. Grace"
                                            class="doctor-photo" />
                                        <div class="doctor-name">Dr. Grace Lee</div>
                                        <div class="doctor-specialty">Pediatrician</div>
                                        <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Dar es
                                            Salaam
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
                                        <img src="/assets-site/img/team/team-4.jpg" alt="Dr. Kelvin"
                                            class="doctor-photo" />
                                        <div class="doctor-name">Dr. Kelvin Otieno</div>
                                        <div class="doctor-specialty">Orthopedic Surgeon</div>
                                        <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Accra,
                                            Ghana
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
                                        <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Amina"
                                            class="doctor-photo" />
                                        <div class="doctor-name">Dr. Amina Yusuf</div>
                                        <div class="doctor-specialty">Gynecologist</div>
                                        <div class="doctor-location"><i class="fa fa-map-marker-alt me-1"></i>Kigali,
                                            Rwanda
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
                </div>

                <!-- Include ApexCharts -->
                <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

                <script>

                    const userGrowthOptions = {
                        chart: {
                            type: 'line',
                            height: 300,
                            toolbar: { show: false }
                        },
                        series: [{
                            name: 'Users',
                            data: [12, 25, 30, 45, 55, 70, 90, 110, 125, 140, 150, 165] 
                        }],
                        xaxis: {
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                        },
                        colors: ['#696CFF'],
                        stroke: { curve: 'smooth' },
                        dataLabels: { enabled: false }
                    };
                    new ApexCharts(document.querySelector("#user-growth-chart"), userGrowthOptions).render();

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