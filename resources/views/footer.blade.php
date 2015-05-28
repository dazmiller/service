<div class="buy">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h2>This is <span>The Best</span> way to save money and take back control of your information</h2>
                <h5>It’s Suitable for everyday people to 'flip' the way we do business.</h5>
            </div>
            <div class="col-sm-3 center">
                <a href="{{ url('login') }}" rel="nofollow" target="_blank" class="btn btn-default btn-default2">Register Now</a>
            </div>
        </div>
    </div>
</div><!-- end buy section-->

<footer class="footer-style2">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 mbottom30">
                <a href="index.blade.php">
                    <img src="images/footer-logo.png" alt="" class="default" width="146" height="30" />
                    <img src="images/footer-logo2.png" alt="" class="only3" width="146" height="30" />
                </a>
                <p class="mtop30 f300">Etiam accumsan tristique diam, nec mollis nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                <div class="social mtop25 mbottom30 clearfix">
                    <ul class="reset-list">
                        <li class="ico-twitter animation">
                            <a href="#">
                                <span class="icon-twitter"></span>
                            </a>
                        </li>
                        <li class="ico-facebook animation">
                            <a href="#">
                                <span class="icon-facebook"></span>
                            </a>
                        </li>
                        <li class="ico-google animation">
                            <a href="#">
                                <span class="icon-googleplus"></span>
                            </a>
                        </li>
                        <li class="ico-pinterest animation">
                            <a href="#">
                                <span class="icon-pinterest"></span>
                            </a>
                        </li>
                        <li class="ico-dribbble animation">
                            <a href="#">
                                <span class="icon-dribbble"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 mbottom30">
                <h3>From the Blog</h3>
                <ul class="footer-blog reset-list">
                    <li>
                        <a href="blog-post.blade.php">
                            <img src="images/footer-img.jpg" alt="" width="68" height="68"/>
                        </a>
                        <p>Donec ullamcorper nulla non ms ac is</p>
                        <p class="tcolor">January 22, 2015</p>
                        <div class="clearfix mbottom20"></div>
                    </li>
                    <li>
                        <a href="blog-post.blade.php">
                            <img src="images/footer-img2.jpg" alt="" width="68" height="68"/>
                        </a>
                        <p>Donec ullamcorper nulla non ms ac is </p>
                        <p class="tcolor">January 22, 2015</p>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 mbottom30">
                <h3>Company</h3>
                <ul class="menu-list reset-list">
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="faq.blade.php">FAQs</a>
                    </li>
                    <li>
                        <a href="contact.blade.php">Contact</a>
                    </li>
                    <li>
                        <a href="#">Terms</a>
                    </li>
                    <li>
                        <a href="#">Privacy</a>
                    </li>
                    <li>
                        <a href="testimonials.blade.php">Testimonials</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h3>Newsletter Singup</h3>
                <div id="subscribe" class="footer-subscribe center mbottom10">
                    <form action="http://lorthemes.us8.list-manage1.com/subscribe/post-json?u=42795504a248e486766e563b9&amp;id=f766078320&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email to subscribe" required>
                        <div style="position: absolute; left: -5000px;">
                            <input type="text" name="b_9ed253451c5b914e9c34e388b_6e3ba686ba" value="">
                        </div>
                        <button class="btn-sm btn-small" type="submit" name="subscribe" id="mc-embedded-subscribe"><span class="icon-envelope"></span></button>
                    </form>
                    <div id="notification_container"></div>
                </div>
                <p class="f300">By subscribing to our mailing list you will always be update with the latest news from us.</p>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 center">
                    <p class="copyright">©2015 developed by <strong>LorThemes</strong>. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div><!-- end bottom-footer -->
</footer><!-- end footer -->
</div>
<p id="back-top">
    <a href="#top"><span class="icon-angle-up"></span></a>
</p>


<!-- JavaScript at the bottom for faster page loading -->
<script type= "text/javascript"SRC="js/modernizr.custom.js"></script>
<script type= "text/javascript"SRC="js/bootstrap.js"></script>
<script type= "text/javascript"SRC="js/clean-js-plugins.js"></script>

<!-- CleanLab Scrips File -->
<script type= "text/javascript"SRC="js/cleanlab_script.js"></script>
<!-- DemoPanel -->
<script type= "text/javascript"SRC="js/bootstrap-select.js"></script>
<script type= "text/javascript"SRC="js/evol.colorpicker.min.js"></script>
<script type= "text/javascript"SRC="js/dmss.js"></script>
<!-- Custom Scrips loaded on this page -->
<script type= "text/javascript"SRC="js/jquery.themepunch.plugins.min.js"></script>
<script type= "text/javascript"SRC="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        /* Revolution Slider */
        revapi = jQuery('.tp-banner').revolution(
                {
                    delay:9000,
                    startwidth:1170,
                    startheight:500,
                    hideThumbs:10,
                    fullWidth:"on",
                    forceFullWidth:"on"
                });

        /* Owl Carousel */
        $("#our-team").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3],
            autoPlay : false,
            navigation : true,
            pagination : false,
            navigationText: [
                "<i class='icon-angle-left animation'></i>",
                "<i class='icon-angle-right animation'></i>"
            ]
        });
    });
</script>