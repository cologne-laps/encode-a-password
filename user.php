<?php

require_once 'db.php';
require_once 'password_hashing.php';

class User extends Database {
    public function createUser($username, $password) {
        $conn = $this->connect();
        $hashedPassword = hashPassword($password);

        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
        $conn->query($sql);

        $conn->close();
    }
}

?>
