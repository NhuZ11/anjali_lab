<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Student Details Form</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>

    <button type="submit">Submit</button>
</form>
</body>
</html>

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

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
   $age = $_POST["age"];
   $gender = $_POST["gender"];
echo $name;

// Insert data into the database
$sql = "INSERT INTO student_detail(name, address, phone, age, gender) VALUES ('$name', '$address', '$phone', '$age', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Student details submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}


// Close the connection
$conn->close();
?>
