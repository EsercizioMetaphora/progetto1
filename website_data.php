<?php 
$sth = $pdo->prepare("SELECT * FROM post_categories ORDER BY id");
$sth->execute();
$post_category = $sth->fetchAll(\PDO::FETCH_ASSOC);

$sth = $pdo->prepare("SELECT * FROM post ORDER BY id");
$sth->execute();
$post = $sth->fetchAll(\PDO::FETCH_ASSOC);

