<?php
include('../php/loginAccount.php')
// Initialize the session
session_start();

//reset button visibility
$button = 0;

// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: ../html/index.php");
exit;
?>