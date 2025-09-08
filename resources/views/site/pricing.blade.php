@include('Site.layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="/assets-site/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Our Prices</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ url('index') }}">Home</a>
                        <span>Pricing</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Pricing Section Begin -->
<section class="pricing spad">
    <div class="container">
        <div class="row">
            <!-- Doctor 1 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <!-- Doctor Image + Name -->
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Laura Leon">
                        <h5>Dr. Laura Leon</h5>
                        <span>Plastic Surgeon</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>

                    <!-- Pricing Title -->
                    <div class="pricing__item__title">
                        <p>BREASTS</p>
                    </div>

                    <!-- Procedures List -->
                    <ul>
                        <li>
                            <h6>Belt Lipectomy (Body Lift)</h6><span>$14,630</span>
                        </li>
                        <li>
                            <h6>Brachioplasty (Arm Lift)</h6><span>$7,750</span>
                        </li>
                        <li>
                            <h6>Liposuction (Whole Body)</h6><span>$3,550 – 8,500</span>
                        </li>
                        <li>
                            <h6>Thigh / Buttock Lift</h6><span>$10,100</span>
                        </li>
                    </ul>

                    <!-- Call-to-action -->
                    <a href="#" class="primary-btn">Book now</a>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-2.jpg" alt="Dr. John Doe">
                        <h5>Dr. John Doe</h5>
                        <span>Plastic Surgeon</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="pricing__item__title">
                        <p>Body Contouring</p>
                    </div>
                    <ul>
                        <li>
                            <h6>Abdominoplasty (Tummy Tuck)</h6><span>$9,500</span>
                        </li>
                        <li>
                            <h6>Liposuction (Targeted)</h6><span>$4,000 – 7,000</span>
                        </li>
                        <li>
                            <h6>Mommy Makeover</h6><span>$15,000+</span>
                        </li>
                        <li>
                            <h6>Fat Transfer</h6><span>$5,500</span>
                        </li>
                    </ul>
                    <a href="#" class="primary-btn">Book now</a>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-3.jpg" alt="Dr. Manuel Benet">
                        <h5>Dr. Manuel Benet</h5>
                        <span>Plastic Surgeon</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="pricing__item__title">
                        <p>FACIAL PROCEDURES</p>
                    </div>
                    <ul>
                        <li>
                            <h6>Facelift</h6><span>$12,000</span>
                        </li>
                        <li>
                            <h6>Mini Facelift</h6><span>$7,500</span>
                        </li>
                        <li>
                            <h6>Rhinoplasty (Nose)</h6><span>$9,000</span>
                        </li>
                        <li>
                            <h6>Eyelid Surgery</h6><span>$6,000</span>
                        </li>
                    </ul>
                    <a href="#" class="primary-btn">Book now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section End -->

@include('Site.layouts.footer')