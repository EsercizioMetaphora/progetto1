<?php 
$hostname = "mysql";
$database_name = "provapratica_281021";
$user = "root";
$password = "password";


try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    echo "Errore: " . $e->getMessage();
    die();
}