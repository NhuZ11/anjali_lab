<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
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

// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo $username;
    echo $password;

   
    $sql = "SELECT password FROM logininfo WHERE username='$username'and password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) // this means username and password should be unique if same password repeats then it wont work
    {
        header("location: welcomepage.html");
    } else {
       echo" Invalid username or password";
        
    }
}

// Close the connection
$conn->close();
?>