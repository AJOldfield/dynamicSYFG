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
	<h1>Provide Contracting</h1>
</div>

<div class="content">
    
               <form action="#" method="post"><h2 class="content-subhead">What Contracting Service Do You Want To Provide?</h2>
                <p><select name="Search_Type">
                <option value="default_empty"></option>    
                <option value="pcs_tractor">Contract Tractor Driving</option>
                <option value="pcs_grain_harvesting">Contract Grain Harvesting</option>
                <option value="pcs_seeding">Contract Seeding</option>
                <option value="pcs_ploughing">Contract Ploughing</option>
                <option value="pcs_fert_spread">Contract Fertiliser Spreading</option>
                <option value="pcs_rolling">Contract Rolling</option>
                <option value="pcs_baling">Contract Baling</option>
                <option value="pcs_kelly_chain">Contract Kelly Chaining</option>
                <option value="pcs_chaser_bin">Contract Chaser Bin Driving</option>
                <option value="pcs_spraying">Contract Spraying</option>
                <option value="pcs_mowing">Contract Mowing/Mowing-Conditioning Spreading</option>
                <option value="pcs_windrowing">Contract Windrowing</option>
                <option value="pcs_freighting">Contract Freighting</option>
                <option value="pcs_other">Other</option>
                </select>
                    <p>
                <?php
                        // field + units
	form_draw_field_units("contracting_capacity", "pcs_capacity_units");
                        
                        // field + units
	form_draw_field_units("pcs_rate", "pcs_rate_units");
                        
                    ?>
                    
                
                <input type="submit" name="submit" value="Next" /></p>
            </form>
                
            
    
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>