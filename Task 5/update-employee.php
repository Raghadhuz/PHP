<?php
require_once './config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-sm p-4" style="width: 450px;">
            <h3 class="text-center mb-4 text-warning">Update Employee</h3>

            <form method="POST" action="data/editEmployee.php">
                <?php
                // Fetch data
                $params = [];
                $id = $_GET['id'];
                $params[] = $id;
                $sql = "SELECT * FROM users WHERE id  = ?";
                $result = $db->query($sql, $params);
                $rows = $result->fetchAll(PDO::FETCH_ASSOC);

                if (count($rows) > 0):
                    foreach ($rows as $row): ?>
                        <input type="hidden" name="id" value=<?= htmlspecialchars($row['id']); ?>>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name"
                                value=<?= htmlspecialchars($row['name']); ?>>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="address"
                                value=<?= htmlspecialchars($row['address']); ?>>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Salary</label>
                            <input type="number" class="form-control" name="salary"
                                value=<?= htmlspecialchars($row['salary']); ?>>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-warning " name="submit">Update Employee</button>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
            </form>
        </div>
    </div>

</body>

</html>