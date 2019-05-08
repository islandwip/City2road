<?php 
require_once("function.php");

if (isset($_SESSION["type"])) {




$title="Bus Update";
require_once("template/header2.php");
 ?>
	<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(<?php URL; ?>images/banner/top-heading.jpg);">
		<?php 
$breadcrumb=array("admin_bus.php",$title);
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
$active_adbus=1;
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
if (isset($_POST['bus_submit'])) {
  //var_dump($_POST);
  $title= $_POST['title'];
  $type= $_POST['type'];
  $start= $_POST['start'];
  $stop= $_POST['stop'];
  $pic= "";
  $link= 'admin_bus.php';
  $a="INSERT INTO bus(name,pic,start,stop,bus_type) VALUES ('$title','$pic','$start','$stop','$type')";
  if($db->query($a)){
      $post_id=$db->insert_id;



    if (isset($_FILES["pro_pic"])) {
    if($_FILES["pro_pic"]["name"] != ''){
      $name=$_FILES['pro_pic']['name'];
      $id=$post_id;
      $pic_ext=get_ext($name);
      $time=time();
      $dir='images/bus/bus_'.$id;
      $postdb=$dir.'.'.$pic_ext;
      $sql="UPDATE bus SET pic='$pic_ext' WHERE id='$id' limit 1";
      $update = $db->query($sql);
      $source=$_FILES['pro_pic']['tmp_name'];
      move_uploaded_file($source, $dir.'.'.$pic_ext);
      $source=$dir.'.'.$pic_ext;
      list($width, $height) = getimagesize($source);
      $max_width=($width>1000) ? 1000 : $width;
      $new_img=$dir.'_resize.'.$pic_ext;
      $new_thumb=$dir.'_thumb.'.$pic_ext;
      // $new_bigthumb=$dir.'_thumb1.'.$pic_ext;
      // $new_thumb=$dir.'_'.$id.'.'.$pic_ext;
      // upload_image('crop', $source, $new_thumb, 200,200,50);
      upload_image('resize',$source, $new_img, $max_width, 0);
      upload_image('crop', $source, $new_thumb, 430,305,60);
      // upload_image('crop', $source, $new_bigthumb, 600,400,60);

      @unlink($source);
      $_SESSION["SMS"]="1";
      // echo '<img src="'.$new_thumb.'?t='.$time.'" class="profile-avatar" />';
    }
  }








    // $_SESSION["SMS"]="1";
    header("Location:".URL."$link");
  }
  else{
    $_SESSION["SMS"]="2";
    header("Location:".URL."$link");
  }
}
 ?>
	


<form method="post"  enctype="multipart/form-data">
   <div class="form-group">
    <label for="exampleInputEmail1"> Bus Name:</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder=" Type Bus Name" >
  </div>
  
   <div class="form-group">
    <label for="x">Bus Type :</label>
    <input type="text" name="type" class="form-control" id="x" placeholder="Bus Type">
  </div>





     <div class="form-group">
    <label for="x">Bus Start :</label><br>
    <select class="form-control" name="start" id="sel1" name="tourtax[pa_destination]">
                                                <option value="0">Select Location</option>
                                                <?php $area="SELECT * FROM area";
                                                $area=$db->query($area);
                                                // var_dump($area);
                                                while ($areax=$area->fetch_assoc()) {
                                                    echo '<option value="'.$areax['id'].'">'.$areax['name'].'</option>';
                                                }



                                                 ?>
                                            </select>
    </div>
    <div class="form-group">
    <label for="x">Bus Stop :</label><br>
    <select class="form-control" name="stop" id="sel1" name="tourtax[pa_destination]">
                                                <option value="0">Select Location</option>
                                                <?php $area="SELECT * FROM area";
                                                $area=$db->query($area);
                                                // var_dump($area);
                                                while ($areax=$area->fetch_assoc()) {
                                                    echo '<option value="'.$areax['id'].'">'.$areax['name'].'</option>';
                                                }



                                                 ?>
                                            </select>
    </div>







  <div class="form-group">
    <label for="exampleInputFile">Bus Image</label>
    <input type="file" id="exampleInputFile" name="pro_pic" style="width: 100%;padding: 5px 0">
   
  </div>

  <button type="submit" name="bus_submit" class="btn btn-default btn-block btn-primary">Submit</button>
</form>

	</div>
	</div>
	</div>
</div>

</div></div>
</div><?php require_once("template/footer.php"); 






}else{
  
  header("Location:".URL);  

}




?>