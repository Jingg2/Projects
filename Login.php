<?php
// Hardcoded credentials (for testing purposes)
$valid_username = 'User@mail.com';
$valid_password = 'password123';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Check if credentials match
    if ($username === $valid_username && $password === $valid_password) {

        // Redirect to home page after successful login
        header("Location: Home.php");
        exit();
    } else {
        // Invalid login credentials
        $error = "Invalid credentials! Please try again.";
    }
}

require 'Login.view.php';
