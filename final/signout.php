<?php
session_start();

if (isset($_SESSION['isAuthenticated']) && $_SESSION['isAuthenticated']) {
    // If the user is authenticated, destroy the session and redirect to login page
    session_destroy();
    header("Location: login.php");
    exit();
} else {
    // If the user is not authenticated, redirect to login page
    header("Location: login.php");
    exit();
}
?>
