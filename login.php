<?php

require_once 'user.php';
require_once 'password_hashing.php';

function authenticateUser($username, $password) {
    $user = new User();
    $conn = $user->connect();

    $hashedPassword = hashPassword($password);
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$hashedPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful!";
    } else {
        echo "Login failed!";
    }

    $conn->close();
}

authenticateUser('example_user', 'example_password');

?>
