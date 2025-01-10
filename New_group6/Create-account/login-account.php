<?php
session_start(); // Start a new session or resume the existing session

// Database configuration
$host = 'localhost'; // or your database host
$dbname = 'wattpaddb';
$db_username = 'root'; // your database username
$db_password = ''; // your database password

// Create a connection
$conn = new mysqli($host, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;

            // Redirect to a welcome page or dashboard
            header("Location: /Home.php");
            exit();
        } else {
            echo "<script>
                    alert('Invalid password. Please try again.');
                    window.location.href = '/Login.view.php'; // Redirect to login page
                  </script>";
        }
    } else {
        echo "<script>
        alert('No user found with that username.');
        window.location.href = '/Login.view.php'; // Redirect to login page
      </script>";
    }

    // Close the statement
    $stmt->close();
}

$conn->close();
?>