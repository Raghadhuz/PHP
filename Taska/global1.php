<!DOCTYPE html>
<html>
<head>
    <title>Process</title>
</head>
<body>

<h2>Form Result</h2>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Data sent using POST <br><br>";

    $email = $_POST["email"];
    $password = $_POST["password"];

    echo "Email: " . $email . "<br>";
    echo "Password: " . $password;

} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "Data sent using GET <br><br>";

    $email = $_GET["email"];
    $password = $_GET["password"];

    echo "Email: " . $email . "<br>";
    echo "Password: " . $password;
}

?>

</body>
</html>
