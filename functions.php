<?php
session_start(); // Start the session
$pdo = new PDO('mysql:host=localhost;dbname=party_time', 'username', 'password'); // Update with your DB credentials

// User Signup
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    if ($stmt->execute([$username, $email, $password])) {
        $_SESSION['user_id'] = $pdo->lastInsertId();
        header('Location: index.php');
        exit; // Stop further execution
    } else {
        echo "Error signing up!";
    }
}

// User Login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: index.php');
        exit; // Stop further execution
    } else {
        echo "Invalid email or password!";
    }
}

// User Logout
if (isset($_GET['logout'])) {
    session_destroy(); // Destroy the session
    header('Location: index.php'); // Redirect to home after logout
    exit; // Stop further execution
}

// Handle Booking
if (isset($_POST['book'])) {
    if (!isset($_SESSION['user_id'])) {
        echo "You must be logged in to make a booking!";
        exit;
    }

    $user_id = $_SESSION['user_id'];
    $package = $_POST['package'];
    $event_date = $_POST['event_date'];
    $time_slot = $_POST['time_slot'];
    $guests = $_POST['guests'];
    $additional_requests = $_POST['additional_requests'];

    // Check if a booking already exists for the same time slot
    $stmt = $pdo->prepare("SELECT * FROM bookings WHERE event_date = ? AND time_slot = ?");
    $stmt->execute([$event_date, $time_slot]);
    if ($stmt->rowCount() > 0) {
        echo "This time slot is already booked!";
    } else {
        $stmt = $pdo->prepare("INSERT INTO bookings (user_id, package, event_date, time_slot, guests, additional_requests) VALUES (?, ?, ?, ?, ?, ?)");
        if ($stmt->execute([$user_id, $package, $event_date, $time_slot, $guests, $additional_requests])) {
            echo "Booking successful!";
        } else {
            echo "Error making booking!";
        }
    }
}
?>
