@include('layouts.header')

<body>

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('layouts.side-bar-menu')

            <div class="layout-page">
                @include('layouts.nav-bar')
                <div class="content-wrapper">

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <nav aria-label="breadcrumb" class="mb-4">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">
                                    <i class="fas fa-tachometer-alt me-1"></i> Pharmacy Dashboard
                                </li>
                            </ol>
                        </nav>

                        <h4 class="fw-bold text-dark mb-3">
                            Hello, Zaiphar!
                        </h4>

                        @php
                            $pharmacy = (object) [
                                'pharmacy_name' => 'MediCare Pharmacy',
                                'email' => 'contact@medicarepharma.com',
                                'phone_number' => '+256 789 123 456',
                                'license_number' => 'PH-UG-20394',
                                'reg_authority' => 'Uganda National Drug Authority',
                                'years_in_op' => 5,
                                'date_registered' => '2018-04-15',
                                'owner_name' => 'John Smith',
                                'owner_gender' => 'Male',
                                'contact_person_phone' => '+256 700 111 222',
                                'physical_address' => 'Plot 24, Kampala Road',
                                'city' => 'Kampala',
                                'country' => 'Uganda',
                                'opening_days' => 'Mon - Sat',
                                'opening_hours' => '8:00 AM - 9:00 PM',
                                'emergency_hours' => true,
                                'online_orders' => true,
                                'delivery_available' => true,
                                'service_areas' => 'Kampala, Wakiso',
                            ];

                            $inventoryStats = [
                                'total_meds' => 120,
                                'low_stock' => 15,
                                'out_of_stock' => 5,
                                'top_selling' => 'Paracetamol',
                            ];

                            $salesDataMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
                            $salesCounts = [120, 180, 150, 200, 250, 190];

                            $drugCategories = ['Antibiotics', 'Painkillers', 'Vitamins', 'Dermatology', 'Diabetes'];
                            $drugSales = [40, 60, 30, 20, 50];

                            $salesToday = 1520;
                            $salesMonth = 12450;
                            $salesYear = 145000;

                            $activeOrders = 12;
                            $isOpen = true;

                            $topSelling = [
                                (object) ['name' => 'Paracetamol', 'qty' => 120],
                                (object) ['name' => 'Amoxicillin', 'qty' => 95],
                                (object) ['name' => 'Ibuprofen', 'qty' => 80],
                                (object) ['name' => 'Cough Syrup', 'qty' => 65],
                                (object) ['name' => 'Vitamin C', 'qty' => 50],
                            ];

                            $leastSelling = [
                                (object) ['name' => 'Zinc Tablets', 'qty' => 5],
                                (object) ['name' => 'Antacid', 'qty' => 8],
                                (object) ['name' => 'Omega 3', 'qty' => 10],
                            ];

                            $lowStock = [
                                (object) ['name' => 'Paracetamol', 'category' => 'Painkiller', 'qty' => 5, 'expiry' => '2025-05-10'],
                                (object) ['name' => 'Ibuprofen', 'category' => 'Painkiller', 'qty' => 8, 'expiry' => '2025-06-15'],
                            ];

                            $recentOrders = [
                                (object) ['id' => 'ORD-101', 'customer' => 'John Doe', 'status' => 'Pending', 'total' => 45],
                                (object) ['id' => 'ORD-102', 'customer' => 'Jane Smith', 'status' => 'Delivered', 'total' => 78],
                                (object) ['id' => 'ORD-103', 'customer' => 'Mike Brown', 'status' => 'Cancelled', 'total' => 30],
                            ];

                            $notifications = [
                                "Low stock alert: Paracetamol <10 units",
                                "License expires in 30 days",
                                "New order pending: ORD-105"
                            ];
                        @endphp


                        <style>
                            .stat-card-border-success {
                                border-left: 5px solid var(--bs-success) !important;
                            }

                            .stat-card-border-primary {
                                border-left: 5px solid var(--bs-primary) !important;
                            }

                            .stat-card-border-info {
                                border-left: 5px solid var(--bs-info) !important;
                            }

                            .stat-card-border-warning {
                                border-left: 5px solid var(--bs-warning) !important;
                            }

                            .bg-success-subtle {
                                background-color: #d1e7dd !important;
                            }

                            .bg-primary-subtle {
                                background-color: #cfe2ff !important;
                            }

                            .bg-info-subtle {
                                background-color: #cff4fc !important;
                            }

                            .bg-warning-subtle {
                                background-color: #fff3cd !important;
                            }
                        </style>

                        <div class="row g-4 mb-4">
                            <div class="col-12">
                                <div class="d-flex justify-content-between flex-wrap gap-4">

                                    <div class="flex-fill col-md-5 col-lg-2">
                                        <div class="card border-0 shadow-lg h-100 p-3 stat-card-border-success">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="bg-success-subtle text-success p-3 rounded-circle d-flex align-items-center justify-content-center"
                                                    style="width: 50px; height: 50px;">
                                                    <i class="fas fa-dollar-sign fa-lg"></i>
                                                </div>
                                                <div class="text-end">
                                                    <h4 class="mb-0 fw-bolder text-dark">${{ $salesToday }}</h4>
                                                    <small class="text-muted d-block mt-1 text-uppercase">Sales
                                                        Today</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-fill col-md-5 col-lg-2">
                                        <div class="card border-0 shadow-lg h-100 p-3 stat-card-border-primary">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="bg-primary-subtle text-primary p-3 rounded-circle d-flex align-items-center justify-content-center"
                                                    style="width: 50px; height: 50px;">
                                                    <i class="fas fa-calendar-alt fa-lg"></i>
                                                </div>
                                                <div class="text-end">
                                                    <h4 class="mb-0 fw-bolder text-dark">${{ $salesMonth }}</h4>
                                                    <small class="text-muted d-block mt-1 text-uppercase">Sales This
                                                        Month</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-fill col-md-5 col-lg-2">
                                        <div class="card border-0 shadow-lg h-100 p-3 stat-card-border-info">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="bg-info-subtle text-info p-3 rounded-circle d-flex align-items-center justify-content-center"
                                                    style="width: 50px; height: 50px;">
                                                    <i class="fas fa-chart-line fa-lg"></i>
                                                </div>
                                                <div class="text-end">
                                                    <h4 class="mb-0 fw-bolder text-dark">${{ $salesYear }}</h4>
                                                    <small class="text-muted d-block mt-1 text-uppercase">Sales This
                                                        Year</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-fill col-md-5 col-lg-2">
                                        <div class="card border-0 shadow-lg h-100 p-3 stat-card-border-warning">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="bg-warning-subtle text-warning p-3 rounded-circle d-flex align-items-center justify-content-center"
                                                    style="width: 50px; height: 50px;">
                                                    <i class="fas fa-shopping-cart fa-lg"></i>
                                                </div>
                                                <div class="text-end">
                                                    <h4 class="mb-0 fw-bolder text-dark">{{ $activeOrders }}</h4>
                                                    <small class="text-muted d-block mt-1 text-uppercase">Active
                                                        Orders</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="row g-4">
                            <div class="col-md-3">
                                <a href="{{ route('add.medicine') }}" class="card shadow-sm text-center p-3 text-decoration-none">
                                    <i class="bx bx-plus-circle text-primary fs-2"></i>
                                    <h6 class="mt-2">Add Medicine</h6>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" class="card shadow-sm text-center p-3 text-decoration-none">
                                    <i class="bx bx-box text-success fs-2"></i>
                                    <h6 class="mt-2">Manage Inventory</h6>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" class="card shadow-sm text-center p-3 text-decoration-none">
                                    <i class="bx bx-bar-chart text-warning fs-2"></i>
                                    <h6 class="mt-2">Sales Report</h6>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" class="card shadow-sm text-center p-3 text-decoration-none">
                                    <i class="bx bx-history text-danger fs-2"></i>
                                    <h6 class="mt-2">Order History</h6>
                                </a>
                            </div>
                        </div>

                        <!-- Charts -->
                        <div class="row g-4 my-4">
                            <!-- Monthly Sales -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header py-2">
                                        <h6 class="card-title mb-0">Monthly Sales Trend</h6>
                                    </div>
                                    <div class="card-body p-2 d-flex justify-content-center align-items-center"
                                        style="height: 350px;">
                                        <canvas id="salesChart" style="max-width: 100%; max-height: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Drug Category Distribution -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header py-2">
                                        <h6 class="card-title mb-0">Drug Category Sales</h6>
                                    </div>
                                    <div class="card-body p-2 d-flex justify-content-center align-items-center"
                                        style="height: 350px;">
                                        <canvas id="drugCategoryChart"
                                            style="max-width: 100%; max-height: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Quick Actions -->
                        <div class="row g-3 mb-4">
                            <div class="col-12">
                                <div class="card shadow-sm">
                                    <div class="card-body d-flex flex-wrap justify-content-between gap-3 text-center">
                                        <div class="flex-fill">
                                            <a href="#" class="btn btn-primary w-100">
                                                <i class="bx bx-cart-alt me-1"></i> View Stocks
                                            </a>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="#" class="btn btn-success w-100">
                                                <i class="bx bx-grid-alt me-1"></i> View Orders
                                            </a>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="#" class="btn btn-warning w-100">
                                                <i class="bx bx-detail me-1"></i> View Medicines
                                            </a>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="#" class="btn btn-info w-100">
                                                <i class="bx bx-pie-chart-alt-2 me-1"></i> View Reports
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Inventory Snapshot -->
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6 col-lg-3">
                                <div class="card shadow-sm text-center p-3">
                                    <i class="bx bx-capsule text-primary fs-2"></i>
                                    <h6>Total Medicines</h6>
                                    <h5>{{ $inventoryStats['total_meds'] }}</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card shadow-sm text-center p-3">
                                    <i class="bx bx-error text-warning fs-2"></i>
                                    <h6>Low Stock</h6>
                                    <h5>{{ $inventoryStats['low_stock'] }}</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card shadow-sm text-center p-3">
                                    <i class="bx bx-block text-danger fs-2"></i>
                                    <h6>Out of Stock</h6>
                                    <h5>{{ $inventoryStats['out_of_stock'] }}</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card shadow-sm text-center p-3">
                                    <i class="bx bx-star text-success fs-2"></i>
                                    <h6>Top Selling</h6>
                                    <h5>{{ $inventoryStats['top_selling'] }}</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Orders Table -->
                        <div class="col-lg-12 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Recent Orders</h5>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Customer</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($recentOrders as $order)
                                                <tr>
                                                    <td>{{ $order->id }}</td>
                                                    <td>{{ $order->customer }}</td>
                                                    <td>
                                                        <span
                                                            class="badge 
                                                                                                                {{ $order->status == 'Pending' ? 'bg-warning' : ($order->status == 'Delivered' ? 'bg-success' : 'bg-danger') }}">
                                                            {{ $order->status }}
                                                        </span>
                                                    </td>
                                                    <td>${{ $order->total }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Pharmacy Profile -->
                        <div class="row g-4 mb-4">
                            <div class="col-md-6 col-lg-6">
                                <div class="card shadow-sm p-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5>{{ $pharmacy->pharmacy_name }}</h5>
                                            <p class="mb-1"><i class="bx bx-envelope text-primary"></i>
                                                {{ $pharmacy->email }}</p>
                                            <p class="mb-1"><i class="bx bx-phone text-success"></i>
                                                {{ $pharmacy->phone_number }}</p>
                                            <p class="mb-1"><i class="bx bx-map text-danger"></i>
                                                {{ $pharmacy->physical_address }}, {{ $pharmacy->city }}</p>
                                            <p class="mb-1"><i class="bx bx-user text-warning"></i>
                                                owner : {{ $pharmacy->owner_name }}</p>
                                        </div>
                                        <a href="#" class="btn btn-outline-primary">
                                            <i class="bx bx-edit-alt"></i> Edit Profile
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- License & Registration -->
                            <div class="col-md-6 col-lg-6">
                                <div class="card shadow-sm p-3">
                                    <h6><i class="bx bx-certification text-info"></i> License Information</h6>
                                    <p class="mb-1"><strong>License No:</strong> {{ $pharmacy->license_number }}</p>
                                    <p class="mb-1"><strong>Authority:</strong> {{ $pharmacy->reg_authority }}</p>
                                    <p class="mb-1"><strong>Years in Operation:</strong> {{ $pharmacy->years_in_op }}
                                    </p>
                                    <p class="mb-0"><strong>Registered:</strong> {{ $pharmacy->date_registered }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4 mb-4">

                            <!-- Top Selling Medicines -->
                            <div class="col-lg-6">
                                <div class="card shadow-sm h-100">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Top 5 Best Selling Medicines</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            @foreach($topSelling as $item)
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    {{ $item->name }}
                                                    <span class="badge bg-success rounded-pill">{{ $item->qty }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Least Selling Medicines -->
                            <div class="col-lg-6">
                                <div class="card shadow-sm h-100">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Least Sold Medicines</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            @foreach($leastSelling as $item)
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    {{ $item->name }}
                                                    <span class="badge bg-warning rounded-pill">{{ $item->qty }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Low Stock / Expiring Medicines Table -->
                            {{-- <div class="col-lg-12">
                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Low Stock & Expiring Medicines</h5>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Medicine</th>
                                                    <th>Category</th>
                                                    <th>Quantity</th>
                                                    <th>Expiry Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($lowStock as $med)
                                                <tr @if(strtotime($med->expiry) < strtotime('+30 days'))
                                                        class="table-danger" @endif>
                                                        <td>{{ $med->name }}</td>
                                                        <td>{{ $med->category }}</td>
                                                        <td>{{ $med->qty }}</td>
                                                        <td>{{ $med->expiry }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> --}}

                        </div>

                    </div>
                </div>

                <!-- Charts -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    // Sales Trend
                    new Chart(document.getElementById('salesChart').getContext('2d'), {
                        type: 'line',
                        data: {
                            labels: @json($salesDataMonths),
                            datasets: [{
                                label: 'Sales',
                                data: @json($salesCounts),
                                borderColor: '#4e73df',
                                fill: false,
                                tension: 0.3
                            }]
                        }
                    });

                    // Drug Category Sales
                    new Chart(document.getElementById('drugCategoryChart').getContext('2d'), {
                        type: 'doughnut',
                        data: {
                            labels: @json($drugCategories),
                            datasets: [{
                                data: @json($drugSales),
                                backgroundColor: ['#36b9cc', '#f6c23e', '#e74a3b', '#1cc88a', '#858796']
                            }]
                        }
                    });
                </script>

                @include('layouts.footer')