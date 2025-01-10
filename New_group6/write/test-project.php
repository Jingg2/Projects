<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wattpaddb"; // Replace with your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    // Retrieve form data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    
    // Prepare SQL query to insert data into the database
    $sql = "INSERT INTO story (title, content, created_at) VALUES ('$title', '$content', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "Story saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
