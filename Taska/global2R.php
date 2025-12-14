<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $url = $_POST["url"];

    // If user didn't write http or https, add it
    if (!preg_match("/^https?:\/\//", $url)) {
        $url = "https://" . $url;
    }

    header("Location: $url");
    exit();
}
?>
