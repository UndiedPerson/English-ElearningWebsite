<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish connection to your local MySQL database
    $servername = "localhost";
    $username = "root"; // Change this if you have a different username
    $password = ""; // Change this if you have set a password
    $dbname = "user_database"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Process the data from the registration form
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password before storing

    // SQL query to insert user data into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the success page after successful registration
        header("Location: register_success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
