<?php 
require_once("function.php");

if (isset($_SESSION["type"])) {


$title="Blog Update";
require_once("template/header2.php");
 ?>
	<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(<?php echo URL; ?>images/banner/top-heading.jpg);">
		<?php 
$breadcrumb=array("admin_blog.php",$title);
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
$active_adblog=1;
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
//var_dump($_SESSION);
if (isset($_POST['blog_submit'])) {
	//var_dump($_POST);
	$title= MS($_POST['title']);
	$descr= MS($_POST['descr']);
	// $descr= "abc"s";
	$pic= "";
	$link="admin_blog.php";
	$admin_id=$_SESSION["id"];
	$time=time();
	$a="INSERT INTO blog(title,pic,text,admin_id,time) VALUES ('$title','$pic','$descr','$admin_id','$time')";
	if($db->query($a)){
		$post_id=$db->insert_id;
		





		if (isset($_FILES["pro_pic"])) {
    if($_FILES["pro_pic"]["name"] != ''){
      $name=$_FILES['pro_pic']['name'];
      $id=$post_id;
      $pic_ext=get_ext($name);
      $time=time();
      $dir='images/blog/post_'.$id;
      $postdb=$dir.'.'.$pic_ext;
      $sql="UPDATE blog SET pic='$pic_ext' WHERE id='$id' limit 1";
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
      upload_image('crop', $source, $new_thumb, 250,170,60);
      // upload_image('crop', $source, $new_bigthumb, 600,400,60);

      @unlink($source);
      $_SESSION["SMS"]="1";
      // echo '<img src="'.$new_thumb.'?t='.$time.'" class="profile-avatar" />';
    }
  }






		header("Location:".URL.$link);
	}
	else{
		$_SESSION["SMS"]="2";
		header("Location:".URL.$link);
	}
} ?>









			<form method="post"   enctype="multipart/form-data">
   <div class="form-group">
    <label for="blog-title">Title :</label>
    <input type="text" name="title" class="form-control" id="blog-title" placeholder="Blog Title">
  </div>
   <div class="form-group">
    <label for="x">Description :</label>
  	<!-- <input type="text" name="descr" class="form-control" id="x" placeholder="Type Description"> --> 

    <textarea cols="2" rows="10"  name="descr" class="form-control" id="x" placeholder="Type Description Here"></textarea>


  </div>
  <div class="form-group">
    <label for="exampleInputFile">File</label>
    <input type="file" id="exampleInputFile" name="pro_pic" style="width: 100%;padding: 5px 0">
   
  </div>

  <button type="submit" name="blog_submit" class="btn btn-default btn-block btn-primary">Submit</button>
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