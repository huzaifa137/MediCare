@include('Site.layouts.header')

<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="/assets-site/img/hero-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero__text">
                    <span style="color: white; text-shadow: 0 0 2px #007BFF, 0 0 5px #007BFF, 0 0 10px #007BFF;">
                        Your Health, Our Priority
                    </span>



                    <h2 class="text-white">Take the world's best quality Treatment</h2>
                    <a href="{{ url('contact')}} " class="primary-btn normal-btn">Contact us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Consultation Section Begin -->
<section class="consultation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div style="padding-top: 100px; position: relative;">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="consultation__text__item">
                                <div class="section-title">
                                    <span>Welcome to {{ Helper::app_name() }}</span>
                                    <h2>Find Trusted, Experienced Doctors with <b>{{ Helper::app_name() }}</b></h2>
                                </div>
                                <p>With decades of combined experience across various medical fields, our certified
                                    doctors provide personalized care, accurate diagnoses, and professional treatment —
                                    all from the comfort of your home.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="consultation__video set-bg"
                                data-setbg="/assets-site/img/consultation-video.jpg">
                                <a href="https://www.youtube.com/watch?v=PXsuI67s2AA" class="play-btn video-popup"><i
                                        class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .services__title {
                background-color: #f8f9fa;
                border: 1px solid #e9ecef;
                border-radius: 5px;
                padding: 15px;
                margin-bottom: 20px;
                text-align: left;
            }

            .services__title h4 {
                color: #333;
                font-weight: 600;
                font-size: 1.5rem;
                margin: 0;
            }

            .services__sidebar {
                background-color: #ffffff;
                border: 1px solid #e9ecef;
                border-radius: 5px;
                padding: 20px;
            }

            .services__accordion .card {
                border: 1px solid white;

            }

            .blog__item__text a {
                text-decoration: none !important;
            }

            .blog__item {
                border: 1px solid #e0e0e0;
                border-radius: 8px;
                overflow: hidden;
                transition: all 0.3s ease;
            }

            .blog__item__pic img {
                width: 100%;
                height: auto;
                display: block;
                transition: transform 0.3s ease;
            }

            .blog__item.hover-effect:hover {
                box-shadow: 0 8px 20px rgba(23, 162, 184, 0.3);
                transform: translateY(-5px);
                border-color: #17A2B8;
            }

            .blog__item.hover-effect:hover .blog__item__pic img {
                transform: scale(1.05);
            }

            .blog__item.hover-effect:hover h5 a {
                color: #17A2B8;
                text-decoration: none;
            }
        </style>

        <div class="row">
            <div class="col-lg-12 order-lg-1">
                <div class="services__sidebar">
                    <div class="services__accordion">
                        <div class="services__title">
                            <h4><img src="/assets-site/img/icons/services-icon.png" alt=""> Our services</h4>
                        </div>

                        <div class="blog__details__related">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/General-Consultantion') }}">
                                                <img src="/assets-site/img/ourservies/GeneralConsultantion.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;">
                                                <a href="{{ url('specific-service/General-Consultantion') }}">General
                                                    Consultations</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Mental-Health') }}">
                                                <img src="/assets-site/img/ourservies/MentalHealth.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;">
                                                <a href="{{ url('specific-service/Mental-Health') }}">Mental Health</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Womens-Health') }}">
                                                <img src="/assets-site/img/ourservies/WomensHealth.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;">
                                                <a href="{{ url('specific-service/Womens-Health') }}">Women's Health</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Dermatology') }}">
                                                <img src="/assets-site/img/ourservies/Dermatology.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;">
                                                <a href="{{ url('specific-service/Dermatology') }}">Dermatology</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Diagnostic-Services') }}">
                                                <img src="/assets-site/img/ourservies/DiagnosticServices.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;">
                                                <a href="{{ url('specific-service/Diagnostic-Services') }}">Diagnostic
                                                    Services</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Cardiology') }}">
                                                <img src="/assets-site/img/ourservies/Cardiology.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;">
                                                <a href="{{ url('specific-service/Cardiology') }}">Cardiology</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Pediatrics') }}">
                                                <img src="/assets-site/img/ourservies/Pediatrics.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;">
                                                <a href="{{ url('specific-service/Pediatrics') }}">Pediatrics</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Orthopedics') }}">
                                                <img src="/assets-site/img/ourservies/Orthopedics.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;">
                                                <a href="{{ url('specific-service/Orthopedics') }}">Orthopedics</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/ENT') }}">
                                                <img src="/assets-site/img/ourservies/ENT.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;">
                                                <a href="{{ url('specific-service/ENT') }}">ENT (Ear, Nose & Throat)</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="text-align: center;">
                            <div style="display: inline-block;">
                                <a href="{{ url('services') }}" class="primary-btn">View all Services</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="section-title">
                <span>Specialists</span>
                <h2>Trusted Professionals</h2>
            </div>
        </div>

        <div class="row">
            <!-- Doctor 1 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <!-- Doctor Image + Name -->
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Laura Leon">
                        <h5>Dr. Laura Leon</h5>
                        <span>Plastic Surgeon</span>

                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dedicated to patient-centered care, Dr. Liane excels in body contouring and safe outcomes
                        </p>

                        <!-- Star Rating -->
                        <div style="color: #FFD700; margin-top: 5px; margin-bottom: 10px;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>

                        <a href="{{ url('doctor-details-3')}}" class="primary-btn mt-3">consult Dr.Liane</a>
                    </div>
                </div>
            </div>
            <!-- Doctor 2 -->

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <!-- Doctor Image + Name -->
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-3.jpg" alt="Dr. John Doe">
                        <h5>Dr. John Doe</h5>
                        <span>Plastic Surgeon</span>

                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dedicated to patient-centered care, Dr. John Doe excels in body contouring and safe outcomes
                        </p>

                        <!-- Star Rating -->
                        <div style="color: #FFD700; margin-top: 5px; margin-bottom: 10px;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>

                        <a href="{{ url('doctor-details-1')}}" class="primary-btn mt-3">consult Dr.John</a>
                    </div>
                </div>
            </div>

            <!-- Doctor 3 -->

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <!-- Doctor Image + Name -->
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-2.jpg" alt="Dr. Manuel Benet">
                        <h5>Dr. Manuel Benet</h5>
                        <span>Plastic Surgeon</span>

                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dedicated to patient-centered care, Dr. Liane excels in body contouring and safe outcomes
                        </p>

                        <!-- Star Rating -->
                        <div style="color: #FFD700; margin-top: 5px; margin-bottom: 10px;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>

                        <a href="{{ url('doctor-details-2')}}" class="primary-btn mt-3">consult Dr.Manuel</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12" style="text-align: center; margin-bottom: 30px;">
                <div class="latest__btn" style="display: inline-block;">
                    <a href="{{ url('doctors')}} " class="primary-btn">View all doctors</a>
                </div>
            </div>

        </div>
    </div>


</div>
</section>

<!-- Team Section End -->

@include('Site.layouts.footer')