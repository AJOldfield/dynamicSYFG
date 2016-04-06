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
            form_draw_block('Sprayer Details', array('sm_sprayer_sp','sm_sprayer_make','sm_sprayer_model','sm_sprayer_year','sm_sprayer_width','sm_sprayer_wsmk_speed','sm_sprayer_tank_size','sm_sprayer_wheelbase','sm_sprayer"tank_size','sm_sprayer_capacity','sm_sprayer_comments',));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>