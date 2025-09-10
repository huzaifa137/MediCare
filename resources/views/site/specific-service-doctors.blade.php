@include('Site.layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="/assets-site/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>{{$serviceName}}</h2>
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

<!-- Pricing Section Begin -->
<section class="pricing spad">
    <div class="container">
        <div class="row">

            <div class="col-12 mb-5">
                <h3 class="text-center" style="color:#007BFF;">Professional Doctors under {{ $serviceName }}
                </h3>
            </div>

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
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
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

            <!-- Doctor 1 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Laura Leon">
                        <h5>Dr. Laura Leon</h5>
                        <span>Plastic Surgeon</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Committed to enhancing natural beauty, Dr. Laura blends skill with compassion in every
                            procedure
                        </p>
                        <div style="color: #FFD700; margin-top: 5px; margin-bottom: 10px;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <a href="{{ url('doctor-details-3')}}" class="primary-btn mt-3">consult Dr. Laura</a>
                    </div>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-2.jpg" alt="Dr. John Doe">
                        <h5>Dr. John Doe</h5>
                        <span>Plastic Surgeon</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            With a focus on innovation, Dr. John delivers refined aesthetic results and quality care
                        </p>
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
                        <a href="{{ url('doctor-details-2')}}" class="primary-btn mt-3">consult Dr. John</a>
                    </div>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-3.jpg" alt="Dr. Manuel Benet">
                        <h5>Dr. Manuel Benet</h5>
                        <span>Plastic Surgeon</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Precision and artistry define Dr. Manuel’s approach to both surgical and non-surgical care
                        </p>
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
                        <a href="{{ url('doctor-details-2')}}" class="primary-btn mt-3">Consult Dr. Manuel</a>
                    </div>
                </div>
            </div>

            <!-- Doctor 4 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Laura Leon">
                        <h5>Dr. Laura Leon</h5>
                        <span>Plastic Surgeon</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dr. Laura focuses on balanced results, creating beauty with a natural and personalized touch
                        </p>
                        <div style="color: #FFD700; margin-top: 5px; margin-bottom: 10px;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <a href="{{ url('doctor-details-3')}}" class="primary-btn mt-3">consult Dr. Laura</a>
                    </div>
                </div>
            </div>

            <!-- Doctor 5 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-2.jpg" alt="Dr. John Doe">
                        <h5>Dr. John Doe</h5>
                        <span>Plastic Surgeon</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Trusted for his expertise, Dr. John offers tailored solutions for every patient’s goals
                        </p>
                        <div style="color: #FFD700; margin-top: 5px; margin-bottom: 10px;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <a href="{{ url('doctor-details-2')}}" class="primary-btn mt-3">consult Dr. John</a>
                    </div>
                </div>
            </div>

            <!-- Doctor 6 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-3.jpg" alt="Dr. Manuel Benet">
                        <h5>Dr. Manuel Benet</h5>
                        <span>Plastic Surgeon</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Known for precision and care, Dr. Manuel prioritizes patient safety and satisfaction
                        </p>
                        <div style="color: #FFD700; margin-top: 5px; margin-bottom: 10px;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <a href="{{ url('doctor-details-1')}}" class="primary-btn mt-3">consult Dr. Manuel</a>
                    </div>
                </div>
            </div>

            <!-- Doctor 7 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Laura Leon">
                        <h5>Dr. Laura Leon</h5>
                        <span>Plastic Surgeon</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dr. Laura combines science and art to deliver confident, refined transformations
                        </p>
                        <div style="color: #FFD700; margin-top: 5px; margin-bottom: 10px;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <a href="{{ url('doctor-details-3')}}" class="primary-btn mt-3">consult Dr. Laura</a>
                    </div>
                </div>
            </div>

            <!-- Doctor 8 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-2.jpg" alt="Dr. John Doe">
                        <h5>Dr. John Doe</h5>
                        <span>Plastic Surgeon</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dr. John blends modern techniques with care to ensure safe and beautiful enhancements
                        </p>
                        <div style="color: #FFD700; margin-top: 5px; margin-bottom: 10px;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <a href="{{ url('doctor-details-2')}}" class="primary-btn mt-3">consult Dr. John</a>
                    </div>
                </div>
            </div>

            <!-- Doctor 9 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-3.jpg" alt="Dr. Manuel Benet">
                        <h5>Dr. Manuel Benet</h5>
                        <span>Plastic Surgeon</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dr. Manuel’s approach is rooted in trust, delivering results that respect your vision
                        </p>
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
                        <a href="{{ url('doctor-details-1')}}" class="primary-btn mt-3">consult Dr. Manuel</a>
                    </div>
                </div>
            </div>

            <!-- Doctor 10 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Laura Leon">
                        <h5>Dr. Laura Leon</h5>
                        <span>Plastic Surgeon</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Trusted by many, Dr. Laura is known for her attention to detail and elegant outcomes
                        </p>
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
                        <a href="{{ url('doctor-details-3')}}" class="primary-btn mt-3">consult Dr. Laura</a>
                    </div>
                </div>
            </div>

            <!-- Doctor 11 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-2.jpg" alt="Dr. John Doe">
                        <h5>Dr. John Doe</h5>
                        <span>Plastic Surgeon</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            A leader in modern aesthetics, Dr. John brings excellence to every patient journey
                        </p>
                        <div style="color: #FFD700; margin-top: 5px; margin-bottom: 10px;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <a href="{{ url('doctor-details-2')}}" class="primary-btn mt-3">consult Dr. Laura</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <!-- Doctor Image + Name -->
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-3.jpg" alt="Dr. Manuel Benet">
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
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>

                        <a href="{{ url('doctor-details-1')}}" class="primary-btn mt-3">consult Dr.Manuel</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- Pricing Section End -->

@include('Site.layouts.footer')