@include('Site.layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="/assets-site/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Our Services</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ url('index') }}">Home</a>
                        <span>Services</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

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

<!-- Services Section Begin -->
<section class="services-page spad">
    <div class="container">

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
                                            <a href="{{ url('specific-service/General-Consultantion') }}"><img src="/assets-site/img/ourservies/GeneralConsultantion.jpg"
                                                    alt="General Consultations"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/General-Consultantion') }}">General Consultations</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Mental-Health') }}"><img src="/assets-site/img/ourservies/MentalHealth.jpg"
                                                    alt="Mental Health"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/Mental-Health') }}">Mental Health</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Womens-Health') }}"><img src="/assets-site/img/ourservies/WomensHealth.jpg"
                                                    alt="Women's Health"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/Womens-Health') }}">Women's Health</a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Dermatology') }}"><img src="/assets-site/img/ourservies/Dermatology.jpg"
                                                    alt="Dermatology"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/Dermatology') }}">Dermatology</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Diagnostic-Services') }}"><img src="/assets-site/img/ourservies/DiagnosticServices.jpg"
                                                    alt="Diagnostic Services"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/Diagnostic-Services') }}">Diagnostic Services</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Cardiology') }}"><img src="/assets-site/img/ourservies/Cardiology.jpg"
                                                    alt="Cardiology"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/Cardiology') }}">Cardiology</a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Pediatrics') }}"><img src="/assets-site/img/ourservies/Pediatrics.jpg"
                                                    alt="Pediatrics"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/Pediatrics') }}">Pediatrics</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Orthopedics') }}"><img src="/assets-site/img/ourservies/Orthopedics.jpg"
                                                    alt="Orthopedics"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/Orthopedics') }}">Orthopedics</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/ENT') }}"><img src="/assets-site/img/ourservies/ENT.jpg"
                                                    alt="ENT (Ear, Nose & Throat)"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/ENT') }}">ENT (Ear, Nose & Throat)</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Dermatology') }}"><img src="/assets-site/img/ourservies/Dermatology.jpg"
                                                    alt="Dermatology"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/Dermatology') }}">Dermatology</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Diagnostic-Services') }}"><img src="/assets-site/img/ourservies/DiagnosticServices.jpg"
                                                    alt="Diagnostic Services"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/Diagnostic-Services') }}">Diagnostic Services</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Cardiology') }}"><img src="/assets-site/img/ourservies/Cardiology.jpg"
                                                    alt="Cardiology"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/Cardiology') }}">Cardiology</a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/General-Consultantion') }}"><img src="/assets-site/img/ourservies/GeneralConsultantion.jpg"
                                                    alt="General Consultations"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/General-Consultantion') }}">General Consultations</a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Mental-Health') }}"><img src="/assets-site/img/ourservies/MentalHealth.jpg"
                                                    alt="Mental Health"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/Mental-Health') }}">Mental Health</a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Womens-Health') }}"><img src="/assets-site/img/ourservies/WomensHealth.jpg"
                                                    alt="Women's Health"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/Womens-Health') }}">Women's Health</a></h5>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Orthopedics') }}"><img src="/assets-site/img/ourservies/Orthopedics.jpg"
                                                    alt="Orthopedics"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/Orthopedics') }}">Orthopedics</a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/ENT') }}"><img src="/assets-site/img/ourservies/ENT.jpg"
                                                    alt="ENT (Ear, Nose & Throat)"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/ENT') }}">ENT (Ear, Nose & Throat)</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__item hover-effect">
                                        <div class="blog__item__pic">
                                            <a href="{{ url('specific-service/Pediatrics') }}"><img src="/assets-site/img/ourservies/Pediatrics.jpg"
                                                    alt="Pediatrics"></a>
                                        </div>
                                        <div class="blog__item__text">
                                            <h5 style="text-align: center;"><a href="{{ url('specific-service/Pediatrics') }}">Pediatrics</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>
<!-- Services Section End -->

@include('Site.layouts.footer')