<?php
$dsn = 'mysql:host=localhost;port=3307;dbname=messageapp;charset=utf8';
$username = 'user';
$password = '123456';


try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
} catch (PDOException $e) {
    echo 'Échec de la connexion : ' . $e->getMessage();
}
