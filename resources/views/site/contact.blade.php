@include('Site.layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="/assets-site/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Contact Us</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ url('index') }}">Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="contact__widget">
                    <div class="contact__widget__icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="contact__widget__text">
                        <h5>Address</h5>
                        <p>{{Helper::app_info('location')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="contact__widget">
                    <div class="contact__widget__icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="contact__widget__text">
                        <h5>Hotline</h5>
                        <p>{{Helper::app_info('phone')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="contact__widget">
                    <div class="contact__widget__icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="contact__widget__text">
                        <h5>Email</h5>
                        <p>{{Helper::app_info('email')}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact__content">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__pic">
                        <img src="/assets-site/img/contact-pic.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <h3>Get in touch</h3>
                        <form action="javascript:void();">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Email">
                            <input type="text" placeholder="Website">
                            <textarea placeholder="Message"></textarea>
                            <button type="submit" class="site-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

@include('Site.layouts.footer')