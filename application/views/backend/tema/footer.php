<footer id="footer" class="container_12">

                    <!-- .footer-widget-container start -->
                    <ul class="footer-widget-container grid_3">
                        <li class="widget widget_text">
                            <a href="about.html">
                                <img src="<?php echo base_url();?>assets/img/logo-footer.png" alt="logo" />
                            </a>

                            <p>
                                CleanBIZ is super clean but still very creative 
                                HTML5 theme which is suited for use in wide range 
                                of websites, from corporate sites
                                to creative portfolios.

                            </p>
                        </li>
                    </ul><!-- .footer-widget-container end -->

                    <!-- .footer_widget_container start -->
                    <ul class="footer-widget-container grid_3">
                        <li class="widget widget_recent_entries">
                            <div class="title">
                                <h5>LATEST POSTS</h5>
                            </div>
                            <ul>
                                <li>
                                    <a href="blog-single.html">Claritas est etiam processus dynamicus</a>
                                </li>

                                <li>
                                    <a href="blog-single.html">Mirum est notare quam littera gothica</a>
                                </li>

                                <li>
                                    <a href="blog-single.html"> Eodem modo typi lorem elit</a>
                                </li>

                                <li>
                                    <a href="blog-single.html">Nam liber tempor cum soluta</a>
                                </li>
                            </ul>

                        </li>
                    </ul><!-- .footer_widget_container end -->

                    <!-- .footer_widget_container start -->
                    <ul class="footer-widget-container grid_3">
                        <li class="widget social-feed picasa-feed">
                            <div class="title">
                                <h5>picasa stream</h5>
                            </div>
                        </li>
                    </ul><!-- .footer_widget_container end -->

                    <!-- .footer_widget_container start -->
                    <ul class="footer-widget-container grid_3">
                        <!-- .widget_text start -->
                        <li class="widget widget_text">
                            <div class="title">
                                <h5>contact info</h5>
                            </div>

                            <ul class="quick-contact-info">
                                <li>Adress: 1600 Some Street, Some Avenue,
                                    <br />
                                    Mountain View, CA 90210
                                </li>

                                <li>Phone: +00 123 4567</li>
                                <li>Email: <a href="mailto:support@pixel-industry.com">pixel-industry.com</a></li>
                            </ul>
                        </li><!-- widget_text end -->
                    </ul><!-- .footer_widget_container end -->


                </footer><!-- #footer end -->

                <!-- .copyright-container start -->
                <section class="copyright-container">

                    <div class="copyright container_12">
                        <p>
                            Copyright CleanBIZ 2013, All rights reserved.
                        </p>

                        <ul class="social-links">
                            <li>
                                <a href="#" class="pixons-twitter-1"></a>
                            </li>

                            <li>
                                <a href="#" class="pixons-dribbble"></a>
                            </li>

                            <li>
                                <a href="#" class="pixons-facebook-1"></a>
                            </li>

                            <li>
                                <a href="#" class="pixons-behance"></a>
                            </li>

                            <li>
                                <a href="#" class="pixons-skype"></a>
                            </li>
                        </ul>
                    </div>
                </section><!-- .copyright container end -->

            </div><!-- #footer-wrapper end -->
        </div><!-- #page-wrap end -->

        <!-- scripts -->
        <script  src="<?php echo base_url();?>assets/js/jquery-1.8.3.js"></script> <!-- jQuery library -->   
        <script  src="<?php echo base_url();?>assets/js/jquery.placeholder.min.js"></script><!-- jQuery placeholder fix for old browsers -->
        <script  src="<?php echo base_url();?>assets/js/socialstream.jquery.js"></script> <!-- Social Networks Feeds -->
        <script  src="<?php echo base_url();?>assets/js/jquery.tweetscroll.js"></script> <!-- jQuery tweetscroll plugin -->
        <script  src="<?php echo base_url();?>assets/js/jquery.nivo.slider.js"></script><!-- nivo slider -->
        <script  src="<?php echo base_url();?>assets/js/include.js"></script> <!-- jQuery custom options -->

        <script> 
            /* <![CDATA[ */
            /* NIVO SLIDER */
            $(window).load(function() {
                $('#slider').nivoSlider({
                    controlNav: false
                });
            });
            
            $(window).load(function() {
                $('#slider2').nivoSlider({
                    controlNav: false,
                    auto: false
                });
            });
            
            /* TWEETSCROLL */
            $('.tweets-list-container').tweetscroll({
                username: 'pixel_industry', 
                time: true, 
                limit: 11, 
                replies: true, 
                position: 'append',
                date_format: 'style2',
                animation: 'fade',
                visible_tweets: 1
            });
            /* ]]> */
        </script>
    </body>


</html>
