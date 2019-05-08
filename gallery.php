<?php 
require_once("function.php");
if (isset($_GET['name'])) {
	$active_slide=$_GET['name'];
}
else{
	$active_slide='all';
}
if (isset($_GET['id'])) {
	$areaid=$_GET['id'];
}
else{
	$areaid='all';
}
$title="Gallery";
$active_gallery=1;
require_once("template/header2.php");
 ?>
 <div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(<?php echo URL; ?>images/banner/top-heading.jpg);">
<?php 
$breadcrumb=array("gallery.php",$title);
echo breadcrumb($title,$breadcrumb);
 ?>
		</div>
		<section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-12 full-width">
						<div class="sc-gallery wrapper_gallery">
							<div class="gallery-tabs-wrapper filters">
								<ul class="gallery-">


									<li><a href="<?php  echo URL ?>gallery.php"  class="
									<?php 
									if($active_slide === 'all'){
										echo "active";
									} 

									?>



										">all</a></li>
									<li><a href="<?php  echo URL ?>gallery/1/abdullahpur"  class="filter

										<?php 
									if($active_slide === "abdullahpur"){
										echo "active";
									} ?>
									">Abdullahpur</a></li>
									<li><a href="<?php  echo URL ?>gallery/8/azimpur"  class="<?php 
									if($active_slide === "azimpur"){
										echo "active";
									} ?>
									">Azimpur</a></li>
									<li><a href="<?php  echo URL ?>gallery/43/gabtoli"  class="filter
										<?php 
									if($active_slide === "gabtoli"){
										echo "active";
									} ?>
									">Gabtoli</a></li>
									<li><a href="<?php  echo URL ?>gallery/87/mohammadpur-bus-stand"  class="filter
										<?php 
									if($active_slide === "mohammadpur-bus-stand"){
										echo "active";
									} ?>
									">Mohammadpur</a></li>
									<li><a href="<?php  echo URL ?>gallery/88/motijheel"  class="<?php 
									if($active_slide === "motijhil"){
										echo "active";
									} ?>">Motijhil</a></li>
								</ul>
							</div>






							<div class="row content_gallery">
							
<?php 
if ($areaid != 'all') {

$sqlbus="SELECT * FROM bus where start=$areaid OR stop = $areaid ORDER BY id asc";
$sqlbus=$db->query($sqlbus);
while ($buss=$sqlbus->fetch_assoc()){
      ?>


<?php // var_dump($buss); ?>
								<div class="col-sm-4 gallery_item-wrap">
									<a href="<?php  echo URL ?>images/bus/bus_<?php echo $buss['id']  ?>_resize.<?php echo $buss['pic']  ?>" class="swipebox" title="<?php echo $buss['name']  ?>">
										<img src="<?php  echo URL ?>images/bus/bus_<?php echo $buss['id']  ?>_thumb.<?php echo $buss['pic']  ?>" alt="<?php echo $buss['name']  ?>">
										<div class="gallery-item">
											<h4 class="title">
												
<?php 
 $busstart=$buss['start'];
 $busstop=$buss['stop'];


 $arrows='<i class="fa fa-arrows-h" aria-hidden="true"></i>';
 $map='<i class="fa fa-map-marker" aria-hidden="true"></i>';


$sqlarea="SELECT name FROM area where id='$busstart'";
$sqlarea=$db->query($sqlarea);
$busstartname=$sqlarea->fetch_assoc();
echo $map.' '.$busstartname['name'].'<br>';

 echo $arrows.'<br>';

$sqlarea2="SELECT name FROM area where id='$busstop'";
$sqlarea2=$db->query($sqlarea2);
$busstopname=$sqlarea2->fetch_assoc();
echo $map.' '.$busstopname['name'];



 ?>



											</h4>
										</div>
									</a></div>



<?php } }

?>




<?php 
if ($areaid === 'all') {

$sqlbus="SELECT * FROM bus  ORDER BY id asc";
$sqlbus=$db->query($sqlbus);
while ($buss=$sqlbus->fetch_assoc()){
      ?>


<?php // var_dump($buss); ?>
								<div class="col-sm-4 gallery_item-wrap">
									<a href="<?php  echo URL ?>images/bus/bus_<?php echo $buss['id']  ?>_resize.<?php echo $buss['pic']  ?>" class="swipebox" title="<?php echo $buss['name']  ?>">
										<img src="<?php  echo URL ?>images/bus/bus_<?php echo $buss['id']  ?>_thumb.<?php echo $buss['pic']  ?>" alt="<?php echo $buss['name']  ?>">
										<div class="gallery-item">
											<h4 class="title">
												
<?php 
 $busstart=$buss['start'];
 $busstop=$buss['stop'];

 $arrows='<i class="fa fa-arrows-h" aria-hidden="true"></i>';
 $map='<i class="fa fa-map-marker" aria-hidden="true"></i>';


$sqlarea="SELECT name FROM area where id='$busstart'";
$sqlarea=$db->query($sqlarea);
$busstartname=$sqlarea->fetch_assoc();
echo $map.' '.$busstartname['name'].'<br>';

echo $arrows.'<br>';

$sqlarea2="SELECT name FROM area where id='$busstop'";
$sqlarea2=$db->query($sqlarea2);
$busstopname=$sqlarea2->fetch_assoc();
echo $map.' '.$busstopname['name'];



 ?>
 


											</h4>
										</div>
									</a></div>



<?php } }

?>






















							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php 
require_once("template/footer.php");
         ?>