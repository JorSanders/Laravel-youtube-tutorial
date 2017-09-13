<?php

// Test mysqli connection
$link = mysqli_connect("192.168.0.7", "dbuser", "123", "dbname");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

var_dump($link);


phpinfo();
