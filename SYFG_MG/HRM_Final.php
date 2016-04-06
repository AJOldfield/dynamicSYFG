aa2 `<?php
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
	<h1>Hiring Rental Machinery 3/3</h1>
</div>

<div class="content">
	<?php 
		
	 // form_draw_block(title, array(as_many_elements_as_you_want))
            form_draw_block('Dates Available', array('hrm_required_from', 'hrm_required_to', 'hrm_job_size', 'hrm_job_size_unit', 'hrm_pick_up_distance'));
    
	?>
    
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>