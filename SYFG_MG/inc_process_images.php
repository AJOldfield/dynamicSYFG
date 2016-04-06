<?php

if ($_FILES['imagesUploaded'][0]['name'] == "") {return;}
require_once('class_upload/src/class.upload.php');
$usercode = 'USER_CODE_HERE';

// Multiple images
$files = array();
foreach ($_FILES['imagesUploaded'] as $k => $l) {
 foreach ($l as $i => $v) {
 if (!array_key_exists($i, $files))
   $files[$i] = array();
   $files[$i][$k] = $v;
 }
}  

// Now process
foreach ($files as $file) {
  
  $handle = new img_upload($file);
  
  if ($handle->uploaded) {

	// Settings
	$daytimestring = date("YmdGis"); 
	$handle->file_max_size = '1000000'; // 10 MB	
	$handle->file_new_name_body = 'img_'.$usercode.'_'.$daytimestring;
	$handle->image_resize = true;
	$handle->image_convert = 'jpg';
	$handle->image_x = 700;
	$handle->image_ratio_y = true;
	$handle->Process('SYFG/imagesUploaded/');

    if ($handle->processed) {echo 'Image uploaded'; echo '<br>';} 
	else {echo 'Error: ' . $handle->error; echo ' - Please contact and administrator<br>';}
  
  } else {
    echo 'Error: ' . $handle->error; echo '- Please contact and administrator<br>';
  }
  
  unset($handle);
}   

?>