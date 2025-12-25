<?php
require_once './config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-sm p-4" style="width: 600px;">
            <h3 class="text-center mb-4">Edit User</h3>
            <form id="editForm" method="POST" action="data/editUser.php">

                <!-- Full Name -->

                <?php
                // Fetch data
                $params = [];
                $id = $_GET['id'];
                $params[] = $id;
                $sql = "SELECT * FROM users WHERE id  = ?";
                $result = $db->query($sql, $params);
                $rows = $result->fetchAll(PDO::FETCH_ASSOC);




                if (count($rows) > 0):
                    foreach ($rows as $row):
                        $fullName = $row['full_name'];
                        $nameParts = explode(' ', $fullName);

                        $fname  = $nameParts[0] ?? '';
                        $mname  = $nameParts[1] ?? '';
                        $lname  = $nameParts[2] ?? '';
                        $flname = $nameParts[3] ?? '';


                        $birthDate = $row['birth_date'];
                        $dateParts = explode('-', $birthDate);

                        $year  = $dateParts[0] ?? '';
                        $month = $dateParts[1] ?? '';
                        $day   = $dateParts[2] ?? '';
                ?>
                        <div class="mb-3">
                            <label>Full Name</label>
                            <div class="row g-2">
                                <div class="col">
                                    <input type="text" name="fname" class="form-control" value="<?= htmlspecialchars($fname) ?>" required>
                                </div>
                                <div class="col">
                                    <input type="text" name="mname" class="form-control" value="<?= htmlspecialchars($mname) ?>" required>
                                </div>
                                <div class="col">
                                    <input type="text" name="lname" class="form-control" value="<?= htmlspecialchars($lname) ?>" required>
                                </div>
                                <div class="col">
                                    <input type="text" name="flname" class="form-control" value="<?= htmlspecialchars($flname) ?>" required>
                                </div>
                            </div>
                        </div>


                        <!-- Email -->
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email"
                                value=<?= $row['email'] ?> required>
                        </div>

                        <!-- Mobile -->
                        <div class="mb-3">
                            <label>Mobile</label>
                            <input type="text" class="form-control" name="mobile"
                                value=<?= $row['mobile'] ?> required pattern="\d{14}">
                        </div>

                        <!-- Date of Birth -->
                        <div class="mb-3">
                            <label>Date of Birth</label>
                            <div class="row g-2">
                                <div class="col">
                                    <input type="number" name="day" class="form-control" value="<?= $day ?>" min="1" max="31" required>
                                </div>
                                <div class="col">
                                    <input type="number" name="month" class="form-control" value="<?= $month ?>" min="1" max="12" required>
                                </div>
                                <div class="col">
                                    <input type="number" name="year" class="form-control" value="<?= $year ?>" min="1900" max="2025" required>
                                </div>
                            </div>
                        </div>




                        <div class="d-flex justify-content-between">
                            <a href="admin.php" class="btn btn-outline-secondary">Cancel</a>
                            <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
            </form>
        </div>
    </div>

    <script>
        const form = document.getElementById('editForm');
        form.addEventListener('submit', function(e) {
            const pwd = form.querySelector('[type="password"]').value;
            const confirmPwd = form.querySelectorAll('[type="password"]')[1].value;
            if (pwd !== confirmPwd) {
                e.preventDefault();
                alert("Passwords do not match!");
            }
        });
    </script>

</body>

</html>