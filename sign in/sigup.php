<?php

session_start();

// Dummy example - This should be replaced with actual database storage
$users = [
    'user123' => 'password123',
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username exists (dummy check)
    if (isset($users[$username])) {
        echo "Username already exists. Please choose another one.";
    } else {
        // Save user data (in a real application, save this to a database)
        $users[$username] = $password;

        
        header("Location: login.php")
        exit();
    }
}
?>



