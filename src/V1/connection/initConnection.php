<?php

define('DEVICE', 'mysql');

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'appgt';

include __DIR__ . '/../connection/IConnection.php';

if (DEVICE == 'mysql') {
    include __DIR__ . '/../connection/Connection.php';
    $connection = new \Dijkstra\V1\Connection\Connection($host, $username, $password, $database);
} elseif (DEVICE == 'postgresql') {
    include __DIR__ . '/../connection/PostgresqlConnection.php';
    $connection = new \Dijkstra\V1\Connection\PostgresqlConnection($host, $username, $password, $database);
} else {
    throw new Exception('Missing device');
}

