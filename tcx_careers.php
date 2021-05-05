<?php $page = 'career'; include'header.php'; ?>

<?php

$today = date("Y-m-d");
$tdymonth = date("F", strtotime($today));
$shrtname =  date('M', strtotime( $tdymonth. '01'));

$orderdate = explode('-',  $today);
$year  = $orderdate[0];
$month = $orderdate[1];
$day   = $orderdate[2];

?>

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box text-center">
                            <div class="page-title-heading">
                                <h1 class="title"> Career</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; : : &nbsp;</span>
                                <span> Career</span>
                            </div>  
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

       
<!-- element-row -->
            <section class="element-row element-style clearfix" style="padding-bottom: 25px;">
                <div class="container">
                    <p style="text-align: right;">Please upload your current resume and get opportunity <span><a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-round ttm-icon-btn-right ttm-btn-bgcolor-skincolor" href="tcx_apply.php" style="padding: 4px 20px;margin-top: 2px;">Apply</a></span></p>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="section-title clearfix">
                                <h3 class="title">Job Categories</h3>
                            </div>
                            <div class="ttm-tabs ttm-tab-style-vertical row">
                                <div class="col-lg-3 col-md-3">
                                    <!-- tabs -->
                                    <ul class="tabs">
                                        <li class="tab active"><a href="#">Full Time</a></li>
                                        <li class="tab"><a href="#">Internship</a></li>
                                        <li class="tab"><a href="#">Freelance</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-1 col-md-1">
                                    
                                </div>
                                <div class="content-tab col-lg-8 col-md-8 res-991-plr-15">
                                    <div class="content-inner">

                                        <?php 

                                        $statement = $pdo->prepare("SELECT * FROM `tbl_careers` WHERE job_category='Full time'");
                                        $statement->execute();
                                        $total = $statement->rowCount();    
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);    
                                        if($total!=0) {
                                        foreach ($result as $row) {
                                            $vid = $row['id'];
                                            $id = $row['job_id'];
                                            $title = $row['job_title'];
                                            $category = $row['job_category'];
                                            $location = $row['location'];
                                            $starting = $row['starting_dt'];
                                            $ending = $row['ending_dt'];
                                            $photo = $row['photo'];
                                            $orderdatexx = explode('-',  $ending);
                                            $yearxx  = $orderdatexx[0];
                                            $monthxx = $orderdatexx[1];
                                            $dayxx   = $orderdatexx[2];
                                            $endmonth = date("F", strtotime($ending));
                                            $enddte =  date('M', strtotime( $endmonth. '01'));
                                            $endingdate = $enddte.' '.$dayxx.', '.$yearxx
                                      ?>
                                         
                                         <?php 
                                             
                                              $date1 = $ending;
                                              $date3 = $starting; 
                                              $date2 = date("Y-m-d");                                                
                                              $dateTimestamp1 = strtotime($date1); 
                                              $dateTimestamp2 = strtotime($date2);
                                              $dateTimestamp3 = strtotime($date3);

                                           if($dateTimestamp1 >= $dateTimestamp2 && $dateTimestamp3 <= $dateTimestamp2){ ?>

                                       <div class="row">
                                            <div class="col-lg-2">
                                              <img class="img-fluid" src="assets/uploads/<?php echo $photo; ?>" alt="image"
                                                style="height: 100px;width: 105px">
                                            </div>
                                            <div class="col-lg-10">
                                            <p>
                                             <a href="tcx_careerview.php?id=<?php echo $vid ?>"> <span style="font-size: 17px;">
                                                <b><?php echo $title; ?></b></span> <span style="font-size: 13px;"> - (Job id: <?php echo $id; ?>)</span><br>
                                                    <span >Ends: <?php echo $endingdate; ?></span><br>
                                                    <span style="color: #f36523;"><?php echo $location; ?></span><br>
                                             </a>
                                                <span>
                                               <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-square ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-darkgrey" href="tcx_careerview.php?id=<?php echo $vid ?>" style="padding: 4px 20px;margin-top: 2px;">Apply</a>
                                               </span>
                                           </p>
                                         </div>
                                        </div>
                                        <hr>
                                      <?php }else
                                              echo "Apply date will be expired! Know more details, please contact our admin."; ?>
                                      <?php }}
                                             else
                                              echo "No more job available now! please contact our admin"; ?>
                                    </div>

                                    <div class="content-inner">
                                        <?php 
                                        $statement = $pdo->prepare("SELECT * FROM `tbl_careers` WHERE job_category='Internship'");
                                        $statement->execute();
                                        $total = $statement->rowCount();    
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);    
                                        if($total!=0) {
                                        foreach ($result as $row) {
                                            $vid = $row['id'];
                                            $id = $row['job_id'];
                                            $title = $row['job_title'];
                                            $category = $row['job_category'];
                                            $location = $row['location'];
                                            $starting = $row['starting_dt'];
                                            $ending = $row['ending_dt'];
                                            $photo = $row['photo'];
                                            $orderdatexx = explode('-',  $ending);
                                            $yearxx  = $orderdatexx[0];
                                            $monthxx = $orderdatexx[1];
                                            $dayxx   = $orderdatexx[2];
                                            $endmonth = date("F", strtotime($ending));
                                            $enddte =  date('M', strtotime( $endmonth. '01'));
                                            $endingdate = $enddte.' '.$dayxx.', '.$yearxx
                                      ?>
                                         
                                         <?php 
                                             
                                              $date1 = $ending;
                                              $date3 = $starting; 
                                              $date2 = date("Y-m-d");                                                
                                              $dateTimestamp1 = strtotime($date1); 
                                              $dateTimestamp2 = strtotime($date2);
                                              $dateTimestamp3 = strtotime($date3);

                                           if($dateTimestamp1 >= $dateTimestamp2 && $dateTimestamp3 <= $dateTimestamp2){ ?>

                                       <div class="row">
                                            <div class="col-lg-2">
                                              <img class="img-fluid" src="assets/uploads/<?php echo $photo; ?>" alt="image"
                                                style="height: 100px;width: 105px">
                                            </div>
                                            <div class="col-lg-10">
                                            <p>
                                             <a href="tcx_careerview.php?id=<?php echo $vid ?>"> <span style="font-size: 17px;">
                                                <b><?php echo $title; ?></b></span> <span style="font-size: 13px;"> - (Job id: <?php echo $id; ?>)</span><br>
                                                    <span >Ends: <?php echo $endingdate; ?></span><br>
                                                    <span style="color: #f36523;"><?php echo $location; ?></span><br>
                                             </a>
                                                <span>
                                               <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-square ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-darkgrey" href="tcx_careerview.php?id=<?php echo $vid ?>" style="padding: 4px 20px;margin-top: 2px;">Apply</a>
                                               </span>
                                           </p>
                                         </div>
                                        </div>
                                        <hr>
                                      <?php }else
                                              echo "Apply date will be expired! Know more details, please contact our admin."; ?>
                                      <?php }}
                                             else
                                              echo "No more job available now! please contact our admin"; ?>
                                    </div>

                                   <div class="content-inner">
                                        <?php 
                                        $statement = $pdo->prepare("SELECT * FROM `tbl_careers` WHERE job_category='Freelance'");
                                        $statement->execute();
                                        $total = $statement->rowCount();    
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);    
                                        if($total!=0) {
                                        foreach ($result as $row) {
                                            $vid = $row['id'];
                                            $id = $row['job_id'];
                                            $title = $row['job_title'];
                                            $category = $row['job_category'];
                                            $location = $row['location'];
                                            $starting = $row['starting_dt'];
                                            $ending = $row['ending_dt'];
                                            $photo = $row['photo'];
                                            $orderdatexx = explode('-',  $ending);
                                            $yearxx  = $orderdatexx[0];
                                            $monthxx = $orderdatexx[1];
                                            $dayxx   = $orderdatexx[2];
                                            $endmonth = date("F", strtotime($ending));
                                            $enddte =  date('M', strtotime( $endmonth. '01'));
                                            $endingdate = $enddte.' '.$dayxx.', '.$yearxx
                                      ?>
                                         
                                         <?php 
                                             
                                              $date1 = $ending;
                                              $date3 = $starting; 
                                              $date2 = date("Y-m-d");                                                
                                              $dateTimestamp1 = strtotime($date1); 
                                              $dateTimestamp2 = strtotime($date2);
                                              $dateTimestamp3 = strtotime($date3);

                                           if($dateTimestamp1 >= $dateTimestamp2 && $dateTimestamp3 <= $dateTimestamp2){ ?>

                                       <div class="row">
                                            <div class="col-lg-2">
                                              <img class="img-fluid" src="assets/uploads/<?php echo $photo; ?>" alt="image"
                                                style="height: 100px;width: 105px">
                                            </div>
                                            <div class="col-lg-10">
                                            <p>
                                             <a href="tcx_careerview.php?id=<?php echo $vid ?>"> <span style="font-size: 17px;">
                                                <b><?php echo $title; ?></b></span> <span style="font-size: 13px;"> - (Job id: <?php echo $id; ?>)</span><br>
                                                    <span >Ends: <?php echo $endingdate; ?></span><br>
                                                    <span style="color: #f36523;"><?php echo $location; ?></span><br>
                                             </a>
                                                <span>
                                               <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-square ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-darkgrey" href="tcx_careerview.php?id=<?php echo $vid ?>" style="padding: 4px 20px;margin-top: 2px;">Apply</a>
                                               </span>
                                           </p>
                                         </div>
                                        </div>
                                        <hr>
                                      <?php }else
                                              echo "Apply date will be expired! Know more details, please contact our admin."; ?>
                                      <?php }}
                                             else
                                              echo "No more job available now! please contact our admin"; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
            </section>
            <!-- element-row end -->


        <?php include'footer.php'; ?>