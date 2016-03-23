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
	<h1>Hire Contracting Services</h1>
</div>

<div class="content">
    
               <form action="#" method="post">
                <p><select name="Search_Type">
                <option value="default_empty">What do you want to hire?</option>    
                <option value="hcs_tractor">Hire Contract Tractor Driving</option>
                <option value="hcs_grain_harvesting">Hire Contract Grain Harvesting</option>
                <option value="hcs_seeding">Hire Contract Seeding</option>
                <option value="hcs_ploughing">Hire Contract Ploughing</option>
                <option value="hcs_fert_spread">Hire Contract Fertiliser Spreading</option>
                <option value="hcs_rolling">Hire Contract Rolling</option>
                <option value="hcs_baling">Hire Contract Baling</option>
                <option value="hcs_kelly_chain">Hire Contract Kelly Chaining</option>
                <option value="hcs_chaser_bin">Hire Contract Chaser Bin Driving</option>
                <option value="hcs_spraying">Hire Contract Spraying</option>
                <option value="hcs_mowing">Hire Contract Mowing/Mowing-Conditioning</option>
                <option value="hcs_windrowing">Hire Contract Windrowing</option>
                <option value="hcs_freighting">Hire Contract Freighting</option>
                <option value="hcs_other">Hire Other Contracting</option>
                </select>
                    <p>
                <?php
	        // form_draw_block(title, array(as_many_elements_as_you_want))
            form_draw_block('Job Details', array('hcs_quantity', 'hcs_quantity_units', 'hcs_date_from','hcs_date_to','hcs_location','hcs_comments',));  
                    ?>
                                    
                <input type="submit" name="submit" value="Submit" /></p>
            </form>
                
            
    
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>