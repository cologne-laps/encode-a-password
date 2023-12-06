<?php

require_once 'user.php';

$user = new User();
$user->createUser('example_user', 'example_password');

echo "User created successfully.";

?>
