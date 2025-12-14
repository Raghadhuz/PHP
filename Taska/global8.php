<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>
</head>
<body>

<h2>Number of Visitors</h2>

<?php
$file = "visitors.txt";

// Read current number
$count = file_get_contents($file);

// Increase count
$count++;

// Save back to file
file_put_contents($file, $count);

// Display result
echo "Total visitors: " . $count;
?>

</body>
</html>
