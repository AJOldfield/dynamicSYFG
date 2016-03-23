<?php

define("FORM_TABLE", "mainForm");


// *****************************************************************************************************************
// Draw field
function form_draw_field($unique_name, $type) {
	
	// Empty field
	if ($unique_name == "") {
		echo "<div class=\"pure-u-1 pure-u-md-1-3\">";
		echo "&nbsp;";
		echo "</div>";	
		return true;		
	}
	
	// Get data
	$data = sql_select_rows(FORM_TABLE, "name = '$unique_name'", FALSE);
	
	switch($data[0]['type']) {
		
		// *********************************** TEXT FIELD *************************************
		case "textfield":

			// Draw field
			if ($type != 'simple') {echo "<div class=\"pure-u-1 pure-u-md-1-3\">";}
			echo "<label for=\"{$data[0]['name']}\">{$data[0]['title']}</label>";
			echo "<input id=\"{$data[0]['name']}\" class=\"pure-u-23-24\" type=\"text\">";
			if ($type != 'simple') {echo "</div>";}		
		
		break;
		
		// *********************************** MULTIPLE SELECT *************************************
		case "selectMultiple":

			// Draw field
			echo "<div class=\"pure-u-1 pure-u-md-1-3\">";
			echo "<label for=\"{$data[0]['name']}\">{$data[0]['title']}</label>";
			echo "<select name=\"{$data[0]['name']}\" multiple>";
			for($i=1;$i<=20;$i++) {	
				$col_name = "opt$i";
				if (empty($data[0][$col_name])) {continue;}
				echo "<option value=\"$i\">{$data[0][$col_name]}</option>";
			}
			echo "</select>";
			echo "</div>";		
		
		break;		
		
		// *********************************** SINGLE SELECT *************************************
		case "select":

			// Draw field
			echo "<div class=\"pure-u-1 pure-u-md-1-3\">";
			echo "<label for=\"{$data[0]['name']}\">{$data[0]['title']}</label>";
			echo "<select name=\"{$data[0]['name']}\">";
			for($i=1;$i<=20;$i++) {	
				$col_name = "opt$i";
				if (empty($data[0][$col_name])) {continue;}
				echo "<option value=\"$i\">{$data[0][$col_name]}</option>";
			}
			echo "</select>";
			echo "</div>";		
		
		break;			
		
		default:
		echo "default<br>";
		break;
		
	}
	
	return true;
}


// *****************************************************************************************************************
// Draw field + units
function form_draw_field_units($unique_name, $units) {
	
	$data = sql_select_rows(FORM_TABLE, "name = '$unique_name'", FALSE);
	$units = sql_select_rows(FORM_TABLE, "name = '$units'", FALSE);
	
	echo $data[0]['title'];
	
	echo '<div class="pure-g">';
		
		echo '<div class="pure-u-1-4">';
		echo "<input id=\"{$data[0]['name']}\" type=\"text\">";
		echo '</div>';
	
		echo '<div class="pure-u-1-8">';
		echo "<select name=\"{$units[0]['name']}\">";
		for($i=1;$i<=20;$i++) {	
			$col_name = "opt$i";
			if (empty($units[0][$col_name])) {continue;}
			echo "<option value=\"$i\">{$units[0][$col_name]}</option>";
		}
		echo "</select>";
		echo '</div>';		
		
	echo '</div>';
	echo '<br>';
}


// *****************************************************************************************************************
// Draw Multi-Column Form (with Pure Grids)
function form_draw_block($title, $arrayIn) {
	
	echo "<fieldset class=\"pure-form pure-form-stacked\">";
	echo "<legend style=\"border: none; width: auto;\"><strong>&nbsp;$title&nbsp;</strong></legend>";
	echo '<div class="pure-g">';
			
		// Get data
		for ($i=0;$i<count($arrayIn);$i++) {
			
			$var = $arrayIn[$i];
			if ($var == 'END') {break;} 	// End (not used anymore?)
						
			echo '<div class="pure-u-1 pure-u-md-1-3">';
			if ($var == '') {echo "&nbsp;";} 
			else {
				$data = sql_select_rows(FORM_TABLE, "name = '$var'", FALSE);
				echo "<label for=\"{$data[0]['name']}\">{$data[0]['title']}</label>";
				echo "<input id=\"{$data[0]['name']}\" class=\"pure-u-23-24\" type=\"text\">";
			}

			echo "</div>";
		}			

	echo '</fieldset>';

}
	
?>