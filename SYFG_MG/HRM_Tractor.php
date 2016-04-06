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
	       form_draw_block('Tractor Details', array('hrm_trctr_make', 'hrm_trctr_model', 'hrm_trctr_year', 'hrm_trctr_hours','hrm_trctr_hp_engine','hrm_trctr_hp_pto', 'hrm_trctr_hp_pto', 'hrm_trctr_drivetrain', 'hrm_trctr_wheelbase', 'hrm_trctr_PTO','hrm_trctr_front_PTO','hrm_trctr_rear_hydraulics','hrm_trctr_front_hydraulics','hrm_precision_ag','hrm_trctr_3_pt_linkage','hrm_trctr_front_3_pt_linkage','hrm_trctr_attachment','hrm_precision_ag','hrm_tractor_comments'));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>