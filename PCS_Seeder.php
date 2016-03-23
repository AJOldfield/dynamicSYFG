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
	<h1>Listing Contracting Services 2/3</h1>
</div>
<div class="content">
      <p>List only the details you wish to.</p>
	<?php 
		
	 // form_draw_block(title, array(as_many_elements_as_you_want))
            form_draw_block('Seeder Details', array('pcs_seeder_make', 'pcs_seeder_model', 'pcs_seeder_year', 'pcs_sdr_point_type', 'pcs_sdr_closing', 'pcs_sdr_width', 'pcs_sdr_working_speed', 'pcs_sdr_point_spacing', 'pcs_sdr_point_spacing_units',  'pcs_sdr_wheelbase', 'pcs_sdr_comments' ));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>