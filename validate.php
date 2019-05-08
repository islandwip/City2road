<?php 
require_once('function.php');
							// For Bus Update Page admin_bus.php
if (isset($_POST['bus_submit'])) {
	//var_dump($_POST);
	$title= $_POST['title'];
	$type= $_POST['type'];
	$start= $_POST['start'];
	$stop= $_POST['stop'];
	$pic= "jpg";
	$link= 'admin_bus.php';
	$a="INSERT INTO bus(name,pic,start,stop,bus_type) VALUES ('$title','$pic','$start','$stop','$type')";
	if($db->query($a)){
		$_SESSION["SMS"]="1";
		//header("Location:".URL."$link");
	}
	else{
		$_SESSION["SMS"]="2";
		//header("Location:".URL."$link");
	}
}
							// For Blog Page Update URL admin_blog.php
if (isset($_POST['blog_submit'])) {
	//var_dump($_POST);
	$title= $_POST['title'];
	$descr= $_POST['descr'];
	$pic= "jpg";
	$link= 'admin_blog.php';
	$a="INSERT INTO blog(title,pic,text) VALUES ('$title','$pic','$descr')";
	if($db->query($a)){
		$_SESSION["SMS"]="1";
		header("Location:".URL.$link);
	}
	else{
		$_SESSION["SMS"]="2";
		header("Location:".URL.$link);
	}
}
							// For Bus Via Page Update URL admin_via.php
if (isset($_POST['via_submit'])) {
	//var_dump($_POST);
	$bid= $_POST['bus_id'];
	$aid= $_POST['area_id'];
	$link= 'admin_via.php';
	$a="INSERT INTO via(busid,areaid) VALUES ('$bid','$aid')";
	if($db->query($a)){
		$_SESSION["SMS"]="1";
		//header("Location:".URL."$link");
	}
	else{
		$_SESSION["SMS"]="2";
		//header("Location:".URL."$link");
	}
	var_dump($_POST);
}


						// Admin LogIn

if (isset($_POST['log_submit'])) {
	$user= $_POST['log'];
	$pass= $_POST['pwd'];
$login=$db->query("SELECT * FROM admin WHERE user_name='$user' AND pass='$pass'");
$user=$login->fetch_assoc();
if ($login->num_rows>0) {
	$link='admin_bus.php';
	$_SESSION["type"]="Logged";
	$_SESSION["name"]=$user['name'];
	$_SESSION["id"]=$user['id'];
	header("Location:".URL.$link); 	
}
else{
	header("Location:".URL); 	
}
	}
else{
	header("Location:".URL);} ?>
