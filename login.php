<?php
session_start();
$_SESSION['loggedin'] = true;
$_SESSION['username'] = 'admin';
header("Location: dashboard.php");
exit;
?>

