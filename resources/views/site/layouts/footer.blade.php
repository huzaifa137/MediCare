<!-- Footer Section Begin -->
<footer class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer__logo">
                        <a href="javascript:void();"><img src="/assets-site/img/footer-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="footer__newslatter">
                        <form action="javascript:void();">
                            <input type="text" placeholder="Email">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__social">
                        <a href="javascript:void();"><i class="fa fa-facebook"></i></a>
                        <a href="javascript:void();"><i class="fa fa-twitter"></i></a>
                        <a href="javascript:void();"><i class="fa fa-instagram"></i></a>
                        <a href="javascript:void();"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="{{url('/index')}}">Home</a></li>
                        <li><a href="{{url('/about')}}">About</a></li>
                        <li><a href="{{url('/services')}}"> Services</a></li>
                        <li><a href="{{url('/doctor')}}">Doctors</a></li>
                        <li><a href="{{url('/contact')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__address">
                    <h5>Contact Us</h5>
                    <ul>
                        <li><i class="fa fa-map-marker"></i>{{Helper::app_info('location')}}</li>
                        <li><i class="fa fa-phone"></i>{{Helper::app_info('phone')}}</li>
                        <li><i class="fa fa-envelope"></i>{{Helper::app_info('email')}}</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-6">
                <div class="footer__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.320548388494!2d32.59456581527624!3d0.33080139911772126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177db4d716fed865%3A0x602d3b87e0c19571!2s16%20Acacia%20Ave%2C%20Kampala%2C%20Uganda!5e0!3m2!1sen!2sug!4v1694168800000!5m2!1sen!2sug"
                        height="190" style="border:0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>

    <div class="footer__copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright__text" style="text-align: center;">
                        <p>
                            &copy;
                            <script>document.write(new Date().getFullYear());</script> mediCare. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="/assets-site/js/jquery-3.3.1.min.js"></script>
<script src="/assets-site/js/bootstrap.min.js"></script>
<script src="/assets-site/js/jquery.magnific-popup.min.js"></script>
<script src="/assets-site/js/masonry.pkgd.min.js"></script>
<script src="/assets-site/js/jquery-ui.min.js"></script>
<script src="/assets-site/js/jquery.nice-select.min.js"></script>
<script src="/assets-site/js/jquery.slicknav.js"></script>
<script src="/assets-site/js/owl.carousel.min.js"></script>
<script src="/assets-site/js/main.js"></script>
</body>

</html>