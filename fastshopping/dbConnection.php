<?php
$host = 'localhost';
$username = 'root';
$password = "";
$database = 'fastshopping';

$conn = mysqli_connect($host,$username,$password, $database);

if (!$conn) {
	echo "Connection Failed!".mysqli_error();
}

?>


