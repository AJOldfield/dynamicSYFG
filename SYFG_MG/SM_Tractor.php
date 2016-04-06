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
    <p>List  the details that are important to you.</p>
	<?php 
		
	 // form_draw_block(title, array(as_many_elements_as_you_want))
	       form_draw_block('Tractor Details', array('sm_trctr_make', 'sm_trctr_model', 'sm_trctr_year', 'sm_trctr_hours','sm_trctr_hp_engine','sm_trctr_hp_pto', 'sm_trctr_hp_pto', 'sm_trctr_drivetrain', 'sm_trctr_wheelbase', 'sm_trctr_PTO','sm_trctr_front_PTO','sm_trctr_rear_hydraulics','sm_trctr_front_hydraulics','sm_precision_ag','sm_trctr_3_pt_linkage','sm_trctr_front_3_pt_linkage','sm_trctr_attachment','sm_precision_ag','sm_tractor_comments'));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>