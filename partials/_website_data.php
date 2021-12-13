<?php
error_reporting(-1);

$sth = $pdo->prepare("SELECT * FROM About LIMIT 1");
$sth->execute();
$about = $sth->fetchAll(\PDO::FETCH_ASSOC);

$sth = $pdo->prepare("SELECT * FROM navigation_menu WHERE type = 'header'");
$sth->execute();
$h_menu = $sth->fetchAll(\PDO::FETCH_ASSOC);

$sth = $pdo->prepare("SELECT * FROM navigation_menu WHERE type = 'footer'");
$sth->execute();
$f_menu = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('ABOUT', $about);
define('HEADER_MENU', $h_menu);
define('FOOTER_MENU', $f_menu);

