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
	<h1>Listing Rental Machinery</h1>
</div>

<div class="content">
    
               <form action="#" method="post"><h2 class="content-subhead">What Machine are you offering for rental?</h2>
                <p><select name="Search_Type">
                <option value="default_empty"></option>    
                <option value="or_tractor">Tractor Rental</option>
                <option value="or_grain_harvesting">Combine Harvester Rental</option>
                <option value="or_seeding">Seeder Rental</option>
                <option value="or_ploughing">Plough Rental</option>
                <option value="or_fert_spread">Fertiliser Spreader Rental</option>
                <option value="or_rolling">Roller Rental</option>
                <option value="or_baling">Baler Rental</option>
                <option value="or_kelly_chain">Kelly Chain Rental</option>
                <option value="or_chaser_bin">Chaser Bin Rental</option>
                <option value="or_spraying">Sprayer Rental/option>
                <option value="or_mowing">Mower/Mower-Conditioner Rental</option>
                <option value="or_windrowing">Windrower Rental</option>
                <option value="or_freighting">Truck/Trailer Rental</option>
                <option value="or_other">Other</option>
                </select>
                    <p>
                                
                <?php
                // field + units
	            form_draw_field_units("or_rate", "or_rate_units");        
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