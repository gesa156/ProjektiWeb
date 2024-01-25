<?php
session_start();
// Check if the user has the 'role' key in $_SESSION and it is set to 'admin'
if (isset($_SESSION['role']) && $_SESSION['role'] == "admin") {
    echo "Welcome to the Dashboard, " . $_SESSION['email'] . "!";
} else {
    echo "You don't have permission to access this page.";
}
?>
