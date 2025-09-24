@include('Site.layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="/assets-site/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shop from our top Pharmacies</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ url('index') }}">Home</a>
                        <span>Pharmacies</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<style>
    .card {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
        /* Lifts the card slightly */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15) !important;
        /* Increases the shadow */
    }

    .btn-primary {
        transition: background-color 0.3s ease-in-out, transform 0.2s ease-in-out;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        /* Darkens the button color */
        transform: scale(1.02);
        /* Makes the button slightly larger */
    }

    .social-links a {
        transition: color 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    .social-links a:hover {
        color: #007bff !important;
        /* Changes icon color to a highlight blue */
        transform: scale(1.2);
        /* Makes the icon slightly larger */
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card {
        animation: fadeIn 0.8s ease-out;
    }

    .profile-image-shadow {
        box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.2);
    }
</style>

<section class="pricing spad">
    <div class="container">
        <h2 class="text-center mb-5">Our Best Pharmacies 💊</h2>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div class="card-body text-center p-4">
                        <img src="/assets-site/img/team/pharmacy1.jpg"
                            class="img-fluid rounded-circle mb-3 profile-image-shadow" alt="Dr. Laura Leon"
                            style="width: 120px; height: 120px; object-fit: cover;">

                        <h5 class="card-title fw-bold mb-0">Dr. Laura Leon</h5>
                        <p class="card-text text-muted">Family Medicine Specialist</p>

                        <div class="rating my-3">
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                        </div>

                        <a href="{{ url('pharmacies-products') }}" class="btn btn-primary w-100 mt-2">Shop Now</a>

                        <div class="social-links mt-3">
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div class="card-body text-center p-4">
                        <img src="/assets-site/img/team/pharmacy6.jpg"
                            class="img-fluid rounded-circle profile-image-shadow mb-3" alt="Dr. Laura Leon"
                            style="width: 120px; height: 120px; object-fit: cover;">

                        <h5 class="card-title fw-bold mb-0">Dr. Laura Leon</h5>
                        <p class="card-text text-muted">Family Medicine Specialist</p>

                        <div class="rating my-3">
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                        </div>

                        <a href="{{ url('pharmacies-products') }}" class="btn btn-primary w-100 mt-2">Shop Now</a>

                        <div class="social-links mt-3">
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div class="card-body text-center p-4">
                        <img src="/assets-site/img/team/pharmacy3.jpg"
                            class="img-fluid rounded-circle profile-image-shadow mb-3" alt="Dr. Laura Leon"
                            style="width: 120px; height: 120px; object-fit: cover;">

                        <h5 class="card-title fw-bold mb-0">Dr. Laura Leon</h5>
                        <p class="card-text text-muted">Family Medicine Specialist</p>

                        <div class="rating my-3">
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                        </div>

                        <a href="{{ url('pharmacies-products') }}" class="btn btn-primary w-100 mt-2">Shop Now</a>

                        <div class="social-links mt-3">
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div class="card-body text-center p-4">
                        <img src="/assets-site/img/team/pharmacy7.jpg"
                            class="img-fluid rounded-circle profile-image-shadow mb-3" alt="Dr. Laura Leon"
                            style="width: 120px; height: 120px; object-fit: cover;">

                        <h5 class="card-title fw-bold mb-0">Dr. Laura Leon</h5>
                        <p class="card-text text-muted">Family Medicine Specialist</p>

                        <div class="rating my-3">
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                        </div>

                        <a href="{{ url('pharmacies-products') }}" class="btn btn-primary w-100 mt-2">Shop Now</a>

                        <div class="social-links mt-3">
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div class="card-body text-center p-4">
                        <img src="/assets-site/img/team/pharmacy5.jpg"
                            class="img-fluid rounded-circle mb-3 profile-image-shadow" alt="Dr. Laura Leon"
                            style="width: 120px; height: 120px; object-fit: cover;">

                        <h5 class="card-title fw-bold mb-0">Dr. Laura Leon</h5>
                        <p class="card-text text-muted">Family Medicine Specialist</p>

                        <div class="rating my-3">
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                        </div>

                        <a href="{{ url('pharmacies-products') }}" class="btn btn-primary w-100 mt-2">Shop Now</a>

                        <div class="social-links mt-3">
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div class="card-body text-center p-4">
                        <img src="/assets-site/img/team/pharmacy2.jpg"
                            class="img-fluid rounded-circle profile-image-shadow mb-3" alt="Dr. Laura Leon"
                            style="width: 120px; height: 120px; object-fit: cover;">

                        <h5 class="card-title fw-bold mb-0">Dr. Laura Leon</h5>
                        <p class="card-text text-muted">Family Medicine Specialist</p>

                        <div class="rating my-3">
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                        </div>

                        <a href="{{ url('pharmacies-products') }}" class="btn btn-primary w-100 mt-2">Shop Now</a>

                        <div class="social-links mt-3">
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div class="card-body text-center p-4">
                        <img src="/assets-site/img/team/pharmacy8.jpg"
                            class="img-fluid rounded-circle profile-image-shadow mb-3" alt="Dr. Laura Leon"
                            style="width: 120px; height: 120px; object-fit: cover;">

                        <h5 class="card-title fw-bold mb-0">Dr. Laura Leon</h5>
                        <p class="card-text text-muted">Family Medicine Specialist</p>

                        <div class="rating my-3">
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                        </div>

                        <a href="{{ url('pharmacies-products') }}" class="btn btn-primary w-100 mt-2">Shop Now</a>

                        <div class="social-links mt-3">
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div class="card-body text-center p-4">
                        <img src="/assets-site/img/team/pharmacy4.jpg"
                            class="img-fluid rounded-circle profile-image-shadow mb-3" alt="Dr. Laura Leon"
                            style="width: 120px; height: 120px; object-fit: cover;">

                        <h5 class="card-title fw-bold mb-0">Dr. Laura Leon</h5>
                        <p class="card-text text-muted">Family Medicine Specialist</p>

                        <div class="rating my-3">
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star checked text-warning"></span>
                        </div>

                        <a href="{{ url('pharmacies-products') }}" class="btn btn-primary w-100 mt-2">Shop Now</a>

                        <div class="social-links mt-3">
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="text-secondary mx-2"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('Site.layouts.footer')