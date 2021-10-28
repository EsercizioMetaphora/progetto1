<?php

$hostname = "mysql";
$database_name = "db_prova2810";
$user = "root";
$pass = "password";

try {
        $pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    } catch (PDOException $e) {
        echo "Errore: " . $e->getMessage();
        die();
    }