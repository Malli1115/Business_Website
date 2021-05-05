<?php  include'header.php'; ?>

<?php
$success_message = '';
if (isset($_POST['form1'])) {
                
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

     $statement = $pdo->prepare("INSERT INTO tbl_contact (
                                       fullname,email,phone,subject,message
                                    ) VALUES (?,?,?,?,?)");
     $statement->execute(array($fullname,$email,$phone,$subject,$message));

   $success_message = 'Thanks for your response!';

 }


    ?>

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box text-center">
                            <div class="page-title-heading">
                                <h1 class="title"> Contact Us</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; : : &nbsp;</span>
                                <span> Contact</span>
                            </div>  
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">

            <!-- services-slide-section -->
            <section class="ttm-row zero-padding-section clearfix">
                <div class="container">
                    <div class="row no-gutters"><!-- row -->
                        <div class="col-lg-5">
                            <div class="spacing-9">
                                <!-- section title -->
                                <div class="section-title with-desc clearfix">
                                    <div class="title-header">
                                        <h5>Come Visit Us At</h5>
                                        <h2 class="title">Our Address</h2>
                                    </div>
                                </div><!-- section title end -->
                                <div class="row">
                                    <div class="col-12">
                                        <!-- featured-icon-box -->
                                        <div class="featured-icon-box style2 left-icon icon-align-top">
                                            <div class="featured-icon"><!-- featured-icon -->
                                                <div class="ttm-icon ttm-icon_element-size-md ttm-icon_element-style-round">
                                                    <img src="images/photos/usa_flag.png" 
                                                    style="width: 60px;">
                                                    <!-- <i class="fa fa-map-marker"></i> -->
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title"><!-- featured title -->
                                                    <h5>USA</h5>
                                                </div>
                                                <div class="featured-desc"><!-- featured desc -->
                                                    <p>177 main Road, Suite #4,<br>
                                                     Chandler, USA.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- separator -->
                                <div class="separator">
                                    <div class="sep-line mt-25 mb-25"></div>
                                </div>
                                <!-- separator -->
                                <div class="row">
                                    <div class="col-12">
                                        <!-- featured-icon-box -->
                                        <div class="featured-icon-box style2 left-icon icon-align-top">
                                            <div class="featured-icon"><!-- featured-icon -->
                                                <div class="ttm-icon ttm-icon_element-size-md ttm-icon_element-style-round">
                                                    <img src="images/photos/ind_flag.png" 
                                                    style="width: 60px;">
                                                    <!-- <i class="fa fa-map-marker"></i> -->
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title"><!-- featured title -->
                                                    <h5>India</h5>
                                                </div>
                                                <div class="featured-desc"><!-- featured desc -->
                                                     <p>18-32, Second Street,<br>
                                                      Chennai 600012.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- separator -->
                                <div class="separator">
                                    <div class="sep-line mt-25 mb-25"></div>
                                </div>
                                <!-- separator -->
                                <div class="row">
                                    <div class="col-12">
                                        <!-- featured-icon-box -->
                                        <div class="featured-icon-box style2 left-icon icon-align-top">
                                            <div class="featured-icon"><!-- featured-icon -->
                                                <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md ttm-icon_element-style-round">
                                                    <i class="ti ti-email"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title"><!-- featured title -->
                                                    <h5>Our Email</h5>
                                                </div>
                                                <div class="featured-desc"><!-- featured desc -->
                                                    <p>mallikumar1998@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="spacing-10 ttm-bgcolor-grey ttm-bg ttm-col-bgcolor-yes ttm-right-span">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-bg-layer-inner"></div>
                                </div>
                                <!-- section title -->
                                <div class="section-title with-desc clearfix">
                                    <div class="title-header">
                                        <h5>Send Message</h5>
                                        <h2 class="title">Drop Us A Line</h2>
                                    </div>
                                    <?php if($success_message): ?> <center><h5 style="color: green"><?php echo $success_message; ?></h5></center> 
                                    <?php endif; ?>
                                </div><!-- section title end -->

                                <form id="ttm-quote-form" class="row ttm-quote-form clearfix" method="post" action="" enctype="multipart/form-data">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input name="fullname" type="text" class="form-control bg-white" placeholder="Full Name*" required="required">
                                        </div>
                                    </div>
                                     <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input name="email" type="text" placeholder="Email*" required="required" class="form-control bg-white" 
                                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input name="phone" type="text" placeholder="Phone Number*" required="required" class="form-control bg-white"
                                            pattern="[0-9]{10}">
                                        </div>
                                    </div>   
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input name="subject" type="text" placeholder="Subject*" required="required" class="form-control bg-white">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" rows="5" placeholder="Write A Massage*" required="required" class="form-control bg-white"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-left">
                                            <input type="submit" id="submit" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor" name="form1" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- row -->
                    <div class="row">
                        
                    </div><!-- row end-->
                </div>
            </section>
            <!-- services-slide-section end -->

            <!-- map-section -->
            <div class="ttm-row map-section clearfix">
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-12">
                            <!--map-start-->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509169.493950532!2d-123.80033628862634!3d37.192974574894784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1620108527988!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <!--map-end-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- map-section end -->

        </div><!--site-main end-->

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
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-icon-btn-left ttm-btn-color-white" href="mailto:Info@example.com" title="subscribtion"> mallikumar1998@gmail.com <i class="fa fa-envelope-o"></i></a>
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
                                    <li><a href="#">Make Appointment</a></li>
                                    <li><a href="#">Customer Services</a></li>
                                    <li><a href="#">Department Services</a></li>
                                    <li><a href="#">About Company</a></li>
                                    <li><a href="#">Our Case Studies</a></li>
                                    <li><a href="#">Free Consultation</a></li>
                                    <li><a href="#">Meet Our Experts</a></li>
                                    <li><a href="#">Our Business Growth</a></li>
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
                                    <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                                        <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                            <i class="fa fa-envelope"></i>
                                            <input type="email" name="email" placeholder="Email Address.." required="">
                                            <input type="submit" value="">
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
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Services</a></li>
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

        <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <script>

            function initialize() {
                var latlng = new google.maps.LatLng(-34.397, 150.644);
                var myOptions = {
                    zoom: 8,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("map_canvas"),
                        myOptions);
            }
            google.maps.event.addDomListener(window, "load", initialize);

        </script>

        <!-- Javascript end-->

</body>
</html>