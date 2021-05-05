<?php $page = 'career'; include'header.php';

$vid=$_GET['id'];
 ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_careers WHERE id=?");
$statement->execute(array($vid));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
                                $jid      = $row['job_id'];
                                $title    = $row['job_title'];
                                $category = $row['job_category'];
                                $location = $row['location'];
                                $sdt      = $row['starting_dt'];
                                $edt      = $row['ending_dt'];
                             $description = $row['description'];
                               $posted_by = $row['posted_by'];

                               $orderdatexx = explode('-',  $sdt);
                                            $yearxx  = $orderdatexx[0];
                                            $monthxx = $orderdatexx[1];
                                            $dayxx   = $orderdatexx[2];
                                            $stmonth = date("F", strtotime($sdt));
                                            $stdte =  date('M', strtotime( $stmonth. '01'));
                                            $stdate = $stdte.' '.$dayxx.', '.$yearxx;
                               
}
?>

<?php
if (isset($_POST['form1'])) {
                
    $ftname=$_POST['ftname'];
    $ltname=$_POST['ltname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $file=$_FILES['uploaded_file']['name'];

    $fullname =$ftname.''.$ltname; 
    
     // print_r($_FILES);
            
    if($file!='') {
    $errors     = array();
    $maxsize    = 5242880;
    $acceptable = array(
        'application/pdf',
        'application/docx'
    );
   

    if(($_FILES['uploaded_file']['size'] >= $maxsize) ) {
        
        $errors[] = 'File too large. File must be less than 5 MB.';
    }

    if(count($errors) === 0) {
       
         $path = $_FILES['uploaded_file']['name'];
         if($path!=''){
            $uniquesavename= $jid .'-'.rand ( 10000 , 99999 );
            $path_tmp = $_FILES['uploaded_file']['tmp_name'];  
            $ext = pathinfo( $path, PATHINFO_EXTENSION );
            $file_name = basename( $path, '.' . $ext );
            $final_name = $fullname.'-'.$uniquesavename.'.'.$ext;
            move_uploaded_file( $path_tmp, 'cv/'.$final_name );
             }else
           {
               $final_name='';
           }
        
        
        $statement = $pdo->prepare("INSERT INTO job_resume (
                                       career_id,job_id,job_title,ftname,ltname,email,phone,country,state,resume
                                    ) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $statement->execute(array($vid,$jid,$title,$ftname,$ltname,$email,$phone,$country,$state,$final_name));
            
            
                echo "<script>alert('Your resume has been submitted successfully');</script>";
        
    } else {
        foreach($errors as $error) {
            echo '<script>alert("'.$error.'");</script>';
        }

        die(); //Ensure no more processing is done
    }
    }         }
?>

        <!-- page-title -->
        <div class="ttm-page-title-row" style="padding-bottom: 0px !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box text-center">
                            <!-- <div class="page-title-heading">
                             
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>                     
        </div>
        <!--site-main start-->
        <div class="site-main">
        <!-- sidebar -->
        <div class="sidebar ttm-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12 content-area" style="padding-top: 20px;">
                        <!-- ttm-service-single-content-are -->
                        <article class="post ttm-blog-single clearfix">
                          
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-single-content">
                                <div class="entry-content">
                                    <h4><?php echo $title; ?> <span style="font-size: 13px;"> - (Job id: <?php echo $jid; ?>)</span></h4>
                                    <div class="ttm-post-entry-header">
                                        <div class="post-meta">
                                             <span class="ttm-meta-line byline"><i class="fa fa-user"></i>By <?php echo $posted_by; ?></span>
                                            <span class="ttm-meta-line entry-date"><i class="fa fa-calendar"></i><time class="entry-date published">
                                                <?php echo $stdate; ?></time></span>
                                            <span class="ttm-meta-line byline"><i class="fa fa-map-marker"></i> <b><?php echo $location; ?></b>
                                            </span>
                                        </div>
                                    </div>
                                    <p> <a class="ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-bgcolor-skincolor" href="#" title=""><?php echo $category; ?></a> 
                                   </p>

                                    <?php echo $description; ?> 

                                    <br>
                                   
                            <!-- collapse -->
                           <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo">Apply for job</button>
                              <div id="demo" class="collapse" style="padding-top: 6px;width: 80%;">

                               <div class="ttm-bg ttm-right-span" style="padding: 21px;background-color: #fff4ef;">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-bg-layer-inner"></div>
                                </div>
                                <form id="ttm-quote-form" class="row ttm-quote-form clearfix" method="post" action="" enctype="multipart/form-data">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input name="ftname" type="text" class="form-control bg-white" placeholder="First name*" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input name="ltname" type="text" placeholder="Last name*" required="required" class="form-control bg-white">
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
                                            <input name="phone" type="text" placeholder="Phone*" required="required" class="form-control bg-white"
                                            pattern="[0-9]{10}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input name="country" type="text" placeholder="Country*" required="required" class="form-control bg-white">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input name="state" type="text" placeholder="State" required="required" class="form-control bg-white">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Upload your resume<span style="color: red">*</span></label>
                                            <input name="uploaded_file" type="file" placeholder="Resume" required="required" class="form-control bg-white" 
                                            accept=".pdf,.docx,.doc">
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
                            <!-- collapse -->

                            </div>
                         </div><!-- ttm-blog-classic-content end -->
                        </article>
                        <!-- ttm-service-single-content-are end -->
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->
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
                                            <p>1767 E Queen Creek Road, Suite #4,<br> Chandler, AZ 85286</p>
                                        </div>
                                    </div>
                                </div><!--  featured-icon-box END -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 order-md-3">
                            <div class="text-sm-right">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-icon-btn-left ttm-btn-color-white" href="mailto:sales@technicax.com" title="subscribtion"> sales@technicax.com <i class="fa fa-envelope-o"></i></a>
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
                                <span>Copyright © 2021&nbsp;<a href="#">Technicax</a></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right res-767-mt-10">
                                <div class="d-lg-inline-flex">
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