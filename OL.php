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
	<h1>Offering Labour For Hire</h1>
</div>
<div class="content">
	<?php 
		
	 // form_draw_block(title, array(as_many_elements_as_you_want))
            form_draw_block('Offer Labour', array('ol_fname','ol_lname', 'ol_age','ol_gender','ol_fitness','ol_machinery_exp','ol_livestock_exp','ol_licences','ol_locatiomn'));
	
	?>
    <input type="submit" name="submit" value="Submit" />
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>