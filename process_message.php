<?php
// Establish database connection (replace placeholders with actual values)
// Ganti dengan informasi koneksi database yang sesuai
$conn = new mysqli("localhost", "root", "", "team_messages");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$recipient = $conn->real_escape_string($_POST['recipient']);
$message = $conn->real_escape_string($_POST['message']);

// Insert data into the database
$sql = "INSERT INTO messages (recipient, message) VALUES ('$recipient', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<p>Message sent successfully!</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
