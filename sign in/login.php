
<?php
// Simulated user data (hardcoded for now)
$correct_username = "admin";
$correct_password = "1234"; // In real apps, use hashed passwords

// Get data from form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the credentials match
if ($username === $correct_username && $password === $correct_password) {
    echo "<h2>Welcome, $username!</h2>";
} else {
    echo "<h2>Login failed. Invalid username or password.</h2>";
}
?>
