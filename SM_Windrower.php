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
    <p>Do you: </p>
    <form method="post">
    <input type = radio name="SM_radio" value="own_and_want_to_share"> Own and want to share this machine
    <br>
    <input type = radio name="SM_radio" value="do_not_own_and_want_to_share"> Want to find a machine like this to share.
    </form>
    
    <?php 
		
	 // form_draw_block(title, array(as_many_elements_as_you_want))
            form_draw_block('Windrower Details', array('sm_windrow_make','sm_windrow_model','sm_windrow_year','sm_windrow_hours','sm_windrow_speed','sm_windrow_width','sm_windrow_capacity','sm_windrow_wheelbase','sm_windrow_paacc','sm_windrow_comments',));
	
	?>
    <input type="submit" name="submit" value="Next" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>