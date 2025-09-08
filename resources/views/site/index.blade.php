@include('Site.layouts.header')

<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="/assets-site/img/hero-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero__text">
                    <span>Your Health, Our Priority</span>
                    <h2>Take the world's best quality Treadment</h2>
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
            <div class="col-lg-4">
                <div class="consultation__form">
                    <div class="section-title">
                        <span>REQUEST FOR YOUR</span>
                        <h2>Consultation</h2>
                    </div>
                    <form action="javascript:void();">
                        <input type="text" placeholder="Name">
                        <input type="text" placeholder="Email">
                        <div class="datepicker__item">
                            <input type="text" placeholder="Date" class="datepicker">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <select>
                            <option value="">Type of service</option>
                            <option value="">Advanced equipment</option>
                            <option value="">Qualified doctors</option>
                            <option value="">Certified services</option>
                            <option value="">Emergency care</option>
                        </select>
                        <button type="submit" class="site-btn">Book appoitment</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="consultation__text">
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
    </div>
</section>
<!-- Consultation Section End -->

<!-- Chooseus Section Begin -->
<section class="chooseus spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <span>Why choose us?</span>
                    <h2>Offer for you</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="chooseus__item">
                    <img src="/assets-site/img/icons/ci-1.png" alt="">
                    <h5>Advanced equipment</h5>
                    <p>We use modern tools and diagnostic systems to ensure accurate and timely treatment.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="chooseus__item">
                    <img src="/assets-site/img/icons/ci-2.png" alt="">
                    <h5>Qualified doctors</h5>
                    <p>All our doctors are certified professionals with years of clinical experience.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="chooseus__item">
                    <img src="/assets-site/img/icons/ci-3.png" alt="">
                    <h5>Certified services</h5>
                    <p>We follow strict medical guidelines and are accredited by trusted health bodies.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="chooseus__item">
                    <img src="/assets-site/img/icons/ci-4.png" alt="">
                    <h5>Emergency care</h5>
                    <p>Immediate online consultations available for urgent medical concerns and advice.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Chooseus Section End -->

<!-- Services Section Begin -->
<section class="services spad set-bg" data-setbg="/assets-site/img/services-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6">
                <div class="section-title">
                    <span>Our services</span>
                    <h2>Offer for you</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services__btn">
                    <a href="{{ url('contact')}} " class="primary-btn">Contact us</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <span class="flaticon-024-abdominoplasty"></span>
                    </div>
                    <div class="services__item__text">
                        <h5>Online Consultations</h5>
                        <p>Speak with licensed doctors online for diagnosis, advice, and treatment plans.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <span class="flaticon-027-beauty"></span>
                    </div>
                    <div class="services__item__text">
                        <h5>Prescription Services</h5>
                        <p>Get secure, fast prescriptions delivered to your inbox or preferred pharmacy.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <span class="flaticon-031-anatomy"></span>
                    </div>
                    <div class="services__item__text">
                        <h5>Chronic Care Plans</h5>
                        <p>Manage long-term conditions like diabetes, asthma, and hypertension online.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <span class="flaticon-008-abdominoplasty"></span>
                    </div>
                    <div class="services__item__text">
                        <h5>Mental Health Support</h5>
                        <p>Access licensed therapists and mental health professionals via secure chat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section End -->

<!-- Team Section Begin -->
<section class="team spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <span>Our Team</span>
                    <h2>Our Expert Doctors</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Doctor 1 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="/assets-site/img/team/team-1.jpg" alt="">
                    <h5>Caroline Grant</h5>
                    <span>Plastic surgeon</span>
                    <div class="team__item__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="/assets-site/img/team/team-2.jpg" alt="">
                    <h5>Dr. Maria Angel</h5>
                    <span>Plastic surgeon</span>
                    <div class="team__item__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="/assets-site/img/team/team-3.jpg" alt="">
                    <h5>Nathan Mullins</h5>
                    <span>Plastic surgeon</span>
                    <div class="team__item__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>

            <!-- Centered Button -->
            <div class="col-lg-12" style="text-align: center; margin-top: 30px;">
                <div class="latest__btn" style="display: inline-block;">
                    <a href="{{ url('doctor')}} " class="primary-btn">View all doctors</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section End -->

@include('Site.layouts.footer')