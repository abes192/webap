<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

try {
    // PDO Connection
    $pdo = new PDO("sqlsrv:server = tcp:cloud3webdatabase.database.windows.net,1433; Database = team_messages", "abes", "Alan12345@");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL Server Extension Connection
    $connectionInfo = array(
        "UID" => "abes",
        "pwd" => "Alan12345@",
        "Database" => "team_messages",
        "LoginTimeout" => 30,
        "Encrypt" => 1,
        "TrustServerCertificate" => 0
    );
    
    $serverName = "tcp:cloud3webdatabase.database.windows.net,1433";
    
    // SQL Server Extension Connection
    $sqlServerConn = sqlsrv_connect($serverName, $connectionInfo);
    
    if (!$sqlServerConn) {
        die(print("Error connecting to SQL Server."));
    }
} catch (PDOException $e) {
    die(print("Error connecting to SQL Server. " . $e->getMessage()));
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
        // Display messages from the database
        $query = "SELECT * FROM messages";
        $stmt = $pdo->query($query);

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<p><strong>Recipient:</strong> " . $row['recipient'] . " | <strong>Message:</strong> " . $row['message'] . "</p>";
            }
        } else {
            echo "<p>No messages found.</p>";
        }
        ?>

        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
