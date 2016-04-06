<div id="layout">
<?php require_once('menu_B.php'); ?>
<div id="main">

<?php
// Check if Search_Type has been passed
$Search_Type = (!empty($_REQUEST['Search_Type']) ? $_REQUEST['Search_Type'] : NULL);

switch ($Search_Type) {
	
	// Selection
	case "Provide_Contracting": require_once('PCS.php'); break;
	case "Provide_Rental": require_once('OR_Initial.php'); break;
	
	case "hire_Rental": echo '<p style="color:red;">hire_Rental</p>'; break;
	case "inv_shared_machinery": echo '<p style="color:red;">inv_shared_machinery</p>'; break;
	
	// Provide_Contracting modules
	case "pcs_tractor": require_once('PCS_Tractor.php'); break;
		case "pcs_grain_harvesting": echo "<p>Page $Search_Type missing!!</p>"; break;
	case "pcs_seeding": require_once('PCS_Seeder.php'); break;
    case "pcs_ploughing": require_once('PCS_Plough.php'); break;
    case "pcs_fert_spread": require_once('PCS_Fert_Spreader.php'); break;
    case "pcs_rolling": require_once('PCS_Roller.php'); break;
    case "pcs_baling": require_once('PCS_Baler.php'); break;
    case "pcs_kelly_chain": require_once('PCS_Kelly.php'); break;
		case "pcs_chaser_bin": echo "<p>Page $Search_Type missing!!</p>"; break;
    case "pcs_spraying": require_once('PCS_Spray.php'); break;
    case "pcs_mowing": require_once('PCS_Mower.php'); break;
    case "pcs_windrowing": require_once('PCS_Windrower.php'); break;
    case "pcs_freighting": require_once('PCS_Truck.php'); break;
		case "pcs_other":  echo "<p>Page $Search_Type missing!!</p>"; break;
	
	// Process
	case "PCS_FINAL": require_once('PCS_Final.php'); break;
	
	// Provide_Rental modules
    case "or_tractor": require_once('OR_Tractor.php'); break;
    case "or_seeding": require_once('OR_Seeder.php'); break;
    case "or_ploughing": require_once('OR_Plough.php'); break;
    case "or_fert_spread": require_once('OR_Fert_Spreader.php'); break;
    case "or_rolling": require_once('OR_Roller.php'); break;
    case "or_baling": require_once('OR_Baler.php'); break;
    case "or_kelly_chain": require_once('OR_Kelly.php'); break;
    case "or_chaser_bin": require_once('OR_Chaser_Bin.php'); break;
    case "or_spraying": require_once('OR_Spray.php'); break;
    case "or_mowing": require_once('OR_Mower.php'); break;
    case "or_windrowing": require_once('OR_Windrower.php'); break;
    case "or_freighting": require_once('OR_Truck.php'); break;
    case "or_other": require_once('OR_Other.php'); break;	


	// Main page
	default: ?>
		<div class="header">
		<h1>Provide...</h1>
		<h2>Share Your Farming Gear</h2>
		</div>
		<div class="content">
		<?php
		// If new data has been uploaded
		if ($Search_Type == 'PCS_UPLOAD') {
			echo '<h2 class="content-subhead">Last operation</h2>';
			echo '<p>';
			include('inc_process_images.php');
			echo '<strong>Data recorded.</strong></p>';
		} ?>
		<h2 class="content-subhead">Existing Listings</h2>
		<p>Sortable Table... </p>
		<h2 class="content-subhead">New Listing</h2>
		<form action="#" method="post">
			<p><select name="Search_Type">
			<option value="what_want_to_provide">What Do You Want To Do?</option>    
			<option value="Provide_Contracting">Provide Contractors</option>
			<option value="Provide_Rental">Provide Rental Machinery</option>
			<option value="Provide_Labour">Provide Labour</option>
			<option value="inv_shared_machinery">Investigage Shared Machinery Ownership</option>
			</select>
		<input type="submit" name="submit" value="Submit" />
		</form>
		</p>
		<?php
		if ($Search_Type == 'what_want_to_provide') {echo '<p style="color:red;">Please Make A Selection</p>';}
	break;
}

?>

</div>
</div>