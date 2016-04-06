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
            form_draw_block('Roller Details', array('or_roller_make', 'or_roller_model', 'or_roller_year', 'or_roller_width', 'or_roller_surface', 'or_roller_working_speed', 'or_roller_full_weight', 'or_roller_empty_weight','or_roller_trailer','or_roller_travel_speed','or_roller_comments' ));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>