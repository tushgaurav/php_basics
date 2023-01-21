<?php
session_start();

function logout() {
    session_destroy();
    header('Location: /php-crash-course/03-Superglobals.php');
}

logout();
?>