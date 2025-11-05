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
                        // Dummy Delivery Data
                        $delivery = (object) [
                            'fullName' => 'zaiphar',
                            'gender' => 'Male',
                            'phoneNumber' => '+256 772 123456',
                            'vehicleType' => 'Motorcycle',
                            'vehicleNumber' => 'UAZ 345T',
                            'vehicleInsurance' => 'Valid until Dec 2025',
                            'availableDays' => 'Mon - Sat',
                            'availableHours' => '8:00 AM - 8:00 PM',
                            'bankName' => 'Equity Bank',
                            'accountNumber' => '1234567890',
                            'baseLocation' => 'Kampala City',
                            'status' => 'Active',
                        ];

                        $deliveryStats = (object) [
                            'totalDeliveries' => 145,
                            'activeDeliveries' => 3,
                            'pendingPickups' => 2,
                            'earnings' => '2,340,000 UGX',
                            'ratings' => 4.7,
                            'distanceCovered' => '1,245 km',
                        ];

                        $documents = [
                            ['name' => 'Driving Permit', 'status' => 'Verified'],
                            ['name' => 'National ID', 'status' => 'Verified'],
                            ['name' => 'Vehicle Insurance', 'status' => 'Pending Review'],
                        ];

                        $weekDays = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                        $deliveriesPerDay = [10, 8, 12, 14, 9, 7, 0];

                        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May'];
                        $monthlyEarnings = [800, 1200, 950, 1100, 1450];
                    @endphp

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <nav aria-label="breadcrumb" class="mb-4">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">
                                    <i class="bx bx-scooter me-1"></i> Delivery Dashboard
                                </li>
                            </ol>
                        </nav>

                        <h4 class="fw-bold text-dark mb-3">
                            Hello, {{ $delivery->fullName }}! 🛵
                        </h4>

                        <!-- Delivery Stats -->
                        <div class="row g-4 mt-2">
                            <div class="col-md-3">
                                <div class="card shadow-sm text-center p-3">
                                    <span class="badge bg-label-primary rounded p-2 mb-2"><i
                                            class="bx bx-package bx-sm"></i></span>
                                    <h6>Total Deliveries</h6>
                                    <h4>{{ $deliveryStats->totalDeliveries }}</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow-sm text-center p-3">
                                    <span class="badge bg-label-warning rounded p-2 mb-2"><i
                                            class="bx bx-loader bx-sm bx-spin"></i></span>
                                    <h6>Active Deliveries</h6>
                                    <h4>{{ $deliveryStats->activeDeliveries }}</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow-sm text-center p-3">
                                    <span class="badge bg-label-info rounded p-2 mb-2"><i
                                            class="bx bx-map-pin bx-sm"></i></span>
                                    <h6>Pending Pickups</h6>
                                    <h4>{{ $deliveryStats->pendingPickups }}</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow-sm text-center p-3">
                                    <span class="badge bg-label-success rounded p-2 mb-2"><i
                                            class="bx bx-wallet bx-sm"></i></span>
                                    <h6>Earnings</h6>
                                    <h4>{{ $deliveryStats->earnings }}</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Charts -->
                        <div class="row g-4 my-4">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header py-2">
                                        <h6 class="card-title mb-0">Deliveries Per Day</h6>
                                    </div>
                                    <div class="card-body p-2 d-flex justify-content-center align-items-center"
                                        style="height: 250px;">
                                        <canvas id="deliveriesPerDayChart"
                                            style="max-width: 100%; max-height: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header py-2">
                                        <h6 class="card-title mb-0">Monthly Earnings (UGX ×1000)</h6>
                                    </div>
                                    <div class="card-body p-2 d-flex justify-content-center align-items-center"
                                        style="height: 250px;">
                                        <canvas id="earningsChart" style="max-width: 100%; max-height: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="card shadow-sm p-3 mt-4">
                            <h5><i class="bx bx-bolt-circle text-danger"></i> Quick Actions</h5>
                            <div class="row mt-2">
                                <div class="col-6 col-md-3 mb-2">
                                    <a href="#" class="btn btn-success w-100"><i class="bx bx-play-circle"></i> Start
                                        Delivery</a>
                                </div>
                                <div class="col-6 col-md-3 mb-2">
                                    <a href="#" class="btn btn-info w-100"><i class="bx bx-list-ul"></i> View Orders</a>
                                </div>
                                <div class="col-6 col-md-3 mb-2">
                                    <a href="#" class="btn btn-warning w-100"><i class="bx bx-map"></i> View Map</a>
                                </div>
                                <div class="col-6 col-md-3 mb-2">
                                    <a href="#" class="btn btn-dark w-100"><i class="bx bx-wallet-alt"></i> View
                                        Earnings</a>
                                </div>
                            </div>
                        </div>

                        <!-- Profile Summary -->
                        <div class="card shadow-sm p-3 border-start border-3 border-primary mt-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>{{ $delivery->fullName }}</h5>
                                    <p class="mb-1"><i class="bx bx-male-female text-primary"></i> Gender:
                                        {{ $delivery->gender }}</p>
                                    <p class="mb-1"><i class="bx bx-phone text-success"></i> Phone:
                                        {{ $delivery->phoneNumber }}</p>
                                    <p class="mb-1"><i class="bx bx-map text-danger"></i> Base Location:
                                        {{ $delivery->baseLocation }}</p>
                                    <p class="mb-1"><i class="bx bx-car text-info"></i> Vehicle:
                                        {{ $delivery->vehicleType }} ({{ $delivery->vehicleNumber }})</p>
                                    <p class="mb-1"><i class="bx bx-shield text-success"></i> Insurance:
                                        {{ $delivery->vehicleInsurance }}</p>
                                    <p class="mb-1"><i class="bx bx-time text-warning"></i> Availability:
                                        {{ $delivery->availableDays }} | {{ $delivery->availableHours }}</p>
                                </div>
                                <a href="#" class="btn btn-outline-primary"><i class="bx bx-edit-alt"></i> Edit
                                    Profile</a>
                            </div>
                        </div>

                        <!-- Documents -->
                        <div class="card border-0 shadow-lg mt-4 mb-4">
                            <div
                                class="card-header bg-white p-3 border-bottom d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 text-dark">
                                    <i class="fas fa-folder-open me-2 text-primary"></i> Driver Documents
                                </h5>
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-upload me-1"></i> Upload New
                                </a>
                            </div>

                            <div class="card-body p-0">
                                @if(count($documents) > 0)
                                    <ul class="list-group list-group-flush">
                                        @foreach($documents as $doc)
                                            <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-file-pdf fa-lg text-danger me-3"></i>
                                                    <strong class="text-dark">{{ $doc['name'] }}</strong>
                                                </div>
                                                <div class="text-end">
                                                    <span
                                                        class="badge {{ $doc['status'] == 'Verified' ? 'bg-success' : 'bg-warning text-dark' }} me-3">
                                                        <i
                                                            class="fas {{ $doc['status'] == 'Verified' ? 'fa-check-circle' : 'fa-clock' }} me-1"></i>
                                                        {{ $doc['status'] }}
                                                    </span>

                                                    <a href="#" class="btn btn-sm btn-outline-secondary me-2" title="Download">
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

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        // Deliveries per Day Chart
                        const ctx1 = document.getElementById('deliveriesPerDayChart').getContext('2d');
                        new Chart(ctx1, {
                            type: 'bar',
                            data: {
                                labels: @json($weekDays),
                                datasets: [{
                                    label: 'Deliveries',
                                    data: @json($deliveriesPerDay),
                                    backgroundColor: '#00CFDD'
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: { y: { beginAtZero: true } }
                            }
                        });

                        // Monthly Earnings Chart
                        const ctx2 = document.getElementById('earningsChart').getContext('2d');
                        new Chart(ctx2, {
                            type: 'line',
                            data: {
                                labels: @json($months),
                                datasets: [{
                                    label: 'Earnings (UGX ×1000)',
                                    data: @json($monthlyEarnings),
                                    borderColor: '#28a745',
                                    backgroundColor: 'rgba(40, 167, 69, 0.2)',
                                    tension: 0.3
                                }]
                            },
                            options: { responsive: true }
                        });
                    </script>

                    <!-- / Content -->

                    @include('layouts.footer')