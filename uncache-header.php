<?php
require_once 'operation.php';

// Start the session
session_start();

// Set a session variable to indicate that caching should be disabled for this page
$_SESSION['no_cache'] = true;

// Disable caching for this page
header("Cache-Control: no-cache, must-revalidate");
header("Expires: " . gmdate("D, d M Y H:i:s", time() + 600) . " GMT");

$date = new DateTime();

if(!isset($_GET['timestamp'])){
  header('Location: '.getParentUrl().'/records?timestamp='.$date->getTimestamp().'&');
}

?>