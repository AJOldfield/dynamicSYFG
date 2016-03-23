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
	<h1>Listing Contracting Services 3/3</h1>
</div>
<div class="content">
	<?php 
		
	 // form_draw_block(title, array(as_many_elements_as_you_want))
            form_draw_block('Dates Available', array('contracting_available_from', 'contracting_available_to'));
    
    // form_draw_block(title, array(as_many_elements_as_you_want))
            form_draw_block('Job Size', array('contracting_jobsize_1', 'contracting_distance_1'));
    
    // form_draw_block(title, array(as_many_elements_as_you_want))
            form_draw_block('Photos', array('pcs_photos', 'pcs_comments'));
	
	?>
    
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>