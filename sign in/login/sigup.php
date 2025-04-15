<?php

session_start();


$users = [
    'user123' => 'password123',
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    /
    if (isset($users[$username])) {
        echo "Username already exists. Please choose another one.";
    } else {
        
        $users[$username] = $password;

        
        header("Location: login.php")
        exit();
    }
}
?>



