<?php $page = 'blog'; include'header.php'; ?>

<?php

$today = date("Y-m-d");
$tdymonth = date("F", strtotime($today));
$shrtname =  date('M', strtotime( $tdymonth. '01'));

$orderdate = explode('-',  $today);
$year  = $orderdate[0];
$month = $orderdate[1];
$day   = $orderdate[2];


 if($shrtname == 'Jan' || $shrtname == 'Feb'){
    $cureent_mth = 'Jan - Feb';
 }
 elseif ($shrtname == 'Mar' || $shrtname == 'Apr') {
    $cureent_mth = 'Mar - Apr';
 }
 elseif ($shrtname == 'May' || $shrtname == 'Jun') {
    $cureent_mth = 'May - Jun';
 }
 elseif ($shrtname == 'Jul' || $shrtname == 'Aug') {
    $cureent_mth = 'Jul - Aug';
 }
 elseif ($shrtname == 'Sep' || $shrtname == 'Oct') {
    $cureent_mth = 'Sep - Oct';
 }
 elseif ($shrtname == 'Nov' || $shrtname == 'Dec') {
    $cureent_mth = 'Nov - Dec';
 }
else {

     $cureent_mth='0';
}

$post_yr_mth = $cureent_mth.' - '.$year;


?>

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box text-center">
                            <div class="page-title-heading">
                                <h1 class="title"> Blog</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; : : &nbsp;</span>
                                <span> Blog</span>
                            </div>  
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">
        <!-- sidebar -->
        <div class="sidebar ttm-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 content-area">

                        <?php 

                            $statement = $pdo->prepare("SELECT * FROM tbl_post WHERE post_month=?");
                            $statement->execute(array($post_yr_mth));
                            $total = $statement->rowCount();    
                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);    
                            if($total!=0) {


                            $statement = $pdo->prepare("SELECT * FROM tbl_post WHERE post_month=?");
                            $statement->execute(array($post_yr_mth));
                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($result as $row) {
                                $id = $row['post_id'];
                                $title = $row['post_title'];
                                $content = $row['post_content'];
                                $pdate = $row['post_date'];
                                $pmonth = $row['post_month'];
                                $photo = $row['photo'];
                                $post_description = $row['post_description'];

                                $date=date_create($pdate);
                               $pst_date=date_format($date,"m-d-y");
                          ?>


                        <!-- ttm-service-single-content-are -->
                        <article class="post ttm-blog-classic clearfix">
                            <!-- post-featured-wrapper -->
                            <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                <div class="ttm-post-featured">
                                    <img class="img-fluid" src="assets/uploads/<?php echo $photo; ?>" alt="post-01">
                                </div>
                            </div><!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-classic-content">
                                <div class="ttm-post-entry-header">
                                    <div class="post-meta">
                                        <span class="ttm-meta-line byline"><i class="fa fa-user"></i>By Admin</span>
                                        <span class="ttm-meta-line entry-date"><i class="fa fa-calendar"></i><?php echo $pst_date;  ?></span>
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="tcx_blogdetails.php?mid=<?php echo $id; ?>"><?php echo $title;  ?></a></h2>
                                    </header>
                                    <div class="ttm-box-desc-text">
                                        <p><?php echo $post_description;  ?></p>
                                    </div>
                                    <!-- separator -->
                                    <div class="separator">
                                        <div class="sep-line mt-25 mb-25"></div>
                                    </div>
                                    <!-- separator -->
                                    <div class="ttm-blogbox-desc-footer">
                                        <div class="ttm-blogbox-footer-readmore d-inline-block">
                                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right"
                                             href="tcx_blogdetails.php?mid=<?php echo $id; ?>">Read More <i class="ti ti-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ttm-blog-classic-content end -->
                        </article>
                        <!-- ttm-service-single-content-are end -->

                        <?php   } }else{ 

                              $statement = $pdo->prepare("SELECT * FROM `tbl_post`ORDER by post_date ASC LIMIT 2");
                                $statement->execute();
                                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($result as $row) {
                                    $id = $row['post_id'];
                                    $title = $row['post_title'];
                                    $content = $row['post_content'];
                                    $pdate = $row['post_date'];
                                    $pmonth = $row['post_month'];
                                    $photo = $row['photo'];
                                    $post_description = $row['post_description'];

                                    $date=date_create($pdate);
                                   $pst_date=date_format($date,"m-d-y");


                            ?>

                            <!-- ttm-service-single-content-are -->
                        <article class="post ttm-blog-classic clearfix">
                            <!-- post-featured-wrapper -->
                            <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                <div class="ttm-post-featured">
                                    <img class="img-fluid" src="assets/uploads/<?php echo $photo; ?>" alt="post-01">
                                </div>
                            </div><!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-classic-content">
                                <div class="ttm-post-entry-header">
                                    <div class="post-meta">
                                        <span class="ttm-meta-line byline"><i class="fa fa-user"></i>By Admin</span>
                                        <span class="ttm-meta-line entry-date"><i class="fa fa-calendar"></i><?php echo $pst_date;  ?></span>
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="tcx_blogdetails.php?mid=<?php echo $id; ?>"><?php echo $title;  ?></a></h2>
                                    </header>
                                    <div class="ttm-box-desc-text">
                                        <p><?php echo $post_description;  ?></p>
                                    </div>
                                    <!-- separator -->
                                    <div class="separator">
                                        <div class="sep-line mt-25 mb-25"></div>
                                    </div>
                                    <!-- separator -->
                                    <div class="ttm-blogbox-desc-footer">
                                        <div class="ttm-blogbox-footer-readmore d-inline-block">
                                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right"
                                             href="tcx_blogdetails.php?mid=<?php echo $id; ?>">Read More <i class="ti ti-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ttm-blog-classic-content end -->
                        </article>
                        <!-- ttm-service-single-content-are end -->

                        <?php } } ?>
                       
                    </div>
                    <div class="col-lg-3 widget-area">
                         <aside class="widget widget-categories">

                            <?php

                            $statement = $pdo->prepare("SELECT * FROM tbl_post WHERE post_month=?");
                            $statement->execute(array($post_yr_mth));
                            $total = $statement->rowCount();    
                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);    
                            if($total!=0) {
                          
                         ?>

                            <h3 class="widget-title">Years</h3>
                            <div id="accordion">
                              <div class="card">
                                <div class="card-header" id="headingOne" style="background-color: #f36523;">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseOne"
                                     style="color: white;">
                                      Year: 2021 
                                    </button>
                                  </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="toggle-content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <ul>

                                                    <?php if($post_yr_mth == 'Jan - Feb - 2021'){ ?>
                                                      <li><a href="particular_mob.php?mth=Jan - Feb - 2021" style="color: #f36523;">Jan - Feb</a></li>
                                                    <?php }else{ ?>
                                                      <li><a href="particular_mob.php?mth=Jan - Feb - 2021">Jan - Feb</a></li>  
                                                    <?php } ?>

                                                     <?php if($post_yr_mth == 'Mar - Apr - 2021'){ ?>
                                                      <li><a href="particular_mob.php?mth=Mar - Apr - 2021" style="color: #f36523;">Mar - Apr</a></li>
                                                    <?php }else{ ?>
                                                      <li><a href="particular_mob.php?mth=Mar - Apr - 2021">Mar - Apr</a></li>  
                                                    <?php } ?>

                                                     <?php if($post_yr_mth == 'May - Jun - 2021'){ ?>
                                                      <li><a href="particular_mob.php?mth=May - Jun - 2021" style="color: #f36523;">May - Jun</a></li>
                                                    <?php }else{ ?>
                                                      <li><a href="particular_mob.php?mth=May - Jun - 2021">May - Jun</a></li>  
                                                    <?php } ?>

                                                     <?php if($post_yr_mth == 'Jul - Aug - 2021'){ ?>
                                                      <li><a href="particular_mob.php?mth=Jul - Aug - 2021" style="color: #f36523;">Jul - Aug</a></li>
                                                    <?php }else{ ?>
                                                      <li><a href="particular_mob.php?mth=Jul - Aug - 2021">Jul - Aug</a></li>  
                                                    <?php } ?>

                                                     <?php if($post_yr_mth == 'Sep - Oct - 2021'){ ?>
                                                      <li><a href="particular_mob.php?mth=Sep - Oct - 2021" style="color: #f36523;">Sep - Oct</a></li>
                                                    <?php }else{ ?>
                                                      <li><a href="particular_mob.php?mth=Sep - Oct - 2021">Sep - Oct</a></li>  
                                                    <?php } ?>

                                                     <?php if($post_yr_mth == 'Nov - Dec - 2021'){ ?>
                                                      <li><a href="particular_mob.php?mth=Nov - Dec - 2021" style="color: #f36523;">Nov - Dec</a></li>
                                                    <?php }else{ ?>
                                                      <li><a href="particular_mob.php?mth=Nov - Dec - 2021">Nov - Dec</a></li>  
                                                    <?php } ?>
                                               </ul>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo" style="background-color: #f36523;">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"  aria-controls="collapseTwo" 
                                      style="color: white;">
                                      Year: 2020
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                  <div class="card-body">
                                   <div class="toggle-content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                               <ul>
                                                <li><a href="particular_mob.php?mth=Jan - Feb - 2020">Jan - Feb</a></li>
                                                <li><a href="particular_mob.php?mth=Mar - Apr - 2020">Mar - Apr</a></li>
                                                <li><a href="particular_mob.php?mth=May - Jun - 2020">May - Jun</a></li>
                                                <li><a href="particular_mob.php?mth=Jul - Aug - 2020">Jul - Aug</a></li>
                                                <li><a href="particular_mob.php?mth=Sep - Oct - 2020">Sep - Oct</a></li>
                                                <li><a href="particular_mob.php?mth=Nov - Dec - 2020">Nov - Dec</a></li>
                                               </ul>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <?php }else { ?>

                                 <h3 class="widget-title">Years</h3>
                            <div id="accordion">
                              <div class="card">
                                <div class="card-header" id="headingOne" style="background-color: #f36523;">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseOne"
                                     style="color: white;">
                                      Year: 2021
                                    </button>
                                  </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="toggle-content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <ul>                                                   
                                                <li><a href="particular_mob.php?mth=Jan - Feb - 2021">Jan - Feb</a></li>     
                                                <li><a href="particular_mob.php?mth=Mar - Apr - 2021">Mar - Apr</a></li>
                                                <li><a href="particular_mob.php?mth=May - Jun - 2021">May - Jun</a></li>
                                                <li><a href="particular_mob.php?mth=Jul - Aug - 2021">Jul - Aug</a></li>
                                                <li><a href="particular_mob.php?mth=Sep - Oct - 2021">Sep - Oct</a></li>
                                                <li><a href="particular_mob.php?mth=Nov - Dec - 2021">Nov - Dec</a></li>
                                               </ul>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo" style="background-color: #f36523;">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"  aria-controls="collapseTwo" 
                                      style="color: white;">
                                      Year: 2020
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                  <div class="card-body">
                                   <div class="toggle-content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                               <ul>
                                                <li><a href="particular_mob.php?mth=Jan - Feb - 2020">Jan - Feb</a></li>
                                                <li><a href="particular_mob.php?mth=Mar - Apr - 2020">Mar - Apr</a></li>
                                                <li><a href="particular_mob.php?mth=May - Jun - 2020">May - Jun</a></li>
                                                <li><a href="particular_mob.php?mth=Jul - Aug - 2020">Jul - Aug</a></li>
                                                <li><a href="particular_mob.php?mth=Sep - Oct - 2020">Sep - Oct</a></li>
                                                <li><a href="particular_mob.php?mth=Nov - Dec - 2020">Nov - Dec</a></li>
                                               </ul>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <?php } ?>

                        </aside>
                        <aside class="widget widget-categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                  <?php 

                                    $statement = $pdo->prepare("SELECT * FROM tbl_category");
                                    $statement->execute();
                                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($result as $row) {
                                        $id = $row['category_id'];
                                        $name = $row['category_name'];
                                  ?>

                                <li><a href="particular_cob.php?id=<?php echo $id; ?>"><?php echo $name; ?></a></li>

                               <?php   } ?>
                            </ul>
                        </aside>
                        <aside class="widget tagcloud-widget">
                            <h3 class="widget-title">Tags</h3>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">Business</a>
                                <a href="#" class="tag-cloud-link">Consult</a>
                                <a href="#" class="tag-cloud-link">Cyber</a>
                                <a href="#" class="tag-cloud-link">Data</a>
                                <a href="#" class="tag-cloud-link">Design</a>
                                <a href="#" class="tag-cloud-link">IT-Services</a>
                                <a href="#" class="tag-cloud-link">IT-Solution</a>
                                <a href="#" class="tag-cloud-link">Marketing</a>
                                <a href="#" class="tag-cloud-link">Object</a>
                                <a href="#" class="tag-cloud-link">Solution</a>
                            </div>
                        </aside>
                         <aside class="widget post-widget">
                            <h3 class="widget-title">Latest News</h3>
                            <ul class="widget-post ttm-recent-post-list">
                                <li>
                                    <a href="images/blog/blog2.png"><img src="images/blog/blog2.png" alt="post-img"></a>
                                    <a href="#">Define World Best IT Solution Technology</a>
                                    <span class="post-date"><i class="fa fa-calendar"></i>May 01, 2019</span>
                                </li>
                                <li>
                                    <a href="images/blog/blog3.png"><img src="images/blog/blog3.png" alt="post-img"></a>
                                    <a href="#">You Must Try 20 Secret Of Digital Transform</a>
                                    <span class="post-date"><i class="fa fa-calendar"></i>May 03, 2019</span>
                                </li>
                                <li>
                                    <a href="images/blog/blog4.png"><img src="images/blog/blog4.png" alt="post-img"></a>
                                    <a href="#">10 PHP Frameworks You Need To Use Anywhere</a>
                                    <span class="post-date"><i class="fa fa-calendar"></i>May 05, 2019</span>
                                </li>
                            </ul>
                        </aside>
                       
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->
    </div><!--site-main end-->

        <?php include'footer.php'; ?>