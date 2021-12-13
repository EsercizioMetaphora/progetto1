<?php
error_reporting(-1);

$sth = $pdo->prepare("SELECT * FROM navigation_menu ORDER BY id");
$sth->execute();
$navigation = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('NAVIGATION', $navigation);

$sth = $pdo->prepare("SELECT * FROM dropdown_menu ORDER BY id");
$sth->execute();
$dropdown = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('DROPDOWN', $dropdown);

$sth = $pdo->prepare("SELECT * FROM hero ORDER BY id");
$sth->execute();
$hero = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('HERO', $hero);

$sth = $pdo->prepare("SELECT * FROM carousel ORDER BY id");
$sth->execute();
$carousel = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('CAROUSEL', $carousel);

$sth = $pdo->prepare("SELECT * FROM courses ORDER BY id");
$sth->execute();
$courses = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('COURSES', $courses);

$sth = $pdo->prepare("SELECT * FROM team ORDER BY id");
$sth->execute();
$team = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('TEAM', $team);

$sth = $pdo->prepare("SELECT * FROM testimonials ORDER BY id");
$sth->execute();
$testimonials = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('TESTIMONIALS', $testimonials);

$sth = $pdo->prepare("SELECT * FROM orari ORDER BY id");
$sth->execute();
$orari = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('ORARI', $orari);

$sth = $pdo->prepare("SELECT * FROM map ORDER BY id");
$sth->execute();
$map = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('MAP', $map);

$sth = $pdo->prepare("SELECT * FROM social ORDER BY id");
$sth->execute();
$social = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('SOCIAL', $social);