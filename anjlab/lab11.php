<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Variable Example</title>
</head>
<body>

    <h1>PHP Script to Demonstrate Passing Variable through URL</h1>

    <?php
    // Check if the variable 'name' is set in the URL

    if (isset($_GET['name'])) {
        // Get the value of 'name' from the URL
        $name = $_GET['name'];

        // Display a personalized greeting
        echo "<p>Hello, $name!</p>";
    } else {
        // If 'name' is not set in the URL, display a default message
        // to display value of name the you have to set url as example.php?name=ram and it will display ram
        echo "<p>No name parameter provided in the URL.</p>";
    }
    ?>

</body>
</html>
