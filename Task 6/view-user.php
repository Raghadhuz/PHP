<?php
require_once './config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-sm" style="width: 500px;">

            <div class="card-header bg-info text-white text-center">
                <h4 class="mb-0">User Details</h4>
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
                                <th class="text-muted">ID:</th>
                                <td><?= $row['id'] ?> </td>
                            </tr>
                            <tr>
                                <th class="text-muted">Full Name:</th>
                                <td><?= $row['full_name'] ?></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Email:</th>
                                <td><?= $row['email'] ?></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Mobile:</th>
                                <td><?= $row['mobile'] ?></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Date of Birth:</th>
                                <td><?= $row['birth_date'] ?></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Last Login:</th>
                                <td><?= $row['last_login'] ?></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Created At:</th>
                                <td><?= $row['created_at'] ?></td>
                            </tr>

                </table>
            </div>

            <div class="card-footer d-flex justify-content-between">
                <a href="admin.php" class="btn btn-outline-secondary">Back</a>
                <a href="edit-user.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit User</a>
            </div>
    <?php
                        endforeach;
                    endif;
    ?>
        </div>
    </div>

</body>

</html>