<?php 
require_once("function.php");
if (!isset($_SESSION["type"])) {
$title="Admin Login Page";
require_once("template/admin_login.php");
 ?>








 <div class="site wrapper-content">
            <div class="home-content" role="main">
                <div class="wrapper-bg-video">
                    <video poster="images/video_slider.jpg">
                        
                    </video>
                	<div class="content-slider">
                        <p>You are welcome To Admin Panel of</p>
                        <h2>City Bus Travel !</h2>
                        
                	</div>
            	</div>
            </div>
 </div>

 <?php require_once("template/footer.php"); 



}else{
  
  header("Location:".URL.'admin_bus.php');  

}

 ?>