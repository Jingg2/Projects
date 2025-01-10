<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
   
</head>

<body>
    <div class="login-container">
        <!-- <img src="img/avatar.png" alt="Avatar" class="avatar"> -->
         <h1>Novel<span>Nest</span></h1>
        <h2>Login</h2>
        <!-- Login Form -->
        <form method="post" action="/Create-account/login-account.php">
            <!-- <label for="username">Username:</label> -->
            <input type="text" name="username" id="username" placeholder="Username" required>

            <!-- <label for="password">Password:</label> -->
            <input type="password" name="password" id="password" placeholder="Password" required>

            <button type="submit" class="mb-1">Login</button>
            <a href="/createAccount.php" style="font-size: 18px; color: blue;">Create Account</a>
            <p>__________Others__________</p>
          
        </form>
        <div class="other">
        <a class="button" href="facebook-login/facebook-oauth.php"><i class='bx bxl-facebook-circle'></i></a>
        <a class="button" href="google-login/google-oauth.php"><i class='bx bxl-gmail' ></i></a>
        </div>
    </div>
    <script>
        // Check if there is an error message from PHP
        <?php if (!empty($error_message)): ?>
            alert('<?php echo addslashes($error_message); ?>'); // Display the error message in an alert
        <?php endif; ?>
    </script>
</body>

</html>
