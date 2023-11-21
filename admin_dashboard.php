<?php
// Check if the user is logged in (you need to implement a proper authentication mechanism)
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Admin Dashboard</title>
</head>
<body>

    <div class="container mt-5">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <h3>Messages</h3>

        <?php
        // Display messages from the database (replace placeholders with actual values)
        // Ganti dengan informasi koneksi database yang sesuai
        $conn = new mysqli("localhost", "root", "", "team_messages");


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT * FROM messages");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p><strong>Recipient:</strong> " . $row['recipient'] . " | <strong>Message:</strong> " . $row['message'] . "</p>";
            }
        } else {
            echo "<p>No messages found.</p>";
        }

        // Close the database connection
        $conn->close();
        ?>

        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
