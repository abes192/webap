<?php
try {
    // PHP Data Objects(PDO) Connection
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
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    // Process the submitted message and save it to the database
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $recipient = $_POST['recipient'];
        $message = $_POST['message'];

        $sql = "INSERT INTO messages (recipient, message) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$recipient, $message]);

        echo "<p>Message sent successfully!</p>";
    }
} catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
} catch (Exception $ex) {
    echo "Error: " . $ex->getMessage();
} finally {
    // Close the SQL Server connection
    if (isset($conn)) {
        sqlsrv_close($conn);
    }
}
?>
