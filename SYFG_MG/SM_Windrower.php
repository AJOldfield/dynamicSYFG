<?php
// *************************************************************************
// DO NOT CHANGE THIS
require_once('db_config.php');
global $dbh;
$prefix = "SYFG_";
require_once('sql_functions.php');
require_once('form_functions.php');
include('header_A.php');
echo '<div id="layout">';
include('menu_B.php');
echo '<div id="main">';
// *************************************************************************
?>

<div class="header">
	<h1>Investigating Sharing Machinery Ownership 2/3</h1>
</div>
<div class="content">
      <p>List the details that are important to you.</p>
	<?php 
		
	 // form_draw_block(title, array(as_many_elements_as_you_want))
            form_draw_block('Windrower Details', array('sm_windrow_make','sm_windrow_model','sm_windrow_year','sm_windrow_hours','sm_windrow_speed','sm_windrow_width','sm_windrow_capacity','sm_windrow_wheelbase','sm_windrow_paacc','sm_windrow_comments',));
	
	?>	<br>	<div align="center"><input type="submit" name="submit" value="Next"/></div>
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>