<?php
session_start(); // Start the session

// Check if the user is not logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirect to the login page or display a message
    header("Location: login.php"); // Redirect to your login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Everyday English Learning</title>
    <style>
        /* Paste your CSS styles here */
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Everyday English Learning</h1>
        <p>Learn English easily with our interactive lessons!</p>
    </header>

    <main>
        <section class="lesson-section">
            <h2>Featured Lessons</h2>
            <!-- Lesson 1 -->
            <div class="lesson">
                <img src="https://images.unsplash.com/photo-1620969427101-7a2bb6d83273?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Lesson 1 Image">
                <div class="lesson-content">
                    <h3>Lesson 1: Introduction to Basic English</h3>
                    <p>This lesson covers basic vocabulary and greetings.</p>
                    <button onclick="startLesson(1)">Start</button>
                </div>
            </div>

            <!-- Lesson 2 -->
            <div class="lesson">
                <!-- Placeholder content for Lesson 2 -->
                <img src="https://images.unsplash.com/photo-1691435880836-ad651a56ec59?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fEludHJvZHVjdGlvbiUyMHRvJTIwQmFzaWMlMjBFbmdsaXNofGVufDB8fDB8fHwy" alt="Lesson 2 Image">
                <div class="lesson-content">
                    <h3>Lesson 2:  Intermediate English Skills</h3>
                    <p>Focuses on improving speaking and listening abilities.</p>
                    <button onclick="startLesson(2)">Start</button>
                </div>
            </div>

            <!-- Lesson 3 -->
            <div class="lesson">
                <!-- Placeholder content for Lesson 3 -->
                <img src="https://images.unsplash.com/photo-1559127898-2a67ad2680fe?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8TGVzc29uJTIwMyUzQSUyMENvbW1vbiUyMFBocmFzZXMlMjBhbmQlMjBFeHByZXNzaW9uc3xlbnwwfHwwfHx8MA%3D%3D" alt="Lesson 3 Image">
                <div class="lesson-content">
                    <h3>Lesson 3:Advanced English Proficiency</h3>
                    <p>Delves into advanced grammar rules and writing techniques.</p>
                    <button onclick="startLesson(3)">Start</button>
                </div>
            </div>

            <!-- Add more lessons similarly -->
        </section>

        <section class="lesson-section">
            <h2>Sign Up / Login</h2>
            <div class="auth-buttons">
                <button class="login" onclick="location.href='login.html'">Log In</button>
                <button class="signup" onclick="location.href='register.html'">Sign Up</button>
            </div>
        </section>

        <!-- Other sections and content can be added similarly -->

    </main>

    <footer>
        <nav>
            <ul>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="privacy.html">Privacy Policy</a></li>
                <!-- Add other footer links -->
            </ul>
        </nav>
    </footer>

    <script>
        // Your JavaScript code
    </script>
</body>
</html>
