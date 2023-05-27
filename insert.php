<?php

$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "piggy_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insert data into the 'user' table
    $sql = "INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `created_at`) VALUES
            (1, 'john', 'password123', 'john@example.com', NOW()),
            (2, 'jane', 'pass456', 'jane@example.com', NOW())";
    $conn->exec($sql);

    // Insert data into the 'category' table
    $sql = "INSERT INTO `category` (`category_id`, `category_name`) VALUES
            (1, 'Food'),
            (2, 'Transportation'),
            (3, 'Entertainment')";
    $conn->exec($sql);

    // Insert data into other tables similarly

    echo "Data inserted successfully.";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
