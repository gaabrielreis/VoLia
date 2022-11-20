<?php

// api de conexão GABRIEL HENRIQUE DOS REIS 13-10-2020

header('Access-Control-Allow-Origin: *');

$servername = "localhost";
$username = "volia";
$dbname   = "volia";
$password = "volia";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

/*

$host="localhost"; // Host name 
$username="fill"; // Mysql username 
$password="fill"; // Mysql password 
$db_name="fill"; // Database name 
$tbl_name="recargasRealizadas"; // Table name

$host="mysql.hostinger.com.br"; // Host name 
$username="u822706850_tree"; // Mysql username 
$password="********"; // Mysql password 
$db_name="u822706850_tree"; // Database name 
$tbl_name="RecargasRealizadas"; // Table name

$servername = "156.67.72.151";
$username = "u562229620_gds";
$dbname   = "u562229620_gds";
$password = "r/0Q93[C";

*/



?>


