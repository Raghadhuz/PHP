<?php
session_start();

// If counter does not exist, start from 0
if (!isset($_SESSION["counter"])) {
    $_SESSION["counter"] = 0;
}

// Increase counter on every refresh
$_SESSION["counter"]++;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Website Counter</title>
</head>
<body>

<h2>Page Refresh Counter</h2>

<p>This page was refreshed:</p>
<h3><?php echo $_SESSION["counter"]; ?> times</h3>

</body>
</html>
