<?php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize input 
    $name  = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $age   = intval($_POST["age"]);

    // Validate input
    if (empty($name) || empty($email) || empty($age)) {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    if ($age <= 0) {
        echo "Invalid age.";
        exit;
    }

    // prevents XSS
    echo "<h2>Submitted Data</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Age: " . $age;
}
?>
