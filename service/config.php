<?php
// $servername = "150.95.80.69";
// $username = "ltax2";
// $password = "Ltax!@1234";
// $dbname = "ltax2";
// $port = 33011;
$servername = "containers-us-west-17.railway.app";
$username = "postgres";
$password = "fA2Ol8gLFDG72JhMfbTO";
$dbname = "railway";
$port = 5487;

header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");
$conn_string = "host=$servername port=$port dbname=$dbname user=$username password=$password";
$conn = pg_connect($conn_string);


?>