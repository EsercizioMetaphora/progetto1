<?php
error_reporting(-1);

$sth = $pdo->prepare("SELECT * FROM navigation_menu_header ORDER BY ord");
$sth->execute();

$menu = $sth->fetchAll(\PDO::FETCH_ASSOC);

$sth = $pdo->prepare("SELECT * FROM navigation_menu_footer WHERE tipo = 1 ORDER BY ordine");
$sth->execute();

$footer1 = $sth->fetchAll(\PDO::FETCH_ASSOC);

$sth = $pdo->prepare("SELECT * FROM navigation_menu_footer WHERE tipo = 2 ORDER BY ordine");
$sth->execute();

$footer2 = $sth->fetchAll(\PDO::FETCH_ASSOC);

$sth = $pdo->prepare("SELECT * FROM slideshow");
$sth->execute();

$slideshow = $sth->fetchAll(\PDO::FETCH_ASSOC);

$sth = $pdo->prepare("SELECT step FROM categories GROUP BY step");
$sth->execute();

$cat_steps = $sth->fetchAll(\PDO::FETCH_ASSOC);

$sth = $pdo->prepare("SELECT * FROM post ORDER BY data DESC LIMIT 4");
$sth->execute();

$post = $sth->fetchAll(\PDO::FETCH_ASSOC);

$sth = $pdo->prepare("SELECT * FROM news");
$sth->execute();

$news = $sth->fetchAll(\PDO::FETCH_ASSOC);

$sth = $pdo->prepare("SELECT * FROM partners");
$sth->execute();

$partners = $sth->fetchAll(\PDO::FETCH_ASSOC);

$sth = $pdo->prepare("SELECT * FROM socialnet");
$sth->execute();

$socialnet = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('HEADER_MENU', $menu);
define('FOOTER1_MENU', $footer1);
define('FOOTER2_MENU', $footer2);
define('SLIDESHOW', $slideshow);
define('CATEGORIES_STEPS', $cat_steps);
define('POST',$post);
define('NEWS', $news);
define('PARTNERS', $partners);
define('SOCIALNET', $socialnet);