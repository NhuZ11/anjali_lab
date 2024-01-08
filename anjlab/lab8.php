<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practical";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a new database
$databaseName = "newdatabase";
$createDatabaseQuery = "CREATE DATABASE IF NOT EXISTS $databaseName";

if ($conn->query($createDatabaseQuery) === TRUE) {
    echo "Database created successfully!<br>";

    // Select the newly created database
    $conn->select_db($databaseName);

    // Create a new table
    $tableName = "newtable";
    $createTableQuery = "CREATE TABLE IF NOT EXISTS $tableName (
                            id INT PRIMARY KEY AUTO_INCREMENT,
                            column_one VARCHAR(255) NOT NULL,
                            column_new VARCHAR(255)
                        )";

    if ($conn->query($createTableQuery) === TRUE) {
        echo "Table created successfully!<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
} else {
    echo "Error creating database: " . $conn->error;
}

// Close the connection
$conn->close();
?>
