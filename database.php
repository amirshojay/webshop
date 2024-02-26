<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "mysql-25476673-amirshojay-8349.a.aivencloud.com:24759";
$config = include('config.php');
$username = $config['db_username'];
$password = $config['db_password'];
$database = "defaultdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* 
// SQL to create admin table
$sql = "CREATE TABLE `admin` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `username` VARCHAR(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `password` VARCHAR(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
*/

?>