<?php
//SELECT DATA
$sql = SELECT id, title, price FROM products WHERE category = 'YourCategoryName' LIMIT 4;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Title: " . $row["title"]. " - Price: " . $row["price"]. " - Category: " . $row["category"]. "<br>";  }
} else {
  echo "0 results";
}

// READ TABLE INFORMATION
$tableName = 'products';
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

//INSERT DATA
$sql = "INSERT INTO products (title, price, category)
VALUES ('Nike 39', 49.99, 'jackets')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//CREATE TABLE
$tableName = 'products';
$sql = "CREATE TABLE `$tableName` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` DECIMAL(10,2) NOT NULL,
  `category` VARCHAR(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
if ($conn->query($sql) === TRUE) {
    echo "Table products created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
?>