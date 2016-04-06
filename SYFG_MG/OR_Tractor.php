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
	       form_draw_block('Tractor Details', array('or_trctr_make', 'or_trctr_model', 'or_trctr_year', 'or_tractor_hours','or_trctr_hp_engine','or_trctr_hp_pto', 'or_trctr_hp_pto', 'or_trctr_drivetrain', 'or_tractor_wheelbase', 'or_trctr_PTO','or_trctr_front_PTO','or_trctr_rear_hydraulics','or_trctr_front_hydraulics','or_precision_ag','or_trctr_3_pt_linkage','or_trctr_front_3_pt_linkage','or_trctr_attachment','or_precision_ag','or_tractor_comments'));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>