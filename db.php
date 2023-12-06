<?php

class Database {
    private $host = "localhost";
    private $username = "your_username";
    private $password = "your_password";
    private $database = "your_database";

    protected function connect() {
        $conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}

?>
