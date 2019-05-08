<?php 
require_once('function.php');
							// For Bus Update Page admin_bus.php

							// For Blog Page Update URL admin_blog.php

							// For Bus Via Page Update URL admin_via.php




if (isset($_POST['log_submit'])) {
	$user= $_POST['log'];
	$pass= $_POST['pwd'];
$login=$db->query("SELECT * FROM admin WHERE user_name='$user' AND pass='$pass'");
$user=$login->fetch_assoc();
if ($login->num_rows>0) {
	$link="admin_bus.php";
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
	//header("Location:".URL);
	} ?>
