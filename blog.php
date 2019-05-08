<?php 
require_once("function.php");
$title="Blog";
$active_blog=1;
require_once("template/header2.php");
 ?>
	<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(<?php echo URL; ?>images/banner/top-heading.jpg);">
		<?php 
$breadcrumb=array("blog.php",$title);
echo breadcrumb($title,$breadcrumb);
 ?>
		</div>
		<section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main col-lg-offset-1 col-sm-10 ">
						<div class="wrapper-blog-content">
										









										<?php $blog="SELECT * FROM blog";
                                                $blog=$db->query($blog);
                                                
                                                while ($blogx=$blog->fetch_assoc()) 

                                                	{
 //var_dump($blogx);
 ?>
                                                   
                                                











							<article class="type-post">
								<div style="float: left"><a href="<?php  echo URL.'blog-view/2018/'.$blogx['id'].'/'.Replace($blogx['title']); ?>">
									<img class="img-responsive wp-post-image" src="<?php  echo URL ?>images/blog/<?php echo "post_".$blogx['id']."_thumb.".$blogx['pic']; ?>" alt="blog"></a>

									<!-- <img width="370" height="260" src="images/blog/201H.jpg" class="wp-post-image" alt=""> -->
								</div>
								<div class="entry-content content-thumbnail">
									<header class="entry-header">
										<h2 class="entry-title">
			<a href="<?php  echo URL.'blog-view/2018/'.$blogx['id'].'/'.Replace($blogx['title']); ?>" rel="bookmark"><?php echo $blogx['title']; ?></a>
										</h2>
										<div class="entry-meta">
											<span class="posted-on">Posted on <a href="#" rel="bookmark">
												<time class="entry-date published" datetime="2016-09-06T04:52:25+00:00">
												<?php 
												echo date('d/m/Y h:i:s A', $blogx['time']);

												?>
												</time>
											</a></span>
										</div>
									</header>
									<div class="entry-desc" style="text-align:justify">
										<p><?php 

$pieces = explode(" ", $blogx['text']);
$first_part = implode(" ", array_splice($pieces, 0, 50));
echo $first_part."...";



										 ?></p>
									</div>
								</div>
							</article>
						


<?php 
}



?>














							
						</div>
						<div class="navigation paging-navigation" role="navigation">
							<ul class="page-numbers">
								<li><span class="page-numbers current">1</span></li>
								<li><a class="page-numbers" href="<?php  echo URL ?>blog.html#">2</a></li>
								<li><a class="next page-numbers" href="<?php  echo URL ?>blog.html#"><i class="fa fa-long-arrow-right"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<!-- <div class="widget-area col-sm-3 alignright">
						<aside class="widget widget_text">
							<img src="<?php  echo URL ?>images/images-sidebar/sidebanner-ticketing.jpg" alt="">
						</aside>
						<aside class="widget widget_text">
							<img src="<?php  echo URL ?>images/images-sidebar/sidebanner-tour.png" alt="">
						</aside>
						<aside class="widget widget_text">
							<img src="<?php  echo URL ?>images/images-sidebar/hertz-sidebanner.jpg" alt="">
						</aside>
					</div> -->
				</div>
			</div>
		</section>
	</div>
		<?php 
require_once("template/footer.php");
         ?>