<?php

// Test mysqli connection
$link = true;
$link = mysqli_connect("192.168.0.7", "unnamedproject", "123", "unnamedproject");

var_dump($link);
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
}


phpinfo();