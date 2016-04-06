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
            form_draw_block('Combine Harvester Details', array('sm_harvester_make', 'sm_harvester_model', 'sm_harvester_year', 'sm_eng_hours','sm_thrash_hours', 'sm_harvester_hp', 'sm_harvester_class','sm_harvester_capacity', 'sm_harvester_drivetrain', 'sm_harvester_wheelbase', 'sm_harvester_fronts','sm_harvester_precision_ag', 'sm_harvester_comments' ));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>