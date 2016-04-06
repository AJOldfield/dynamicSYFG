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
            form_draw_block('Combine Harvester Details', array('hrm_harvester_make', 'hrm_harvester_model', 'hrm_harvester_year', 'hrm_eng_hours','hrm_thrash_hours', 'hrm_harvester_hp', 'hrm_harvester_class','hrm_harvester_capacity', 'hrm_harvester_drivetrain', 'hrm_harvester_wheelbase', 'hrm_harvester_fronts','hrm_harvester_precision_ag', 'hrm_harvester_comments' ));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>