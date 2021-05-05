<?php include'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Microsoft Dynamics AX,Microsoft Dynamics CRM,Robotic Process Automation,Products,Blog,Milky" />
<meta name="description" content="Milky offers SME related services that include IT consulting, deploying Microsoft Dynamics enterprise solutions,SharePoint and .Net technologies, Mobile Applications and other technology Products" />
<meta name="author" content="https://www.Milky.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Malli</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css"/>

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css"/>


<!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="revolution/css/rs6.css">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>

</head>

<body>

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
       <!--  <div id="preloader">
          <div id="status">&nbsp;</div>
        </div> -->
        <!-- preloader end -->

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-03">
            
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <div class="d-xl-flex flex-xl-row align-items-xl-center justify-content-xl-between">
                                    <!-- site-branding -->
                                    <div class="site-branding">
                                        <a class="home-link" href="index.php" title="Milky" rel="home">
                                            <img id="logo-img" class="img-center" src="images/logo.png" alt="logo">
                                        </a>
                                    </div><!-- site-branding end -->
                                    
                                    <!--site-navigation -->
                                    <div id="site-navigation" class="site-navigation">
                                        <!-- ttm-topbar-wrapper -->
                                        <div class="ttm-topbar-wrapper clearfix">
                                            <div class="container">
                                                <div class="ttm-topbar-content">
                                                    <div class="topbar-right text-right">
                                                        <ul class="top-contact">
                                                            <li><i class="fa fa-map-marker"></i>177 main Road, Chandler, USA</li>
                                                            <li><i class="fa fa-envelope-o"></i>
                                                            <a href="mailto:sales@Milky.com" title="Email us" style="color:  black !important;">mallikumar1998@gmail.com</a></li>
                                                            <li><i class="fa fa-clock-o"></i>Office Hours: 08:30am - 5:30pm</li>
                                                        </ul>
                                                        <div class="ttm-social-links-wrapper list-inline">
                                                            <ul class="social-icons">
                                                                <li><a href="#" class=" tooltip-bottom" data-tooltip="Linkedin"><i class="fa fa-linkedin"></i></a>
                                                                </li>
                                                                <li><a href="#" class=" tooltip-bottom" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                                                                </li>  
                                                                <li><a href="#" class=" tooltip-bottom" data-tooltip="Instagram"><i class="fa fa-instagram"></i></a>
                                                                </li>
                                                                <li><a href="#" class=" tooltip-bottom" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                                                                </li>                                                              
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- ttm-topbar-wrapper end -->
                                        <div class="ttm-menu-toggle">
                                            <input type="checkbox" id="menu-toggle-form" />
                                            <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                                <span class="toggle-block toggle-blocks-1"></span>
                                                <span class="toggle-block toggle-blocks-2"></span>
                                                <span class="toggle-block toggle-blocks-3"></span>
                                            </label>
                                        </div>
                                        <nav id="menu" class="menu">
                                            <div class="header-btn">
                                                <a class="ttm-btn ttm-btn-size-xs ttm-btn-bgcolor-skincolor" href="tcx_contact.php">Contact us</a>
                                            </div>
                                            <ul class="dropdown">
                                               <li class="<?php if($page == 'home'){echo 'active';} ?>" ><a href="tcx_index.php">Home</a></li>
                                               <li  class="<?php if($page == 'about'){echo 'active';} ?>" ><a href="tcx_about.php">Company</a></li>
                                                <li  class="<?php if($page == 'slu'){echo 'active';} ?>" ><a href="#">Solutions</a>
                                                    <ul>
                                                         <li  class="<?php if($ul == 'ax'){echo 'active';} ?>" ><a href="#">Microsoft Dynamics AX</a>
                                                            <ul>
                                                                <li  class="<?php if($ax == '1'){echo 'active';} ?>" >
                                                                    <a href="d365_manufacturing.php">Manufacturing</a></li>
                                                                <li  class="<?php if($ax == '2'){echo 'active';} ?>">
                                                                    <a href="d365_distribution.php">Distribution</a></li>
                                                                <li  class="<?php if($ax == '3'){echo 'active';} ?>">
                                                                    <a href="d365_warehouse.php">Warehouse Management</a></li>
                                                                <li  class="<?php if($ax == '4'){echo 'active';} ?>">
                                                                    <a href="d365_implementations.php">Implementations</a></li>
                                                                <li  class="<?php if($ax == '5'){echo 'active';} ?>">
                                                                    <a href="d365_migration.php">Migration</a></li>
                                                                <li  class="<?php if($ax == '6'){echo 'active';} ?>">
                                                                    <a href="d365_support.php">Support solutions</a></li>
                                                                <li  class="<?php if($ax == '7'){echo 'active';} ?>">
                                                                    <a href="d365_cpq.php">Configure | Price |Quote</a></li>
                                                                
                                                            </ul>
                                                        </li>
                                                        <li class="<?php if($ul == 'crm'){echo 'active';} ?>" >
                                                            <a href="d365_crm.php">Microsoft Dynamics CRM</a></li>
                                                        <li class="<?php if($ul == 'ra'){echo 'active';} ?>" >
                                                            <a href="robotic_automation.php">Robotic Process Automation</a></li>
                                                        <li class="<?php if($ul == 'sp'){echo 'active';} ?>" >
                                                            <a href="#">Sharepoint</a>
                                                            <ul>
                                                             <li  class="<?php if($sp == '1'){echo 'active';} ?>">
                                                                <a href="sharepoint_product.php">Products</a></li>
                                                              <li  class="<?php if($sp == '2'){echo 'active';} ?>">
                                                                <a href="#">Services</a>
                                                                   <ul>
                                                                    <li class="<?php if($ssv == '1'){echo 'active';} ?>">
                                                                        <a href="sharepoint_consulting.php">SharePoint Consulting</a></li>
                                                                    <li class="<?php if($ssv == '2'){echo 'active';} ?>">
                                                                        <a href="sharepoint_upgrade.php">SharePoint Upgrades &#038; Migrations</a></li>
                                                                   </ul>
                                                              </li>
                                                            </ul>    
                                                        </li>
                                                        <li class="<?php if($ul == 'ms'){echo 'active';} ?>" >
                                                            <a href="#">Mobile Solutions</a>
                                                             <ul>
                                                             <li class="<?php if($ms == '1'){echo 'active';} ?>">
                                                                <a href="tailored.php">Tailored Micro Applications</a></li>
                                                              <li class="<?php if($ms == '2'){echo 'active';} ?>">
                                                                <a href="workflow_approvals.php">Workflow and Approvals</a></li>
                                                            </ul>  
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="<?php if($page == 'product'){echo 'active';} ?>"><a href="#">Products</a>
                                                     <ul>
                                                        <li class="<?php if($pr == '1'){echo 'active';} ?>">
                                                            <a href="tcx_p1.php">Venus</a></li>
                                                        <li  class="<?php if($pr == '2'){echo 'active';} ?>">
                                                            <a href="tcx_p2.php">Facebook</a></li>
                                                        <li  class="<?php if($pr == '3'){echo 'active';} ?>">
                                                            <a href="tcx_p3.php">Fairy</a></li>
                                                        <li  class="<?php if($pr == '4'){echo 'active';} ?>">
                                                            <a href="tcx_p4.php">Firebase</a></li>
                                                        <li  class="<?php if($pr == '5'){echo 'active';} ?>">
                                                            <a href="tcx_p5.php">Keep notes</a></li>
                                                    </ul>
                                                </li>
                                                 <li class="<?php if($page == 'team'){echo 'active';} ?>"><a href="tcx_ourteam.php">Our team</a></li>
                                                <li class="<?php if($page == 'blog'){echo 'active';} ?>"><a href="tcx_blog.php">Blog</a></li>
                                                <li class="<?php if($page == 'career'){echo 'active';} ?>"><a href="tcx_careers.php">Careers</a></li>
                                            </ul>
                                        </nav>
                                    </div><!-- site-navigation end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->

        </header><!--header end-->