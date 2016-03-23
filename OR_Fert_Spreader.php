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
      <p>List the details you wish to.</p>
	<?php 
		
	 // form_draw_block(title, array(as_many_elements_as_you_want))
            form_draw_block('Fertiliser Spreader Details', array('or_fertsprd_make', 'or_fertsprd_model', 'or_fertsprd_year', 'or_fertsprd_swath_width', 'or_fertsprd_working_speed', 'or_fertsprd_capacity','or_fertsprd_wheelbase','or_fertsprd_bin_size','fertsprd_bin_size_units','fertsprd_travel_speed' 'or_fertsprd_comments' ));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>