<?php 
require_once("function.php");


$title="Search";

$active_search=1;
require_once("template/header2.php");
 ?>
 <div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(<?php echo URL; ?>images/banner/top-heading.jpg);">
<?php 
$breadcrumb=array("search.php",$title);
echo breadcrumb($title,$breadcrumb);
 ?>
		</div>

<style>
	.slider-tour-booking1 {
    margin-top: -100px;
    position: relative;
    background-color: rgba(67, 67, 67, 0.06);
}
</style>
<pre>

</pre>

<div class="slider-tour-booking1" style="height: 100%;
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







		<section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-12 full-width">
						<ul class="tours products wrapper-tours-slider">




<?php 

//var_dump($_POST);
if (!isset($_POST['start'])) {
	header("Location:".URL);
}
$sc=$_POST['start'];

$sqlbusz="SELECT * FROM area where name='$sc'";
$sqlbusz=$db->query($sqlbusz);
$bussz=$sqlbusz->fetch_assoc();

$start=$bussz['id'];


$sqlbus="SELECT * FROM via where areaid='$start'";
$sqlbus=$db->query($sqlbus);
while ($buss=$sqlbus->fetch_assoc()){



$bussid=$buss['busid'];





/* var_dump($bussid);*/
$sqlbusn="SELECT name FROM bus where id='$bussid' ";
$sqlbusn=$db->query($sqlbusn);
$bussname=$sqlbusn->fetch_assoc();
//var_dump($bussname);

//echo $bussname['name'];




 ?>






 
							<li class="item-tour col-md-3 col-sm-6 product">
								<div class="item_border item-product">
									<div class="post_images">
										<a href="<?php  echo URL.'bus-view/'.$bussz['id'].'/'.Replace($bussname['name']); ?>">
											
											<img width="430" height="305" src="images/bus/bus_<?php echo $bussid; ?>_thumb.jpg" alt="<?php echo $bussname['name']; ?>" title="<?php echo $bussname['name']; ?>">
										</a>
										
									</div>
									<div class="wrapper_content">
										<div class="post_title"><h4>
											<a href="<?php  echo URL.'bus-view/'.$bussz['id'].'/'.Replace($bussname['name']); ?>" rel="bookmark"><?php echo $bussname['name']; ?></a>
										</h4></div>
										<span class="post_date"></span>
										<div class="description">
											<p>
												<i class="fa fa-map-marker" aria-hidden="true"></i>Abdullapur <br>
												<i class="fa fa-arrows-h" aria-hidden="true"></i>
                                                <br/>

                                                <i class="fa fa-map-marker" aria-hidden="true"></i> Mohakhali
											</p>
										</div>
									</div>
									<div class="read_more">
										
										<a rel="nofollow" href="<?php  echo URL.'bus-view/'.$bussz['id'].'/'.Replace($bussname['name']); ?>" class="button product_type_tour_phys add_to_cart_button">Read more</a>
									</div>
								</div>
							</li> 




<?php }  ?>








							
						</ul>
						<!-- <div class="navigation paging-navigation" role="navigation">
							<ul class="page-numbers">
								<li><span class="page-numbers current">1</span></li>
								<li><a class="page-numbers" href="destinations.html#">2</a></li>
								<li><a class="next page-numbers" href="destinations.html#"><i class="fa fa-long-arrow-right"></i></a>
								</li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php 
require_once("template/footer.php");
         ?>