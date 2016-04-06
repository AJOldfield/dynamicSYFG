<?php

// ****************************************************************************
// Returns all the values in an array: arr[0][col1] arr[0][col2] ... arr[n][col1] ...
// $silent --> if FALSE the function writes errors and warnings
function sql_select_rows($table, $where_condition, $silent = FALSE) {

	global $dbh;
	$tablefull = TABLE_PREFIX.$table;
	$query_string = "SELECT * FROM $tablefull WHERE $where_condition";
	$query = $dbh->query($query_string);
 
	if ($query !== FALSE) {
		
		$fetch = $query->fetchAll();
		
		// Error handling
		if (empty($fetch) && !$silent) 		{echo "<br>Empty array in sql_select_rows!<br>"; return null;}
		if ($fetch === FALSE && !$silent) 	{echo "<br>Problem in sql_select_rows!<br>"; return null;}		
		return $fetch;
		
	} else {
		$error = $query->errorInfo();
		echo '<br>MySQL Error: ' . $error[2].'<br>';
	}

	return null;

}	// function sql_select_rows


?>