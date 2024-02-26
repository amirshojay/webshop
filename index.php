<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Hello World</title>
  </head>
  <body>
    <nav class="navbar">
      <div>Logo</div>
      <div class="navbar_div">
        <ul class="navbar_div_ul">
          <li>Contact</li>
          <li>Contact</li>
          <li>Contact</li>
        </ul>
      </div>
      <div>Shopping</div>
    </nav>
    <div class="category">
      <?php
      $sql = "SELECT id, title, price FROM products WHERE category = 'Shoes' LIMIT 4; ";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      // output data of each row
        while($row = $result->fetch_assoc()) {
      ?>
      <div class="card">
      <img src="https://www.w3schools.com/howto/img_avatar.png" alt="" />
      <div class="container">
        <div class="container_detail">
            <h4><?php echo htmlspecialchars($row["title"]);?></h4>
            <p><?php echo htmlspecialchars($row["price"]);?></p>
        </div>
        <div class="container_button">
            <button>Buy</button>
        </div>
      </div>
      </div>
      <?php
        } // This closes the while loop
      } // This closes the if statement
      ?>
    </div>
    <div class="category">
      <?php
      $sql = "SELECT id, title, price FROM products WHERE category = 'jeans' LIMIT 4; ";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      // output data of each row
        while($row = $result->fetch_assoc()) {
      ?>
      <div class="card">
      <img src="https://www.w3schools.com/howto/img_avatar.png" alt="" />
      <div class="container">
        <div class="container_detail">
            <h4><?php echo htmlspecialchars($row["title"]);?></h4>
            <p><?php echo htmlspecialchars($row["price"]);?></p>
        </div>
        <div class="container_button">
            <button>Buy</button>
        </div>
      </div>
      </div>
      <?php
        } // This closes the while loop
      } // This closes the if statement
      ?>
    </div>
    <div class="category">
        <?php
      $sql = "SELECT id, title, price FROM products WHERE category = 'shirts' LIMIT 4; ";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      // output data of each row
        while($row = $result->fetch_assoc()) {
      ?>
      <div class="card">
      <img src="https://www.w3schools.com/howto/img_avatar.png" alt="" />
      <div class="container">
        <div class="container_detail">
            <h4><?php echo htmlspecialchars($row["title"]);?></h4>
            <p><?php echo htmlspecialchars($row["price"]);?></p>
        </div>
        <div class="container_button">
            <button>Buy</button>
        </div>
      </div>
      </div>
      <?php
        } // This closes the while loop
      } // This closes the if statement
      ?>
    </div>
    <div class="category">
        <?php
      $sql = "SELECT id, title, price FROM products WHERE category = 'jackets' LIMIT 4; ";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      // output data of each row
        while($row = $result->fetch_assoc()) {
      ?>
      <div class="card">
      <img src="https://www.w3schools.com/howto/img_avatar.png" alt="" />
      <div class="container">
        <div class="container_detail">
            <h4><?php echo htmlspecialchars($row["title"]);?></h4>
            <p><?php echo htmlspecialchars($row["price"]);?></p>
        </div>
        <div class="container_button">
            <button>Buy</button>
        </div>
      </div>
      </div>
      <?php
        } // This closes the while loop
      } // This closes the if statement
      ?>
    </div>
  </body>
</html>