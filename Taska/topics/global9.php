<?php
// Create Cookie
$cookie_name  = "user";
$cookie_value = "Raghad";
$expiry_time  = time() + 3600; // 1 hour
$cookie_path  = "/";
$domain       = ""; // current domain
$secure       = false; // true if HTTPS
$httponly     = true;

// Set cookie
setcookie(
    $cookie_name,
    $cookie_value,
    $expiry_time,
    $cookie_path,
    $domain,
    $secure,
    $httponly
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookies Example</title>
</head>
<body>

<h2>Cookies Demo</h2>

<?php
// Retrieve All Cookies
if (!empty($_COOKIE)) {
    echo "<h3>Cookies Values:</h3>";
    foreach ($_COOKIE as $name => $value) {
        echo $name . " : " . $value . "<br>";
    }
} else {
    echo "No cookies found<br>";
}
?>

<br>

<?php
// Delete Cookie
setcookie($cookie_name, "", time() - 3600, $cookie_path);

echo "Cookie deleted";
?>

</body>
</html>
