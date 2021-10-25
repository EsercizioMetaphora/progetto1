<?php
$hostname = "mysql";
$database_name = "demo";
$user = "root";
$pass = "password";


try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $user, $pass);
} catch (PDOException $e) {
    echo "Errore: " . $e->getMessage();
    die();
}

/*************** INSERT ***************** */
$data = [
    'titolo' => 'Nuova sezione',
    'url' => '/nuovaSezione.php',
];
$sql = "INSERT INTO menu (titolo, url) VALUES (:titolo, :url)";
$stmt = $pdo->prepare($sql);
$stmt->execute($data);

$sth = $pdo->prepare("SELECT * FROM menu WHERE url = '/nuovaSezione.php'");
$sth->execute();
$results = $sth->fetch(\PDO::FETCH_ASSOC);
var_dump($results);
/******************************************/


/*************** UPDATE ***************** */
$data = [
    'titolo' => 'Nuova sezione bella bella'
];
$sql = "UPDATE menu set titolo = :titolo WHERE url = '/nuovaSezione.php'";
$stmt = $pdo->prepare($sql);
$stmt->execute($data);

$sth = $pdo->prepare("SELECT * FROM menu WHERE url = '/nuovaSezione.php'");
$sth->execute();
$results = $sth->fetch(\PDO::FETCH_ASSOC);
var_dump($results);
/******************************************/


$sth = $pdo->prepare("SELECT * FROM menu");
$sth->execute();

/* Fetch all of the remaining rows in the result set */
print("Fetch all of the remaining rows in the result set:\n");
$results = $sth->fetchAll(\PDO::FETCH_ASSOC);
var_dump($results);
foreach ($results as $result) {
    var_dump($result);
}


/*************** DELETE ***************** */
$data = [
    'titolo' => 'Nuova sezione',
    'url' => '/nuovaSezione.php',
];
$sql = "DELETE FROM menu WHERE url = '/nuovaSezione.php'";
$stmt = $pdo->prepare($sql);
$stmt->execute($data);
/******************************************/

$pdo = null;
