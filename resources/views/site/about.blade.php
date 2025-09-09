@include('Site.layouts.header')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="/assets-site/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>About Us</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ url('index') }}">Home</a>
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about__video set-bg" data-setbg="/assets-site/img/about-video.jpg">
                    <a href="https://www.youtube.com/watch?v=PXsuI67s2AA" class="play-btn video-popup"><i
                            class="fa fa-play"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about__text">
                    <div class="section-title">
                        <span>ABOUT OUR PLATFORM</span>
                        <h2>Welcom to the {{Helper::app_name()}}</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <ul>
                        <li><i class="fa fa-check-circle"></i> Routine and medical care</li>
                        <li><i class="fa fa-check-circle"></i> Excellence in Healthcare every</li>
                        <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                    </ul>
                    <a href="{{ url('contact')}} " class="primary-btn normal-btn">Contact us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

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

<!-- Testimonials Section Begin -->
<section class="testimonials spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <span>Testimonials</span>
                    <h2>Happy clients</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testimonial__slider owl-carousel">
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Sarah Johnson</h5>
                                <span>Teacher</span>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>The online consultation was so convenient and the doctor was very attentive to my concerns.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Michael Lee</h5>
                                <span>Software Engineer</span>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Efficient and professional service. I got my prescription quickly without leaving home. Truly life-changing.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Emily Davis</h5>
                                <span>Freelancer</span>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Professional, caring, and quick responses. This platform made managing my chronic condition much easier.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="testimonial__author__text">
                                <h5>James Carter</h5>
                                <span>Entrepreneur</span>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Reliable and trustworthy service. The doctors genuinely care and explain everything clearly.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Linda Martinez</h5>
                                <span>Designer</span>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Great platform for quick medical advice. The support team is friendly and very helpful throughout.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Robert Wilson</h5>
                                <span>Accountant</span>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>The ease of use and professionalism of the doctors make this service stand out. I’m very satisfied!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section End -->


@include('Site.layouts.footer')