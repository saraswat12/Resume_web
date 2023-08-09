<?php
session_start();
session_destroy(); // Destroy all session data

// Redirect the user to the login page
header('Location: login.php');
exit();
?>
