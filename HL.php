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
	<h1>Hiring Labour</h1>
</div>
<div class="content">
	<?php 
		
	 // form_draw_block(title, array(as_many_elements_as_you_want))
            form_draw_block('Hire Labour', array('hl_job_title', 'hl_description','hl_experience_req','hl_licences_req','hl_start_time','hl_end_time','hl_breaks','hl_pay','hl_other_provisions','hl_start_date','hl_end_date','hl_location'));
	
	?>
    <input type="submit" name="submit" value="Submit" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>