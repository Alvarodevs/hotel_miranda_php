<?php
include "db/dotenv_loader.php";
// foreach (glob("packages/dotenv/*.php") as $filename){
// 	include $filename;
// }
$dotenv = Dotenv\Dotenv::createImmutable('./');
$dotenv->load();

$db_hostname = $_ENV['DB_HOSTNAME'];
$db_username = $_ENV['DB_USERNAME'];
$db_password = $_ENV['DB_PASSWORD'];
$db_name = $_ENV['DB_NAME'];

$conn = new mysqli($db_hostname, $db_username, $db_password, $db_name);

$conn->connect_error ? die("Connection failure: " . $conn->connect_error) : null;
