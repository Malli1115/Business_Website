<?php $page = 'blog'; include'header.php';

$mid=$_GET['mid'];

 ?>

 <?php
$statement = $pdo->prepare("SELECT * FROM tbl_post WHERE post_id=?");
$statement->execute(array($mid));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
                                $title = $row['post_title'];
                                $content = $row['post_content'];
                                $pdate = $row['post_date'];
                                $pmonth = $row['post_month'];
                                $photo = $row['photo'];
                                $post_description = $row['post_description'];
                                $date=date_create($pdate);
                               $pst_date=date_format($date,"m-d-y");

                                $mkey = $row['meta_keyword'];
                                $mk = explode(',',  $mkey);
                                $mk1  = $mk[0];
                                $mk2  = $mk[1];
                                $mk3  = $mk[2];
                                $mk4  = $mk[3];
                                $mk5  = $mk[4];

}
?>

        <!-- page-title -->
        <div class="ttm-page-title-row" style="padding-bottom: 0px !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box text-center">
                            <div class="page-title-heading">
                                <h2 class="title"><?php echo $title; ?></h2><br>
                            </div>
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
                    <div class="col-lg-12 content-area">
                        <!-- ttm-service-single-content-are -->
                        <article class="post ttm-blog-single clearfix">
                          
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-single-content">
                                <div class="entry-content">
                                    <div class="ttm-post-entry-header">
                                        <div class="post-meta">
                                            <span class="ttm-meta-line byline"><i class="fa fa-user"></i>By Admin</span>
                                            <span class="ttm-meta-line entry-date"><i class="fa fa-calendar"></i><?php echo $pst_date; ?></span>
                                        </div>
                                    </div>
                                    <!-- separator -->
                                    <div class="separator">
                                        <div class="sep-line mt-15 mb-25"></div>
                                    </div>
                                    <!-- separator -->

                                     <?php echo $content; ?>

                                    <!-- separator -->
                                    <div class="separator">
                                        <div class="sep-line mt-25 mb-25"></div>
                                    </div>
                                    <!-- separator -->
                                    <div class="clearfix">
                                        <div class="ttm-tag-list float-md-left">
                                            <span>
                                                <a href="#"><?php echo $mk1; ?></a>
                                                <a href="#"><?php echo $mk2; ?></a>
                                                <a href="#"><?php echo $mk3; ?></a>
                                                <a href="#"><?php echo $mk4; ?></a>
                                                <a href="#"><?php echo $mk5; ?></a>
                                            </span>
                                        </div>
                                        <div class="social-icons square float-md-right">
                                            <ul class="list-inline mb-0 d-inline-block">
                                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
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

         <?php include'footer.php'; ?>