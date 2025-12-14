<!DOCTYPE html>
<html>
<head>
    <title>Page Request Time</title>
</head>
<body>

<h2>Page Requested Time</h2>

<?php
// Get request time
$requestTime = $_SERVER["REQUEST_TIME"];

// Convert to readable format
echo "This page was requested at: ";
echo date("Y-m-d H:i:s", $requestTime);
?>

</body>
</html>
