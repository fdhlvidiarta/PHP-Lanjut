<?php
    // Start session
    session_start();
    // Destroy the session to log out the user
    session_destroy();
    header("Location: session.php"); // Redirect to login page
    exit();
