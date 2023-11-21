<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>

    <div class="container mt-5">
        <h2>Login</h2>

        <?php
        // Check if the login form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Replace placeholders with your actual admin username and password
            $adminUsername = "admin";
            $adminPassword = "admin123";

            // Retrieve user input
            $inputUsername = $_POST['username'];
            $inputPassword = $_POST['password'];

            // Check if credentials are correct
            if ($inputUsername == $adminUsername && $inputPassword == $adminPassword) {
                session_start();
                $_SESSION['username'] = $inputUsername;
                header("Location: admin_dashboard.php");
                exit();
            } else {
                echo "<div class='alert alert-danger' role='alert'>Invalid username or password</div>";
            }
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
