<?php
// Include any necessary PHP files or configurations

// Check if the user is already logged in, if yes, redirect to the dashboard
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and process login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform authentication (you may check against a database)
    // For simplicity, let's assume a hardcoded username and password
    $valid_username = 'demo';
    $valid_password = 'demo123';

    if ($username == $valid_username && $password == $valid_password) {
        // Authentication successful, set session and redirect to the dashboard
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Authentication failed, show an error message
        $error_message = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Journal Hosting</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <?php
            // Display error message if authentication failed
            if (isset($error_message)) {
                echo '<p class="error">' . $error_message . '</p>';
            }
            ?>

            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
    </main>
    <footer>
        <p>&copy; 2023 Journal Hosting</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>

