
<?php
$sname = "localhost";
$db_name = "social_site";
$unmae = "root";
$password = "";


$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}