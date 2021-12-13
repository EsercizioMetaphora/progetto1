<?php
error_reporting(-1);

/* Navigation Menu */

$sth = $pdo->prepare("SELECT * FROM navigation_menu ORDER BY ord");
$sth->execute();

$menu_item = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('WEBSITE_MENU', $menu_item);

/* Pizze */

$sth = $pdo->prepare("SELECT * FROM pizze ORDER BY ord");
$sth->execute();

$pizza = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('PIZZE', $pizza);


/* Pizzaioli */

$sth = $pdo->prepare("SELECT * FROM pizzaioli ORDER BY ord");
$sth->execute();

$pizzaiolo = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('PIZZAIOLI', $pizzaiolo);