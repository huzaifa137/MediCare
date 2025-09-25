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

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row mt-4 g-3">
                        <h5 class="">All Registered Pharmacies</h5>

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
                                <button class="btn btn-outline-primary btn-visit">Visit Shop</button>
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
                                <button class="btn btn-outline-primary btn-visit">Visit Shop</button>
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
                                <button class="btn btn-outline-primary btn-visit">Visit Shop</button>
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
                                <button class="btn btn-outline-primary btn-visit">Visit Shop</button>
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
                                <button class="btn btn-outline-primary btn-visit">Visit Shop</button>
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
                                <button class="btn btn-outline-primary btn-visit">Visit Shop</button>
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
                                <button class="btn btn-outline-primary btn-visit">Visit Shop</button>
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
                                <button class="btn btn-outline-primary btn-visit">Visit Shop</button>
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
                                <button class="btn btn-outline-primary btn-visit">Visit Shop</button>
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
                                <button class="btn btn-outline-primary btn-visit">Visit Shop</button>
                            </div>
                        </div>

                    </div>
                </div>


                @include('layouts.footer')