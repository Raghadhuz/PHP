<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h1 class="mb-3">Welcome, <?= $_SESSION['name']; ?></h1>
            <p class="lead">We are glad to have you on our platform!</p>
            <a href="login.php" class="btn btn-outline-primary mt-3">Logout</a>
        </div>
    </div>

</body>

</html>