<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "mysql-25476673-amirshojay-8349.a.aivencloud.com:24759";
$username = "avnadmin";
$password = "AVNS_AR5nZhLmYOOehp8nayI"; // Make sure to use the correct password
$database = "defaultdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

$sql = "SELECT id, title, price, category FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Title: " . $row["title"]. " - Price: " . $row["price"]. " - Category: " . $row["category"]. "<br>";  }
} else {
  echo "0 results";
}
/*
// Get table information
$tableName = 'products'; // Replace with your actual table name
$sql = "DESCRIBE `$tableName`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Field: " . $row["Field"] . " - Type: " . $row["Type"] . " - Null: " . $row["Null"] . " - Key: " . $row["Key"] . " - Default: " . $row["Default"] . " - Extra: " . $row["Extra"] . "<br>";
    }
} else {
    echo "0 results";
}
*/

/*
$sql = "INSERT INTO products (title, price, category)
VALUES ('Gucci 99', 99.99, 'Shoes')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
/*

/*
//SQL to create products table
$sql = "CREATE TABLE `products` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` DECIMAL(10,2) NOT NULL,
  `category` VARCHAR(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
/*

/* 
// SQL to create admin table
$sql = "CREATE TABLE `admin` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `username` VARCHAR(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `password` VARCHAR(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

if ($conn->query($sql) === TRUE) {
    echo "Table products created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

*/

$conn->close();

?>