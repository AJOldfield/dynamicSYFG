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
            form_draw_block('Combine Harvester Details', array('or_harvester_make', 'or_harvester_model', 'or_harvester_year', 'or_eng_hours','or_thrash_hours', 'or_harvester_hp', 'or_harvester_class','or_harvester_capacity', 'or_harvester_drivetrain', 'or_harvester_wheelbase', 'or_harvester_fronts','or_harvester_precision_ag', 'or_harvester_comments' ));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>