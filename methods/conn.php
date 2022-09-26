<?php

$username = 'root';
$password = '311409';

try {
    $conn = new PDO('mysql:host=localhost;dbname=aula-login', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
