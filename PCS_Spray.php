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
            form_draw_block('Sprayer Details', array('pcs_sprayer_make','pcs_sprayer_model','pcs_sprayer_year','pcs_sprayer_width','pcs_sprayer_work_speed','pcs_sprayer_tank_size','pcs_Sprayer_wheelbase','pcs_sprayer_prcesision_ag','pcs_sprayer_comments',));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>