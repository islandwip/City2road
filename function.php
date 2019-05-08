<?php 

session_start();

date_default_timezone_set("Asia/Dhaka");

define("URL", "http://localhost/CityRoad/");


define("SITE_TITLE", "City Bus Service");


$dbhost   = 'localhost';
$dbuser   = 'root';
$dbname   = 'city_travel';
$dbpass   = '';

$db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
$db->set_charset("utf8");
if ($db->connect_error) {
die("<b>Database Connection failed:</b> " .
$db->connect_error);
exit;
}


          // SQL Injection Filter 

function MS($data){
    global $db;
    return trim($db->real_escape_string($data));
}

function LocationName($data){
  global $db;
  $l="SELECT name FROM area where id = '$data'";
  $l=$db->query($l);
                                                
  $lx=$l->fetch_assoc();
  $data=$lx['name'];
  return $data;

}

function get_ext($Url){
        $len = strlen($Url);
        $rpos = strrpos($Url, '.');
        $begin = $len - $rpos;
        $end = $rpos + 1;
        $sub = substr($Url, $end, $begin);
        $ext = strtolower($sub);
        return $ext;
}



function upload_image($run, $photo_src, $save_src, $width=0, $height=0, $quality=80){
    $quality=(int)$quality; if ($quality < 0 or $quality > 100){ $quality = 80; } if (file_exists ($photo_src)){if (strrpos($photo_src, '.')){$ext = substr($photo_src, strrpos($photo_src,'.') + 1, strlen($photo_src) - strrpos($photo_src, '.')); $fxt = (in_array($ext, array('jpeg', 'png', 'gif'))) ? $ext : "jpeg"; }else {  $ext = $fxt = 0;} if (preg_match('/(jpg|jpeg|png|gif)/', $ext)){if ($fxt == "gif")  {copy($photo_src, $save_src); return true; } list($photo_width, $photo_height) = getimagesize($photo_src); $create_from = "imagecreatefrom" . $fxt; $photo_source = $create_from($photo_src); if ($run == "crop"){if ($width > 0 && $height > 0){$crop_width = $photo_width; $crop_height = $photo_height; $k_w = 1; $k_h = 1; $dst_x = 0; $dst_y = 0; $src_x = 0; $src_y = 0; if ($width == 0 or $width > $photo_width) {$width = $photo_width; } if ($height == 0 or $height > $photo_height) {$height = $photo_height; } $crop_width = $width; $crop_height = $height; if ($crop_width > $photo_width) {$dst_x = ($crop_width - $photo_width) / 2; } if ($crop_height > $photo_height) {$dst_y = ($crop_height - $photo_height) / 2; } if ($crop_width < $photo_width || $crop_height < $photo_height) {$k_w = $crop_width / $photo_width; $k_h = $crop_height / $photo_height; if ($crop_height > $photo_height) {$src_x  = ($photo_width - $crop_width) / 2; } elseif ($crop_width > $photo_width) {$src_y  = ($photo_height - $crop_height) / 2; } else {if ($k_h > $k_w) {$src_x = round(($photo_width - ($crop_width / $k_h)) / 2); } else {$src_y = round(($photo_height - ($crop_height / $k_w)) / 2); } } } $crop_image = @imagecreatetruecolor($crop_width, $crop_height); if ($ext == "png") {@imagesavealpha($crop_image, true); @imagefill($crop_image, 0, 0, @imagecolorallocatealpha($crop_image, 0, 0, 0, 127)); } @imagecopyresampled($crop_image, $photo_source ,$dst_x, $dst_y, $src_x, $src_y, $crop_width - 2 * $dst_x, $crop_height - 2 * $dst_y, $photo_width - 2 * $src_x, $photo_height - 2 * $src_y); @imageinterlace($crop_image, true); if ($fxt == "jpeg") {@imagejpeg($crop_image, $save_src, $quality); } elseif ($fxt == "png") {@imagepng($crop_image, $save_src); } elseif ($fxt == "gif") {@imagegif($crop_image, $save_src); } @imagedestroy($crop_image); } } elseif ($run == "resize") {if ($width == 0 && $height == 0) {return false; } if ($width > 0 && $height == 0) {$resize_width = $width; $resize_ratio = $resize_width / $photo_width; $resize_height = floor($photo_height * $resize_ratio); } elseif ($width == 0 && $height > 0) {$resize_height = $height; $resize_ratio = $resize_height / $photo_height; $resize_width = floor($photo_width * $resize_ratio); } elseif ($width > 0 && $height > 0) {$resize_width = $width; $resize_height = $height; } if ($resize_width > 0 && $resize_height > 0) {$resize_image = @imagecreatetruecolor($resize_width, $resize_height); if ($ext == "png") {@imagesavealpha($resize_image, true); @imagefill($resize_image, 0, 0, @imagecolorallocatealpha($resize_image, 0, 0, 0, 127)); } @imagecopyresampled($resize_image, $photo_source, 0, 0, 0, 0, $resize_width, $resize_height, $photo_width, $photo_height); @imageinterlace($resize_image, true); if ($fxt == "jpeg") {@imagejpeg($resize_image, $save_src, $quality); } elseif ($fxt == "png") {@imagepng($resize_image, $save_src); } elseif ($fxt == "gif") {@imagegif($resize_image, $save_src); } @imagedestroy($resize_image); } } elseif ($run == "scale") {if ($width == 0) {$width = 100; } if ($height == 0) {$height = 100; } $scale_width = $photo_width * ($width / 100); $scale_height = $photo_height * ($height / 100); $scale_image = @imagecreatetruecolor($scale_width, $scale_height); if ($ext == "png") {@imagesavealpha($scale_image, true); @imagefill($scale_image, 0, 0, imagecolorallocatealpha($scale_image, 0, 0, 0, 127)); } @imagecopyresampled($scale_image, $photo_source, 0, 0, 0, 0, $scale_width, $scale_height, $photo_width, $photo_height); @imageinterlace($scale_image, true); if ($fxt == "jpeg") {@imagejpeg($scale_image, $save_src, $quality); } elseif ($fxt == "png") {@imagepng($scale_image, $save_src); } elseif ($fxt == "gif") {@imagegif($scale_image, $save_src); } @imagedestroy($scale_image); } } }
}


                                // Bus Service Setting or Local

function BusType($data){
  if ($data==1) {
    $type="Sitting Service";
  }else{
    $type="Local Service";
  }
  return $type;
}


function Replace($data){
  $data = str_replace("'", '-', $data);
  $data = str_replace("!", '-', $data);
  $data = str_replace(" ", '-', $data);
  $data = str_replace("@", '-', $data);
  $data = str_replace("/", '-', $data);
  $data = strtolower($data);

  return $data;
}


function breadcrumb($title,$breadcrumb){

	$html='';
	$html.='<div class="banner-wrapper container article_heading"><div class="breadcrumbs-wrapper"><ul class="phys-breadcrumb"><li><a href="'.URL.'" class="home">Home</a></li>';
             $i=0;
              $count = count($breadcrumb);
              while($i<$count){
              	$html.='<li><a href="'.URL.$breadcrumb[$i].'" class="home">'.$breadcrumb[$i+1].'</a></li>';
              	$i+=2;

              }


    $html.='</ul></div><h1 class="heading_primary">'.$title.'</h1></div>';

      return $html;
}



function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}





function sanitize_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );
    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}
//ob_start("sanitize_output");

 ?>