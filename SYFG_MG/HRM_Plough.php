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
	<h1>Hiring Rental Machinery 2/3</h1>
</div>
<div class="content">
      <p>List  the details that are important to you.</p>
	<?php 
		
	 // form_draw_block(title, array(as_many_elements_as_you_want))
            form_draw_block('Plough Details', array('hrm_plough_make', 'hrm_plough_model', 'hrm_plough_year', 'hrm_plough_point_type','hrm_plough_point_spacing', 'hrm_plough_point_spacing_units', 'hrm_plough_closing', 'hrm_plough_width', 'hrm_plough_working_speed',   'hrm_plough_wheelbase', 'hrm_plough_comments' ));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>