<?php
include 'db.php';
session_start(); // Start the session

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL statement to check if user exists
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $username, $hashed_password);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
        // Set session variables to log in the user
        $_SESSION['user_id'] = $id;
        $_SESSION['username'] = $username;
        
        // Redirect to index.php after successful login
        header("Location: index.php");
        exit;
    } else {
        $message = "Invalid email or password. Please try again.";
    }
    $stmt->close();
}
?>
<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="auth.css">
    <title>Log In</title>
</head>
</header>
<body>
    <main>
        <section class="login-form">
            <h2>Log In</h2>
            
            <?php if ($message): ?>
                <p class="message"><?php echo htmlspecialchars($message); ?></p>
            <?php endif; ?>
            
            <form action="login.php" method="post">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                
                <input type="submit" name="login" value="Log In">
            </form>
            <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
        </section>
    </main>
</body>
</html>
