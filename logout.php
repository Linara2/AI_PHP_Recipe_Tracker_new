<?php
// Start the session
session_start();

// Get the referrer URL
$referrer = $_SERVER['HTTP_REFERER'];

// Destroy the session
session_destroy();

// Redirect to the homepage
header('Location:' .$referrer);
exit;
?>