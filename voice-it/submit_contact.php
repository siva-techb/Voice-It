<?php
// Database connection
$servername = "localhost";
$username   = "root";   // change if needed
$password   = "";       // change if needed
$dbname     = "voice-it";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check DB connection
if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}

// Collect form data safely
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $conn->real_escape_string($_POST['name']);
    $email   = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contact_messages (name, email, message) 
            VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
