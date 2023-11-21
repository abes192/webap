<?php
// Replace the connection details with your PostgreSQL information
$conn = pg_connect("host=klompok3cloud-server.postgres.database.azure.com port=5432 dbname=klompok3cloud-database user=zbnbkxzkuj password=7D5N6PQ1VJWZW8L1$");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// Escape user inputs for security
$recipient = pg_escape_string($_POST['recipient']);
$message = pg_escape_string($_POST['message']);

// Insert data into the database
$sql = "INSERT INTO messages (recipient, message) VALUES ('$recipient', '$message')";

if (pg_query($conn, $sql)) {
    echo "<p>Message sent successfully!</p>";
} else {
    echo "Error: " . $sql . "<br>" . pg_last_error($conn);
}

// Close the database connection
pg_close($conn);
?>
