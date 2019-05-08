      <?php 
require_once("function.php");
$id=$_GET['id'];
$title="post";
$active_blog=1;
require_once("template/header2.php");
 ?>
      <div class="site wrapper-content">
            <div class="top_site_main" style="background-image:url(<?php echo URL ?>images/banner/top-heading.jpg);">
<?php 
$breadcrumb=array("blog.php",$title);
echo breadcrumb($title,$breadcrumb);
 ?>
            </div>
            <section class="content-area">
                <div class="container">
                    <div class="row">
                        <div class="site-main col-lg-offset-1 col-sm-10">

<?php $fblog="SELECT * FROM blog where id = '$id'";
                                                $fblog=$db->query($fblog);
                                                
                                               $fblogx=$fblog->fetch_assoc();
 //var_dump($fblogx);
 ?>






                            <article class="post_list_content_unit type-post">
                                <div class="feature-image">
                                    <img src="<?php  echo URL ?>images/blog/<?php echo "post_".$fblogx['id']."_resize.".$fblogx['pic']; ?>" alt="Blog" class="img-responsive">
                                </div>
                                <div class="post-list-content">
                                    <div class="post_list_inner_content_unit">
                                        <h1 class="post_list_title"><?php echo $fblogx['title']; ?></h1>
                                        <div class="wrapper-meta">
                                            <div class="date-time">
                                            <?php 
                                                echo date('d/m/Y h:i:s A', $fblogx['time']);

                                                ?>

                                            </div>
                                            <div class="post_list_cats">
                                                <a href="<?php  echo URL ?>blog.php" rel="category tag">Blog</a>
                                            </div>
                                        </div>
                                        <div class="post_list_item_excerpt" style="text-align:justify">
                                            
                                            <p>
                                                <?php 

echo $fblogx['text'];



                                         ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </article>







                        </div>
                       
                    </div>
                </div>
            </section>
        </div>
        <?php 
require_once("template/footer.php");
         ?>