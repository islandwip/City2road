<?php 
require_once("function.php");


if (isset($_SESSION["type"])) {


$title="Bus Via Update";
require_once("template/header2.php");
 ?>
	<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(<?php URL; ?>images/banner/top-heading.jpg);">
		<?php 
$breadcrumb=array("admin_via.php",$title);
echo breadcrumb($title,$breadcrumb);
?>
	<div class="site wrapper-content">

<style>

	label{
		color: black;
	}
	input.form-control{
		padding-left: 5px;
	}



	

</style>


<div class="container">
	<div class="row">
	<div class="col-lg-offset-2 col-lg-8">




<?php 
require_once("function.php");
$active_advia=1;
require_once("template/admin.php");
 ?>










	<div class="jumbotron">




<?php 

//var_dump($_SESSION);

  if (isset($_SESSION['SMS'])) {
  $sms=$_SESSION['SMS'];
  if ($sms==1) {
    echo '<div class="text-center" style="background-color: #4BF124;color: #fff; border-radius:50px;"><b>Update Succesfull</b></div>';
  }

  if ($sms==2) {
    echo '<div class="text-center" style="background-color: red;color: #fff; border-radius:50px;"><b>Update Not Succesfull</b></div>';
  }
  unset($_SESSION['SMS']);
}
 ?>



<?php 
if (isset($_POST['via_submit'])) {
    //var_dump($_POST);
    $bid= $_POST['bus_id'];
    $aid= $_POST['area_id'];
    $link= "admin_via.php";
    $a="INSERT INTO via(busid,areaid) VALUES ('$bid','$aid')";
    if($db->query($a)){
        $_SESSION["SMS"]="1";
        header("Location:".URL."$link");
    }
    else{
        $_SESSION["SMS"]="2";
        header("Location:".URL."$link");
    }
    var_dump($_POST);
}
 ?>






			<form method="post"  enctype="multipart/form-data">
   



  <div class="form-group">
    <label for="x">Bus ID :</label><br>
    <select class="form-control" name="bus_id" id="sel1" name="tourtax[pa_destination]">
                                                <option value="0">Bus ID :</option>
                                                <?php $bus="SELECT * FROM bus";
                                                $bus=$db->query($bus);
                                                // var_dump($bus);
                                                while ($busx=$bus->fetch_assoc()) {
                                                    echo '<option value="'.$busx['id'].'">'.$busx['name'].'</option>';
                                                }



                                                 ?>
                                            </select>
    </div>
<!--  -->

       <div class="form-group">
    <label for="x">Area ID :</label><br>
    <select class="form-control" name="area_id" id="sel1" name="tourtax[pa_destination]">
                                                <option value="0">Select Area</option>
                                                <?php $area="SELECT * FROM area";
                                                $area=$db->query($area);
                                                // var_dump($area);
                                                while ($areax=$area->fetch_assoc()) {
                                                    echo '<option value="'.$areax['id'].'">'.$areax['name'].'</option>';
                                                }



                                                 ?>
                                            </select>
    </div>

  <button type="submit" name="via_submit" class="btn btn-default btn-block btn-primary">Submit</button>
</form>

	</div>
	</div>
	</div>
</div>

</div></div>
</div>
<?php require_once("template/footer.php"); 

}else{
  
  header("Location:".URL);  

}


?>