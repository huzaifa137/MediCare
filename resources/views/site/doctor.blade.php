@include('Site.layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="/assets-site/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Highly Qualified Consultants</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ url('index') }}">Home</a>
                        <span>Doctors</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Pricing Section Begin -->
{{-- <section class="pricing spad">
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
</section> --}}

<section class="pricing spad">
    <div class="container">
        <h2 class="text-center mb-5">Pediatrics 👶</h2>
        <div class="row" style="border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px;">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item" >
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Laura Leon" style="border-radius: 5px;">
                        <h5>Dr. Laura Leon</h5>
                        <span>Pediatrician</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dr. Laura is a caring pediatrician dedicated to the health and well-being of children. She
                            excels in providing compassionate, patient-centered care.
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
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item" style="border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px;">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-2.jpg" alt="Dr. John Doe" style="border-radius: 5px;">
                        <h5>Dr. John Doe</h5>
                        <span>Pediatrician</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dr. John is an expert in pediatric medicine, focusing on preventative care and child
                            development to ensure healthy futures.
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
                        <a href="{{ url('doctor-details-2')}}" class="primary-btn mt-3">consult Dr. John</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item" style="border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px;">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-3.jpg" alt="Dr. Manuel Benet" style="border-radius: 5px;">
                        <h5>Dr. Manuel Benet</h5>
                        <span>Pediatrician</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            With a gentle approach and vast experience, Dr. Manuel provides top-tier care for children
                            from infancy to adolescence.
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
                        <a href="{{ url('doctor-details-1')}}" class="primary-btn mt-3">Consult Dr. Manuel</a>
                    </div>
                </div>
            </div>
        </div>
        
        <h2 class="text-center my-5">Mental Health 🧠</h2>
        <div class="row" style="border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px;">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item" style="border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px;">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Laura Leon" style="border-radius: 5px;">
                        <h5>Dr. Laura Leon</h5>
                        <span>Psychiatrist</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dr. Laura provides empathetic and effective mental health support, specializing in cognitive
                            behavioral therapy and stress management.
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
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item" style="border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px;">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-2.jpg" alt="Dr. John Doe" style="border-radius: 5px;">
                        <h5>Dr. John Doe</h5>
                        <span>Psychologist</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dr. John applies innovative psychological approaches to help patients achieve mental
                            well-being and personal growth.
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
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item" style="border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px;">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-3.jpg" alt="Dr. Manuel Benet" style="border-radius: 5px;">
                        <h5>Dr. Manuel Benet</h5>
                        <span>Psychotherapist</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dr. Manuel offers supportive psychotherapy, building trust and guiding patients towards
                            emotional resilience and clarity.
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
        </div>
        
        <h2 class="text-center my-5">Dermatology ✨</h2>
        <div class="row" style="border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px;">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item" style="border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px;">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Laura Leon" style="border-radius: 5px;">
                        <h5>Dr. Laura Leon</h5>
                        <span>Dermatologist</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dr. Laura combines science and art to deliver confident, refined transformations
                            for all skin types and concerns.
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
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item" style="border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px;">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-2.jpg" alt="Dr. John Doe" style="border-radius: 5px;">
                        <h5>Dr. John Doe</h5>
                        <span>Dermatologist</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dr. John blends modern techniques with care to ensure safe and beautiful enhancements
                            for skin health and appearance.
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
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item" style="border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px;">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-3.jpg" alt="Dr. Manuel Benet" style="border-radius: 5px;">
                        <h5>Dr. Manuel Benet</h5>
                        <span>Dermatologist</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dr. Manuel’s approach is rooted in trust, delivering results that respect your vision
                            for healthy and radiant skin.
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
        </div>
        
        <h2 class="text-center my-5">Cardiology ❤️</h2>
        <div class="row" style="border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px;">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item" style="border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px;">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Laura Leon" style="border-radius: 5px;">
                        <h5>Dr. Laura Leon</h5>
                        <span>Cardiologist</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            With a passion for heart health, Dr. Laura provides comprehensive care and personalized
                            treatment plans for her patients.
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
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item" style="border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px;">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-2.jpg" alt="Dr. John Doe" style="border-radius: 5px;">
                        <h5>Dr. John Doe</h5>
                        <span>Cardiologist</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dr. John is a leading cardiologist, utilizing advanced techniques to ensure optimal heart
                            health and patient well-being.
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
                        <a href="{{ url('doctor-details-2')}}" class="primary-btn mt-3">consult Dr. John</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item" style="border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 30px;">
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-3.jpg" alt="Dr. Manuel Benet" style="border-radius: 5px;">
                        <h5>Dr. Manuel Benet</h5>
                        <span>Cardiologist</span>
                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dedicated to patient-centered care, Dr. Manuel excels in diagnosing and treating
                            cardiovascular conditions with precision.
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
                        <a href="{{ url('doctor-details-1')}}" class="primary-btn mt-3">consult Dr. Manuel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Section End -->

@include('Site.layouts.footer')