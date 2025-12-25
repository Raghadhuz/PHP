<?php
require_once './config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container-fluid mt-5">
        <h2 class="mb-4">Admin Dashboard</h2>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Birthday</th>
                    <th>Date Created</th>
                    <th>Last Login</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch data

                $sql = "SELECT * FROM users ";
                $result = $db->query($sql);
                $rows = $result->fetchAll(PDO::FETCH_ASSOC);

                if (count($rows) > 0):
                    foreach ($rows as $row): ?>

                        <tr>
                            <td><?= htmlspecialchars($row['id']); ?> </td>
                            <td><?= htmlspecialchars($row['full_name']); ?></td>
                            <td><?= htmlspecialchars($row['email']); ?></td>
                            <td><?= htmlspecialchars($row['password']); ?></td>
                            <td><?= htmlspecialchars($row['birth_date']); ?></td>
                            <td><?= htmlspecialchars($row['created_at']); ?></td>
                            <td><?= $row['last_login']; ?></td>
                            <td>
                                <a href="view-user.php?id=<?= $row['id']  ?> ?>" class="btn btn-sm btn-info text-white">View</a>
                                <a href="edit-user.php?id=<?= $row['id']  ?>" class="btn btn-sm btn-warning">Edit</a>
                                <button
                                    class="btn btn-sm btn-danger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteModal"
                                    data-id="<?= $row['id']; ?>">
                                    Delete
                                </button>
                            </td>
                        </tr>
                <?php
                    endforeach;
                endif;
                ?>
            </tbody>
        </table>

        <a href="login.php" class="btn btn-sm btn-info text-white">logout</a>

    </div>
    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <form method="POST" action="data/delete-user.php">

                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title">Confirm Delete</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body text-center">
                        <input type="hidden" name="id" id="delete-id">
                        <p class="mb-0">Are you sure you want to delete this employee?</p>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-danger">
                            Yes, Delete
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const deleteModal = document.getElementById('deleteModal');

        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const id = button.getAttribute('data-id');

            document.getElementById('delete-id').value = id;
        });
    </script>
</body>

</html>