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
	<h1>Investigating SHaring Machinery Ownership</h1>
</div>

<div class="content">
    
               <form action="#" method="post"><h2 class="content-subhead">What Machine are you interested in sharing?</h2>
                <p><select name="Search_Type">
                <option value="default_empty"></option>    
                <option value="or_tractor">Tractor</option>
                <option value="or_grain_harvesting">Combine Harvester</option>
                <option value="or_seeding">Seeder</option>
                <option value="or_ploughing">Plough</option>
                <option value="or_fert_spread">Fertiliser Spreader</option>
                <option value="or_rolling">Roller</option>
                <option value="or_baling">Baler</option>
                <option value="or_kelly_chain">Kelly Chain</option>
                <option value="or_chaser_bin">Chaser Bin</option>
                <option value="or_spraying">Sprayer</option>
                <option value="or_mowing">Mower/Mower-Conditioner</option>
                <option value="or_windrowing">Windrower</option>
                <option value="or_freighting">Truck/Trailer</option>
                <option value="or_other">Other</option>
                </select>
                    <p>
                            
                            
                
                <input type="submit" name="submit" value="Next" /></p>
                   
                   
            </form>
                
            
    
</div>


<?php
// *************************************************************************
// DO NOT CHANGE THIS
include('footer_A.php');
// *************************************************************************
?>