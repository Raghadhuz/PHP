<?php
require_once './config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-sm" style="width: 500px;">

            <div class="card-header bg-info text-white text-center">
                <h4 class="mb-0">Employee Details</h4>
            </div>

            <div class="card-body">
                <table class="table table-borderless mb-0">
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
                            <tr>
                                <th class="text-muted">Employee ID:</th>
                                <td><?= htmlspecialchars($row['id']); ?></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Name:</th>
                                <td><?= htmlspecialchars($row['name']); ?></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Address:</th>
                                <td><?= htmlspecialchars($row['address']); ?></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Salary:</th>
                                <td><?= htmlspecialchars($row['salary']); ?></td>
                            </tr>


                </table>
            </div>

            <div class="card-footer d-flex justify-content-between">
                <a href="index.php" class="btn btn-outline-secondary">
                    Back to List
                </a>

                <a href="update-employee.php?id=<?= $row['id']; ?>" class="btn btn-warning">
                    Edit Employee
                </a>
        <?php
            endforeach;
            endif;
        ?>
            </div>

        </div>
    </div>

</body>

</html>