<?php 
require_once("function.php");
$title="City Travel";
$active_index_slider=1;
require_once("template/header2.php");
 ?>
	<div class="site wrapper-content">
		<div class="home-content" role="main">
			<div class="top_site_main">

 			</div>
			<div id="home-page-slider-image" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/home/slider.jpg" alt="Home Slider 1">
						<div class="carousel-caption content-slider">
							<div class="container">
							<h2>Smart City Travel</h2>
							<p>is the most helphful, most useful and the most easiest way for people who don`t know the way.</p>
							
							</div>
						</div>
					</div>
					<div class="item">
						<img src="images/home/slider-2.jpg" alt="Home Slider 2">
						<div class="carousel-caption content-slider">
							<div class="container">
							<h2>Make a cool Travel </h2>
                            <p>Help you to find all way where you want to go.Just Search your destination. </p>
							
						    </div>
						</div>
					</div>
				</div>
				<!-- Controls -->
				<a class="carousel-control-left" href="home-2.html#home-page-slider-image" data-slide="prev">
					<i class="lnr lnr-chevron-left"></i>
				</a>
				<a class="carousel-control-right" href="home-2.html#home-page-slider-image" data-slide="next">
					<i class="lnr lnr-chevron-right"></i>
				</a>
			</div>






			 <div class="slider-tour-booking" style="height: 100%;
    display: -webkit-box;" >
                <div class="col-lg-offset-3 col-lg-4 " >
                    <div class="container">

                        <div class="travel-booking-search hotel-booking-search travel-booking-style_1">
                            

                        
                            <form name="hb-search-form" action="<?php echo URL ?>search.php" method="post" id="tourBookingForm">
                                <ul class="hb-form-table">
                                    
                                    
                                    <li class="hb-form-field">
                                        <div class="hb-form-field-input hb_input_field">
                                            <select name="start" required="required">
                                                <option value="">Select Location</option>
                                                <?php $area="SELECT * FROM area";
                                                $area=$db->query($area);
                                                // var_dump($area);
                                                while ($areax=$area->fetch_assoc()) {
                                                    echo '<option value="'.$areax['id'].'">'.$areax['name'].'</option>';
                                                }



                                                 ?>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="hb-form-field">
                                        <div class="hb-form-field-input hb_input_field">
                                            <select name="stop" required="required">
                                                <option value="">Select Destination</option>
                                                <?php $area="SELECT * FROM area";
                                                $area=$db->query($area);
                                                // var_dump($area);
                                                while ($areax=$area->fetch_assoc()) {
                                                    echo '<option value="'.$areax['id'].'">'.$areax['name'].'</option>';
                                                }



                                                 ?>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="hb-submit">
                                        <button type="submit">Search Buses</button>
                                    </li>
                                </ul>
                                
                            </form>
                        </div>






                        </div>
                    </div>
                </div>










                <div class="container two-column-respon mg-top-6x mg-bt-6x">
                    <div class="row">
                        <div class="col-sm-12 mg-btn-6x">
                            <div class="shortcode_title title-center title-decoration-bottom-center">
                                <h3 class="title_primary">WHY YOU CHOOSE US?</h3><span class="line_after_title"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="wpb_column col-sm-3">
                            <div class="widget-icon-box widget-icon-box-base iconbox-center">
                                <div class="boxes-icon circle" style="font-size:30px;width:80px; height:80px;line-height:80px">
                                    <span class="inner-icon"><i class="vc_icon_element-icon flaticon-transport-6"></i></span>
                                </div>
                                <div class="content-inner">
                                    <div class="sc-heading article_heading">
                                        <h4 class="heading__primary">Divide Destinations</h4></div>
                                    <div class="desc-icon-box">
                                        <div>We devide all destination based on all bus depo.Hope it will easy to find and easy your trip.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column col-sm-3">
                            <div class="widget-icon-box widget-icon-box-base iconbox-center">
                                <div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
                                    <span class="inner-icon"><i class="vc_icon_element-icon flaticon-sand"></i></span>
                                </div>
                                <div class="content-inner">
                                    <div class="sc-heading article_heading">
                                        <h4 class="heading__primary">Value for Time</h4></div>
                                    <div class="desc-icon-box">
                                        <div>We work for your time.By this you can easily find your desired transport and it save your time.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column col-sm-3">
                            <div class="widget-icon-box widget-icon-box-base iconbox-center">
                                <div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
                                    <span class="inner-icon"><i class="vc_icon_element-icon flaticon-travel-2"></i></span>
                                </div>
                                <div class="content-inner">
                                    <div class="sc-heading article_heading">
                                        <h4 class="heading__primary">Beautiful Gallery</h4></div>
                                    <div class="desc-icon-box">
                                        <div>This project contains a beautiful bus gallery. It helps you to find your desire bus if you familiar with this bus picture.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column col-sm-3">
                            <div class="widget-icon-box widget-icon-box-base iconbox-center">
                                <div class="boxes-icon circle" style="font-size:30px;width:80px; height:80px;line-height:80px">
                                    <span class="inner-icon"><i class="vc_icon_element-icon flaticon-travelling"></i></span>
                                </div>
                                <div class="content-inner">
                                    <div class="sc-heading article_heading">
                                        <h4 class="heading__primary">All Buses</h4></div>
                                    <div class="desc-icon-box">
                                        <div>We listed all buses in our gallery.Here you can see all the service list and it`s depo.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padding-top-6x padding-bottom-6x section-background" style="background-image:url(images/home/bg-pallarax.jpg)">
                    <div class="container">
                        <div class="shortcode_title text-white title-center title-decoration-bottom-center">
                            <div class="title_subtitle">Take a Look at </div>
                            <h3 class="title_primary">MOST POPULAR BUSES</h3>
                            <span class="line_after_title" style="color:#ffffff"></span>
                        </div>
                        <div class="row wrapper-tours-slider">
                            <div class="tours-type-slider list_content" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":2}, "992":{"items":3}, "1200":{"items":4}}'>






                                    <?php $bus="SELECT * FROM bus";
                                                $bus=$db->query($bus);
                                                
                                                while ($busx=$bus->fetch_assoc()) 

                                                    {
                                    // var_dump($busx);
                                     ?>




                                <div class="" style="padding: 0 5px;">
                                    <div class="item_border">
                                        <div class="item_content">
                                            <div class="post_images">
                                                <a href="<?php  echo URL.'bus-view/'.$busx['id'].'/'.Replace($busx['name']); ?>" class="travel_tour-LoopProduct-link">
																							
												<img src="<?php  echo URL ?>images/bus/<?php echo "bus_".$busx['id']."_thumb.".$busx['pic']; ?>" alt="<?php echo $busx['name']; ?>" title="bus">
											</a>
                                               
                                            </div>
                                            <div class="wrapper_content">
                                                <div class="post_title">
                                                    <h4>
												<a href="<?php  echo URL.'bus-view/'.$busx['id'].'/'.Replace($busx['name']); ?>" rel="bookmark">
                                    <?php echo $busx['name']; ?>                                    
                                                </a>
											</h4></div>
                                                <span class="post_date"></span>
                                                <p>
                                                                                                
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <?php echo LocationName($busx['start']); ?>
                                                <br/>
                                                <i class="fa fa-arrows-h" aria-hidden="true"></i>
                                                <br/>

                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <?php echo LocationName($busx['stop']); ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="read_more">
                                            
                                            <a href="<?php  echo URL.'bus-view/'.$busx['id'].'/'.Replace($busx['name']); ?>" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>



            

<?php 
}



?>










                                <!-- total 6 post in this slide-->







                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-white padding-top-6x padding-bottom-6x tours-type">
                    <div class="container">
                        <div class="shortcode_title title-center title-decoration-bottom-center">
                            <div class="title_subtitle">Find  Your</div>
                            <h3 class="title_primary">DESTINATION</h3><span class="line_after_title"></span>
                        </div>
                        <div class="">
<style>
    .text-img-center{
        position: absolute;
        top: 40%;
        left: 30%;
        color: white;
        font-size: 1.4em;
    }
    .main-image-text{
        position: relative;
        text-align: center;
        color: white;
    }
</style>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 main-image-text">
                                    <a href="<?php  echo URL ?>gallery/1/abdullahpur" class="">
                                    <img src="<?php  echo URL ?>images/city/25656857141_edcdf5e6e3_o.jpg" alt="" class="img-circle img-responsive">
                                    <div class="text-img-center"><i class="fa fa-map-marker" aria-hidden="true"></i> Abdullapur</div>
                                </a>
                                </div> 
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <a href="<?php  echo URL ?>gallery/8/azimpur" class="">
                                    <img src="<?php  echo URL ?>images/city/photo-1474181487882-5abf3f0ba6c2.jpg" alt="" class="img-circle img-responsive">
                                    <div class="text-img-center"><i class="fa fa-map-marker" aria-hidden="true"></i> Azimpur</div>
                                </a>
                                </div> 
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <a href="<?php  echo URL ?>gallery/87/mohammadpur-bus-stand" class="">
                                    <img src="<?php  echo URL ?>images/city/25656857141_edcdf5e6e3_o.jpg" alt="" class="img-circle img-responsive">
                                    <div class="text-img-center"><i class="fa fa-map-marker" aria-hidden="true"></i> Mohammadpur</div>
                                </a>
                                </div> 
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <a href="<?php  echo URL ?>gallery/88/motijheel" class="">
                                    <img src="<?php  echo URL ?>images/city/26003147786_a04226cd2f_o.jpg" alt="" class="img-circle img-responsive">
                                    <div class="text-img-center"><i class="fa fa-map-marker" aria-hidden="true"></i> Motijheel</div>
                                </a>
                                </div>    
                            </div>
                            








                            </div>
                        </div>
                    </div>
                </div>
                <div class="padding-top-6x padding-bottom-6x bg__shadow section-background" style="background-image:url(images/home/bg-pallarax.jpg)">
                    <div class="container">
                        <div class="shortcode_title text-white title-center title-decoration-bottom-center">
                            <div class="title_subtitle">Some statistics about </div>
                            <h3 class="title_primary">CITY BUS TRAVEL</h3>
                            <span class="line_after_title" style="color:#ffffff"></span>
                        </div>
                    <?php 


                    $buscount=$db->query("SELECT id from bus");

                    //var_dump($buscount);

                    $tbus=$buscount->num_rows;


                    $areacount=$db->query("SELECT id from area");

                    //var_dump($buscount);

                    $tarea=$areacount->num_rows;

                



                    $vistor=$db->query("SELECT * from visitor");
                    $visit=0;
                    $view=0;
                    while($vistors=$vistor->fetch_assoc()){
                            //var_dump($vistors);
                        $visit++;
                        $view+=$vistors['hit'];

                        

}

                                                ?>


















                        <div class="row">
                            <div class="col-sm-3">
                                <div class="stats_counter text-center text-white">
                                    <div class="wrapper-icon">
                                        <!-- <i class="flaticon-airplane"></i> -->
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </div>
                                    <div class="stats_counter_number"><?php echo $visit; ?></div>
                                    <div class="stats_counter_title">Visitor</div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="stats_counter text-center text-white">
                                    <div class="wrapper-icon">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <div class="stats_counter_number"><?php echo  $tarea; ?></div>
                                    <div class="stats_counter_title">Destinations</div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="stats_counter text-center text-white">
                                    <div class="wrapper-icon">
                                        <i class="flaticon-globe"></i>
                                    </div>
                                    <div class="stats_counter_number"><?php echo $view; ?></div>
                                    <div class="stats_counter_title">Total View</div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="stats_counter text-center text-white">
                                    <div class="wrapper-icon">
                                        <i class="flaticon-people"></i>
                                    </div>
                                    <div class="stats_counter_number"><?php echo $tbus; ?></div>
                                    <div class="stats_counter_title">Buses</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="section-white padding-top-6x padding-bottom-6x">
                    <div class="container">
                        <div class="shortcode_title title-center title-decoration-bottom-center">
                            <h3 class="title_primary">Blog</h3><span class="line_after_title"></span>
                        </div>
                        <div class="row wrapper-tours-slider">
                            <div class="tours-type-slider list_content" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":3}, "992":{"items":3}, "1200":{"items":3}}'>




                                        <?php $blog="SELECT * FROM blog limit 4";
                                                $blog=$db->query($blog);
                                                
                                                while ($blogx=$blog->fetch_assoc()) 

                                                    {
                                         //var_dump($blogx);
                                         ?>





                                <div class="" style="padding: 0 5px;">
                                    <div class="item_border">
                                        <div class="item_content">
                                            <div class="post_images">
                                                <a href="<?php  echo URL.'blog-view/2018/'.$blogx['id'].'/'.Replace($blogx['title']); ?>" class="travel_tour-LoopProduct-link">
											
												<img src="<?php  echo URL ?>images/blog/<?php echo "post_".$blogx['id']."_resize.".$blogx['pic']; ?>" alt="" title="">
											</a>
                                            </div>
                                            <div class="wrapper_content">
                                                <div class="post_title" style="white-space: nowrap;overflow: hidden;">
                                                    <h4>
												<a href="<?php  echo URL.'blog-view/2018/'.$blogx['id'].'/'.Replace($blogx['title']); ?>" rel="bookmark"><?php echo $blogx['title']; ?>                        </a>
											</h4></div>
                                                <span class="post_date">
                                                <?php 
                                                echo date('d/m/Y h:i:s A', $blogx['time']);

                                                ?>

                                                </span>
                                                <p>
                                                    <?php 

$pieces = explode(" ", $blogx['text']);
$first_part = implode(" ", array_splice($pieces, 0, 30));
echo $first_part."...";



                                         ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="read_more">
                                            
                                            <a href="<?php  echo URL.'blog-view/2018/'.$blogx['id'].'/'.Replace($blogx['title']); ?>" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>


<?php } ?>







                                <!-- <div class="" style="padding: 0 5px;">
                                    <div class="item_border">
                                        <div class="item_content">
                                            <div class="post_images">
                                                <a href="<?php  echo URL ?>bus_view.php" class="travel_tour-LoopProduct-link">
                                            
                                                <img src="<?php  echo URL ?>images/tour/430x305/tour-3.jpg" alt="" title="">
                                            </a>
                                            </div>
                                            <div class="wrapper_content">
                                                <div class="post_title">
                                                    <h4>
                                                <a href="<?php  echo URL ?>bus_view.php" rel="bookmark">Anchorage to Santiago</a>
                                            </h4></div>
                                                <span class="post_date">Date:2-jan-2018</span>
                                                <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                            </div>
                                        </div>
                                        <div class="read_more">
                                            
                                            <a href="<?php  echo URL ?>bus_view.php" class="read_more_button">VIEW MORE
                                            <i class="fa fa-long-arrow-right"></i></a>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="padding: 0 5px;">
                                    <div class="item_border">
                                        <div class="item_content">
                                            <div class="post_images">
                                                <a href="<?php  echo URL ?>bus_view.php" class="travel_tour-LoopProduct-link">
                                            
                                                <img src="<?php  echo URL ?>images/tour/430x305/tour-3.jpg" alt="" title="">
                                            </a>
                                            </div>
                                            <div class="wrapper_content">
                                                <div class="post_title">
                                                    <h4>
                                                <a href="<?php  echo URL ?>bus_view.php" rel="bookmark">Anchorage to Santiago</a>
                                            </h4></div>
                                                <span class="post_date">Date:2-jan-2018</span>
                                                <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                            </div>
                                        </div>
                                        <div class="read_more">
                                            
                                            <a href="<?php  echo URL ?>bus_view.php" class="read_more_button">VIEW MORE
                                            <i class="fa fa-long-arrow-right"></i></a>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="padding: 0 5px;">
                                    <div class="item_border">
                                        <div class="item_content">
                                            <div class="post_images">
                                                <a href="<?php  echo URL ?>bus_view.php" class="travel_tour-LoopProduct-link">
                                            
                                                <img src="<?php  echo URL ?>images/tour/430x305/tour-3.jpg" alt="" title="">
                                            </a>
                                            </div>
                                            <div class="wrapper_content">
                                                <div class="post_title">
                                                    <h4>
                                                <a href="<?php  echo URL ?>bus_view.php" rel="bookmark">Anchorage to Santiago</a>
                                            </h4></div>
                                                <span class="post_date">Date:2-jan-2018</span>
                                                <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                            </div>
                                        </div>
                                        <div class="read_more">
                                            
                                            <a href="<?php  echo URL ?>bus_view.php" class="read_more_button">VIEW MORE
                                            <i class="fa fa-long-arrow-right"></i></a>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section-white padding-top-6x padding-bottom-6x">
                    <div class="container">
                        <div class="row">
                            <!-- <div class="col-sm-4">
                                <div class="shortcode_title title-center title-decoration-bottom-center">
                                    <h2 class="title_primary">Tours Reviews</h2>
                                    <span class="line_after_title"></span>
                                </div>
                                <div class="shortcode-tour-reviews wrapper-tours-slider">
                                    <div class="tours-type-slider" data-autoplay="true" data-dots="true" data-nav="false" data-responsive='{"0":{"items":1}, "480":{"items":1}, "768":{"items":1}, "992":{"items":1}, "1200":{"items":1}}'>
                                        <div class="tour-reviews-item">
                                            <div class="reviews-item-info">
                                                <img alt="" src="<?php  echo URL ?>images/avata.jpeg" class="avatar avatar-95 photo" height="90" width="90">
                                                <div class="reviews-item-info-name">Jessica</div>
                                                <div class="reviews-item-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="reviews-item-content">
                                                <h3 class="reviews-item-title">
												<a href="<?php  echo URL ?>index.html#">Canadian Rockies</a>
											</h3>
                                                <div class="reviews-item-description">The sightseeing and activities were better than we even thought! I still can’t believe we did so much in such a short time</div>
                                            </div>
                                        </div>
                                        <div class="tour-reviews-item">
                                            <div class="reviews-item-info">
                                                <img alt="" src="<?php  echo URL ?>images/avata.jpeg" class="avatar avatar-95 photo" height="90" width="90">
                                                <div class="reviews-item-info-name">Jessica</div>
                                                <div class="reviews-item-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="reviews-item-content">
                                                <h3 class="reviews-item-title">
												<a href="<?php  echo URL ?>index.html#">Canadian Rockies</a>
											</h3>
                                                <div class="reviews-item-description">The sightseeing and activities were better than we even thought! I still can’t believe we did so much in such a short time</div>
                                            </div>
                                        </div>
                                        <div class="tour-reviews-item">
                                            <div class="reviews-item-info">
                                                <img alt="" src="<?php  echo URL ?>images/avata.jpeg" class="avatar avatar-95 photo" height="90" width="90">
                                                <div class="reviews-item-info-name">Jessica</div>
                                                <div class="reviews-item-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="reviews-item-content">
                                                <h3 class="reviews-item-title">
												<a href="<?php  echo URL ?>index.html#">Canadian Rockies</a>
											</h3>
                                                <div class="reviews-item-description">The sightseeing and activities were better than we even thought! I still can’t believe we did so much in such a short time.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                           <!--  <div class="col-sm-8">
                                <div class="shortcode_title title-center title-decoration-bottom-center">
                                    <h2 class="title_primary">Latest Post</h2>
                                    <span class="line_after_title"></span>
                                </div>
                                <div class="row">
                                    <div class="post_list_content_unit col-sm-6">
                                        <div class="feature-image">
                                            <a href="<?php  echo URL ?>index.html#" class="entry-thumbnail">
											<img width="370" height="260" src="<?php  echo URL ?>images/blog/201H.jpg" alt="">
										</a>
                                        </div>
                                        <div class="post-list-content">
                                            <div class="post_list_inner_content_unit">
                                                <h3 class="post_list_title">
												<a href="<?php  echo URL ?>single.html" rel="bookmark">Love advice from experts</a>
											</h3>
                                                <div class="wrapper-meta">
                                                    <div class="date-time">September 6, 2016</div>
                                                    <div class="post_list_cats">
                                                        <a href="<?php  echo URL ?>index.html#" rel="category tag">Technology</a>
                                                    </div>
                                                </div>
                                                <div class="post_list_item_excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam efficitur</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post_list_content_unit col-sm-6">
                                        <div class="feature-image">
                                            <a href="<?php  echo URL ?>index.html#" class="entry-thumbnail">
											<img width="370" height="260" src="<?php  echo URL ?>images/blog/86H.jpg" alt="">
										</a>
                                        </div>
                                        <div class="post-list-content">
                                            <div class="post_list_inner_content_unit">
                                                <h3 class="post_list_title">
												<a href="<?php  echo URL ?>single.html" rel="bookmark">The perfect summer body</a>
											</h3>
                                                <div class="wrapper-meta">
                                                    <div class="date-time">September 6, 2016</div>
                                                    <div class="post_list_cats">
                                                        <a href="<?php  echo URL ?>index.html#" rel="category tag">Technology</a>
                                                    </div>
                                                </div>
                                                <div class="post_list_item_excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam efficitur</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
require_once("template/footer.php");
         ?>
        