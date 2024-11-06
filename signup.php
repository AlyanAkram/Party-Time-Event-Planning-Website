<?php
// Include database connection
include 'db.php';
session_start(); // Start the session

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password); // "sss" specifies the types of the variables

    if ($stmt->execute()) {
        // Set session variables to log in the user automatically
        $_SESSION['user_id'] = $stmt->insert_id; // Get the last inserted user ID
        $_SESSION['username'] = $username;

        // Redirect to index.php after successful signup
        header("Location: index.php");
        exit;
    } else {
        // Error message
        $message = "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="auth.css">
    <title>Sign Up</title>
</head>
<body>
    <main>
        <section class="signup-form">
            <h2>Sign Up</h2>
            
            <?php if ($message): ?>
                <p class="message"><?php echo htmlspecialchars($message); ?></p>
            <?php endif; ?>
            
            <form action="signup.php" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
                
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
                
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
                
                <input type="submit" name="signup" value="Create Account">
            </form>
            <p>Already have an account? <a href="login.php">Log in here</a></p>
        </section>
    </main>
</body>
</html>
