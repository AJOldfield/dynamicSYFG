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
	<h1>Provide services</h1>
</div>

<div class="content">
	<h2 class="content-subhead">Provide services</h2>
	<p>TEST</p>
	<?php 
		
	// field + units
	form_draw_field_units("contracting_capacity", "pcs_capacity_units");
	
	// field + units
	form_draw_field_units("contracting_distance_1", "contracting_js_unit_1");

	// form_draw_block(title, array(as_many_elements_as_you_want))
	form_draw_block('Tractor', array('pcs_trctr_make', 'pcs_trctr_model', 'pcs_trctr_year', 'pcs_trctr_engine_HP', 'pcs_trctr_ drivetrain'));
	
	?>
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>