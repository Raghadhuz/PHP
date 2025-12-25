<?php
require_once '../config/database.php';

if (isset($_POST['submit'])) {

    // Sanitize
    $email        = htmlspecialchars(trim($_POST['email']));
    $mobile       = htmlspecialchars(trim($_POST['mobile']));
    $fname        = htmlspecialchars(trim($_POST['fname']));
    $mname        = htmlspecialchars(trim($_POST['mname']));
    $lname        = htmlspecialchars(trim($_POST['lname']));
    $flname       = htmlspecialchars(trim($_POST['flname']));
    $day          = htmlspecialchars(trim($_POST['day']));
    $month        = htmlspecialchars(trim($_POST['month']));
    $year         = htmlspecialchars(trim($_POST['year']));


    $errors = [];


    //Email Validation

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }


    // Mobile Validation
    if (!preg_match('/^\d{14}$/', $mobile)) {
        $errors[] = "Mobile number must be exactly 14 digits";
    }


    //Full Name Validation

    if (
        !preg_match('/^[a-zA-Z]+$/', $fname) ||
        !preg_match('/^[a-zA-Z]+$/', $mname) ||
        !preg_match('/^[a-zA-Z]+$/', $lname) ||
        !preg_match('/^[a-zA-Z]+$/', $flname)
    ) {
        $errors[] = "All name fields must contain letters only";
    }



    //Age Validation (>=16)
    $birthDate = "$year-$month-$day";
    $today = new DateTime();
    $dob = new DateTime($birthDate);
    $age = $today->diff($dob)->y;

    if ($age < 16) {
        $errors[] = "You must be at least 16 years old";
    }


    //Final Result

    if (empty($errors)) {

        $fullName = "$fname $mname $lname $flname";

        $db = DatabasePDO::getInstance();
        $sql = "UPDATE users 
        SET full_name = ?, 
            email = ?, 
            mobile = ?, 
            birth_date = ?
        WHERE id = ?";

        $db->query($sql, [
            $fullName,
            $email,
            $mobile,
            $birthDate,
            $id
        ]);


        header("Location: ../admin.php");
        exit;
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
