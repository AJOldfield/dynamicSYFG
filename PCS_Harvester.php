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
            form_draw_block('Combine Harvester Details', array('pcs_harvester_make', 'pcs_harvester_model', 'pcs_harvester_year', 'pcs_harvester_HP', 'pcs_harvester_class', 'pcs_harvester_drivetrain', 'pcs_harvester_wheelbase', 'pcs_harvester_fronts','pcs_harvester_precision_ag', 'pcs_harvester_comments' ));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>