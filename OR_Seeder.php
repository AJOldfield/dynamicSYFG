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
	<h1>Listing Rental Machinery 2/3</h1>
</div>
<div class="content">
      <p>List only the details you wish to.</p>
	<?php 
		
	 // form_draw_block(title, array(as_many_elements_as_you_want))
            form_draw_block('Seeder Details', array('or_seeder_make', 'or_seeder_model', 'or_seeder_year', 'or_sdr_point_type', 'or_sdr_closing', 'or_sdr_width', 'or_sdr_working_speed', 'or_sdr_capacity','or_sdr_point_spacing', 'or_sdr_point_spacing_units',  'or_sdr_wheelbase', 'or_sdr_bin_1_capacity_units', 'or_sdr_bin_1_capacity_units', 'or_sdr_bin_2_capacity_units', 'or_sdr_bin_2_capacity_units', 'or_sdr_bin_2_capacity_units', 'or_sdr_bin_2_capacity_units','or_sdr_comments' ));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>