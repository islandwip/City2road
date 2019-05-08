<?php 
$bus_id=$_GET['id'];
require_once("function.php");
$title="Discover Buses";
require_once("template/header2.php");

 ?>
<div class="site wrapper-content">
    <div class="top_site_main" style="background-image:url(<?php echo URL ?>images/banner/top-heading.jpg);">
        <?php 
$breadcrumb=array("index.php",$title);
echo breadcrumb($title,$breadcrumb);
 ?>
    </div>
    <div class="container">
        <section class="content-area single-woo-tour">
            <div class="col-lg-offset-1 col-lg-10 col-xs-12">
                <div class="">
                    <div class="">
                        <div class="">
                            <div class="">
                                <div class="title-single">
                                    <div class="title">
                                        <h1>Discover Buses</h1>
                                    </div>
                                </div>
                                <?php 
                                        $bus="SELECT * FROM bus where id = '$bus_id'";
                                        $bus=$db->query($bus);
                                        $busx=$bus->fetch_assoc();
                                               //var_dump($busx);

                                               ?>
                                <div class="tour_after_title">
                                    <div class="meta_values">
                                        <span>Category:</span>
                                        <a href="" rel="tag">Discover</a>,
                                        <a href="" rel="tag">All Buses</a>
                                    </div>
                                    <div class="tour-share">
                                        <img src="<?php  echo URL ?>images/bus/<?php echo "bus_".$busx['id']."_resize.".$busx['pic']; ?>" alt="<?php echo $busx['name']; ?>" class="img-responsive">
                                    </div>
                                </div>
                                <div id="slider" class="flexslider">
                                </div>
                                <div class="single-tour-tabs wc-tabs-wrapper">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--description panel entry-content wc-tab active" id="tab-description">
                                            <h2>Bus Description</h2>
                                            <table class="tours-tabs_table">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Bus Name</strong></td>
                                                        <td>
                                                            <?php echo $busx['name']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Bus Destination</strong></td>
                                                        <td>
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><i class="fa fa-check icon-tick icon-tick--on"></i>
                                                                            <?php echo LocationName($busx['start']); ?>
                                                                        </td>
                                                                       

                                                                        <td><i class="fa fa-check icon-tick icon-tick--on"></i>
                                                                            <?php echo LocationName($busx['stop']); ?>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Destination Via</b></td>
                                                        <td>
                                                            <table>
                                                                <tbody>
                                                                    <?php 
                            $via="SELECT areaid FROM via where busid='{$busx['id']}'";
                            $via=$db->query($via);
                            while ($viax=$via->fetch_assoc()) {
                                ?>
                                                                    <tr>
                                                                        <td>
                                                                            <i class="fa fa-check icon-tick icon-tick--on"></i>
                                                                            <?php echo  LocationName($viax['areaid']) ?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Bus Type</b></td>
                                                        <td>
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <i class="fa fa-check icon-tick icon-tick--on"></i>
                                                                            <?php echo BusType($busx['bus_type']); ?>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="related tours">
                                    <h2>Related Bus</h2>
                                    <ul class="row">
                                        


                         <?php $bus="SELECT * FROM bus where id!='$bus_id' limit 3 ";
                                                $bus=$db->query($bus);
                                                while ($busx=$bus->fetch_assoc()){
                                    // var_dump($busx);
                                     ?>








                                        <div class="col-md-4 col-sm-6 col-xs-12" style=" margin-right: 0px;">
                                            <div class="item-tour">
                                                <div class="item_border">
                                                    <div class="item_content">
                                                        <div class="post_images">
                                                            <a href="<?php  echo URL.'bus-view/'.$busx['id'].'/'.Replace($busx['name']); ?>" class="travel_tour-LoopProduct-link">
                                                                                            
                                                <img src="<?php  echo URL ?>images/bus/<?php echo "bus_".$busx['id']."_thumb.".$busx['pic']; ?>" alt="<?php echo $busx['name']; ?>" title="">
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
                                        </div>
                                        
                                        



<?php } ?>












                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php 
require_once("template/footer.php");
         ?>