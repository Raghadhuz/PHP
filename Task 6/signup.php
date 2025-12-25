<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-sm p-4" style="width: 600px;">
            <h3 class="text-center mb-4">Create an Account</h3>
            <form id="signupForm" method="POST" action="data/addUser.php" novalidate>

                <!-- Email -->
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                </div>

                <!-- Mobile -->
                <div class="mb-3">
                    <label>Mobile</label>
                    <input type="text" name="mobile" class="form-control" pattern="\d{14}" required placeholder="14 digits">
                </div>

                <!-- Full Name -->
                <div class="mb-3">
                    <label>Full Name</label>
                    <div class="row g-2">
                        <div class="col"><input type="text" name="fname" class="form-control" placeholder="First Name" required></div>
                        <div class="col"><input type="text" name="mname" class="form-control" placeholder="Middle Name" required></div>
                        <div class="col"><input type="text" name="lname" class="form-control" placeholder="Last Name" required></div>
                        <div class="col"><input type="text" name="flname" class="form-control" placeholder="Family Name" required></div>
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" id="password" required
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_])(?!.*\s).{8,}">
                    <div class="form-text">
                        Min 8 characters, uppercase, lowercase, number, special character, no spaces
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label>Confirm Password</label>
                    <input type="password" name="confirmPass" class="form-control" id="confirmPassword" required>
                </div>

                <!-- Date of Birth -->
                <div class="mb-3">
                    <label>Date of Birth</label>
                    <div class="row g-2">
                        <div class="col"><input type="number" name="day" class="form-control" placeholder="DD" min="1" max="31" required></div>
                        <div class="col"><input type="number" name="month" class="form-control" placeholder="MM" min="1" max="12" required></div>
                        <div class="col"><input type="number" name="year" class="form-control" placeholder="YYYY" min="1900" max="2025" required></div>
                    </div>
                    <div class="form-text">You must be 16+ years old</div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary w-100">Sign Up</button>
            </form>
        </div>
    </div>

    <script>
        const form = document.getElementById('signupForm');
        form.addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const confirm = document.getElementById('confirmPassword').value;
            if (password !== confirm) {
                e.preventDefault();
                alert("Passwords do not match!");
            }
        });
    </script>

</body>

</html>