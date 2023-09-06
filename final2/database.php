<?php

$db_host = "localhost";
$db_username = "root"; 
$db_password = ""; 
$db_name = "suptopia_users"; 

try {
    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    
    if (!$conn) {
        throw new Exception("Could not connect to the database: " . mysqli_connect_error());
    }
} catch (Exception $e) {
    echo "Database connection error: " . $e->getMessage();
    // You can handle the error in a way that's suitable for your application.
    // For example, you might want to log the error or display a user-friendly message.
}

?>
