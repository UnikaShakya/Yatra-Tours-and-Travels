<?php 
define('HOST', 'localhost');

define('USER', 'root');

define('PASSWORD', '');

define('DB', 'travel');
$con=mysqli_connect(HOST,USER,PASSWORD,DB); //connect to database
if($con!=true)
echo "Failed to connect database";
?>