 <?php
session_start(); //start session
session_destroy(); // distroy all the current sessions
$_SESSION['logout_message'] = 'Logged out successfully';

// $url = 'login.php';
header("location:index.php"); // redireted to login page

?> 



