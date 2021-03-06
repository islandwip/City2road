<?php 
require_once("function.php");
$title="About Us";
$active_about_us=1;
require_once("template/header2.php");

 ?>
<div class="site wrapper-content">
    <div class="top_site_main" style="background-image:url(<?php  echo URL ?>images/banner/top-heading.jpg);">
        <?php 
$breadcrumb=array("about.php",$title);
echo breadcrumb($title,$breadcrumb);
 ?>
    </div>
    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="site-main col-lg-offset-1 col-sm-10">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="text-center">Our Suppervisor</h1>
                                <hr>
                                <img src="<?php URL?>images/team/sir.jpg" class="img-responsive img-circle" style="margin: 0 auto">
                                <div class="text-center">
                                    <h2>Mr. Md. Sazzadur Ahamed</h2>
                                    <h4>Department of Computer Science and Engineering</h4>
                                    <h4>Lecturer At Daffodil International University</h4>
                                </div>
                            </div>
           					<div class="col-lg-12">
           						                     <h2 class="text-center">Meet Our Team</h2>
                                <hr>
           
           					</div>
                            <div class="col-lg-4">
                                <img src="<?php URL?>images/team/anup.jpg" class="img-responsive img-circle" style="margin: 0 auto">
                                <div class="text-center">
                                    <h2>Anup Chandra Gosh</h2>
                                    <h6>Department of Computer Science and Engineering</h6>
                                    <h6>Daffodil International University</h6>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <img src="<?php URL?>images/team/dwip.png" class="img-responsive img-circle" style="margin: 0 auto">
                                <div class="text-center">
                                    <h2>Shaon Talukder Dwip</h2>
                                    <h6>Department of Computer Science and Engineering</h6>
                                    <h6>Daffodil International University</h6>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <img src="<?php URL?>images/team/rafi.jpg" class="img-responsive img-circle" style="margin: 0 auto">
                                <div class="text-center">
                                    <h2>Arrafi Nayon</h2>
                                    <h6>Department of Computer Science and Engineering</h6>
                                    <h6>Daffodil International University</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pages_content padding-top-4x">
                        <h4>CONTACT INFORMATION</h4>
                        <div class="contact_infor">
                            <ul>
                                <li>
                                    <label><i class="fa fa-map-marker"></i>ADDRESS</label>
                                    <div class="des">#32 Sukrabad, Dhanmondi, Dhaka, Bangladesh</div>
                                </li>
                                <li>
                                    <label><i class="fa fa-phone"></i>TEL NO</label>
                                    <div class="des">+012345678  | +0123456789 (information)</div>
                                </li>
                               <!--  <li>
                                    <label><i class="fa fa-print"></i>FAX NO</label>
                                    <div class="des">+012345678 (tour) | +123456789 (ticketing)</div>
                                </li> -->
                                <li>
                                    <label><i class="fa fa-envelope"></i>EMAIL</label>
                                    <div class="des">islandwip@gmail.com | shaon3821@diu.edu.bd</div>
                                </li>
                                <li>
                                    <label><i class="fa fa-clock-o"></i>WORKING HOURS</label>
                                    <div class="des">Mon – Fri 9:00 am – 5:30 pm, Sat 9:00 am – 1:00 pm
                                        <br> We are closed on 1st &amp; 3rd Sat of every month, Sundays &amp; public holidays
                                    </div>
                                </li>
                                <li>
                                    <label><i class="fa fa-map-marker"></i>GPS COORDINATE</label>
                                    <div class="des">Not Set</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="wpb_wrapper pages_content">
                        <h4>Have a question?</h4>
                        <div role="form" class="wpcf7">
                            <div class="screen-reader-response"></div>
                            <form action="contact.html#" method="post" class="wpcf7-form" novalidate="novalidate">
                                <div class="form-contact">
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
                                                    <input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control" placeholder="Subject">
                                                </span>
                                    </div>
                                    <div class="form-contact-fields">
                                        <span class="wpcf7-form-control-wrap your-message">
                                                <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message"></textarea>
                                                 </span>
                                        <br>
                                        <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
              <!--   <div class="widget-area col-sm-3 align-left">
                    <aside class="widget widget_text">
                        <img src="<?php  echo URL ?>images/images-sidebar/sidebanner-ticketing.jpg" alt="">
                    </aside>
                    <aside class="widget widget_text">
                        <img src="<?php  echo URL ?>images/images-sidebar/sidebanner-tour.png" alt="">
                    </aside>
                    <aside class="widget widget_text">
                        <img src="<?php  echo URL ?>images/images-sidebar/hertz-sidebanner.jpg" alt="">
                    </aside>
                </div> -->
            </div>
        </div>
    </section>
</div>
<?php 
require_once("template/footer.php");
         ?>