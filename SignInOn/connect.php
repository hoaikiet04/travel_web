<?php 
    // Kết nối MySQL
    $host = 'localhost';
    $user = 'root';
    $password = '12345';
    $dbname = 'travel_website';

    $conn = new mysqli($host, $user, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>