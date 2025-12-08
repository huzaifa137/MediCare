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
                <!-- / Navbar -->

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">

                        @php
                            $roleNames = [
                                '1' => 'Admins',
                                '2' => 'Doctors',
                                '3' => 'Patients',
                                '4' => 'Pharmacies',
                                '5' => 'Delivery Guys',
                            ];
                        @endphp

                        <h4 class="fw-bold py-3 mb-4">
                            @if ($userrole === 'all')
                                All Users
                            @else
                                {{ $roleNames[$userrole] ?? 'Unknown Role' }} Users
                            @endif
                        </h4>


                        <!-- Bordered Table -->
                        <div class="card">
                            <h5 class="card-header">Users List</h5>

                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 1px;">#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody class="table-border-bottom-0">

                                            @forelse ($totalUsers as $count => $user)
                                                <tr>
                                                    <td><strong>{{ $count+1 }}</strong></td>

                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ $user->profile_photo ? asset('uploads/' . $user->profile_photo) : asset('assets/img/avatars/1.png') }}"
                                                                class="rounded-circle me-2" width="35" height="35">
                                                            <div>
                                                                {{ $user->firstname }} {{ $user->lastname }}
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phonenumber }}</td>


                                                    <td>
                                                        <span
                                                            class="badge 
                                                            {{ $user->account_status == 10 ? 'bg-label-success' : 'bg-label-warning' }}">
                                                            {{ $user->account_status == 10 ? 'Active' : 'Pending' }}
                                                        </span>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex gap-2">

                                                            <!-- View Button -->
                                                            <a href="#"
                                                                class="btn btn-sm btn-outline-primary d-flex align-items-center">
                                                                <i class="bx bx-show"></i>
                                                            </a>

                                                            <!-- Edit Button -->
                                                            <a href="#"
                                                                class="btn btn-sm btn-outline-warning d-flex align-items-center">
                                                                <i class="bx bx-edit-alt"></i>
                                                            </a>

                                                            <!-- Delete Button -->
                                                            <a href="#"
                                                                class="btn btn-sm btn-outline-danger d-flex align-items-center">
                                                                <i class="bx bx-trash"></i>
                                                            </a>

                                                        </div>
                                                    </td>

                                                </tr>

                                            @empty
                                                <tr>
                                                    <td colspan="7" class="text-center text-muted">
                                                        No users found.
                                                    </td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <!--/ Bordered Table -->

                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

                @include('layouts.footer')