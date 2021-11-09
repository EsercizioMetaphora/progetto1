<?php
error_reporting(-1);

/* Navigation Menu */

$sth = $pdo->prepare("SELECT * FROM navigation_menu ORDER BY ord");
$sth->execute();

$menu_item = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('WEBSITE_MENU', $menu_item);

/* Corsi */

$sth = $pdo->prepare("SELECT * FROM corsi ORDER BY ord");
$sth->execute();

$corso_palestra = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('CORSI', $corso_palestra);

/* Abbonamenti */

$sth = $pdo->prepare("SELECT * FROM abbonamenti ORDER BY ord");
$sth->execute();

$abb_palestra = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('ABBONAMENTI', $abb_palestra);

/* Trainers */

$sth = $pdo->prepare("SELECT * FROM trainers ORDER BY ord");
$sth->execute();

$train_palestra = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('TRAINERS', $train_palestra);

