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
            form_draw_block('Fertiliser Spreader Details', array('sm_fertsprd_make', 'sm_fertsprd_model', 'sm_fertsprd_year', 'sm_fertsprd_swath_width', 'sm_fertsprd_working_speed', 'sm_fertsprd_capacity','sm_fertsprd_wheelbase','sm_fertsprd_bin_size','fertsprd_bin_size_units','sm_fertsprd_travel_speed' 'sm_fertsprd_comments' ));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>