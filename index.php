<?php

// QUADODO
//define('QUADODO_IN_SYSTEM', true);
//require_once('includes/header.php');

// Debug (Kint) - Disable if you don't wanna use it
require 'kint/Kint.class.php';

// DB connection
require_once('db_config.php');
global $dbh;

// Functions
$prefix = "SYFG_";
require_once('sql_functions.php');
require_once('form_functions.php');

// Header
include('header_A.php');

$act = (!empty($_REQUEST['act']) ? $_REQUEST['act'] : "null");

// Default for logged-in users
if($act == "null") {if ($qls->user_info['username'] != '') {$act = "loggedin";}}

// Main switch
switch ($act) {
	
	// All users
	case "help": include('inc_help.php'); break;
	
	// Login
	case "login": 
		if ($qls->user_info['username'] == '') {require_once('inc_login.php');}
		else {require_once('inc_usermain.php');}
		break;
	
	// Signup
	case "signup": 
		
		// Check if users are allowed to register
		$qls->Security->check_auth_registration(); 
		
		// Is the user logged in already?
		if ($qls->user_info['username'] == '') {
			
			if (isset($_POST['process'])) {
				
				// Try to register the user
				if ($qls->User->register_user()) {
					switch ($qls->config['activation_type']) {
						default:
							$message = REGISTER_SUCCESS_NO_ACTIVATION;
							include('inc_message.php');
							break;
						case 1: 
							$message = REGISTER_SUCCESS_USER_ACTIVATION;
							include('inc_message.php');
							break;						
						case 2: 
							$message = REGISTER_SUCCESS_ADMIN_ACTIVATION;
							include('inc_message.php');
							break;						
						break;
					}
				}
				else {
					// Output register error
					$error_msg = "Error message: ".$qls->User->register_error;
					include('inc_error.php');
				}
			}
			else {
				// Get the random id for use in the form
				$random_id = $qls->Security->generate_random_id();
				require_once('inc_signup.php');
			}
		}
		else {echo REGISTER_ALREADY_LOGGED;}

	break;
	
	// Logged-in
	case "loggedin": include('inc_main.php'); break;
	case "myaccount": include('inc_myaccount.php'); break;
	case "hire": include('inc_hire.php'); break;
	case "myequipment": include('inc_main.php'); break;
	case "provide": include('inc_provide.php'); break;
	
	case "upload": include('upload_file.php'); break;
	case "uploadDone": include('upload_file.php'); break;
	
	case "test": include('test.php'); break;
	
	case "null": default: include('inc_main.php'); break;

}

	
include('footer_A.php');?>