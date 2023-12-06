<?php

require_once 'config.php';

function hashPassword($password) {
    return hash('sha256', $password . SALT);
}

?>
