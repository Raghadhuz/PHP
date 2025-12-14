<?php

$uploadDir = "uploads/";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir);
}

// Check if file was uploaded
if (isset($_FILES["image"])) {

    $file = $_FILES["image"];

    // Allowed image types
    $allowedTypes = ["image/jpeg", "image/png", "image/jpg"];

    // Check for upload errors
    if ($file["error"] !== 0) {
        echo "Error uploading file.";
        exit;
    }

    // Check file type
    if (!in_array($file["type"], $allowedTypes)) {
        echo "Only JPG and PNG images are allowed.";
        exit;
    }

    // Check file size (max 2MB)
    if ($file["size"] > 2 * 1024 * 1024) {
        echo "File size must be less than 2MB.";
        exit;
    }

    // Generate safe file name
    $fileName = uniqid() . "_" . basename($file["name"]);
    $targetPath = $uploadDir . $fileName;

    // Move file to uploads folder
    if (move_uploaded_file($file["tmp_name"], $targetPath)) {
        echo "Image uploaded successfully! <br>";
        echo "<img src='$targetPath' width='200'>";
    } else {
        echo "Failed to upload image.";
    }
}
?>
