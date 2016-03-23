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
            form_draw_block('Plough Details', array('pcs_plough_make', 'pcs_plough_model', 'pcs_plough_year', 'pcs_plough_point_type', 'pcs_plough_closing', 'pcs_plough_width', 'pcs_plough_working_speed', 'pcs_plough_point_spacing', 'pcs_plough_point_spacing_units',  'pcs_plough_wheelbase', 'pcs_plough_comments' ));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>