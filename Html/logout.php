<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: ..\Html\index.php');
///header("location: ..\Html\home.php")
?>