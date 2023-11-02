<?php
// Include any necessary PHP files or configurations

// Check if the user is already logged in, if yes, redirect to the dashboard
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

// Check if the registration form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and process registration
    $new_username = $_POST['new_username'];
    $new_password = $_POST['new_password'];

    // Perform registration (you may save to a database)
    // For simplicity, let's assume storing in a hardcoded array
    $registered_users = ['demo'];

    if (in_array($new_username, $registered_users)) {
        // Registration failed, username already exists
        $registration_error = "Username already exists. Please choose a different one.";
    } else {
        // Registration successful, redirect to login page
        // For simplicity, we're not storing passwords securely here
        $_SESSION['username'] = $new_username;
        header("Location: login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Journal Hosting</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Register</h1>
    </header>
    <main>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="new_username">New Username:</label>
            <input type="text" id="new_username" name="new_username" required>

            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required>

            <?php
            // Display registration error message if username already exists
            if (isset($registration_error)) {
                echo '<p class="error">' . $registration_error . '</p>';
            }
            ?>

            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </main>
    <footer>
        <p>&copy; 2023 Journal Hosting</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
