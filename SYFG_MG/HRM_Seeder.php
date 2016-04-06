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
      <p>List the details that are important to you.</p>
	<?php 
		
	 // form_draw_block(title, array(as_many_elements_as_you_want))
            form_draw_block('Seeder Details', array('hrm_seeder_make', 'hrm_seeder_model', 'hrm_seeder_year', 'hrm_sdr_point_type', 'hrm_sdr_closing', 'hrm_sdr_width', 'hrm_sdr_working_speed', 'hrm_sdr_capacity','hrm_sdr_point_spacing', 'hrm_sdr_point_spacing_units',  'hrm_sdr_wheelbase', 'hrm_sdr_bin_1_capacity_units', 'hrm_sdr_bin_1_capacity_units', 'hrm_sdr_bin_2_capacity_units', 'hrm_sdr_bin_2_capacity_units', 'hrm_sdr_bin_2_capacity_units', 'hrm_sdr_bin_2_capacity_units','hrm_sdr_comments' ));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>