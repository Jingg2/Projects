<?php
session_start();

$logged = false; // Initialize logged variable
$email = '';
$name = '';
$picture = ''; 
$logout = '';

// Check if the user is logged in via Google
if (isset($_SESSION['google_loggedin'])) {
    // Retrieve session variables for Google login
    $logged = $_SESSION['google_loggedin'];
    $email = $_SESSION['google_email'];
    $name = $_SESSION['google_name'];
    $picture = $_SESSION['google_picture'];
    $logout = "google-login/logout.php";

// Check if the user is logged in via Facebook
} else if (isset($_SESSION['facebook_loggedin'])) {
    // Retrieve session variables for Facebook login
    $logged = $_SESSION['facebook_loggedin'];
    $email = $_SESSION['facebook_email'];
    $name = $_SESSION['facebook_name'];
    $picture = $_SESSION['facebook_picture'];
    $logout = "facebook-login/logout.php";

// Check if the user is logged in via standard login
} else if (isset($_SESSION['user_id'])) {
    // Retrieve session variables for standard login
    $logged = true; // User is logged in
    $email = $_SESSION['email']; // Assuming you store email in session
    $name = $_SESSION['username']; // Assuming you store username in session
    $picture = '/img/profile.jpg'; // You may not have a picture for standard login
    $logout = "/Login.view.php"; // Path to your logout script

} else {
    // If not logged in, redirect to login page
    header('Location: login.view.php');
    exit();
}

// Now you can use the $logged, $email, $name, $picture, and $logout variables in your HTML
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #info {
        position: absolute;
        z-index: 1;
        right: 10px;
        top: 50px;
        display: none;
    }   
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
            <h1>NovelNest</h1>
        </div>
       
    <div class="navbar">
     <div class="list">
        <a href="Home.php" class="dropbtn">Home</a>
            <a href="Service.php">Service</a>
        <a href="Contact.php" class="dropbtn">Contact</a>
        <input type="text" name="search" id="search" placeholder="">
       
        <a href="/shopping-cart/index.php" class="shop" style="border: 1px solid black; padding: 10px; border-radius: 10px; background-color: blue; 
        color: white; font-weight: 600;">Shop Books</a>

       
      
            <a href="/shopping-cart/index.php" class="shopIcon" style="color: black;"><i class='bx bxs-shopping-bag' ></i></a>
    
        
        
     </div>
       
    </div>
        <div class="profile">
            <a class="rounded button" href="" id="changeStyleLink">  <img src="<?=$picture?>" alt="<?=$name?>" width="100" height="100"></a>
        </div>
        <div class="content home" id="info">

			<div class="profile-picture">
                <img src="<?=$picture?>" alt="<?=$name?>" width="100" height="100">
            </div>

            <div class="profile-details">

                <div class="name">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                    </div>
                    <div class="wrap">
                        <strong>Name</strong>
                        <span><?=$name?></span>
                    </div>
                </div>

                <div class="email">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                    </div>
                    <div class="wrap">
                        <strong>Email</strong>
                        <span><?=$email?></span>
                    </div>
                </div>

            </div>

            <a href="<?=$logout?>" class="logout-btn">
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
                </span>
                Logout
            </a>

		</div>
    </div>

    <script>
        // JavaScript to toggle visibility
        document.getElementById("changeStyleLink").addEventListener("click", function (event) {
            event.preventDefault(); // Prevent default link behavior
            const infoDiv = document.getElementById("info");

            // Toggle the display property
            if (infoDiv.style.display === "none" || infoDiv.style.display === "") {
                infoDiv.style.display = "block"; // Show the div
            } else {
                infoDiv.style.display = "none"; // Hide the div
            }
        });
    </script>
</body>

</html>
