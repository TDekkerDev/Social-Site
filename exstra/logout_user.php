<?php 
session_start();
$_SESSION['login_user'] = false;
$_SESSION['login_admin'] = false;
$_SESSION['user_name'] = $row[''];
$_SESSION['name'] = $row[''];
$_SESSION['id'] = $row[''];
header("Location: ../index.php");
?>