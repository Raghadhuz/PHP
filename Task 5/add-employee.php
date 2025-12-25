<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-sm p-4" style="width: 450px;">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-primary mb-0">Add New Employee</h4>
                <a href="index.php" class="btn btn-outline-secondary btn-sm">
                    All Employees
                </a>
            </div>

            <form method="POST" action="data/addEmployee.php">


                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address">
                </div>

                <div class="mb-4">
                    <label class="form-label">Salary</label>
                    <input type="number" name="salary" class="form-control" placeholder="Enter Salary">
                </div>

                <div class="d-grid">
                    <button class="btn btn-primary" name="submit">Save Employee</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>