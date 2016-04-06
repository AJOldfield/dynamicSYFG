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
            form_draw_block('Seeder Details', array('sm_seeder_make', 'sm_seeder_model', 'sm_seeder_year', 'sm_sdr_point_type', 'sm_sdr_closing', 'sm_sdr_width', 'sm_sdr_working_speed', 'sm_sdr_capacity','sm_sdr_point_spacing', 'sm_sdr_point_spacing_units',  'sm_sdr_wheelbase', 'sm_sdr_bin_1_capacity_units', 'sm_sdr_bin_1_capacity_units', 'sm_sdr_bin_2_capacity_units', 'sm_sdr_bin_2_capacity_units', 'sm_sdr_bin_2_capacity_units', 'sm_sdr_bin_2_capacity_units','sm_sdr_comments' ));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>