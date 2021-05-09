
<?php
if (isset($_POST['form1'])) {
                
    $sub_email=$_POST['sub_email'];
    $today = date("m-d-Y");


        $statement = $pdo->prepare("INSERT INTO tbl_subscriber (
                                       subs_email,subs_date,subs_active
                                    ) VALUES (?,?,?)");
        $statement->execute(array($sub_email,$today,'1'));
            
            
                // echo "<script>alert('Thanks for your subscribtion');</script>";

     }

    ?>

 <!--footer start-->
        <footer class="footer widget-footer clearfix">
            <div class="first-footer ttm-bgcolor-skincolor ttm-bg ttm-bgimage-yes bg-img1">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <div class="row align-items-md-center">
                        <div class="col-lg-4 col-md-4 col-sm-12 order-md-2">
                            <div class="footer-logo text-sm-center">
                                <img src="images/footer-logo.png" alt="footer-logo">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 order-md-1">
                            <div class="text-left">
                                <!--  featured-icon-box --> 
                                <div class="featured-icon-box left-icon icon-align-top">
                                    <div class="featured-icon"><!--  featured-icon --> 
                                        <div class="ttm-icon ttm-icon_element-color-white ttm-icon_element-size-md">
                                            <i class="ti ti-location-pin"></i><!--  ttm-icon --> 
                                        </div>
                                    </div>
                                    <div class="featured-content"><!--  featured-content --> 
                                        <div class="featured-desc">
                                            <p>177 main Road, Suite #4,<br> Chandler, USA</p>
                                        </div>
                                    </div>
                                </div><!--  featured-icon-box END -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 order-md-3">
                            <div class="text-sm-right">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-icon-btn-left ttm-btn-color-white" href="mailto:sales@technicax.com" title="subscription"> mallikumar1998@gmail.com <i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer ttm-textcolor-white bg-img2">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text  clearfix">
                                <h3 class="widget-title">About Our Company</h3>
                                <div class="textwidget widget-text">
                                    We are the best world Information Technology Company. Providing the highest quality in hardware &amp; Network solutions. About more than 20 years of experience and 1000 of innovative achievements.
                                </div>
                                <div class="quicklink-box">
                                    <!--  featured-icon-box --> 
                                    <div class="featured-icon-box left-icon">
                                        <div class="featured-icon"><!--  featured-icon --> 
                                            <div class="ttm-icon ttm-icon_element-style-round ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md ttm-icon_element-style-round">
                                                <span class="flaticon flaticon-clock"></span><!--  ttm-icon --> 
                                            </div>
                                        </div>
                                        <div class="featured-content"><!--  featured-content -->
                                            <div class="featured-desc"><!--  featured-desc -->
                                                <p>Talk To Our Support</p>
                                            </div>
                                            <div class="featured-title"><!--  featured-title -->
                                                <h5>+1 002-123-4567</h5>
                                            </div>
                                        </div>
                                    </div><!--  featured-icon-box END -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget link-widget clearfix">
                               <h3 class="widget-title">Quick Links</h3>
                                <ul id="menu-footer-services">
                                    <li><a href="tcx_contact.php">Make Appointment</a></li>
                                    <li><a href="tcx_contact.php">Customer Services</a></li>
                                    <li><a href="tcx_about.php">About Company</a></li>
                                    <li><a href="tcx_contact.php">Free Consultation</a></li>
                                    <li><a href="tcx_ourteam.php">Meet Our Experts</a></li>
                                    <li><a href="tcx_about.php">Our Business Growth</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text clearfix">
                                <h3 class="widget-title">Latest News</h3>
                                <ul class="widget-post ttm-recent-post-list">
                                    <li>
                                        <a href="#"><img src="https://via.placeholder.com/150X150/444444.jpg" alt="post-img"></a>
                                        <a href="#">Define World Best IT Solution Technology</a>
                                        <span class="post-date"><i class="fa fa-calendar"></i>May 01, 2019</span>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://via.placeholder.com/150X150/444444.jpg" alt="post-img"></a>
                                        <a href="#">You Must Try 20 Secret Of Digital Transform</a>
                                        <span class="post-date"><i class="fa fa-calendar"></i>May 03, 2019</span>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://via.placeholder.com/150X150/444444.jpg" alt="post-img"></a>
                                        <a href="#">10 PHP Frameworks You Need To Use Anywhere</a>
                                        <span class="post-date"><i class="fa fa-calendar"></i>May 05, 2019</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget flicker_widget clearfix">
                               <h3 class="widget-title">News Letter</h3>
                               <div class="textwidget widget-text">
                                    Sign up today for hints, tips and the latest product news

                                    <form id="subscribe-form" class="newsletter-form" method="post" action="">
                                        <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                            <i class="fa fa-envelope"></i>
                                            <input type="email" name="sub_email" placeholder="Email Address.."  
                                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                            <input type="submit" value="" name="form1">
                                        </div>
                                        <div id="subscribe-msg"></div>
                                    </form>

                                    <h5 class="mb-20">Follow Us On</h5>
                                    <div class="social-icons circle social-hover">
                                        <ul class="list-inline">
                                            <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="social-flickr"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text ttm-bgcolor-darkgrey ttm-textcolor-white">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-6">
                            <div class="">
                                <span>Copyright © 2021&nbsp;<a href="#">Malli</a></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right res-767-mt-10">
                                <div class="d-lg-inline-flex">
                                    <ul id="menu-footer-menu" class="footer-nav-menu">
                                        <li><a href="tcx_about.php">About Us</a></li>
                                        <li><a href="#">Privacy</a></li>
                                    </ul>
                                    <div class="float-md-right ml-20 res-767-ml-0">
                                        <img src="images/footer-payment-img.png" alt="payment-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->

        <!-- Javascript -->

        <script src="js/jquery.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.js"></script>    
        <script src="js/jquery-waypoints.js"></script>    
        <script src="js/jquery-validate.js"></script> 
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/numinate.min.js?ver=4.9.3"></script>
        <script src="js/lazysizes.min.js"></script>
        <script src="js/main.js"></script>

        <!-- Revolution Slider -->
        <script src="revolution/js/revolution.tools.min.js"></script>
        <script src="revolution/js/rs6.min.js"></script>
        <script src="revolution/js/slider.js"></script>

        <!-- Javascript end-->

</body>
</html>
