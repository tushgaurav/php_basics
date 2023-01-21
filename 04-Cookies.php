<?php

// Set a cookie
setcookie('name', 'Tushar', time() + 86400 * 30);

// Unset a cookie
// setcookie('name', '', time() - 86400);

// Check if a cookie is set or not
if (isset($_COOKIE['name'])) {
    echo "<h1>Welcome, ${_COOKIE['name']}</h1>";
} else {
    echo "<h1>Welcome, Guest!</h1>";
}