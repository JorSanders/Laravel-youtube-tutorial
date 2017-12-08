<?php

// Test mysqli connection
$db_connection = mysqli_connect("192.168.0.7", "dbuser", "dbpass", "dbname");

var_dump($db_connection);
if (!$db_connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
}

phpinfo();