<?php
// Establish database connection (replace these with your database credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle login request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and bind the statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Login successful
            echo json_encode(array("message" => "Login successful"));
        } else {
            // Invalid password
            echo json_encode(array("message" => "Invalid password"));
        }
    } else {
        // User not found
        echo json_encode(array("message" => "User not found"));
    }

    $stmt->close();
}

$conn->close();
?>
