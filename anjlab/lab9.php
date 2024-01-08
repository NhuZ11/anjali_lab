<?php
// Set a cookie with a variable
$cookieName = "user";
$cookieValue = "John Doe";
$expirationTime = time() + (86400 * 30); // 86400 seconds = 1 day

setcookie($cookieName, $cookieValue, $expirationTime, "/"); // "/" means the cookie is available throughout the entire domain

// Check if the cookie is set and display the value
if (isset($_COOKIE[$cookieName])) {
    $receivedValue = $_COOKIE[$cookieName];
    echo "Cookie '" . $cookieName . "' is set! Value: " . $receivedValue;
} else {
    echo "Cookie '" . $cookieName . "' is not set.";
}
?>
