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
$title="Complain";
$active_Complain=1;
require_once("template/header2.php");
 ?>
  <div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(<?php echo URL; ?>images/banner/top-heading.jpg);">
<?php 
$breadcrumb=array("complain.php",$title);
echo breadcrumb($title,$breadcrumb);
 ?>
 	</div>

 	<section class="content-area">
                <div class="container">
                    <div class="row">
                        <div class="site-main col-lg-offset-1 col-sm-10">
                           
                            <div class="pages_content padding-top-4x">
                        
                        
                    </div>
                            <div class="wpb_wrapper pages_content">
                                <h4>Claim Your Complain...</h4>

                                <div role="form" class="wpcf7">
                                    <div class="screen-reader-response"></div>
                                    <form action="contact.html#" method="post" class="wpcf7-form" novalidate="novalidate">
                                        <div class="form-contact">



                                        	<div class="form-contact-fields">
												<div class="travel-booking-search hotel-booking-search travel-booking-style_1">
												<ul class="hb-form-table">
													<li class="hb-form-field" style="border: outset; margin-left: 10px;">
                                        				<div class="hb-form-field-input hb_input_field">
                                            				<select name="start" required="required">
                                                				<option value="">Select Bus Type</option>
                                                				<option value="">Setting Service</option>
                                                				<option value="">Local Service</option>
                                                
                                            				</select>
                                        				</div>
                                   					 </li>
                                   					 <li class="hb-form-field" style="border: outset; margin-left: 75px;">
                                        				<div class="hb-form-field-input hb_input_field">
                                            				<select name="start" required="required">
                                                				<option value="">Select Bus Name</option>
                                                				<option value="">Bus Name121</option>
                                                				<option value="">Bus Name122</option>
                                                
                                            				</select>
                                        				</div>
                                   					 </li>&nbsp;&nbsp;&nbsp;
                                   					 <li class="hb-form-field" style="border: outset; margin-left: 50px;">
                                        				<div class="hb-form-field-input hb_input_field">
                                            				<select name="start" required="required">
                                                				<option value="">Complain About</option>
                                                				<option value="">Price Issue</option>
                                                				<option value="">Time Issue</option>
                                                				<option value="">Maintainence Issue</option>
                                                				<option value=""> Others Issue</option>
                                                
                                            				</select>
                                        				</div>
                                   					 </li>
												</ul>                                                  
                                                </div>
                                            </div>


                                            <div class="row-1x">
                                                <div class="col-sm-6">
                                                    <span class="wpcf7-form-control-wrap your-name">
                                                        <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control" placeholder="Your name*">
                                                    </span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <span class="wpcf7-form-control-wrap your-email">
                                                        <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control" placeholder="Email*">
                                                    </span>
                                                </div>
                                            </div>

                                    
                                            <div class="form-contact-fields">
                                                <span class="wpcf7-form-control-wrap your-subject">
                                                    <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Please Write Your Complain Briefly*"></textarea>
                                                </span>
                                            </div>
                                            <div class="form-contact-fields">
                                                <span class="wpcf7-form-control-wrap your-message">
                                                <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Suggestion about Solving this problem If You Have (Optional)"></textarea>
                                                 </span>
                                                <br>
                                                <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit">
                                            </div>
                                        </div>
                                    </form>
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