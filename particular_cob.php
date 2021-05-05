<?php $page = 'blog'; include'header.php'; 

$cid=$_GET['id'];


        $statement = $pdo->prepare("SELECT * FROM tbl_post inner join tbl_category WHERE tbl_category.category_id = tbl_post.category_id and  tbl_category.category_id=?");
        $statement->execute(array($cid));
        $total = $statement->rowCount();    
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);    
        if($total==0) {
           echo "<script>
              window.location.href='tcx_blog.php';
             </script>";
        } else {
          foreach($result as $row) { 
                $catname = $row['category_name'];
            }
        }

?>


        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box text-center">
                            <div class="page-title-heading">
                                <h1 class="title"> <?php echo  $catname; ?></h1>
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

                            $statement = $pdo->prepare("SELECT * FROM tbl_post WHERE category_id=?");
                            $statement->execute(array($cid));
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

                        <?php   } ?>
                       
                    </div>
                    <div class="col-lg-3 widget-area">

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