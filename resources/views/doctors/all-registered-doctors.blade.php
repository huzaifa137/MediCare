@include('layouts.header')

<body>


    <style>
        @media (min-width: 1200px) {
            .col-lg-1-5 {
                flex: 0 0 20%;
                max-width: 20%;
            }
        }

        .product-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 6px;
        }
    </style>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('layouts.side-bar-menu')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">

                @include('layouts.nav-bar')

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

                @include('layouts.footer')