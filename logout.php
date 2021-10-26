<?php
// remove all session variables
session_start();
// session_unset('user');
unset($_SESSION['user']);
session_destroy();
// destroy the session


// Redirecting To Home Page
header('Location: loginadmin.php');




?>
