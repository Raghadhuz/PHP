<?php
session_start();

// Create the list if it does not exist
if (!isset($_SESSION["tasks"])) {
    $_SESSION["tasks"] = [];
}

// Add new task
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = trim($_POST["task"]);

    if (!empty($task)) {
        $_SESSION["tasks"][] = $task;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>To Do List</title>
</head>
<body>

<h2>My To-Do List</h2>

<form method="post">
    <input type="text" name="task" placeholder="Enter a task" required>
    <button type="submit">Add</button>
</form>

<br>

<ul>
    <?php
    foreach ($_SESSION["tasks"] as $task) {
        echo "<li>$task</li>";
    }
    ?>
</ul>

</body>
</html>
