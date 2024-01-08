<?php
session_start();

// Check if the session variable 'page_views' is set
if (!isset($_SESSION['page_views'])) {
    // If not set, initialize it to 1
    $_SESSION['page_views'] = 1;
} else {
    // If set, increment the count on each refresh
    $_SESSION['page_views']++;
}

// Display the current page views count
$pageViews = $_SESSION['page_views'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Views Counter</title>
</head>
<body>

    <h1>Welcome to the Page Views Counter</h1>

    <p>This page has been viewed <?php echo $pageViews; ?> times.</p>

</body>
</html>
