<?php
// booking-handler.php

$host = "localhost";         // or 127.0.0.1
$username = "root";          // your DB username
$password = "";              // your DB password
$database = "my_restaurant"; // your DB name

// Create DB connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST["name"] ?? ''));
    $email = htmlspecialchars(trim($_POST["email"] ?? ''));
    $message = htmlspecialchars(trim($_POST["message"] ?? ''));

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Prepare and bind statement
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            echo "<div style='background:#121212;color:#ffc107;padding:20px;font-family:sans-serif;border-radius:8px;text-align:center'>";
            echo "<h3>Thank you, <strong>$name</strong>!</h3>";
            echo "<p>Your message has been saved successfully. We'll get back to you soon.</p>";
            echo "</div>";
        } else {
            echo "Error saving your message. Please try again later.";
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

} else {
    echo "Invalid request.";
}

$conn->close();
?>
