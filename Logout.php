<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: 8a6544278ebe9e78ea831d31eb570b73devlineage.php");
exit;
?>